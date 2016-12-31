<?php

namespace App\Http\Requests\Backend\CMS;

use App\Http\Requests\Request;

class TestimonialRequest extends Request
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
        'name'=>'required|max:200',
        'role'=>'required|max:200',
        'testimonial'=>'required',
        'image'=>$requiredImage,
      ];
    }
}
