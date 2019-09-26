<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
    protected $table='kategori_Pengumuman';

    protected $fillable = [
    	'nama', 'users_id',
    ];
}
