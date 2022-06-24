<header class="d-flex align-items-center flex-wrap px-3">

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="logo">
                <a href="{{route('home')}}">
                    <img width="100px" src="{{asset('img/boolflix-logo.png')}}" alt="Logo">
                </a>
            </div>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">Film</a>
              </li>
              <li class="nav-item">
                <a class="{{Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{route('about')}}">Chi siamo</a>
              </li>
              <li class="nav-item">
                <a class="{{Route::currentRouteName() === 'contacts' ? 'active' : ''}}" href="{{route('contacts')}}">Contatti</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

</header>
