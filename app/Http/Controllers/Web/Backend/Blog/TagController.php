<?php

namespace App\Http\Controllers\Web\Backend\Blog;

use Exception;
use App\Models\Tag;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tag::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {

                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                  <a href="' . route('tags.edit',  $data->id) . '" type="button" class="btn btn-primary text-white" title="Edit">
                                  <i class="bi bi-pencil"></i>
                                  </a>
                                  <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="btn btn-danger text-white" title="Delete">
                                  <i class="bi bi-trash"></i>
                                </a>
                                </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.layout.blog.tag.index');
    }


    public function create()
    {
        return view('backend.layout.blog.tag.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags|max:255',
        ]);

        $data =  Tag::create([
            'name' => $request->input('name')
        ]);

        if ($data) {
            return redirect()->action([self::class,'index'])->with('t-success', 'Tag created successfully.');
        } else {
            return redirect()->action([self::class,'index'])->with('t-success', 'Tag failed created.');
        }
    }

    public function edit($id)
    {
        $data = Tag::find($id);
        return view('backend.layout.blog.tag.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:tags,name,' . $id,
        ]);

       $data = Tag::findOrFail($id);

      $updated = $data->update([
            'name' => $request->input('name')
       ]);

       if($updated) {
           return redirect()->action([self::class,'index'])->with('t-success', 'Tag Updated Successfully.');
       }
       else {

           return redirect()->action([self::class,'index'])->with('t-success', 'Tag failed to update');
       }
    }

    public function destroy($id)
    {
        $data = Tag::find($id);

        if (!$data) {
            return response()->json(['t-success' => false, 'message' => 'Data not found.']);
        }
        $data->delete();
        return response()->json(['t-success' => true, 'message' => 'Deleted successfully.']);
    }

}
