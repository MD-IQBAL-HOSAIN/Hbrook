<?php

namespace App\Http\Controllers\Web\Backend\Blog;

use App\Models\Tag;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Blog::with('tags')->get();
            return DataTables::of($data)
                ->addIndexColumn()

                ->addColumn('image', function ($data) {
                    return "<img width='70px' src='" . asset('storage/' .$data->image_url) . "' ></img>";
                })
                ->addColumn('action', function ($data) {
                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                  <a href="' . route('blogs.edit',  $data->id) . '" type="button" class="btn btn-primary text-white" title="Edit">
                                  <i class="bi bi-pencil"></i>
                                  </a>
                                  <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="btn btn-danger text-white" title="Delete">
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
                ->rawColumns(['action','status','image'])
                ->make(true);
        }
        return view('backend.layout.blog.blog.index');
    }


    public function create()
    {
        $tags = Tag::select('id','name')->get();
        return view('backend.layout.blog.blog.create', compact('tags'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'details' => 'required',
            'image_url' => 'required|image|mimes:jpeg,jpg,png,svg,webp|max:30720',
            'youtube_link' => 'nullable|url',
            'status' => 'required|in:Active,Inactive',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);


        // Handle image upload
        $image_url = null;

        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $image_url = uploadImage($image, 'images/blog'); // Define your uploadImage function
        }

        $data = Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'user_id' => Auth::user()->id,
            'image_url' => $image_url,
            'details' => $request->details,
            'youtube_link' => $request->youtube_link,
            'status' => $request->status,
        ]);

        if ($request->has('tags')) {
            $data->tags()->attach($request->tags);
        }

        if ($data) {
            return redirect()->action([self::class, 'index'])->with('t-success', 'Blog created successfully.');
        } else {
            return redirect()->action([self::class, 'index'])->with('t-success', 'Blog failed created.');
        }
    }

    public function edit($id)
    {
        $data = Blog::find($id);
        $tags = Tag::select('id','name')->get();
        return view('backend.layout.blog.blog.edit', compact('data','tags'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'details' => 'required',
            'image_url' => 'nullable|image|mimes:jpeg,jpg,png,svg,webp|max:30720',
            'youtube_link' => 'nullable|url',
            'status' => 'required|in:Active,Inactive',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);

        $data = Blog::findOrFail($id);

         // Handle image upload
         $image_url = null;

         if ($request->hasFile('image_url')) {
             $image = $request->file('image_url');
             $image_url = uploadImage($image, 'images/blog'); // Define your uploadImage function
         }

        $updated = $data->update(
        [
            'title' => $request->title,
            'image_url' => $image_url ?? $data->image_url,
            'details' => $request->details,
            'youtube_link' => $request->youtube_link,
            'user_id' => Auth::user()->id,
            'status' => $request->status,
        ]);


        if ($data->tags()->count() > 0) {
            $data->tags()->sync($request->tags);
        } else {
            $data->tags()->attach($request->tags); // Attach new tags if no existing tags
        }



        if ($updated) {
            return redirect()->action([self::class, 'index'])->with('t-success', 'Blog Updated Successfully.');
        } else {

            return redirect()->action([self::class, 'index'])->with('t-success', 'Blog failed to update');
        }
    }

    public function destroy($id)
    {
        $data = Blog::find($id);

        $data->tags()->detach();

        if (!$data) {
            return response()->json(['t-success' => false, 'message' => 'Data not found.']);
        }
        $data->delete();
        return response()->json(['t-success' => true, 'message' => 'Deleted successfully.']);
    }

    public function status($id)
    {
        $data = Blog::where('id', $id)->first();
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
