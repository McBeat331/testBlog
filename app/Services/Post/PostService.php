<?php
/**
 * Created by PhpStorm.
 * User: mc--b
 * Date: 16.05.2022
 * Time: 23:32
 */

namespace App\Services\Post;


use App\Models\Post;

/**
 * Class PostService
 * @package App\Services\Post
 */
class PostService
{
    /**
     * @var Post
     */
    private $postModel;
    /**
     * @var
     */
    private $firstRandomPost;

    /**
     * PostService constructor.
     * @param Post $postModel
     */
    public function __construct(Post $postModel)
    {
        $this->postModel = $postModel;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->postModel->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getFind($id)
    {
        return $this->postModel->find($id);
    }

    /**
     * @return Post
     */
    public function getCollection()
    {
        return $this->postModel;
    }
    public function countAllPost()
    {
        return $this->postModel->count();
    }
    /**
     * @return mixed
     */
    public function getFirstRandomPost() {
        $this->firstRandomPost = $this->postModel->inRandomOrder()->first();
        return $this->firstRandomPost;
    }

    /**
     * @return mixed
     */
    public function getSecondRandomPost() {
        return $this->postModel->inRandomOrder()->where('id', '<>', $this->firstRandomPost->id)->first();
    }

    /**
     * @param int $limit
     * @return mixed
     */
    public function getPaginate($limit = 20)
    {
        return $this->postModel->with('category','author')->paginate($limit)->onEachSide(1);
    }

    /**
     * @param $limit
     * @return mixed
     */
    public function lastPost($limit){
        return $this->postModel->latest()->limit($limit)->get();
    }

    /**
     * @param $request
     */
    public function create($request)
    {

        $entry = $this->postModel->create($request->all());
        if($request->hasFile('image')){
            $entry
                ->addMedia($request->file('image'))
                ->toMediaCollection('post');
        }
    }

    /**
     * @param $id
     * @param $request
     */
    public function update($id, $request)
    {
        $entry = $this->postModel->find($id);
        $entry->update($request->all());
        if($request->hasFile('image')){
            $entry
                ->clearMediaCollection('post')
                ->addMedia($request->file('image'))
                ->toMediaCollection('post');
        }
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $entry = $this->postModel->find($id);
        $entry->delete();
    }


}