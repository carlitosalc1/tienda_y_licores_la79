<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
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
        $datos['empleados'] = Empleado::paginate(4);
        return view('empleado.index',$datos);
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
        $campos=[
            'Tipo de identificacio'=>'required|string|max:100',
            'Numero de identificacion'=>'required|string|max:100',
            'Nombre'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Direccion'=>'required|string|max:100',
            'Telefono'=>'required|string|max:100',
            'Correo'=>'required|email',

        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
        ];
        $this->validate($request, $campos,$mensaje);

        //$datosEmpleado = request()->all();
          $datosEmpleado = request()->except('_token');

        //   if($request->hasFile('foto')){
        //       $datosEmpleado['foto']=$request->file('foto')->store('uploads','public');
        
        Empleado::insert($datosEmpleado);
        return redirect('empleado');

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
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado=empleado::findorfail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosEmpleado = request()->except(['_token','_method']);
        empleado::where('id','=',$id)->update($datosEmpleado);

        $empleado=empleado::findorfail($id);
        return redirect('empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        empleado::destroy($id);
        return redirect('empleado');
    }
}
