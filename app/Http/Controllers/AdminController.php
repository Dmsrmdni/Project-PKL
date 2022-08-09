<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use App\Models\Jurusan;
use App\Models\Galeri;
use App\Models\Pendaftaran;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function total()
    {
        $total_eskul = Eskul::count();
        $total_pendaftaran = Pendaftaran::count();
        $total_jurusan = Jurusan::count();
        $total_galeri = Galeri::count();
        return view('admin.index', compact('total_eskul','total_jurusan','total_galeri','total_pendaftaran'));
    }
}
