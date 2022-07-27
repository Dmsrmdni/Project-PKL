<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    public function pendaftaran()
    {
        // data dari model 'jurusan' bisa memiliki banyak data
        // dari model 'Pendaftaran' melalui id_pendaftaran
        return $this->hasMany(Pendaftaran::class, 'id_guru');
    }

    public function image()
    {
        if ($this->foto && file_exists(public_path('images/jurusan/' . $this->foto))) {
            return asset('images/jurusan/' . $this->foto);
        } else {
            return asset('images/no_image.jpg');
        }
    }

    // mengahupus image(foto) di storage(penyimpanan) public
    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/jurusan/' . $this->foto))) {
            return unlink(public_path('images/jurusan/' . $this->foto));
        }
    }

}
