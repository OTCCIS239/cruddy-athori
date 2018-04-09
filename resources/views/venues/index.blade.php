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
                    <th scope="col">misc info</th>
                    <th scope="col">misc info2</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>A venue</td>
                        <td>misc info k</td>
                        <td>more misc info k</td>
                        <td><a href="{{ route('venue') }}">View Info</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        @include('layouts.footer')
    @endsection