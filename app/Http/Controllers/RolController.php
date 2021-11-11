<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['roles'] = Rol::paginate(3);
        return view('rol.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('rol.create');
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
        $request->validate( [
            'nombre'=>'required|string|max:20',
           
        ]);
     
        $datosRol = request()->except('_token');
        Rol::insert($datosRol);
        return redirect('rol');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $rol = Rol::findorfail($id);
        return view('rol.edit', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate( [
            'nombre'=>'required|string|max:20',
        ]);

        $datosRol = request()->except(['_token','_method']);
        rol::where('id','=',$id)->update($datosRol);

        $rol=rol::findorfail($id);
        return redirect('rol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        rol::destroy($id);
        return redirect('rol');
    }
}
