<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveUsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // if(user is admin){} 
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
            'name'=> ['required', 'min:4'],
            // 'role_id' => ['required'],
            'email' =>['required', 'email', 'unique:users,email'],
            'password'=> ['required', 'min:8', 'confirmed'],
            

        ];
    }
}
