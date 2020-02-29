<?php

namespace App\Farmers\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FarmerRequest extends FormRequest
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
            'name' => 'required|alpha',
            'cnic' => 'required',
            'mobile_number' => 'required',
            'secondary_mobile_number' => 'alpha_dash',
            'farm_address' => 'alpha_dash',
            'res_address' => 'alpha_dash',
            'territory' => 'alpha_dash',
            'avatar' => 'alpha_dash',
            'seed_production_expr' => 'integer',
            'owned_acreage' => 'nullable|integer',
            'leased_acreage' => 'nullable|integer',
            'total_acreage' => 'nullable|integer',
            'sanifa_acreage' => 'nullable|integer',
            'water_source' => 'nullable|integer',
            'manager_name' => 'alpha',
            'manager_phone' => 'alpha',
            'manager_relation_type' => 'alpha',
        ];
    }
}
