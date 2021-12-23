<?php
namespace App\Models;
use Helper;
use Illuminate\Database\Eloquent\Model;
use App\Models\budget_range;
use App\Models\package;

class order_placed extends Model
{
    protected $table = 'order_placed';
    public $primaryKey = 'id';
    protected $fillable = [ 'name', 'email' ,'phone_number' , 'budget_id' ,'package_id', 'message', 'url' ];

    public function budget($id){

        $budget = budget_range::where('id', $id)->first();

        return $budget;

    }

    public function package($id){

        $package = package::where('id', $id)->first();

        return $package;

    }

}
