@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container artistsContainer">
            <h1>Event's Information</h1>
            <a class="btn btn-primary" href="{{ route('events.create') }}">Add New Event</a>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Event Id</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Venue</th>
                    <th scope="col">Date</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <th scope="row" width="15%">{{ $event->id }}</th>
                            <td width="20%">{{ $event->EventName }}</td>
                            <td width="20%">{{ $event->artist }}</td>
                            <td width="20%">{{ $event->venue }}</td>
                            <td width="20%">{{ $event->EventDate }}</td>
                            <td width="15%"><a class="btn btn-primary" href="/events/{{ $event->id }}/edit">Edit</a></td>
                            <td width="15%"><a class="btn btn-success" href="/events/{{ $event->id }}">View Info</a></td>
                            <td width="15%">
                                <form action="/events/{{ $event->id }}" method="POST">
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