<?php
/**
 * Created by PhpStorm.
 * User: mc--b
 * Date: 16.05.2022
 * Time: 17:55
 */

namespace App\Services\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * Class UsersService
 * @package App\Services\Users
 */
class UsersService
{
    /**
     * @var User
     */
    private $userModel;
    /**
     * @var int
     */
    private $adminPaginate = 20;

    /**
     * UsersService constructor.
     * @param User $userModel
     */
    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->userModel->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getFind($id)
    {
        return $this->userModel->find($id);
    }

    /**
     * @return User
     */
    public function getCollection()
    {
        return $this->userModel;
    }

    /**
     * @return mixed
     */
    public function countAllUsers()
    {
        return $this->userModel->count();
    }

    /**
     * @param $request
     */
    public function create($request)
    {
        $request->merge([
            'password' => Hash::make($request->password),
            'email_verified_at' => now(),
            'is_admin' => 0,
            'remember_token' => Str::random(10)
        ]);

        $this->userModel->create($request->all());
    }

    /**
     * @param $id
     * @param $request
     */
    public function update($id, $request)
    {
        $password = Hash::make($request->password);
        $request->merge(['password' => $password]);

        $entry = $this->userModel->find($id);
        $entry->update($request->all());
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $entry = $this->userModel->find($id);
        $entry->delete();
    }

    /**
     * @param $limit
     * @return mixed
     */
    public function lastUsers($limit){
        return $this->userModel->where('is_admin','!=', 1)->latest()->limit($limit)->get();
    }

    /**
     * @return mixed
     */
    public function getPaginate()
    {
        return $this->userModel->where('is_admin','!=', 1)->paginate($this->adminPaginate)->onEachSide(1);
    }
}
