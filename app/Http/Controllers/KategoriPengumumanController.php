<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
        
        $listKategoriPengumuman=KategoriPengumuman::all(); 

        return view ('kategori_pengumuman.index',compact('listKategoriPengumuman'));

    }

    public function show($id) {
        
        $listKategoriPengumuman=KategoriPengumuman::find($id);

        return view ('kategori_pengumuman.show', compact('listKategoriPengumuman'));
        
    }

    public function create(){

        return view ('kategori_pengumuman.create');
        
    }

    public function store(Request $request){
        $input= $request->all();

        KategoriPengumuman::create($input);
        
        return redirect(route('kategori_pengumuman.index'));
    }
}
