<?php

namespace App\Http\Requests\Backend\CMS;

use App\Http\Requests\Request;

class WinnerRequest extends Request
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
      $requiredImage = webarq()->getAction()->slug == 'create' ? 'required' : '';
      return [
        'school'=>'required|max:200',
        'title'=>'required|max:200',
        'description'=>'required',
        'order'=>'required',
        'image'=>$requiredImage,
      ];
    }
}
