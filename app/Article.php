<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at','published_at'];

    public function getPhotoUrlAttribute()
    {
        return Storage::url($this->photo);
    }
}
