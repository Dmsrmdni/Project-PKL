<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    public function jurusan()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'Wali' melalui id_siswa
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }

    public function laporan_pendaftaran()
    {
        return $this->hasMany(Laporan_pendaftaran::class, 'id_laporan_pendaftaran');
    }
}
