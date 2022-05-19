<?php

namespace App\Http\Controllers;

use App\Services\Post\PostService;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{

    /**
     * @var PostService
     */
    private $postService;


    /**
     * HomeController constructor.
     * @param PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $enties = $this->postService->getPaginate(6);
        $firstRandomPost = $this->postService->getFirstRandomPost();
        $secondRandomPost = $this->postService->getSecondRandomPost();
        $lastPost = $this->postService->lastPost(3);
        if($request->ajax())
        {
            return view('_partials.postPaginate', compact('enties'))->render();
        }
        return view('welcome',compact('enties','firstRandomPost','secondRandomPost', 'lastPost'));
    }

}
