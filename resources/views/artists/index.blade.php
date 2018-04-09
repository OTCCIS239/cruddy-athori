@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container artistsContainer">
            <h1>Artist's Information</h1>
            <a class="btn btn-primary" href="{{ route('artists.create') }}">Add New Artist</a>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Artist ID</th>
                    <th scope="col">Artist</th>
                    <th scope="col">misc info</th>
                    <th scope="col">misc info</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Some Country Act</td>
                        <td>Someting to know</td>
                        <td>Something else to know</td>
                        <td><a href="{{ route('artist') }}">View Info</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        @include('layouts.footer')
    @endsection