<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCoverFormatting extends FormRequest
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
            'template_id' => 'required|integer|min:1|max:3',
            'font_family' => 'required|integer|min:1|max:4',
            'font_size' => 'required|integer|min:1|max:40',
            'heading_size' => 'required|integer|min:1|max:30',
            'section_spacing' => 'required|integer|min:1|max:70',
            'par_spacing' => 'required|integer|min:1|max:40',
            'line_spacing' => 'required|integer|min:1|max:50',
            'tb_margin' => 'required|integer|min:1|max:130',
            'side_margin' => 'required|integer|min:1|max:100',
            'par_indent' => 'required|integer|min:1|max:70',
            'font_weight' => 'required|integer|min:100|max:900'
        ];
    }
}
