@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container artistsContainer">
                <form>
                    {{ csrf_field() }}
                    <h4 class="mb-3">Venue Information</h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Venue Name:</label>
                            <input type="text" class="form-control" id="venue_name" name="venue_name" placeholder="" value="{{ @$venue ? $venue['venue_name'] : '' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">City:</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="" value="{{ @$venue ? $venue['city'] : '' }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Capacity:</label>
                            <input type="text" class="form-control" id="capacity" name="capacity" placeholder="" value="{{ @$venue ? $venue['capacity'] : '' }}">
                        </div>
                    </div>
                    <a href="{{ route('venues.index') }}" class="btn btn-info" role="button">All Venues</a>
                </form>
        </div>
        @include('layouts.footer')
    @endsection