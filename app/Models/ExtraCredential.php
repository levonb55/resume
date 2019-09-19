<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtraCredential extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'slug', 'content', 'extra'
    ];
}
