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
        $datos['proveedores'] = Proveedor::paginate(7);
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
        $request->validate([
            'nombre'=>'required|string|max:20',
            'apellido'=>'required|string|max:20',
            'razon_social'=>'required|string|max:20',
            'nit'=>'required|string|max:20',
            'direccion'=>'required|string|max:25',
            'telefono'=>'required|string|max:15',
            'correo'=>'required|email',

        ]);
        // $this->validate($request);
       
          $datosProveedor = request()->except('_token');

           
        Proveedor::insert($datosProveedor);
        return redirect('proveedor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
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
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate( [
            'nombre'=>'required|string|max:20',
            'apellido'=>'required|string|max:20',
            'razon_social'=>'required|string|max:20',
            'nit'=>'required|string|max:20',
            'direccion'=>'required|string|max:15',
            'telefono'=>'required|string|max:15',
            'correo'=>'required|email',

        ]);

        $datosProveedor = request()->except(['_token','_method']);
        proveedor::where('id','=',$id)->update($datosProveedor);

        $proveedor=proveedor::findorfail($id);
        return redirect('proveedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Proveedor::destroy($id);
        return redirect('proveedor');
    }
}
