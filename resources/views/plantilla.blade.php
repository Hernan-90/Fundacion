<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <title>Informacion de Legisladores</title>
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="menu">
          <a class="" href="{{ url('/') }}">Home</a>
          @auth
            <a class="" href="{{ url('/listado') }}">Listado de Legisladores</a>
          @endauth
        </div>
        @guest
          <div class="cuentas">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            @if (Route::has('register'))
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
            @else
              <div class="cuentas">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
          </div>
        @endguest
      </nav>
    </header>
    <main>
      @yield('contenido')
    </main>
    <footer>

    </footer>
    <script src="/js/Validaciones.js"></script>
  </body>
</html>
