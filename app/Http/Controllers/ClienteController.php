<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['clientes'] = Cliente::paginate(7);
        return view('cliente.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cliente.create');
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

        $datosCliente = request()->except('_token');
        Cliente::insert($datosCliente);
        return redirect('cliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cliente=cliente::findorfail($id);
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCliente = request()->except(['_token','_method']);
        cliente::where('id','=',$id)->update($datosCliente);

        $cliente=cliente::findorfail($id);
        return redirect('cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        cliente::destroy($id);
        return redirect('cliente');
    }
}
