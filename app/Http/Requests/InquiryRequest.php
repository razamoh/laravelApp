<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InquiryRequest extends FormRequest
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
            "subject" => "required|max:70|min:3",
            "message" => "required|max:700|min:5"
        ];
    }

    /**
     * Customise the error messages.
     *
     *
     */
    public function messages()
    {
        return [
            'subject.required' => 'A Subject is required for the inquiry and min length should atlease 03 and max length 70',
            'message.required' => 'Please add message for the inquiry.length should be max 700 and min:5',
        ];
    }
}
