<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class editMenuRequest extends FormRequest
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
            'name' => 'required|min:4',
            'link' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên menu không được để trông',
            'name.min' => 'Tên menu phải lơn hơn :min ký tự',
            'link.required' => 'Link của menu không được để trống'
        ];
    }
}
