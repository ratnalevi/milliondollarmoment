<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|regex:/^[7-9][0-9]{9}$/',
            'location' => 'required',
            'event_type' => '',
            'surprise_type' => '',
            'event_date' => 'required|date|after_or_equal:date',
            'guest_count' => '',
            'reach_factor' => '',
            'message' => '',
        ];
    }
}
