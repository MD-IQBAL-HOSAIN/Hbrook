<?php

namespace App\Http\Controllers\Web\Backend\CMS\MediaPage;

use Carbon\Carbon;
use App\Models\Interview;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InterviewController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Interview::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('date', function ($data) {
                    return Carbon::parse($data->date)->format('d F Y');
                })
                ->addColumn('image', function ($data) {
                    return "<img width='70px' src='" . asset('storage/' .$data->image_url) . "' ></img>";
                })

                ->addColumn('action', function ($data) {
                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                  <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="btn btn-danger text-white" title="Delete">
                                  <i class="bi bi-trash"></i>
                                </a>
                                </div>';
                })
                ->rawColumns(['action','image'])
                ->make(true);
        }
        return view('backend.layout.cms.media-page.interview.index');
    }

    public function create()
    {
        return view('backend.layout.cms.media-page.interview.create');
    }

    /**
     * Store a newly created media-page.interview in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'title' => 'nullable|string',
            'video_url' => 'nullable|url',
            'image_url' => 'nullable|image|mimes:jpeg,jpg,png,svg,webp|max:2048',
        ]);

         // Handle image upload
         $image_url = null;

         if ($request->hasFile('image_url')) {
             $image = $request->file('image_url');
             $image_url = uploadImage($image, 'images/cms/media'); // Define your uploadImage function
         }


        // Create the service entry
        $data =  Interview::create([
            'title' => $request->title,
            'date' =>$request->date,
            'image_url' => $image_url,
            'video_url' => $request->video_url,
        ]);

        if ($data) {
            return  redirect()->action([self::class, 'index'])->with('t-success', 'Service created successfully.');
        } else {
            return redirect()->action([self::class, 'create'])->with('t-error', 'Data update failed!');
        }
    }

    public function destroy(Request $request, $id)
    {
        $data = Interview::find($id);

        if (!$data) {
            return response()->json(['t-success' => false, 'message' => 'Data not found.']);
        }
        $data->delete();
        return response()->json(['t-success' => true, 'message' => 'Deleted successfully.']);
    }
}
