<?php
namespace App\Models;
use Helper;
use Illuminate\Database\Eloquent\Model;
class package extends Model
{
    protected $table = 'package';
    public $primaryKey = 'id';
    protected $fillable = [

        'user_id','is_deleted','name','slug','is_active','img', 'price', 'discount_price'

    ];
    public function image()
    {
        // return $this->hasOne(imagetable::class, 'ref_id')->where('table_name', 'blogs');
    }
}
