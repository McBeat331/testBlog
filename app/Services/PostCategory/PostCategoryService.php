<?php
/**
 * Created by PhpStorm.
 * User: mc--b
 * Date: 16.05.2022
 * Time: 23:32
 */

namespace App\Services\PostCategory;




use App\Models\PostCategory;

/**
 * Class PostCategoryService
 * @package App\Services\PostCategory
 */
class PostCategoryService
{
    /**
     * @var PostCategory
     */
    private $postCategoryModel;

    /**
     * PostCategoryService constructor.
     * @param PostCategory $postCategoryModel
     */
    public function __construct(PostCategory $postCategoryModel)
    {
        $this->postCategoryModel = $postCategoryModel;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->postCategoryModel->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getFind($id)
    {
        return $this->postCategoryModel->find($id);
    }

    /**
     * @return PostCategory
     */
    public function getCollection()
    {
        return $this->postCategoryModel;
    }

    /**
     * @param $request
     */
    public function create($request)
    {
        $this->postCategoryModel->create($request->all());
    }

    /**
     * @param $id
     * @param $request
     */
    public function update($id, $request)
    {
        $entry = $this->postCategoryModel->find($id);
        $entry->update($request->all());
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $entry = $this->postCategoryModel->find($id);
        $entry->delete();
    }

    /**
     * @return mixed
     */
    public function getPaginate()
    {
        return $this->postCategoryModel->paginate(20)->onEachSide(1);
    }
}