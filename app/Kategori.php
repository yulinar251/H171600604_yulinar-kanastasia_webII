<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','nama', 'keterangan',
    ];
}
