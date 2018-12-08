<?php

namespace Tests\Feature\Web;

use App\Article;
use App\ArticleCategory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogTest extends TestCase
{
    public function testShowArticleList()
    {
        $this->get(route('blog.index'))
            ->assertStatus(200);
    }

    public function testShowArticleSearchList()
    {
        $this->call('GET', route('blog.index'), ['search' => 'search'])
            ->assertStatus(200);
    }

    public function testShowArticleCategoryList()
    {
        $this->get(route('blog.category', ArticleCategory::inRandomOrder()->first()->url))
            ->assertStatus(200);
    }

    public function testShowArticlePage()
    {
        $article = factory(Article::class)->create();
        $this->get(route('blog.show', $article->url))
            ->assertStatus(200);
    }
}
