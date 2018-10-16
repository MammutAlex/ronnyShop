<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 16.10.18
 * Time: 9:06
 */

namespace App\Http\Controllers\Web;

use App\Article;

class BlogController extends BaseWebController
{
    public function index(Article $model)
    {
        return view('pages.blog.index', [
            'articles' => $model->paginate(9)
        ]);
    }

    public function show(Article $blog)
    {
        return view('pages.blog.show', [
            'blog' => $blog
        ]);
    }
}
