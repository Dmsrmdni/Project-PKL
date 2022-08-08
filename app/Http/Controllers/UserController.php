<?php

namespace App\Http\Controllers;
use App\Models\Eskul;
use App\Models\Galeri;
use App\Models\Jurusan;
use App\Models\Pendaftaran;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function eskul()
    {
        $eskul = Eskul::all();
        return view('user.eskul', compact('eskul'));
    }
     public function jurusan()
    {
        $jurusan = Jurusan::all();
        return view('user.beranda', compact('jurusan'));
    }

     public function galeri()
    {
        $galeri = Galeri::all();
        return view('user.galeri', compact('galeri'));
    }

    

}
