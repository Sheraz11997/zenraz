<?php

namespace App\Farmers\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'file1' => 'required',
            'file2' => 'required',
            'seed_price' => 'required',
            'seed_variety' => 'required',
            'farmer_id' => 'required'
        ];
    }
}
