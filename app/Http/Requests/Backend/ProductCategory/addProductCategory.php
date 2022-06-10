<?php

namespace App\Http\Requests\Backend\ProductCategory;

use Illuminate\Foundation\Http\FormRequest;

class addProductCategory extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4|unique:categories',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg,gif'
        ];
    }

    public function messages()
    {
       return [
           'name.required' => 'Tên danh mục không được để trống',
           'name.min' => 'Tên danh mục không được ít hơn :min ký tự',
           'image.required' => 'Ảnh không được để trống',
           'image.image' => 'Ảnh phải là ảnh hợp lệ',
       ];
    }
}
