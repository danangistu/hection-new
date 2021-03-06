<?php

namespace App\Http\Requests\Backend\Setting;

use App\Http\Requests\Request;

class ConfigRequest extends Request
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
        'image'=>$requiredImage,
      ];
    }
}
