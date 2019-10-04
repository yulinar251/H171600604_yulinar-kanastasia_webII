<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    function index (){
    	$kategoriGaleri=KategoriGaleri::all();
    	
    return view('kategori_galeri.index',compact('KategoriGaleri'));

    }

   public function show($id) {

    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first();
    	$kategoriArtikel=KategoriGaleri::find($id);

    	return view ('kategori_galeri.show', compact('KategoriGaleri'));
    }
    
    public function create(){

        return view ('kategori_galeri.create');
        
    }

    public function store(Request $request){
        $input= $request->all();

        KategoriGaleri::create($input);
        
        return redirect(route('kategori_galeri.index'));
    }


}
