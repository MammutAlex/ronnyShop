<?php

namespace Tests\Feature\Web;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ServiceTest extends TestCase
{
    public function testShowIndexPage()
    {
        $this->get(route('index'))
            ->assertStatus(200);
    }

    public function testShowAboutPage()
    {
        $this->get(route('about'))
            ->assertStatus(200);
    }
}
