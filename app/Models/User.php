<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'address', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the credential record associated with the user.
     */
    public function credential()
    {
        return $this->hasOne('App\Models\Credential');
    }

    /**
     * Get the experiences for the user.
     */
    public function experiences()
    {
        return $this->hasMany('App\Models\Experience');
    }

    /**
     * Get the education for the user.
     */
    public function education()
    {
        return $this->hasMany('App\Models\Education');
    }

    /**
     * Get the extra credentials for the user.
     */
    public function extraCredentials()
    {
        return $this->hasMany('App\Models\ExtraCredential');
    }
}
