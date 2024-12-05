<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/**
 * @psalm-suppress UnusedClass
 */
class PostsController extends Controller
{
    public const BASE_URL = 'https://jsonplaceholder.typicode.com/posts';

    public function index(): JsonResponse
    {
        $url = sprintf("%s/", self::BASE_URL);

        try {
            $response = Http::get($url);
            $jsonResponse = $response->json();
            return response()->json([
                'success' => true,
                'data' => $jsonResponse,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function store(): JsonResponse
    {
        $url = sprintf("%s/", self::BASE_URL);

        $payload = [
            'user_id' => 1,
            'title' => 'test post',
            'body' => 'test post body',
        ];

        try {
            $response = Http::post($url, $payload);
            $jsonResponse = $response->json();

            return response()->json([
                'success' => true,
                'data' => $jsonResponse,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
