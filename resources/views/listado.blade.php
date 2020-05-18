@extends('plantilla')

@section('contenido')
    <h1>LEGISLADORES</h1>
      <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Pais</th>
            <th>Cantidad de Votos</th>
            <th>Partido Politico</th>
            <th>Mandato</th>
            <th>Editar</th>
            <th>Borrar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($Legisladores as $legislador)
            <tr>
              <td>{{$legislador->nombre}}</td>
              <td>{{$legislador->apellido}}</td>
              <td>{{$legislador->email}}</td>
              <td>{{$legislador->telefono}}</td>
              <td>{{$legislador->pais}}</td>
              <td>{{$legislador->votos}}</td>
              <td>{{$legislador->partido}}</td>
              <td>{{$legislador->mandato}}</td>
              <td>
                <a href="/editarLegislador/{{$legislador->id}}">
                  <i class="fas fa-edit"></i>
                </a>
              </td>
              <td >
                <a id="borrar" href="/borrarLegislador/{{$legislador->id}}">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
@endsection
