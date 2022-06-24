<header class="gb-container">
    <div class="logo">
        <a href="{{route('home')}}">
            <img width="200px" src="{{asset('img/boolflix-logo.png')}}" alt="Logo">
        </a>
    </div>

    <nav>
      <ul class="d-flex m-0">
        <li>
          <a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">home</a>
          <a class="{{Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{route('about')}}">chi siamo</a>
          <a class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">movies</a>
          <a class="{{Route::currentRouteName() === 'contacts' ? 'active' : ''}}" href="{{route('contacts')}}">contatti</a>
        </li>
      </ul>
    </nav>
</header>
