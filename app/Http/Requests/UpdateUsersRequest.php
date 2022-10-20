<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUsersRequest extends FormRequest
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
            'name'=> ['required', 'min:4'],
            // 'role_id' => ['required'],
            'email' =>['required', 'unique:users,email,'.$this->user->id],
            //'email' => ['required', Rule::unique('users')->ignore($this->user)],
            // 'password' => ['nullable','confirmed', 'min:8'],
            
        ];
        
    }
}
