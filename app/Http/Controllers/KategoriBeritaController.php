<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    function index (){
    	$kategoriBerita=KategoriBerita::all();
    	
    return view('kategori_Berita.index',compact('kategoriBerita'));

    }
}
