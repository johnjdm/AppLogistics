<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\profileEmplStoreRequest;
use App\User;
use App\profileEmpl;

class UserEmplController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profilesEmpl = profileEmpl::paginate(15);

        return view('profilesEmpl.index', compact('profilesEmpl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users   = User::orderBy('email', 'ASC')->pluck('email', 'id');

        return view('profilesEmpl.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(profileEmplStoreRequest $request)
    {
        //Captura todos los Datos con Request y crea el Perfil
        $profileEmpl = profileEmpl::create($request->all());

        return redirect()->route('profilesEmpl.index', $profileEmpl->id)
            ->with('info', 'Usuario Empleado guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profileEmpl = profileEmpl::find($id);

        return view('profilesEmpl.show', compact('profileEmpl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Aaui captura todos los Datos con relacion al ID
        $profileEmpl = profileEmpl::find($id);

        return view('profilesEmpl.edit', compact('profileEmpl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profileEmpl = profileEmpl::find($id);
        $profileEmpl->update($request->all());

        return redirect()->route('profilesEmpl.edit', $profileEmpl->id)
            ->with('info', 'El Perfil del usuario se actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Aaui elimina el Usuario Empleado con relacion al ID enviado desde el Boton
        $profileEmpl = profileEmpl::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente el Perfil del Empleado');
    }
}
