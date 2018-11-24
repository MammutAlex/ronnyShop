<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at', 'published_at'];

    protected $casts = [
        'images' => 'array',
    ];

    public function getPhotoUrlAttribute()
    {
        return Storage::url($this->photo);
    }

    public function characteristics()
    {
        return $this->hasMany(ProductCharacteristic::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function getImagesUrlAttribute()
    {
        return collect($this->images)->map(function ($image) {
            return Storage::url($image);
        });
    }
}
