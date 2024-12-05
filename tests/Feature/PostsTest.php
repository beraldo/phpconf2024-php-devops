<?php

test('test Posts index', function () {
    $response = $this->get(route('posts.index'));

    $response->assertStatus(200);
});

test('test Posts store', function () {
    $response = $this->get(route('posts.store'));

    $response->assertStatus(200);
});
