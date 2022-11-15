<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SecondTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_homePage()
    {
        $response = $this->get('/home');
        $response->assertStatus(200);
        $response->assertSeeText('Добро пожаловать в агрегатор новостей!');
    }
}
