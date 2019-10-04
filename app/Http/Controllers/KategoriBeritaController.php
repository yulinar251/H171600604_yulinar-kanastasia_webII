<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index(){
        
        $listKategoriBerita=KategoriBerita::all(); 

        return view ('kategori_berita.index',compact('listKategoriBerita'));
        
    }

    public function show($id) {

        
        $KategoriBerita=KategoriBerita::find($id);
        
    }

     public function create(){

        return view ('kategori_berita.create');
        
    }

    public function store(Request $request){
        $input= $request->all();

        KategoriBerita::create($input);
        
        return redirect(route('kategori_berita.index'));
    }
}

