<?php

namespace App\Http\Requests\signup;

use Illuminate\Foundation\Http\FormRequest;

class PaymentMethodRequest extends FormRequest
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
            'nickname' => ['required'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'min:7', 'confirmed'],
            'password_confirmation' => ['required'],
        ];
    }

    /**
     * エラーメッセージ
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nickname.required' => 'ニックネームは必須項目です。',
            'email.required' => 'メールアドレスは必須項目です。',
            'email.unique' => 'このメールアドレスは既に登録済みです。',
            'password.required' => 'パスワードは必須項目です。',
            'password.min' => 'パスワードは7文字以上必須です。',
            'password_confirmation.required' => 'パスワードは必須項目です。',
            'password.confirmed' => 'パスワードが異なります',
        ];
    }
}
