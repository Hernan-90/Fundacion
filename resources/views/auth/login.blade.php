@extends('plantilla')

@section('contenido')
  <h1>INGRESA CON TUS CREDENCIALES</h1>
  <form class="login" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="emailC">
        <label for="email" class="email">Direccion de e-mail:
          @error('email')
            <span class="invalid-feedback" role="alert">
              <small>{{ $message }}</small>
            </span>
          @enderror
        </label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    </div>
    <div class="passwordC">
        <label for="password" class="password">Password:
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    </div>
    <div class="rememberC">
        <input class="checked" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="" for="remember">Remember Me</label>
    </div>
    <div class="btn-loginC">
            <button type="submit" class="btn-login">
                {{ __('Login') }}
            </button>
            @if (Route::has('password.request'))
                <a class="forgot" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
    </div>
  </form>
@endsection
