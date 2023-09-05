<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class memberCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => '名前を入力してください。',
            'password.required' => 'パスワードを入力してください。',
            'email.required' => 'メールアドレスを入力してください。'
        ];
    }
}
