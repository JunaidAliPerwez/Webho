<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inquiryProject extends Model
{
    protected $table = 'inquiry_project';
    public $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'phonenumber', 'message', 'service', 'url'];
}
