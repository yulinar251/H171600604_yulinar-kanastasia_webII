<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{
     public function index()
    {
        $pengumuman=pengumuman::all();
        
        return view('pengumuman.index',compact('pengumuman'));
    }
}