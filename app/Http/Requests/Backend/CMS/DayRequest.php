<?php

namespace App\Http\Requests\Backend\CMS;

use App\Http\Requests\Request;

class DayRequest extends Request
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
          'day'=>'required|max:200',
          'date'=>'required',
        ];
    }
}
