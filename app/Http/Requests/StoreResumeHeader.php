<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResumeHeader extends FormRequest
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
            'first_name' => 'required|string|min:2|max:255',
            'last_name' => 'required|string|min:2|max:255',
            'address' => 'nullable|string|min:2|max:255',
            'city' => 'nullable|string|min:2|max:255',
            'state' => 'nullable|string|min:2|max:255',
            'zip' => 'nullable|string|min:2|max:100',
            'email' => "required|email|min:2|max:100",
            'phone' => 'nullable|string|min:2|max:100',
        ];
    }
}
