<?php

namespace App\Http\Controllers\Web\Backend\Product;

use App\Models\Ptag;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class PtagController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Ptag::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {

                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                  <a href="' . route('ptags.edit',  $data->id) . '" type="button" class="btn btn-primary text-white" title="Edit">
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
        return view('backend.layout.product.product-tag.index');
    }


    public function create()
    {
        return view('backend.layout.product.product-tag.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:ptags|max:255',
        ]);

        $data =  Ptag::create([
            'name' => $request->input('name')
        ]);

        if ($data) {
            return redirect()->action([self::class,'index'])->with('t-success', 'Product Tag created successfully.');
        } else {
            return redirect()->action([self::class,'index'])->with('t-success', 'Product Tag failed created.');
        }
    }

    public function edit($id)
    {
        $data = Ptag::find($id);
        return view('backend.layout.product.product-tag.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:ptags,name,' . $id,
        ]);

       $data = Ptag::findOrFail($id);

      $updated = $data->update([
            'name' => $request->input('name')
       ]);

       if($updated) {
           return redirect()->action([self::class,'index'])->with('t-success', 'Product Tag Updated Successfully.');
       }
       else {

           return redirect()->action([self::class,'index'])->with('t-success', 'Product Tag failed to update');
       }
    }

    public function destroy($id)
    {
        $data = Ptag::find($id);

        if (!$data) {
            return response()->json(['t-success' => false, 'message' => 'Data not found.']);
        }
        $data->delete();
        return response()->json(['t-success' => true, 'message' => 'Deleted successfully.']);
    }
}
