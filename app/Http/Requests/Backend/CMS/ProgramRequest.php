<?php

namespace App\Http\Requests\Backend\CMS;

use App\Http\Requests\Request;

class ProgramRequest extends Request
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
          'time'=>'required|max:200',
          'program'=>'required|max:200',
          'description'=>'required',
          'duration'=>'required',
          'place'=>'required|max:200',
        ];
    }
}
