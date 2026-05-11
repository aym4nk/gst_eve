<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [

        'title',

        'date_start',

        'date_end',

        'location',

        'Action',

        'organizer_id'

    ];

    /* =========================
       ORGANIZER
    ========================= */

    public function organizer()
    {
        return $this->belongsTo(
            User::class,
            'organizer_id'
        );
    }
}