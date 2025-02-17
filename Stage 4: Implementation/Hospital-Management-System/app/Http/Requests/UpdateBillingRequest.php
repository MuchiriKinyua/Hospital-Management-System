<?php

namespace App\Http\Requests;

use App\Models\Billing;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBillingRequest extends FormRequest
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
        $rules = Billing::$rules;
        
        return $rules;
    }
}
