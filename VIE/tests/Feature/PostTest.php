<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Get_All_Posts()
    {
        $response = $this->get('/api/v1/posts');

        $response->assertJsonStructure([
            'success',
            'message',
            'data' => [
                '*' => [
                    'id',
                    'title',
                    'content',
                    'image',
                    'user_id',
                    'category_id',
                    'created_at',
                    'updated_at'
                ]
            ]
        ]);
    }
}
