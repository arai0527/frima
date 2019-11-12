<?php

namespace App\Http\Requests\signup;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmRequest extends FormRequest
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
            'zip' => ['required'],
            'pref' => ['required'],
            'city' => ['required'],
            'address' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'zip.required' => '郵便番号は必須項目です。',
            'pref.required' => '都道府県は必須項目です。',
            'city.required' => '市町村は必須項目です。',
            'address.required' => '住所は必須項目です。',
        ];
    }
}
