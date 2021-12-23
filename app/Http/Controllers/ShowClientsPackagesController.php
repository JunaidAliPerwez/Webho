<?php

namespace App\Http\Controllers;

use App\Models\showClientsPackages;
use Illuminate\Http\Request;
// use Request;
use Illuminate\Support\Facades\DB;
use Helper;
use Auth;

class showClientsPackagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showClientsPackages_index()
    {
        $menu = 'showClientsPackages';
        $showClientsPackages = showClientsPackages::orderBy('id', 'asc')->latest()->paginate(10);
        return view('web.clientPackage', compact('showClientsPackages', "menu"))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function client_package_store(Request $request)
    {
        $this->validate($request, [
            'page' => 'required',
            'title' => 'required',
            //'link' => 'required',
            'post_by' => 'required',
            'img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:50000',
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
        $Data = new showClientsPackages;
        $Data->title = $request->input('title');
        $Data->slug = $request->input('slug');
        $Data->sub_title = $request->input('sub_title');
        $Data->sub_title_slug = $request->input('sub_title_slug');
        $Data->page = $request->input('page');
        $Data->img = $imgNameToStore;
        $Data->link = $request->input('link');
        $Data->post_by = $request->input('post_by');
        //$Data->details = $request->input('details');
        $Data->save();
        return redirect()->route('showClientsPackages_index')
            ->with('success', 'Created successfully.');
    }


    public function client_package_update(Request $request)
    {
        if (($request->img)) {
            $this->validate($request, [
                'page' => 'required',
                'title' => 'required',
                //'link' => 'required',
                'post_by' => 'required',
                'img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:50000',
            ]);
        } elseif ($request->img) {
            $this->validate($request, [
                'page' => 'required',
                'title' => 'required',
                'post_by' => 'required',
                //'img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:50000',
            ]);
        }


        $data = array();
        $id = $request->input('id');

        $data['title'] = $request->input('title');
        $data['slug'] = $request->input('slug');
        $data['sub_title'] = $request->input('sub_title');
        $data['sub_title_slug'] = $request->input('sub_title_slug');
        $data['page'] = $request->input('page');
        $data['link'] = $request->input('link');
        $data['post_by'] = $request->input('post_by');
        //$data['details'] = $request->input('details');




        if ($request->img) {

            $imgnumber = rand();
            $img = $request->file('img');
            $img->move(base_path('public/uploads/package'), '_' . $imgnumber . '.' . $img->getClientOriginalName());
            $imgNameToStore = 'uploads/package/' . '_' . $imgnumber . '.' . $img->getClientOriginalName();
            $data['img'] = $imgNameToStore;

        } else {

            $imgNameToStore = ' ';

        }




        $showClientsPackages = showClientsPackages::where('id', $id)->update($data);

        return redirect()->route('showClientsPackages_index')->with('success', 'Updated successfully');
    }

    public function client_package_destroy(showClientsPackages $id)
    {
        $id->delete();
        return redirect()->route('showClientsPackages_index')
            ->with('success', 'Deleted successfully');
    }

}
