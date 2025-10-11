<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Categoty extends Model
{

    public function subCategories()
    {
        return $this->hasMany(Categoty::class, 'parent_id');
    }
    public function parentCategories()
    {
        return $this->belongsTo(Categoty::class, 'parent_id');
    }

   
}
