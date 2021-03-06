<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorStore extends FormRequest
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
            'doctor_id' => 'required | min:3 | max: 50',
            'name' => 'required | min:3 | max: 50',
            'last_name' => 'required | min:3 | max: 50',
            'email' => 'required | min:3 | max: 50',
            'address' => 'required | min:3 | max: 50',
            'specialization' => 'required'
        ];
    }
}
