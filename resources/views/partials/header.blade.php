<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <span class="navbar-brand" >Crude Comics</span>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteNamed('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteNamed('comics') ? 'active' : '' }}" href="{{ route('comics.index')}}">Comics</a>
        </li>
      </ul>
    </div>

  </div>
</nav>