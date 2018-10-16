<?php

namespace Tests\Feature\Web;

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
        $this->get(route('blog.show',1))
            ->assertStatus(200);
    }
}
