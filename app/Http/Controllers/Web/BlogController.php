<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 16.10.18
 * Time: 9:06
 */

namespace App\Http\Controllers\Web;

class BlogController extends BaseWebController
{
    public function index()
    {
        return view('pages.blog.index');
    }

    public function show($id)
    {
        return view('pages.blog.show');
    }
}
