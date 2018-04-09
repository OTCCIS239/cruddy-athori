@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container artistsContainer">
            <h1>Ticket's Information</h1>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Ticket Id</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Venue</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Some Country Act</td>
                        <td>Some venue</td>
                        <td>Some Date</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @include('layouts.footer')
    @endsection