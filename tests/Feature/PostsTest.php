<?php

use Illuminate\Testing\TestResponse;

function assertValidJsonResponse(TestResponse $response): void
{
    $response->assertHeader('Content-Type', 'application/json');
    $response->assertJsonStructure([
        'data',
        'success',
    ]);
    $response->assertJson([
        'success' => true,
    ]);
}

test('test Posts index', function () {
    $response = $this->get(route('posts.index'));
    $response->assertStatus(200);
    assertValidJsonResponse($response);
});

test('test Posts store', function () {
    $response = $this->post(route('posts.store'));
    $response->assertStatus(201);
    assertValidJsonResponse($response);
});
