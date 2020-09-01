<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use Appp\Models\Post;

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
            'title' => 'required|unique:post|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:category,id',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute bắt buộc phải điền',
        ];  
    }
    public function attributes()
    {
        return [
            'title' => 'Title',
            'content' => 'Content',
            'category_id' => 'Category',
        ];
    }
}
