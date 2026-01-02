<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
             'Property_Title'=>'required',
            'Description'=>'required',
            'Price'=>'required|numeric',
            'Property_Type'=>'required',
            'Street_Address'=>'required',
            'phone_num'=>'required|numeric',
            'floor'=>'required|numeric',
            'Bedrooms'=>'required|numeric',
            'Bathrooms'=>'required|numeric',
            'Square_Feet'=>'required|numeric',
            'Status'=>'required',

        ];
    }
}
