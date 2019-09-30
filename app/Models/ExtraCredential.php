<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtraCredential extends Model
{
    const EXTRA = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'slug', 'content', 'extra'
    ];

    public static function getExtraCredentials()
    {
        return self::where([
            ['user_id', auth()->id()],
            ['extra', self::EXTRA]
        ])->get();
    }
}
