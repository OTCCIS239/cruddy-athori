@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container artistsContainer">
            <form>
                <h4 class="mb-3">Ticket Information</h4>
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Artist Name:</label>
                    <input type="text" class="form-control" id="" placeholder="" value="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Venue:</label>
                    <input type="text" class="form-control" id="" placeholder="" value="">
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Date:</label>
                    <input type="text" class="form-control" id="" placeholder="" value="">
                </div>
                
                </div>
                <button type="submit"></button>
            </form>
        </div>
        @include('layouts.footer')
    @endsection