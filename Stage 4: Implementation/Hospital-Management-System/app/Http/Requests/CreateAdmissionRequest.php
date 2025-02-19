<?php

namespace App\Http\Requests;

use App\Models\Admission;
use Illuminate\Foundation\Http\FormRequest;

class CreateAdmissionRequest extends FormRequest
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
        return Admission::$rules;
    }
}
