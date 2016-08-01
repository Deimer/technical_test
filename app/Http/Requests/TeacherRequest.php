<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TeacherRequest extends Request
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
            'identification' => 'required|unique:teachers|min:7|max:11',
            'first_name'     => 'required|max:100',
            'last_name'      => 'required|max:100',
        ];
    }
}
