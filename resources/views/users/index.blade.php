@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container usersContainer">
            <h1>User's Information</h1>
            <a class="btn btn-primary" href="{{ route('users.create') }}">Add New User</a>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Name</th>
                    <th scope="col">Permission Level</th>
                    <th scope="col">User Type</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row" width="15%">{{ $user->id }}</th>
                            <td width="20%">{{ $user->username }}</td>
                            <td width="20%">{{ $user->name }}</td>
                            <td width="20%">{{ $user->type }}</td>
                            <td width="20%">{{ $user->usertype }}</td>
                            <td width="15%"><a class="btn btn-primary" href="/users/{{ $user->id }}/edit">Edit</a></td>
                            <td width="15%"><a class="btn btn-success" href="/users/{{ $user->id }}">View Info</a></td>
                            <td width="15%">
                                <form action="/tickets/{{ $user->id }}" method="POST">
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