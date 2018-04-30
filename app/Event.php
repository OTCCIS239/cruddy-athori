<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=[
        'EventName',
        'artist',
        'venue',
        'EventDate',
        'StartTime'
    ];
}
