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
        'user_id', 'template_id', 'first_name', 'last_name', 'address', 'city', 'state', 'zip', 'email', 'phone',
        'skills', 'summary', 'resume_complete'
    ];

    public  function getInitials()
    {
        return substr($this->first_name,0, 1) . substr($this->last_name, 0, 1);
    }

    public function getLocation()
    {
        $location = $this->address ? $this->address . ', ' : '';
        $location .= $this->city . ' ' . $this->state . ' ' . $this->zip;

        return $location;
    }
}
