@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container artistsContainer">
            <h1>Artist's Information</h1>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Artist ID</th>
                    <th scope="col">Artist</th>
                    <th scope="col">misc info</th>
                    <th scope="col">misc info</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Some Country Act</td>
                        <td>Someting to know</td>
                        <td>Something else to know</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @include('layouts.footer')
    @endsection