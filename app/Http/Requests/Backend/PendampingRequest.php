<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\Request;

class PendampingRequest extends Request
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
        'name'=>'required|max:200',
        'gender'=>'required',
        'nip'=>'required|max:200',
        'hp'=>'required',
        'birthplace'=>'required|max:200',
        'birthdate'=>'required',
        'jabatan'=>'required|max:200',
        'uk'=>'required|max:200',
        'alamat_uk'=>'required',
        'alamat_rumah'=>'required',
      ];
    }
}
