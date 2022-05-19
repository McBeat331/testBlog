<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Post\PostService;
use App\Services\Users\UsersService;
use Illuminate\Http\Request;

/**
 * Class DashboardController
 * @package App\Http\Controllers\Admin
 */
class DashboardController extends Controller
{

    /**
     * @var PostService
     */
    private $postService;
    /**
     * @var UsersService
     */
    private $usersService;

    /**
     * DashboardController constructor.
     * @param $postService
     * @param UsersService $usersService
     */
    public function __construct(PostService $postService, UsersService $usersService)
    {
        $this->postService = $postService;
        $this->usersService = $usersService;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lastUsers = $this->usersService->lastUsers(5);
        $lastPosts = $this->postService->lastPost(5);
        $countUsers = $this->usersService->countAllUsers();
        $countPosts = $this->postService->countAllPost();
        return view('admin.dashboard', compact('lastUsers','lastPosts', 'countUsers', 'countPosts'));
    }
}
