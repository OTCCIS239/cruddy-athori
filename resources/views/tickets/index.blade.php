@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container artistsContainer">
            <h1>Ticket's Information</h1>
            <a class="btn btn-primary" href="{{ route('tickets.create') }}">Add New ticket</a>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Ticket Id</th>
                    <th scope="col">Venue</th>
                    <th scope="col">Event Date</th>
                    <th scope="col">Guest Name</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($tickets as $ticket)
                        <tr>
                            <th scope="row" width="15%">{{ $ticket->id }}</th>
                            <td width="20%">{{ $ticket->venue }}</td>
                            <td width="20%">{{ $ticket->eventDate }}</td>
                            <td width="20%">{{ $ticket->guestName }}</td>
                            <td width="15%"><a class="btn btn-primary" href="/tickets/{{ $ticket->id }}/edit">Edit</a></td>
                            <td width="15%"><a class="btn btn-success" href="/tickets/{{ $ticket->id }}">View Info</a></td>
                            <td width="15%">
                                <form action="/tickets/{{ $ticket->id }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                <form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('layouts.footer')
    @endsection