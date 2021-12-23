<?php

namespace App\Http\Controllers;

use App\Models\budget_range;
use Illuminate\Http\Request;
//use Request;
//use Illuminate\Support\Facades\DB;
use Helper;
use Auth;

class BudgetRangeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function budget_range_index()
    {
        $user = Auth::user();

        $budget_range = budget_range::orderBy('name', 'asc')->simplePaginate(10);

        return view('web.budgetRange')->with(compact('budget_range'));
    }


    public function budget_range_create_update_delete(Request $request){

        $data = array();

        $id = $request->input('id');
        $name = $request->input('name');

        $data['name'] = $name;

        $dataUpdate = $request->input('dataupdate');
        $dataDelete = $request->input('datadelete');
        $dataCreate = $request->input('datacreate');

        // create
        if($dataCreate == 1){

            $budget_range = new budget_range;

            $budget_range->name = $name;
            $budget_range->save();

            return redirect()->route('budget_range_index')->with('success', 'Budget range create successfully');
        }

        // update
        if($dataUpdate == 1){

            $budget_range = budget_range::where('id', $id)->update($data);

            return redirect()->route('budget_range_index')->with('success', 'Budget range updated successfully');
        }

        // delete
        if($dataDelete == 1){

            $budget_range = budget_range::where('id', $id)->delete();

            return redirect()->route('budget_range_index')->with('success', 'Budget range deleted successfully');
        }
    }

}
