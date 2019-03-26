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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
