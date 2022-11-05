<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    public function testStatusCode()
    {
        // アクセス結果が、$responseに格納され、$responseステータスが200であることを確認
        $response = $this->get('/home');
        $response->assertStatus(200);
    }

    public function testBody()
    {
        $response = $this->get('/home');
        $response->assertSeeText('こんにちは！');
    }
}
