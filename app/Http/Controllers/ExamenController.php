<?php

namespace App\Http\Controllers;

use App\Models\Examen;

use Illuminate\Http\Request;

class ExamenController extends Controller
{
    //
    public function index()
    {
        $por_pagina = 10; // Cambia este valor según tus necesidades
        $examenes = Examen::paginate($por_pagina); // Asegúrate de usar paginate()
        return view('examen.index', compact('examenes')); // Aquí estamos pasando la variable 'examenes'
    }
    
    

    public function create(Request $request)
    {

        return view('examen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
        ]);
        Examen::create($request->all());
        return redirect()->route('examen.index')->with('success', 'Examen creado exitosamente.');
    }

    public function show($id)
    {
        $examen = Examen::findOrFail($id);
        return view('examen.show', compact('examen'));
    }
    

    public function edit($id)
    {
        $examen = Examen::findOrFail($id);
        return view('examen.edit', compact('examen'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
        ]);
    
        Examen::find($id)->update($request->all());
    
        return redirect()->route('examen.index')->with('success', 'Examen actualizado correctamente');
    }
    

    public function destroy(Examen $examen,$id)
    {
        $examen = Examen::findOrFail($id);
        $examen->delete();
        return redirect()->route('examen.index')->with('success', 'Examen eliminado correctamente');
    }

}
