<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 02.10.18
 * Time: 11:05
 */

namespace App;

use Illuminate\Database\Eloquent\Builder;

class SearchModel
{
    public static function buildSearchModel($model, string $text): Builder
    {
        return self::buildSearch($model, $model::query(), $text);
    }

    public static function buildSearchQuery($query, $text): Builder
    {
        if ($text) {
            return self::buildSearch($query->getModel(), $query, $text);
        }
        return $query;
    }

    private static function buildSearch($model, $query, string $text): Builder
    {
        $query->where(function ($query) use ($model, $text) {
            foreach ($model::$search as $key => $value) {
                $query->orWhere($value, 'like', '%' . $text . '%');
            }
        });
        return $query;
    }
}
