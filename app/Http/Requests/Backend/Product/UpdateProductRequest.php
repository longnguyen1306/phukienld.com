<?php

namespace App\Http\Requests\Backend\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'ten' => 'required|min:4',
            'gia' => 'required|numeric',
            'danh_muc_id' => 'required|numeric',
            'so_luong_sp'=> 'required|numeric',
            'mo_ta_ngan' => 'required',
            'chi_tiet' => 'required',
        ];
    }
}
