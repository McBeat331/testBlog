<?php
/**
 * Created by PhpStorm.
 * User: mc--b
 * Date: 19.05.2022
 * Time: 0:23
 */

namespace App\Http\Controllers\Api;
use App\Services\Post\PostService;

/**
 * Class PostController
 * @package App\Http\Controllers\Api
 */
class PostController
{

    /**
     * PostController constructor.
     * @param PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function gatPostPaginate()
    {
        $enties = $this->postService->getPaginate(6);
        return response()->json($enties);
    }
}