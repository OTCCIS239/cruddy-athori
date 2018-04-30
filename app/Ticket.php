<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable=[
        'venue',
        'eventDate',
        'startTime',
        'guestName',
        'ticketType',
        'numberOfTickets',
        'ticketNumber',
        'ticket_id'
    ];
}
