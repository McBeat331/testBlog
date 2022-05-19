<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Requests\PostCategory\PostCategoryRequest;
use App\Services\PostCategory\PostCategoryService;
use Illuminate\Http\Request;

/**
 * Class PostCategoryController
 * @package App\Http\Controllers\Admin
 */
class PostCategoryController extends Controller
{
    /**
     * @var PostCategoryService
     */
    private $postCategoryService;

    /**
     * UserController constructor.
     * @param $postCategoryService
     */
    public function __construct(PostCategoryService $postCategoryService)
    {
        $this->postCategoryService = $postCategoryService;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $enties = $this->postCategoryService->getPaginate();
        return view('admin.post_category.index', compact('enties'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $entry = $this->postCategoryService->getCollection();
        return view('admin.post_category.create', compact('entry'));
    }

    /**
     * @param PostCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostCategoryRequest $request)
    {
        $this->postCategoryService->create($request);
        return redirect()->route('dashboard.post_category.index');

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $entry = $this->postCategoryService->getFind($id);
        return view('admin.post_category.update', compact('entry'));
    }

    /**
     * @param PostCategoryRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostCategoryRequest $request, $id)
    {
        $this->postCategoryService->update($id, $request);

        return redirect()->route('dashboard.post_category.index');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->postCategoryService->delete($id);

        return redirect()->route('dashboard.post_category.index');
    }
}
