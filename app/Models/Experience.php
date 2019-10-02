<?php

namespace App\Models;

use App\Traits\FormatDate;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use FormatDate;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'employer', 'city', 'state', 'start_date', 'end_date', 'description', 'order'
    ];

}
