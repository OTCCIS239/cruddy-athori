<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veunue extends Model
{
    protected $fillable=[
        'venue_name',
        'city',
        'capacity'
    ];
}
