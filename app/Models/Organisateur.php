<?php

namespace App\Models;
use App\Models\Event;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Organisateur extends Authenticatable
{
    protected $table = 'organisateurs';

    protected $fillable = [

        'first_name',

        'last_name',

        'birth',

        'email',

        'password'

    ];

    /* =========================
       EVENTS
    ========================= */

    public function events()
    {
        return $this->hasMany(
            Event::class,
            'organizer_id'
        );
    }
}