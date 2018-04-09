@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container artistsContainer">
            <form>
                <h4 class="mb-3">User Information</h4>
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">User Name:</label>
                    <input type="text" class="form-control" id="" placeholder="" value="Somename"readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" id="" placeholder="" value="John"readonly>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" id="" placeholder="" value="Doe"readonly>
                </div>
                
                </div>
                
            </form>
        </div>
        @include('layouts.footer')
    @endsection