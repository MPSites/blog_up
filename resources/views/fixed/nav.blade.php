<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>  
<!-- ***** Preloader End ***** -->

<!-- Header -->
<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="{{ route('posts') }}"><h2>Blog<em>.</em>up</h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto"> 

          <li class="nav-item">
            <a class="nav-link" href="{{ route('posts') }}">blog entries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">contact</a>
          </li>

          @auth
            <li class="nav-item">
              <a class="nav-link" href="{{ route('users.posts', auth()->user())}}">{{ auth()->user()->username }}</a>
            </li>

            <li class="nav-item">
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="nav-link lg-btn">Logout</button>
              </form>
            </li>
          @endauth

          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
</header>