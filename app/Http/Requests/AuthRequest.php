<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function Laravel\Prompts\password;

class AuthRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=>"required|string|max:256       ",
            "email"=>"required|email|string|unique:users",
            "password"=>"required|string|confirmed",
            "Cpassword"=>"required"
        ];
    }
    public function messages(){
        return [
        "name"=>"le nom est obligatoire !",
        "name.unique"=>"le nom est déjà utilisé !",
        "email"=>"email est obligatoire , doit contient '@' et '.'  ",
        "email.unique"=>"email est déjà utilisé !  ",
        "password"=>"password est obligatoire ",
        "password.confirmed"=>"2eme password n est pas conpatible !  ",
        "Cpassword"=>"confirmation est necessaire ! "

        ];
    }
}
