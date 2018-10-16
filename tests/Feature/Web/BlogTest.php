<?php

namespace Tests\Feature\Web;

use App\Article;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogTest extends TestCase
{
    public function testShowBlogPage()
    {
        $this->get(route('blog.index'))
            ->assertStatus(200);
    }

    public function testShowArticlePage()
    {
        $article = factory(Article::class)->create();
        $this->get(route('blog.show', $article->id))
            ->assertStatus(200);
    }
}
