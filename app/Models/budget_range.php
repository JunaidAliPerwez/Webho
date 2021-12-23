<?php
namespace App\Models;
use Helper;
use Illuminate\Database\Eloquent\Model;
class budget_range extends Model
{
    protected $table = 'budget_range';
    public $primaryKey = 'id';
    protected $fillable = [ 'name' ];


}
