<?php

namespace App\Http\Requests\Backend\CMS;

use App\Http\Requests\Request;

class AboutRequest extends Request
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
          'title'=>'required|max:200',
          'about'=>'required',
          'pur_1'=>'required|max:200',
          'pur_text_1'=>'required',
          'pur_2'=>'required|max:200',
          'pur_text_2'=>'required',
          'pur_3'=>'required|max:200',
          'pur_text_3'=>'required',
          'pur_4'=>'required|max:200',
          'pur_text_4'=>'required',
        ];
    }
}
