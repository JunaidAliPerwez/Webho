<?php

namespace App\Http\Controllers;

use App\Models\order_placed;
use App\Models\budget_range;
use App\Models\package;
use Illuminate\Http\Request;
//use Request;
//use Illuminate\Support\Facades\DB;
use Helper;
use Auth;

class OrderPlacedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function order_place_index()
    {
        $user = Auth::user();

        $order_placed = order_placed::orderBy('order_placed.name', 'asc')->simplePaginate(10);

        $budget_range = budget_range::get();

        $package = package::get();


        return view('web.orderPlaced')->with(compact('order_placed', 'budget_range' ,'package'));

    }


    public function order_place_create_update_delete(Request $request){

        $data = array();

        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone_number = $request->input('phone_number');
        $budget_id = $request->input('budget_id');
        $package_id = $request->input('package_id');
        $message = $request->input('message');
        $url = $request->input('url');

        $data['name'] = $name;
        $data['email'] = $email;
        $data['phone_number'] = $phone_number;
        $data['budget_id'] = $budget_id;
        $data['package_id'] = $package_id;
        $data['message'] = $message;
        $data['url'] = $url;

        $dataUpdate = $request->input('dataupdate');
        $dataDelete = $request->input('datadelete');
        $dataCreate = $request->input('datacreate');

        // create
        if($dataCreate == 1){

            $order_placed = new order_placed;

            $order_placed->name = $name;
            $order_placed->email = $email;
            $order_placed->phone_number = $phone_number;
            $order_placed->budget_id = $budget_id;
            $order_placed->package_id = $package_id;
            $order_placed->message = $message;
            $order_placed->url = $url;

            $order_placed->save();

            return redirect()->route('order_place_index')->with('success', 'Order place create successfully');
        }

        // update
        if($dataUpdate == 1){



            $order_placed = order_placed::where('id', $id)->update($data);

            return redirect()->route('order_place_index')->with('success', 'Order place updated successfully');
        }

        // delete
        if($dataDelete == 1){

            $order_placed = order_placed::where('id', $id)->delete();

            return redirect()->route('order_place_index')->with('success', 'Order place deleted successfully');
        }


    }

}
