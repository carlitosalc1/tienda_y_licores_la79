<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('empleado.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(empleado $empleado)
    {
        //
        /*$datosEmpleado = request()->all();*/
        $datosEmpleado = request()->except('_token');
        if(request->hash_file('Foto')){
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Empleados::insert($datosEmpleado);
        return response()->json($datosEmpleado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(empleado $empleado)
    {
        //
    }
}
