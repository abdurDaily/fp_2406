<?php

namespace App\Models\Product;

use App\Models\Image\Image;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function images(){
        return $this->hasMany(Image::class);
    }
}
