<?php
/**
 * Created by PhpStorm.
 * User: mc--b
 * Date: 16.05.2022
 * Time: 23:32
 */

namespace App\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class PostRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255', 'min:3'],
            'content' => ['required', 'string'],
            'time_read' => ['required', 'integer'],
            'category_id'=>['required'],
            'author_id'=>['required']
        ];
    }
}