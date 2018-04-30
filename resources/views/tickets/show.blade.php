@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container artistsContainer">
            <form>
                {{ csrf_field() }}
                <h4 class="mb-3">Ticket Information</h4>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="">Venue Name:</label>
                        <input type="text" class="form-control" id="venue" name="venue" placeholder="" value="{{ @$ticket ? $ticket['venue'] : '' }}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Event Date:</label>
                        <input type="text" class="form-control" id="eventDate" name="eventDate" placeholder="" value="{{ @$ticket ? $ticket['eventDate'] : '' }}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Start Time:</label>
                        <input type="text" class="form-control" id="startTime" name="startTime" placeholder="" value="{{ @$ticket ? $ticket['startTime'] : '' }}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Guest Name:</label>
                        <input type="text" class="form-control" id="guestName" name="guestName" placeholder="" value="{{ @$ticket ? $ticket['guestName'] : '' }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="">Ticket Type:</label>
                        <input type="text" class="form-control" id="ticketType" name="ticketType" placeholder="" value="{{ @$ticket ? $ticket['ticketType'] : '' }}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Number Of Tickets:</label>
                        <input type="text" class="form-control" id="numberOfTickets" name="numberOfTickets" placeholder="" value="{{ @$ticket ? $ticket['numberOfTickets'] : '' }}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Ticket Number:</label>
                        <input type="text" class="form-control" id="ticketnumber" name="ticketnumber" placeholder="" value="{{ @$ticket ? $ticket['ticketnumber'] : '' }}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">ticket_id:</label>
                        <input type="text" class="form-control" id="ticket_id" name="ticket_id" placeholder="" value="{{ @$ticket ? $ticket['ticket_id'] : '' }}">
                    </div>
                </div>
                <a href="{{ route('tickets.index') }}" class="btn btn-info" role="button">All Tickets</a>
            </form>
        </div>
        @include('layouts.footer')
    @endsection