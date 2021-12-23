<?php
namespace App\Models;
use Helper;
use Illuminate\Database\Eloquent\Model;
class showClientsPackages extends Model
{
    protected $table = 'show_clients_packages';
    public $primaryKey = 'id';
    protected $fillable = [

        'post_by', 'page', 'title', 'img', 'link', 'created_at', 'updated_at'

    ];

}
