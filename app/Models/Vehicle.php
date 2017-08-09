<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    protected $table = 'tbl_vehicle';
    //public $timestamps = false;

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    //whitelist
    protected $fillable = ['nomor','merk','jenis'];

    //blacklist
    protected $guarded = ['created_at','updated_at'];
}
