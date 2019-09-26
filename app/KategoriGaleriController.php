<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_GaleriController extends Model
{
    protected $table='kategori_GaleriController';

    protected $fillable = [
    	'nama', 'users_id',
    ];
}
