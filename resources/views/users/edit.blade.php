@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container artistsContainer">
            <form action="/users/{{ $user->id }}" method="POST">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}
                <h4 class="mb-3">User Information</h4>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="">User Name:</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="" value="{{ @$user ? $user['username'] : '' }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{ @$user ? $user['name'] : '' }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="" value="{{ @$user ? $user['email'] : '' }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="">Permission Level:</label>
                        <input type="text" class="form-control" id="type" name="type" placeholder="" value="{{ @$user ? $user['type'] : '' }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">User Type:</label>
                        <input type="text" class="form-control" id="usertype" name="usertype" placeholder="" value="{{ @$user ? $user['usertype'] : '' }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="" value="{{ @$user ? $user['password'] : '' }}">
                    </div>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
        @include('layouts.footer')
    @endsection