<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profileEmpl;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\DB;

class profileSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Aqui adquiere el ID que se encuentra Logueado
        $userId = \Auth::user()->id;
        //Consulta a la Database con relacion al ID en la Table profile_empl.
        $profileEmpl = profileEmpl::find($userId);

        //Capturo el Numero del Empleado Logueado
        $numEmpl = $profileEmpl->numero_empleado;
        //Para Luego consultar en la tabla que empleados estan dentro de la supervision
        $profileSales = \DB::table('profile_empl')->where( \DB::raw('jefe'), '=', $numEmpl)->get();
        $sumVentas = \DB::table('profile_empl')->where( \DB::raw('jefe'), '=', $numEmpl)->sum('ventas2019');
        //Capturo el Numero del Empleado Jefe
        $numJefe = $profileEmpl->jefe;
        //Para Luego consultar en la tabla que empleados estan dentro de la supervision
        $profileJefe = \DB::table('profile_empl')->where( \DB::raw('numero_empleado'), '=', $numJefe)->get();
        //dd($sumVentas);
        return view('profileSales.index', compact('profileEmpl','profileSales','profileJefe','sumVentas'));
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
        //
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

         return view('profileSales.show', compact('profileEmpl'));
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
