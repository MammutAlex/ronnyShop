<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

class Article extends Model
{
    use SoftDeletes;

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('published', function (Builder $builder) {
            $builder->whereDate('published_at', '<=', Carbon::now());
        });
    }

    protected $dates = ['deleted_at', 'published_at'];

    public static $search = [
        'title', 'text', 'url'
    ];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function getPhotoUrlAttribute()
    {
        return Storage::url($this->photo);
    }

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class, 'category_id');
    }
}
