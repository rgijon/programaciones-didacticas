<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCicloFormativoRequest;
use App\Http\Requests\UpdateCicloFormativoRequest;
use App\Models\CicloFormativo;
use Illuminate\Http\Request;

class CicloFormativoController extends Controller
{
    /*public function index()
    {
        $ciclos = CicloFormativo::paginate(2);
        return view('ciclos.index', compact('ciclos'));
    }*/

    public function index( Request $request)
    {
        $buscar = $request->buscar;

        $ciclos = CicloFormativo::where('nombre', 'LIKE', "%{$buscar}%") //Busqueda por nombre
        ->paginate(2); //Mantenemos paginate en 2 para que aparezca la paginación, ya que tenemos 3 ciclos registrados.

        return view ('ciclos.index', compact('ciclos', 'buscar'));
    }

    public function create()
    {
        return view('ciclos.create');
    }

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

    public function edit(CicloFormativo $ciclo)
    {
        return view('ciclos.edit', compact('ciclo'));
    }

    public function update(UpdateCicloFormativoRequest $request, CicloFormativo $ciclo)
    {
        $ciclo->update($request->all());
        return redirect()->route('ciclos.index')
        ->with('success','Ciclo actualizado correctamente.');// con esto guardamos el mensaje en la sesión
    }

    public function destroy(CicloFormativo $ciclo)
    {
        $ciclo->delete();
        return redirect()->route('ciclos.index')
        ->with('success','Ciclo eliminado correctamente.');// con esto guardamos el mensaje en la sesión
    }
}
