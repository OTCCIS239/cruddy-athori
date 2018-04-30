@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container venuesContainer">
            <h1>Venue's Information</h1>
            <a class="btn btn-primary" href="{{ route('venues.create') }}">Add New Venue</a>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Venue ID</th>
                    <th scope="col">Venue Name</th>
                    <th scope="col">Venue City</th>
                    <th scope="col">Capacity</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($venues as $venue)
                        <tr>
                            <th scope="row" width="15%">{{ $venue->id }}</th>
                            <td width="20%">{{ $venue->venue_name }}</td>
                            <td width="20%">{{ $venue->city }}</td>
                            <td width="20%">{{ $venue->capacity }}</td>
                            <td width="15%"><a class="btn btn-primary" href="/venues/{{ $venue->id }}/edit">Edit</a></td>
                            <td width="15%"><a class="btn btn-success" href="/venues/{{ $venue->id }}">View Info</a></td>
                            <td width="15%">
                                <form action="/venues/{{ $venue->id }}" method="POST">
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