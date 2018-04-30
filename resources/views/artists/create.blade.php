@extends('layouts.master')
    @section('content')
        @include('layouts.nav')
        <div class="container artistsContainer">
            <form action="/artists" method="POST">
                {{ csrf_field() }}
                <h4 class="mb-3">Artist Information</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Artist Name:</label>
                        <input type="text" name="ArtistName" id="ArtistNAme" class="form-control"  placeholder="" value="{{ @$artist ? $artist['ArtistName'] : '' }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Some Info:</label>
                        <input type="text" name="SomeInfo" id="SomeInfo" class="form-control" placeholder="" value="{{ @$artist ? $artist['SomeInfo'] : '' }}">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Some More Info:</label>
                        <input type="text" name="SomeMoreInfo" id="SomeMoreInfo" class="form-control" placeholder="" value="{{ @$artist ? $artist['SomeMoreInfo'] : '' }}">
                    </div>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
        @include('layouts.footer')
    @endsection