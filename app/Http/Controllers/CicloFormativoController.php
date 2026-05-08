<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCicloFormativoRequest;
use App\Http\Requests\UpdateCicloFormativoRequest;
use App\Models\CicloFormativo;
use Illuminate\Http\Request;

class CicloFormativoController extends Controller
{

    /* Muestra el listado de ciclos formativos con opciones de búsqueda y filtrado con paginación*/

    public function index( Request $request)
    {

        $buscar=$request->buscar;
        $grado = $request->grado;

        //inicia consulta con Eloquent ORM
        $query = CicloFormativo::query();

        //Busqueda por nombre, usa LIKE para coincidencias parciales
        if ($buscar) {
            $query-> where('nombre', 'LIKE',"%{$buscar}%");
        }

        //Filtrar por grado
        if($grado) {
            $query ->where('grado', $grado);
        }

        //Recupera los resultados, paginación 2 ya que tengo 3 ciclos
        $ciclos = $query -> paginate(2);
        return view ('ciclos.index', compact('ciclos', 'buscar', 'grado'));
    }

    // Muestra el formulario para crear un Nuevo ciclo formativo.
    public function create()
    {
        return view('ciclos.create');
    }

    // Almacena un Nuevo ciclo en la base de datos. Usamos StoreCicloFormativoRequest para validar datos antes de insertar.
    public function store(StoreCicloFormativoRequest $request)
    {
        CicloFormativo::create($request->all());
        return redirect()->route('ciclos.index')
        ->with('success','Ciclo creado correctamente.');// con esto guardamos el mensaje en la sesión
    }

    public function show(CicloFormativo $cicloFormativo)
    {
        //
    }

    //Muestra el formulario para editar un ciclo ya existente.
    public function edit(CicloFormativo $ciclo)
    {
        return view('ciclos.edit', compact('ciclo'));
    }

    //Actualiza un ciclo ya existente. Valida los datos con UpdateCicloFormativoRequest.
    public function update(UpdateCicloFormativoRequest $request, CicloFormativo $ciclo)
    {
        $ciclo->update($request->all());
        return redirect()->route('ciclos.index')
        ->with('success','Ciclo actualizado correctamente.');// con esto guardamos el mensaje en la sesión
    }

    //Elimina un Ciclo ya existente.
    public function destroy(CicloFormativo $ciclo)
    {
        $ciclo->delete();
        return redirect()->route('ciclos.index')
        ->with('success','Ciclo eliminado correctamente.');// con esto guardamos el mensaje en la sesión
    }
}
