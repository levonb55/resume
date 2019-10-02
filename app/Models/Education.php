<?php

namespace App\Models;

use App\Traits\FormatDate;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use FormatDate;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'school', 'location', 'degree', 'study', 'start_date', 'end_date', 'description', 'order'
    ];

}
