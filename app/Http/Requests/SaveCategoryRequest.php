<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveCategoryRequest extends FormRequest
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
        //diferenciar reglas de validación
        // if($this->isMethod('PATCH')){
        //     return[];
        // }
        return [
            'name'=> ['required', 'min:4'],
        ];
    }
}
