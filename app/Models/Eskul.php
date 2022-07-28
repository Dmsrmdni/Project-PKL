<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;

    public function image()
    {
        if ($this->image && file_exists(public_path('images/eskul/' . $this->image))) {
            return asset('images/eskul/' . $this->image);
        } else {
            return asset('images/no_image.jpg');
        }
    }

    // mengahupus image(image) di storage(penyimpanan) public
    public function deleteImage()
    {
        if ($this->image && file_exists(public_path('images/eskul/' . $this->image))) {
            return unlink(public_path('images/eskul/' . $this->image));
        }
    }

}
