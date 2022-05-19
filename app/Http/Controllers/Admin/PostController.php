<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Requests\Post\PostRequest;
use App\Services\Post\PostService;
use App\Services\PostCategory\PostCategoryService;
use App\Services\Users\UsersService;
use Illuminate\Http\Request;

/**
 * Class PostController
 * @package App\Http\Controllers\Admin
 */
class PostController extends Controller
{
    /**
     * @var PostService
     */
    private $postService;
    /**
     * @var PostCategoryService
     */
    private $postCategoryService;
    /**
     * @var UsersService
     */
    private $usersService;

    /**
     * UserController constructor.
     */
    public function __construct(PostService $postService, PostCategoryService $postCategoryService, UsersService $usersService)
    {
        $this->postService = $postService;
        $this->postCategoryService = $postCategoryService;
        $this->usersService = $usersService;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $enties = $this->postService->getPaginate();
        return view('admin.post.index', compact('enties'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $entry = $this->postService->getCollection();
        $users = $this->usersService->getAll();
        $categories = $this->postCategoryService->getAll();
        return view('admin.post.create', compact('entry','users','categories'));
    }

    /**
     * @param PostRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostRequest $request)
    {
        $this->postService->create($request);
        return redirect()->route('dashboard.post.index');

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $entry = $this->postService->getFind($id);
        $users = $this->usersService->getAll();
        $categories = $this->postCategoryService->getAll();
        return view('admin.post.update', compact('entry','users','categories'));
    }

    /**
     * @param PostRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostRequest $request, $id)
    {
        $this->postService->update($id, $request);

        return redirect()->route('dashboard.post.index');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->postService->delete($id);

        return redirect()->route('dashboard.post.index');
    }
}
