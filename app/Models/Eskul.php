<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;

    public function image()
    {
        if ($this->foto && file_exists(public_path('images/eskul/' . $this->foto))) {
            return asset('images/eskul/' . $this->foto);
        } else {
            return asset('images/no_image.jpg');
        }
    }

    // mengahupus image(image) di storage(penyimpanan) public
    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/eskul/' . $this->foto))) {
            return unlink(public_path('images/eskul/' . $this->foto));
        }
    }

}
