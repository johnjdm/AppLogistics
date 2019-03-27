<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
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
      //Consulta a la Database con relacion al ID en la Table users.
      $user = \DB::table('users')->where( \DB::raw('id'), '=', $userId)->get();
      //Aquí recorre los datos del Usuario para guardarlos en las variables y enviarlos a la vista.
      foreach ($user as $rows) {
               $dataChargen = [
               'full_name_user'   => $rows->name,
               'email_user'       => $rows->email
               ];
            }

      $dataUser = [
                "name"   => $dataChargen['full_name_user'],
                "email"  => $dataChargen['email_user']
             ];

      return view('profile.index', compact('dataUser'));
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

    public function updateUser() {

      $userId = \Auth::user()->id;
      $user = User::find($userId);

      if(isset($_GET['nombre'])) {
        $user->name = $_GET['nombre'];
      }

      //if(isset($_GET['clave'])) {
      //  $user->password = Hash::make($_GET['clave']);
      //}
      $user->update();
      echo json_encode(array("status"=>"OK"));
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
