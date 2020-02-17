<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequest extends FormRequest
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
        'store' => 'required', 
        'title' => 'required', 
        'title_suffix' => 'required',
        'coupon_code' => 'required',
        'aff_url' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'photo' => 'required',
        ];
    }
}
