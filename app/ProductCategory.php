<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductCategory extends Model
{
    public function getPhotoUrlAttribute()
    {
        return Storage::url($this->photo);
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
