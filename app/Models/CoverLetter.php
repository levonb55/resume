<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoverLetter extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'template_id', 'job', 'employer', 'strengths', 'experience', 'styles', 'first_name', 'last_name',
        'complete', 'font_family','font_size','heading_size', 'section_spacing','par_spacing','line_spacing',
        'tb_margin','side_margin','par_indent','font_weight'
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'font_family' => 'Arial',
        'font_size' => 16,
        'heading_size' => 20,
        'section_spacing' => 8,
        'par_spacing' => 6,
        'line_spacing' => 24,
        'tb_margin' => 20,
        'side_margin' => 1,
        'par_indent' => 1,
        'font_weight' => 400
    ];

}
