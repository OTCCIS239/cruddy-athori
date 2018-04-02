@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container artistsContainer">
            <h1>User's Information</h1>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>ausername</td>
                        <td>John</td>
                        <td>Doe</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @include('layouts.footer')
    @endsection