<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
     public function index()
    {
        $berita=berita::all();
        
        return view('berita.index',compact('berita'));
    }
}