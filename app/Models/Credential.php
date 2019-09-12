<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'template_id', 'first_name', 'last_name', 'address', 'city', 'state', 'zip', 'email', 'phone', 'skills'
    ];
}
