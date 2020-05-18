@extends('plantilla')

@section('contenido')
  <h1>INGRESE LA INFORMACION SOLICITADA</h1>
      <form id="formu" class="" action="/" method="post">
        @csrf
        <div class="nombreC">
          <label class="nombre" for="">Nombre: <p>*</p>
            @error ('nombre')
              <small>{{ $message }}</small>
            @enderror
          </label>
          <input id="nombre" type="text" name="nombre" value="{{old('nombre')}}">
        </div>
        <div class="apellidoC">
          <label class="apellido" for="">Apellido: <p>*</p>
            @error ('apellido')
              <small>{{ $message }}</small>
            @enderror
          </label>
          <input id="apellido" type="text" name="apellido" value="{{old('apellido')}}">
        </div>
        <div class="emailC">
          <label class="email" for="">Email: <p>*</p>
            @error ('email')
              <small>{{ $message }}</small>
            @enderror
          </label>
          <input id="mail" type="email" name="email" value="{{old('email')}}">
        </div>
        <div class="telefonoC">
          <label class="telefono" for="">Teléfono: <p>*</p>
            @error ('telefono')
              <small>{{ $message }}</small>
            @enderror
          </label>
          <input id="telefono" type="text" name="telefono" value="{{old('telefono')}}">
        </div>
        <div class="direccionC">
          <label class="direccion" for="">Dirección:
            @error ('direccion')
              <small>{{ $message }}</small>
            @enderror
          </label>
          <input id="direccion" type="text" name="direccion" value="{{old('direccion')}}">
        </div>
        <div class="paisC">
          <label class="pais" for="">País: <p>*</p>
            @error ('pais')
              <small>{{ $message }}</small>
            @enderror
          </label>
          <input id="pais" type="text" name="pais" value="{{old('pais')}}">
        </div>
        <div class="votosC">
          <label class="votos" for="">Votos Obtenidos: <p>*</p>
            @error ('votos')
              <small>{{ $message }}</small>
            @enderror
          </label>
          <input id="votos" type="text" name="votos" value="{{old('votos')}}">
        </div>
        <div class="partidoC">
          <label class="partido" for="">Partido Político:</label>
          <select id="partido" class="" name="partido">
            <option value="auto">Elija una opcion</option>
            <option value="azul">Azul</option>
            <option value="rojo">Rojo</option>
            <option value="verde">Verde</option>
          </select>
        </div>
        <div class="mandatoC">
          <label class="mandato" for="">Mandato:<p>*</p></label>
          <input id="mandato" type="date" name="mandato" value="">
        </div>
        {{-- <label for="">Automático:</label> --}}
        <input id="auto" type="hidden" name="auto" value="">
        <div class="boton">
          <button id="btn" type="submit" name="button">Enviar</button>
        </div>
      </form>
@endsection
