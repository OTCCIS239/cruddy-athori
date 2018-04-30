@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container artistsContainer">
                <form>
                    {{ csrf_field() }}
                    <h4 class="mb-3">Event Information</h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Event Name:</label>
                            <input type="text" class="form-control" name="EventName" id="EventName" placeholder="" value="{{ @$event ? $event['EventName'] : '' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Artist:</label>
                            <input type="text" class="form-control" name="artist" id="artist" placeholder="" value="{{ @$event ? $event['artist'] : '' }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Venue:</label>
                            <input type="text" class="form-control" name="venue" id="venue" placeholder="" value="{{ @$event ? $event['venue'] : '' }}">
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Event Date: yyyy-mm-dd</label>
                                <input type="text" class="form-control" name="EventDate" id="EventDate" placeholder="" value="{{ @$event ? $event['EventDate'] : '' }}">
                                <label for="">Start Time: in military time</label>
                                <input type="text" class="form-control" name="StartTime" id="StartTime" placeholder="" value="{{ @$event ? $event['StartTime'] : '' }}">
                            </div>
                        </div>
                        <a href="{{ route('events.index') }}" class="btn btn-info" role="button">All Events</a>
                </form>
        </div>
        @include('layouts.footer')
    @endsection