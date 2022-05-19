<?php
/**
 * Created by PhpStorm.
 * User: mc--b
 * Date: 16.05.2022
 * Time: 17:57
 */

namespace App\Requests\Users;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')->ignore($this->user)],
            'password' => [ $this->route()->user ? 'nullable' : 'required', 'confirmed', 'min:6'],
        ];
    }
}
