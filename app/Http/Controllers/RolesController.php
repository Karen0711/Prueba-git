<?php

namespace App\Http\Controllers;

use App\roles;
use Illuminate\Http\Request;
use App;


class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
       
        $roles = Roles::paginate(3); 
        //dd($roles);
        return view ('Roles', compact('roles'));
        

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rolAgregar = new Roles;
        $rolAgregar->nombre = $request->nombre;
        $rolAgregar->save();
        return back()->with('agregar','El rol se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show(roles $roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rolesActualizar = App\Roles::findOrFail($id);
        return view('editar',compact('rolesActualizar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rolUpdate = App\Roles::findOrFail($id);
        $rolUpdate->nombre = $request->nombre;
        $rolUpdate->save();
        return back()->with('update', 'El rol ha sido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rolEliminar = App\Roles::findOrFail($id);
        $rolEliminar->delete();
        return back()->with('eliminar', 'El rol ha sido eliminado correctamente');
    }
}
