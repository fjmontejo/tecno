<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\User;
use Hash;


class PersonaController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $personas = Persona::all();
        

        return view('personas.index')
        ->with('personas', $personas);
    }

    public function create(Request $request)
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
    
       $persona = new Persona;
       $persona->nombre = $request->input('nombre');
       $persona->apellidos = $request->input('apellidos');
       $persona->edad = $request->input('edad');
       
       //Ahora creamos el usuario de la persona
       $usuario = new User;
       $usuario->name = $request->input('nombre').' '. $request->input('apellidos');
       $usuario->email = $request->input('email');
       $usuario->password = Hash::make($request->input('password'));
       $usuario->type_user = $request->input('type_user');  
       $usuario->save();
    
       $persona->user_id = $usuario->id;
       $persona->save();
         //return dd($persona);
        return redirect('/personas')->with('message', 'Persona registrada!');
       
    }

    public function edit($id)
    {
        $persona = Persona::find($id);

        return view('personas.edit')
        ->with('persona', $persona);
    }

    public function update($id, Request $request)
    {
       $persona = Persona::find($id);
       $persona->nombre = $request->input('nombre');
       $persona->apellidos = $request->input('apellidos');
       $persona->edad = $request->input('edad');
       $persona->save();

       return redirect('/personas')->with('message', 'Registro actualizado exitosamente!');
    }

    public function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->delete();

        return redirect('/personas')->with('message', 'Registro eliminado exitosamente!');
    }

}
