<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testBlogRoute()
    {
        $this->visit('/')
            ->click('View articles')
            ->seePageIs('/blog');
    }

    public function testInfoRoute()
    {
        $this->visit('/')
            ->click('View courses')
            ->seePageIs('/dashboard');
    }
}
