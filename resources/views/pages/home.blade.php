@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container homeContainer">
            <form action="">
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        @include('layouts.footer')
    @endsection