<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    protected $table='kategori_Galeri';

    protected $fillable = [
    	'nama', 'users_id',
    ];
}
