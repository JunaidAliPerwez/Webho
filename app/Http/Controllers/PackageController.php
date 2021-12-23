<?php

namespace App\Http\Controllers;

use App\Models\package;
use Illuminate\Http\Request;
//use Request;
//use Illuminate\Support\Facades\DB;
use Helper;
use Auth;

class packageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function package_index()
    {
        $menu = 'package';
        $package = package::orderBy('id', 'asc')->latest()->paginate(10);
        return view('package.index', compact('package', "menu"))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function package_store(Request $request)
    {
        $this->validate($request, [
            // 'type'=> 'required',
            'name' => 'required',
            //'slug' => 'required',
            'price' => 'required',
            'details' => 'required',
            'post_by' => 'required',
            'created_at' => 'required',
            // 'img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:50000',
            // 'file'=> 'required|mimes:mp4,ppx,pdf,ogv,jpg,webm|max:100000',
        ]);
        if ($request->hasFile('img')) {
            $imgnumber = rand();
            $img = $request->file('img');
            $img->move(base_path('public/uploads/package'), '_' . $imgnumber . '.' . $img->getClientOriginalName());
            $imgNameToStore = 'uploads/package/' . '_' . $imgnumber . '.' . $img->getClientOriginalName();
            // dd($imgNameToStore);
        } else {
            //$imgNameToStore = 'uploads/package/no-img-avalible.png';
            $imgNameToStore = ' ';
        }
        if ($request->hasFile('file')) {
            $filenumber = rand();
            $file = $request->file('file');
            $file->move(base_path('public/uploads/package'), '_' . $filenumber . '.' . $file->getClientOriginalName());
            $fileNameToStore = 'uploads/package/' . '_' . $filenumber . '.' . $file->getClientOriginalName();
        } else {
            //$fileNameToStore = 'uploads/package/no-img-avalible.png';
            $fileNameToStore = ' ';
        }
        $package = new package;
        $package->name = $request->input('name');
        $package->slug = $request->input('slug');

        $package->price = $request->input('price');
        $package->discount_price = $request->input('discount_price') == '' ? 0 : $request->input('discount_price');

        $package->details = $request->input('details');
        $package->user_id = $request->input('user_id');
        $package->post_by = $request->input('post_by');
        $package->created_at = $request->input('created_at');
        // $blogs->file = $fileNameToStore;
        $package->img = $imgNameToStore;
        $package->save();
        return redirect()->route('package_index')
            ->with('success', 'package created successfully.');
    }

    // public function package_edit($id, Request $request)
    // {
    //     $data = DB::table('package')->where('id', $id)->first();
    //     return response()->json($data);
    // }

    // public function package_show($id, Request $request)
    // {
    //     $data = DB::table('package')->where('id', $id)->first();
    //     return response()->json($data);
    // }

    public function package_update(Request $request)
    {
        if (($request->img) && ($request->file)) {
            $this->validate($request, [
                // 'type'=> 'required',
                'name' => 'required',
                //'slug' => 'required',
                'price' => 'required',
                'details' => 'required',
                'post_by' => 'required',
                'created_at' => 'required',
                'img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:50000',
                // 'file'=> 'required|mimes:mp4,ppx,pdf,ogv,jpg,webm|max:100000',
            ]);
        } elseif ($request->img) {
            $this->validate($request, [
                // 'type'=> 'required',
                'name' => 'required',
                //'slug' => 'required',
                'price' => 'required',
                'details' => 'required',
                'post_by' => 'required',
                'created_at' => 'required',
                //'img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:50000',
            ]);
        } elseif ($request->file) {
            $this->validate($request, [
                // 'type'=> 'required',
                'name' => 'required',
                //'slug' => 'required',
                'price' => 'required',
                'details' => 'required',
                'post_by' => 'required',
                'created_at' => 'required',
                // 'file'=> 'required|mimes:mp4,ppx,pdf,ogv,jpg,webm|max:100000',
            ]);
        } else {
            $this->validate($request, [
                // 'type'=> 'required',
                'name' => 'required',
                //'slug' => 'required',
                'price' => 'required',
                'details' => 'required',
                'post_by' => 'required',
                'created_at' => 'required',
            ]);
        }
        $data = array();
        $id = $request->input('id');
        // $data['type'] = $request->input('type');
        $data['name'] = $request->input('name');
        $data['slug'] = $request->input('slug');
        $data['price'] = $request->input('price');
        $data['discount_price'] = $request->input('discount_price') == '' ? 0 : $request->input('discount_price');
        $data['details'] = $request->input('details');
        $data['user_id'] = $request->input('user_id');
        $data['post_by'] = $request->input('post_by');
        $data['created_at'] = $request->input('created_at');
        if ($request->img) {
            $imgnumber = rand();
            // dd($imgnumber);
            $img = $request->file('img');
            $img->move(base_path('public/uploads/package'), '_' . $imgnumber . '.' . $img->getClientOriginalName());
            $imgNameToStore = 'uploads/package/' . '_' . $imgnumber . '.' . $img->getClientOriginalName();
            $data['img'] = $imgNameToStore;
        } else {
            //$imgNameToStore = 'uploads/package/no-img-avalible.png';
            $imgNameToStore = ' ';
        }
        if ($request->file) {
            $filenumber = rand();
            $file = $request->file('file');
            $file->move(base_path('public/package/package'), '_' . $filenumber . '.' . $file->getClientOriginalName());
            $fileNameToStore = 'uploads/package/' . '_' . $filenumber . '.' . $file->getClientOriginalName();
            $data['file'] = $fileNameToStore;
        } else {

            //$fileNameToStore = 'uploads/package/no-img-avalible.png';
            $fileNameToStore = ' ';
        }

        $package = package::where('id', $id)->update($data);

        return redirect()->route('package_index')->with('success', 'package updated successfully');
    }

    public function package_destroy(package $id)
    {
        $id->delete();
        return redirect()->route('package_index')
            ->with('success', 'package deleted successfully');
    }
}
