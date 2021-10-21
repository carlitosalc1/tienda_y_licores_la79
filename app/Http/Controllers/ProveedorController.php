<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['proveedores'] = Proveedor::paginate(8);
        return view('proveedor.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proveedor.create');
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
            'Nombre'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Razon Social'=>'required|string|max:100',
            'Nit'=>'required|string|max:100',
            'Direccion'=>'required|string|max:100',
            'Correo'=>'required|string|max:100',
            'Telefono'=>'required|email',

        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
        ];
        $this->validate($request, $campos,$mensaje);

        $datosProveedor = request()->except('_token');
        Proveedor::insert($datosProveedor);
        return redirect('proveedor');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $proveedor=proveedor::findorfail($id);
        return view('proveedor.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosProveedor = request()->except(['_token','_method']);
        proveedor::where('id','=',$id)->update($datosProveedor);

        $proveedor=proveedor::findorfail($id);
        return redirect('proveedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        proveedor::destroy($id);
        return redirect('proveedor');
    }
}
