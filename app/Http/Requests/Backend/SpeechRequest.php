<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\Request;

class SpeechRequest extends Request
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
            'pendamping_id'=>'required',
            'category'=>'required',
            'name'=>'required|max:200',
            'email'=>'required|max:200',
            'hp'=>'required|max:13',
            'gender'=>'required',
            'address'=>'required',
            'postal_code'=>'required|max:10',
            'birthplace'=>'required|max:200',
            'birthdate'=>'required',
            'school'=>'required|max:200',
            'jurusan'=>'required|max:200',
            'status'=>'required',
            'photo'=>$requiredImage,
            'id_card'=>$requiredImage
        ];
    }
}
