<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 5/8/2018
 * Time: 3:01 PM
 */

namespace App\Http\Rule;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
class ValidData extends FormRequest
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
            'danh_muc' => 'required',
            'keyword' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'danh_muc.required' => 'hay nhap danh muc',
            'keyword.required' => 'hay nhap keyword',
        ];
    }
}