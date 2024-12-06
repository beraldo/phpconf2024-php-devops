<?php

test('test Posts index', function () {
    $response = $this->get(route('posts.index'));

    $response->assertStatus(200);

    // Assert response is JSON
    $response->assertHeader('Content-Type', 'application/json');

    // Assert JSON structure and content
    $response->assertJsonStructure([
        'data',
        'success',
    ]);

    $response->assertJson([
        'success' => true,
    ]);
});

test('test Posts store', function () {
    $response = $this->post(route('posts.store'));

    $response->assertStatus(201);

    // Assert response is JSON
    $response->assertHeader('Content-Type', 'application/json');

    // Assert JSON structure and content
    $response->assertJsonStructure([
        'data',
        'success',
    ]);

    $response->assertJson([
        'success' => true,
    ]);
});
