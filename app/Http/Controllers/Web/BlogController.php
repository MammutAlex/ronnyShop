<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 16.10.18
 * Time: 9:06
 */

namespace App\Http\Controllers\Web;

use App\Article;
use App\ArticleCategory;
use App\SearchModel;

class BlogController extends BaseWebController
{
    public function index()
    {
        return view('pages.blog.index', [
            'categories' => ArticleCategory::get(),
            'articles' => SearchModel::buildSearchQuery(
                Article::query(), request('search')
            )->paginate(9),
        ]);
    }

    public function category(ArticleCategory $category)
    {
        return view('pages.blog.index', [
            'activeCategory' => $category,
            'categories' => ArticleCategory::get(),
            'articles' => SearchModel::buildSearchQuery(
                Article::where('category_id', $category->id), request('search')
            )->paginate(9),
        ]);
    }

    public function show(Article $blog)
    {
        return view('pages.blog.show', [
            'post' => $blog,
            'categoryPosts' => $blog->category->articles()->inRandomOrder()->take(5)->get(),
        ]);
    }
}
