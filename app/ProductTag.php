<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    public function getRouteKeyName()
    {
        return 'url';
    }
}
