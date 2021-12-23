<?php

namespace App\Http\Controllers;

use App\Models\technology;
use Illuminate\Http\Request;
// use Request;
use Illuminate\Support\Facades\DB;
use Helper;
use Auth;

class TechnologyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function technology_index()
    {
        $menu = 'technology';
        $technologys = technology::orderBy('id', 'asc')->latest()->paginate(10);
        return view('technology.index', compact('technologys', "menu"))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    public function technology_store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:50000',
        ]);
        if ($request->hasFile('img')) {
            $imgnumber = rand();
            $img = $request->file('img');
            $img->move(base_path('public/uploads/technology'), '_' . $imgnumber . '.' . $img->getClientOriginalName());
            $imgNameToStore = 'uploads/technology/' . '_' . $imgnumber . '.' . $img->getClientOriginalName();
            // dd($imgNameToStore);
        } else {
            $fileNameToStore = 'no-img-avalible.png';
        }
        $technology = new technology;
        $technology->name = $request->input('name');
        $technology->user_id = $request->input('user_id');
        $technology->img = $imgNameToStore;
        $technology->save();
        return redirect()->route('technology_index')
            ->with('success', 'Technology created successfully.');
    }
    public function technology_edit($id, Request $request)
    {
        $data = DB::table('technology')->where('id', $id)->first();
        return response()->json($data);
    }
    public function technology_show($id, Request $request)
    {
        $data = DB::table('technology')->where('id', $id)->first();
        return response()->json($data);
    }
    public function technology_update(Request $request)
    {
        if ($request->img) {
            $this->validate($request, [                // 'type'=> 'required',
                'name' => 'required',
                'img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:50000',
            ]);
        } else {
            $this->validate($request, [
                'name' => 'required',
            ]);
        }
        $data = array();
        $id = $request->input('id');
        $data['name'] = $request->input('name');
        if ($request->img) {
            $imgnumber = rand();
            // dd($imgnumber);
            $img = $request->file('img');
            $img->move(base_path('public/uploads/technology'), '_' . $imgnumber . '.' . $img->getClientOriginalName());
            $imgNameToStore = 'uploads/technology/' . '_' . $imgnumber . '.' . $img->getClientOriginalName();
            $data['img'] = $imgNameToStore;
        } else {
            $imgNameToStore = 'no-img-avalible.png';
        }
        if ($request->file) {
            $filenumber = rand();
            $file = $request->file('file');
            $file->move(base_path('public/uploads/technology'), '_' . $filenumber . '.' . $file->getClientOriginalName());
            $fileNameToStore = 'uploads/technology/' . '_' . $filenumber . '.' . $file->getClientOriginalName();
            $data['file'] = $fileNameToStore;
        } else {
            $fileNameToStore = 'no-img-avalible.png';
        }
        $technology = technology::where('id', $id)->update($data);
        return redirect()->route('technology_index')
            ->with('success', 'Technology updated successfully');
    }
    public function technology_destroy(technology $id)
    {
        $id->delete();
        return redirect()->route('technology_index')
            ->with('success', 'Technology deleted successfully');
    }
}
