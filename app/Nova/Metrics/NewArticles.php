<?php

namespace App\Nova\Metrics;

use App\Article;
use Illuminate\Http\Request;
use Laravel\Nova\Metrics\Value;

class NewArticles extends Value
{
    public function name()
    {
        return 'Новые статти';
    }

    /**
     * Calculate the value of the metric.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function calculate(Request $request)
    {
        return $this->count($request, Article::class, null, 'published_at');
    }

    /**
     * Get the ranges available for the metric.
     *
     * @return array
     */
    public function ranges()
    {
        return [
            30 => '30 дней',
            60 => '60 дней',
            365 => '365 дней',
            'MTD' => 'Месяц',
            'QTD' => 'Квартал',
            'YTD' => 'Год',
        ];
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'new-articles';
    }
}
