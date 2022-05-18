<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @property mixed $password
 * @property mixed $confirm_password
 */
class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'surname' => "string", 'email' => "string", 'password' => "string", 'password_confirm' => "string"])] public function rules(): array
    {
        return [
            'name'=>'required|string|min:5',
            'surname'=>'required|string|min:5',
            //проверка на @
            'email'=>'required|email|regex:/\w+@\w+.com/i',
            'password'=>'required|min:8',
            'password_confirm'=>'required|min:8'
        ];
    }
}
