@extends('plantilla')

@section('contenido')
  <h1>REGISTRA TUS DATOS</h1>
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="nombreC">
        <label for="name" class="nombre">Nombre:
          @error('name')
            <span class="invalid-feedback" role="alert">
              <small>{{ $message }}</small>
            </span>
          @enderror
        </label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    </div>
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
    <div class="passwordC">
        <label for="password-confirm" class="password">Confirm Password:</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
    <div class="btn-registerC">
            <button type="submit" class="btn-register">
                {{ __('Register') }}
            </button>
    </div>
  </form>
@endsection
