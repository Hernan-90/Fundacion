<?php

namespace App\Http\Controllers;

use App\Legislador;
use Illuminate\Http\Request;

class LegisladorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
        "nombre" => "string|min:1",
        "apellido" => "string|min:1",
        "email" => "string|email",
        "telefono" => "numeric|min:8",
        "direccion" => "string|min:1|max:255",
        "pais" => "string|min:1",
        "votos" => "numeric|min:1",
        "partido" => "nullable"
      ];
      $messages = [
        "string" => "(debe ser texto)",
        "numeric" => "(debe ser numerico)",
        "email" => "(debe contener un @)",
        // "unique" => "El campo :attribute se encuenta repetido en la base",
        "min" => "(debe tener un minimo de :min caracteres)",
        "max" => "(debe tener un maximo de :max caracteres)"
      ];
      $this->validate($request, $rules, $messages);

      $Legislador = new Legislador;

      $Legislador->nombre = $request['nombre'];
      $Legislador->apellido = $request['apellido'];
      $Legislador->email = $request['email'];
      $Legislador->telefono = $request['telefono'];
      $Legislador->direccion = $request['direccion'];
      $Legislador->pais = $request['pais'];
      $Legislador->votos = $request['votos'];
      $Legislador->partido = $request['partido'];
      $Legislador->mandato = $request['mandato'];
      $Legislador->auto = $request['auto'];

      $Legislador->save();
      return redirect('/gracias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Legislador  $legislador
     * @return \Illuminate\Http\Response
     */
    public function show(Legislador $legislador)
    {
      $Legisladores = Legislador::all();
      return view('listado',compact('Legisladores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Legislador  $legislador
     * @return \Illuminate\Http\Response
     */
    public function edit(Legislador $legislador, $id)
    {
        $LegisladorAEditar = Legislador::find($id);
        return view("editarLegislador", compact("LegisladorAEditar"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Legislador  $legislador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $rules = [
        "nombre" => "string|min:1",
        "apellido" => "string|min:1",
        "email" => "string|email",
        "telefono" => "numeric|min:8",
        "direccion" => "string|min:1|max:255",
        "pais" => "string|min:1",
        "votos" => "numeric|min:1",
        "partido" => "nullable"
      ];
      $messages = [
        "string" => "(debe ser texto)",
        "numeric" => "(debe ser numerico)",
        "email" => "(debe contener un @)",
        // "unique" => "El campo :attribute se encuenta repetido en la base",
        "min" => "(debe tener un minimo de :min caracteres)",
        "max" => "(debe tener un maximo de :max caracteres)"
      ];

      $this->validate($request, $rules, $messages);

      $legislador = Legislador::find($request->id);
      $legislador->nombre = $request['nombre'];
      $legislador->apellido = $request['apellido'];
      $legislador->email = $request['email'];
      $legislador->telefono = $request['telefono'];
      $legislador->direccion = $request['direccion'];
      $legislador->pais = $request['pais'];
      $legislador->votos = $request['votos'];
      $legislador->partido = $request['partido'];
      $legislador->mandato = $request['mandato'];
      $legislador->auto = $request['auto'];

      $legislador->save();
      return redirect('/gracias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Legislador  $legislador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Legislador $legislador)
    {
        //
    }

    public function delete(Request $request)
    {
        $LegisladorBorrado = Legislador::find($request->id);
        $LegisladorBorrado->delete();
        return redirect('/listado');
    }
}
