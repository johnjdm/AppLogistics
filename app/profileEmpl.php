<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class profileEmpl extends Model
{
  protected $table = 'profile_empl';

  protected $fillable = [
      'users_id', 'nombres', 'primer_apellido', 'segundo_apellido', 'cedula', 'fecha_nacimiento', 'genero', 'fecha_ingreso',
      'numero_empleado', 'cargo', 'jefe', 'zona', 'municipio', 'departamento', 'ventas2019', 'imagen', 'cell_phone',
  ];

}
