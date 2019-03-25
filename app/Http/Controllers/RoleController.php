<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RolStoreRequest;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate();

        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolStoreRequest $request)
    {
        $name = request()->input('name');

        $role = \DB::table('roles')->select('name')->where( \DB::raw('name'), '=', $name)->get();

        if(count($role) == 0) {
          $role = Role::create($request->all());

          $role->permissions()->sync($request->get('permissions'));

          return redirect()->route('roles.edit', $role->id)
              ->with('info', 'Rol guardado con éxito');
        } else {
          return back()->with('warning', 'El nombre del Rol ya se encuentra registrado');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);

        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);

        $permissions = Permission::get();

        return view('roles.edit', compact('role', 'permissions'));
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
        $role = Role::find($id);
        //Se captura el Nombre del Rol en la variable $role_name correspondiente al Id
        $role_name = $role->name;

        //Nombre del Rol que se va Actualizar
        $name = request()->input('name');
        //Se consulta si se encuentra en la Base de Datos
        $rol = \DB::table('roles')->select('name')->where( \DB::raw('name'), '=', $name)->get();

        if(count($rol) == 0 | $role_name == $name) {
          $role->update($request->all());

          $role->permissions()->sync($request->get('permissions'));

          return redirect()->route('roles.edit', $role->id)
            ->with('info', 'El Rol fue actualizado con éxito');
        } else {
          return back()->with('warning', 'El nombre del Rol ya existe.');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente el Rol');
    }
    public function getRol($id)
    {
        $rolUser = DB::table('roles')->where('id', $id);

        return view('roles.slug', array(
            'slug' => $rolUser
        ));
    }

}
