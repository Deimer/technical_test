<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CourseRequest extends Request
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
            'code' => 'required|unique:courses,id|min:5|max:7',
            'name' => 'required|unique:courses,id|max:30',
            'teacher_id' => 'required',
        ];
    }
}
