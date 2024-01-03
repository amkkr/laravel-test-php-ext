<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Laravel\Lumen\Http\ResponseFactory;

class ExampleController extends Controller
{
    public function handle(int $number = 0): JsonResponse
    {
        $response = new ResponseFactory();

        return $response
            ->json([
                'id' => 'aaa',
                'name' => 'aadfas',
                'number' => $number,
            ])
        ;
    }
}
