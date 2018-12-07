<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    public function getRouteKeyName()
    {
        return 'url';
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
