<?php

namespace App\Http\Controllers\Web\Backend\CMS\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\GallaryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class GallaryImageController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = GallaryImage::where('gallary_id', 1)->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                  <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="btn btn-danger text-white" title="Delete">
                                  <i class="bi bi-trash"></i>
                                </a>
                                </div>';
                })
                ->addColumn('image', function ($data) {
                    return "<img width='70px' src='" . asset('storage/' .$data->image_url) . "' ></img>";
                })
                ->rawColumns(['action','image'])
                ->make(true);
        }
        return view('backend.layout.cms.landing-page.gallary-image.index');
    }

    public function create()
    {
        return view('backend.layout.cms.landing-page.gallary-image.create');
    }

    /**
     * Store a newly created gallary image in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'title' => 'nullable|string',
            'sub_title' => 'nullable|string',
            'image_url' => 'nullable|image|mimes:jpeg,jpg,png,svg,webp|max:2048',
        ]);

        // Handle image upload
        $image_url = null;

        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $image_url = uploadImage($image, 'images/cms/gallary'); // Define your uploadImage function
        }

        // Create the gallary image entry
        $data = GallaryImage::create([
            'title' => $request->title,
            'gallary_id' => 1,
            'image_url' => $image_url,
        ]);

        if ($data) {
            return  redirect()->action([self::class, 'index'])->with('t-success', 'Gallary image created successfully.');
        } else {
            return redirect()->action([self::class, 'create'])->with('t-error', 'Data update failed!');
        }
    }

    public function destroy(Request $request, $id)
    {
        $data = GallaryImage::find($id);

        if (!$data) {
            return response()->json(['t-success' => false, 'message' => 'Data not found.']);
        }
        $data->delete();
        return response()->json(['t-success' => true, 'message' => 'Deleted successfully.']);
    }
}
