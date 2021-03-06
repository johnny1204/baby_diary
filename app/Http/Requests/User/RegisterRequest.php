<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class RegisterRequest
 * @package App\Http\Requests\User
 */
class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nickname' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'nickname' => 'ニックネーム',
            'email' => 'メールアドレス',
            'password' => 'パスワード',
        ];
    }
}
