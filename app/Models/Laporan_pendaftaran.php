<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan_pendaftaran extends Model
{
    use HasFactory;

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'id_pendaftaran');
    }

    public function jurusan()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'Wali' melalui id_siswa
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }
}
