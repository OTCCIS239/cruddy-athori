@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container artistsContainer">
            <form>
                <h4 class="mb-3">Artist Information</h4>
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Artist Name:</label>
                    <input type="text" class="form-control" id="" placeholder="" value="SomeArtist"readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Misc Info:</label>
                    <input type="text" class="form-control" id="" placeholder="" value="Something to know"readonly>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Misc Info:</label>
                    <input type="text" class="form-control" id="" placeholder="" value="Somemore info"readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Number Of Tickets:</label>
                    <input type="text" class="form-control" id="" placeholder="" value=""readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Ticket Type:</label>
                    <input type="text" class="form-control" id="" placeholder="" value=""readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Ticket Type:</label>
                    <input type="text" class="form-control" id="" placeholder="" value=""readonly>
                </div>
                </div>
                
            </form>
        </div>
        @include('layouts.footer')
    @endsection