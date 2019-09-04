<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'employer', 'city', 'state', 'start_date', 'end_date', 'description'
    ];

    public static function countExperience()
    {
        return self::where('user_id', auth()->id())->count();
    }
}
