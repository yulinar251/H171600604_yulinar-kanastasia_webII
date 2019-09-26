<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    function index (){
    	$kategoriPengumuman=kategoriPengumuman::all();
    	
    return view('kategori_Pengumuman.index',compact('kategoriPengumuman'));

    }
}
