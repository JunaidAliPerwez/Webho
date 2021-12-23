<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;
// use Request;
use Illuminate\Support\Facades\DB;
use Helper;
use Auth;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function client_index()
    {
        $menu = 'client';
        $clients = client::latest()->paginate(10);
        return view('client.index', compact('clients', "menu"))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    public function client_store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:50000',
        ]);
        if ($request->hasFile('img')) {
            $imgnumber = rand();
            $img = $request->file('img');
            $img->move(base_path('public/uploads/client'), '_' . $imgnumber . '.' . $img->getClientOriginalName());
            $imgNameToStore = 'uploads/client/' . '_' . $imgnumber . '.' . $img->getClientOriginalName();
            // dd($imgNameToStore);
        } else {
            $fileNameToStore = 'no-img-avalible.png';
        }
        $client = new client;
        $client->name = $request->input('name');
        $client->user_id = $request->input('user_id');
        $client->img = $imgNameToStore;
        $client->save();
        return redirect()->route('client_index')
            ->with('success', 'Client created successfully.');
    }
    public function client_edit($id, Request $request)
    {
        $data = DB::table('client')->where('id', $id)->first();
        return response()->json($data);
    }
    public function client_show($id, Request $request)
    {
        $data = DB::table('client')->where('id', $id)->first();
        return response()->json($data);
    }
    public function client_update(Request $request)
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
            $img->move(base_path('public/uploads/client'), '_' . $imgnumber . '.' . $img->getClientOriginalName());
            $imgNameToStore = 'uploads/client/' . '_' . $imgnumber . '.' . $img->getClientOriginalName();
            $data['img'] = $imgNameToStore;
        } else {
            $imgNameToStore = 'no-img-avalible.png';
        }
        if ($request->file) {
            $filenumber = rand();
            $file = $request->file('file');
            $file->move(base_path('public/uploads/client'), '_' . $filenumber . '.' . $file->getClientOriginalName());
            $fileNameToStore = 'uploads/client/' . '_' . $filenumber . '.' . $file->getClientOriginalName();
            $data['file'] = $fileNameToStore;
        } else {
            $fileNameToStore = 'no-img-avalible.png';
        }
        $client = client::where('id', $id)->update($data);
        return redirect()->route('client_index')
            ->with('success', 'Client updated successfully');
    }
    public function client_destroy(client $id)
    {
        $id->delete();
        return redirect()->route('client_index')
            ->with('success', 'Client deleted successfully');
    }
}
