<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    
    public function index()
    {
        //
        $datos['user'] = User::paginate(4);
        return view('user.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate( [
            'tipo_identificacion'=>'required|string|max:20',
            'numero_identificacion'=>'required|string|max:20',
            'nombre'=>'required|string|max:20',
            'apellido'=>'required|string|max:15',
            'direccion'=>'required|string|max:15',
            'telefono'=>'required|string|max:16',
            'correo'=>'required|email',

        ]);
       
       
          $datosUser = request()->except('_token');          
        User::insert($datosUser);
        return redirect('user');

    }
          


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::findorfail($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate( [
            'tipo_identificacion'=>'required|string|max:20',
            'numero_identificacion'=>'required|string|max:20',
            'nombre'=>'required|string|max:20',
            'apellido'=>'required|string|max:15',
            'direccion'=>'required|string|max:15',
            'telefono'=>'required|string|max:16',
            'correo'=>'required|email',

        ]);
        $datosUser = request()->except(['_token','_method']);
        User::where('id','=',$id)->update($datosUser);

        $datosUser=usero::findorfail($id);
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        user::destroy($id);
        return redirect('user');
    }
}
