<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link @if(Route::is('home')) active @endif" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link @if(Route::is('artists.*')) active @endif" href="{{ route('artists.index') }}">Artists</a>
        <a class="nav-item nav-link @if(Route::is('events.*')) active @endif" href="{{ route('events.index') }}">Events</a>
        <a class="nav-item nav-link @if(Route::is('venues.*')) active @endif" href="{{ route('venues.index') }}">Venues</a>
        <a class="nav-item nav-link @if(Route::is('users.*')) active @endif" href="{{ route('users.index') }}">Users</a>
        <a class="nav-item nav-link @if(Route::is('tickets.*')) active @endif" href="{{ route('tickets.index') }}">Tickets</a>
      </div>
    </div>
  </nav>