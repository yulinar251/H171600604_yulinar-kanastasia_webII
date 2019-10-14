<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use App\KategoriArtikel;

class ArtikelController extends Controller
{
    public function index(){
        
        $listArtikel=Artikel::all(); 

        return view ('artikel.index',compact('listArtikel'));
        //return view ('artikel.index'->with('data',$listArtikel);
    }

    public function show($id) {

        //$Artikel=Artikel::where('id',$id)->first();
        $Artikel=Artikel::find($id);

        return view ('artikel.show', compact('Artikel'));
        
    }

    public function create(){

        $KategoriArtikel=KategoriArtikel::pluck('nama','id');
        
        return view('artikel.create', compact('KategoriArtikel'));
    }

    public function store(Request $request){

        $input= $request->all();

        Artikel::create($input);

        return redirect(route('artikel.index'));
    }
    public function edit($id){
      $Artikel=Artikel::find($id);
      $KategoriArtikel=KategoriArtikel::pluck('nama','id');

      if (empty($Artikel)){
        return redirect(route('artikel.index'));
      }
      return view('artikel.edit', compact('Artikel','KategoriArtikel'));
  }
  public function update($id,Request $request){
    $Artikel=Artikel::find($id);
    $input= $request->all();

    if (empty($Artikel)){
      return redirect(route('artikel.index'));
    }
    $Artikel->update($input);
    return redirect(route('artikel.index'));

  }

  public function destroy($id){
      $Artikel=Artikel::find($id);


    if (empty($Artikel)){
      return redirect(route('artikel.index'));
    }
    $Artikel->delete();
    return redirect(route('artikel.index'));
   }

   public function trash(){
        $listArtikel=Artikel::onlyTrashed()
                    ->whereNotNull('deleted_at')
                    ->get();

        return view ('artikel.index',compact('listArtikel'));
       
    }
}