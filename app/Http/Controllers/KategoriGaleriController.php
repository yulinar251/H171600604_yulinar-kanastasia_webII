<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    function index (){
    	$kategoriGaleri=KategoriGaleri::all();
    	
    return view('kategori_Galeri.index',compact('kategoriGaleri'));

    }
}
