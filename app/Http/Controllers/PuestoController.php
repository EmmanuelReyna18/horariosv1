<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{

    public function index()
    {
        $puestos= Puesto::paginate(5);
        return view("Puestos/index",compact("puestos"));

    }


    public function create()
    {

        $puestos= Puesto::paginate(5);
        return view("Puestos/create",compact("puestos"));
    }

 
    public function store(Request $request)
    {
        Puesto::create($request->all());
        return redirect()->route('Puestos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Puesto $puesto)
    {
        $puestos=Puesto::Paginate(5);
        return view("Puestos.show",compact('puestos','puesto'));
    }

   
    public function edit(Puesto $puesto)
    {
        $puestos=Puesto::Paginate(5);
        return view("Puestos.edit",compact('puestos','puesto'));
    }

    
    public function update(Request $request, Puesto $puesto)
    {
        $puesto->update($request->all());
        return redirect()->route('Puestos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Puesto $puesto)
    {
        $puesto->delete();
        return redirect()->route('Puestos.index');
    }
}
