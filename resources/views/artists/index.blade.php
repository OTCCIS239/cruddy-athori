@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container artistsContainer">
            <div class="row">
                <div class="col-sm-3">

                </div>
            </div>
            <h1>Artist's Information</h1>
            <a class="btn btn-primary" href="{{ route('artists.create') }}">Add New Artist</a>
            <table class="table" cellpadding="20">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Artist ID</th>
                    <th scope="col">Artist</th>
                    <th scope="col">misc info</th>
                    <th scope="col">misc info</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($artists as $artist)
                        <tr>
                            <th scope="row" width="15%">{{ $artist->id }}</th>
                            <td width="20%">{{ $artist->ArtistName }}</td>
                            <td>{{ $artist->SomeInfo }}</td>
                            <td>{{ $artist->SomeMoreInfo }}</td>
                            {{-- <td width="15%"><a href="{{ route('artist') }}">View Info</a></td> --}}
                            <td width="15%"><a class="btn btn-primary" href="/artists/{{ $artist->id }}/edit">Edit</a></td>
                            <td width="15%"><a class="btn btn-success" href="/artists/{{ $artist->id }}">View Info</a></td>
                            <td width="15%">
                                <form action="/artists/{{ $artist->id }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                <form>
                            </td>
                        </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
        @include('layouts.footer')
    @endsection