<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreLocationRequest extends Request
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
          'title'=> 'required|max:255',
          'description'=> 'required',
          'adress'=>'required|max:255',
          'plz'=>'required|max:5',
          'city'=>'required|max:255',

          'tel'=>'required|max:255',
          'fax'=>'required|max:255',
          'email'=>'required|max:255',

          'times'=>'required',
          'map'=>'required',
        ];
    }
}
