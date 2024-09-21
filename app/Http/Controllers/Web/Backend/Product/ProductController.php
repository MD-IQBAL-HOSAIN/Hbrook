<?php

namespace App\Http\Controllers\Web\Backend\Product;

use App\Models\Ptag;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('category', function ($query) {
                    return $query->category->name;
                })
                ->addColumn('image', function ($data) {
                    return "<img width='70px' src='" . asset('storage/' . $data->image_url) . "' ></img>";
                })
                ->addColumn('action', function ($data) {
                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                      <a href="' . route('products.show', $data->id) . '" type="button" class="btn btn-info text-white ms-1" title="Show" style="padding: 10px">
                                    <i class="fa fa-eye"></i>
                                </a>
                                  <a href="' . route('products.edit',  $data->id) . '" type="button" class="btn btn-primary text-white ms-1" title="Edit">
                                  <i class="bi bi-pencil"></i>
                                  </a>
                                  <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="btn btn-danger text-white ms-1" title="Delete">
                                  <i class="bi bi-trash"></i>
                                </a>
                                </div>';
                })
                ->addColumn('status', function ($data) {
                    $status = ' <div class="form-check form-switch" style="margin-left:40px;">';
                    $status .= ' <input onclick="showStatusChangeAlert(' . $data->id . ')" type="checkbox" class="form-check-input" id="customSwitch' . $data->id . '" getAreaid="' . $data->id . '" name="status"';
                    if ($data->status == "Active") {
                        $status .= "checked";
                    }
                    $status .= '><label for="customSwitch' . $data->id . '" class="form-check-label" for="customSwitch"></label></div>';

                    return $status;
                })
                ->rawColumns(['action', 'status', 'image'])
                ->make(true);
        }
        return view('backend.layout.product.product.index');
    }


    public function create()
    {

        $categories = Category::all();
        $tags = Ptag::select('id', 'name')->get();
        return view('backend.layout.product.product.create', compact('categories', 'tags'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|numeric',
            'details' => 'required',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:ptags,id',
            'is_featured' => 'required|in:Yes,No',
            'product_link' => 'required|url',
            'status' => 'required|in:Active,Inactive',
        ]);



        $data = Product::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'category_id' => $request->category_id,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'details' => $request->details,
            'is_featured' => $request->is_featured,
            'product_link' => $request->product_link,
            'status' => $request->status,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                try {
                    $imagePath = uploadImage($image, 'images/product');

                    ProductImage::create([
                        'product_id' => $data->id,
                        'image_url' => $imagePath
                    ]);
                } catch (\Exception $e) {
                    // Handle any exceptions (e.g., log error, show error message)
                    return redirect()->back()->with('error', 'Failed to upload image.');
                }
            }
        }

        if ($request->has('tags')) {
            $data->ptags()->attach($request->tags);
        }

        if ($data) {
            return redirect()->action([self::class, 'index'])->with('t-success', 'Product created successfully.');
        } else {
            return redirect()->action([self::class, 'index'])->with('t-success', 'Product failed created.');
        }
    }

        /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Product::with(['images','ptags'])->findOrFail($id);
        $categories = Category::all();

        return view('backend.layout.product.product.show', compact('data', 'categories'));
    }

    public function edit($id)
    {
        $data = Product::findOrFail($id);
        $categories = Category::all();
        $tags = Ptag::select('id', 'name')->get();
        return view('backend.layout.product.product.edit', compact('data', 'categories', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|numeric',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:ptags,id',
            'is_featured' => 'required|in:Yes,No',
            'product_link' => 'required|url',
            'status' => 'required|in:Active,Inactive',
        ]);

        $data = Product::with('images')->findOrFail($id);


        $data->update(
            [
                'name' => $request->name,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'details' => $request->details,
                'is_featured' => $request->is_featured,
                'product_link' => $request->product_link,
                'status' => $request->status,
            ]
        );

        // Ensure imageIds are valid and belong to the product
        // $imagesToDelete = ProductImage::where('product_id', $id)->get();

        // foreach ($imagesToDelete as $image) {
        //     // Delete image file from storage
        //     deleteImage($image->url); // Assuming $image->url contains the URL/path of the image
        //     // Delete image record from database
        //     $image->delete();
        // }

        // dd($data);

        // // Handle image uploads and create ProductImage records
        // if ($request->hasFile('images')) {
        //     foreach ($request->file('images') as $image) {
        //         $imagePath = uploadImage($image, 'images/product');
        //         // dd($imagePath);

        //         ProductImage::updateOrCreate(
        //             ['product_id' => $data->id, 'image_url' => $imagePath],
        //             ['product_id' => $data->id, 'image_url' => $imagePath]
        //         );
        //     }
        // }

        // // Handle image uploads and updates
        // if ($request->hasFile('images')) {
        //     foreach ($request->file('images') as $image) {
        //         $imagePath = uploadImage($image, 'images/product');

        //         // Create new ProductImage record
        //         ProductImage::create([
        //             'product_id' => $data->id,
        //             'image_url' => $imagePath ?? $data->images->image_url,
        //         ]);
        //     }
        // }

        // Handle image uploads and updates
        if ($request->hasFile('images')) {
            $imagesToDelete = ProductImage::where('product_id', $id)->get();

            foreach ($imagesToDelete as $image) {
                // Delete image file from storage
                deleteImage($image->url); // Assuming $image->url contains the URL/path of the image
                // Delete image record from database
                $image->delete();
            }

            foreach ($request->file('images') as $image) {
                $imagePath = uploadImage($image, 'images/product');

                // Create new ProductImage record
                ProductImage::create([
                    'product_id' => $data->id,
                    'image_url' => $imagePath,
                ]);
            }
        } else {
            $imagesToDelete = ProductImage::where('product_id', $id)->get();

            foreach ($imagesToDelete as $image) {
                // Delete image file from storage
                deleteImage($image->url); // Assuming $image->url contains the URL/path of the image
                // Delete image record from database
                $image->delete();
            }

            // No new images uploaded, retain existing images
            foreach ($data->images as $image) {
                ProductImage::create([
                    'product_id' => $data->id,
                    'image_url' => $image->image_url,
                ]);
            }
        }


        if ($data->ptags()->count() > 0) {
            $data->ptags()->sync($request->tags);
        } else {
            $data->ptags()->attach($request->tags); // Attach new tags if no existing tags
        }

        if ($data) {
            return redirect()->action([self::class, 'index'])->with('t-success', 'Product Updated Successfully.');
        } else {

            return redirect()->action([self::class, 'index'])->with('t-success', 'Product failed to update');
        }
    }

    public function destroy($id)
    {
        $data = Product::findOrFail($id);

        if (!$data) {
            return response()->json(['t-success' => false, 'message' => 'Data not found.']);
        }
        $data->delete();
        return response()->json(['t-success' => true, 'message' => 'Deleted successfully.']);
    }

    public function status($id)
    {
        $data = Product::where('id', $id)->first();
        if ($data->status == 'Active') {
            // If the current status is active, change it to inactive
            $data->status = 'Inactive';
            $data->save();

            // Return JSON response indicating success with message and updated data
            return response()->json([
                'success' => false,
                'message' => 'Unpublished Successfully.',
                'data' => $data,
            ]);
        } else {
            // If the current status is inactive, change it to active
            $data->status = 'Active';
            $data->save();

            // Return JSON response indicating success with a message and updated data.
            return response()->json([
                'success' => true,
                'message' => 'Published Successfully.',
                'data' => $data,
            ]);
        }
    }
}
