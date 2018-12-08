<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at', 'published_at'];

    public static $search = [
        'title', 'sku'
    ];
    protected $casts = [
        'images' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('updated_at', 'desc');
        });
    }

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function getPhotoUrlAttribute()
    {
        return Storage::url($this->photo);
    }

    public function characteristics()
    {
        return $this->hasMany(ProductCharacteristic::class);
    }

    public function tags()
    {
        return $this->belongsToMany(ProductTag::class);
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
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
