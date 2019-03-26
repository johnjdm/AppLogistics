<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileEmplTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_empl', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('users_id')->unsigned()->index();
            $table->foreign('users_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('nombres');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('cedula', 40)->nullable()->unique();
            $table->date('fecha_nacimiento');
            $table->string('genero');
            $table->date('fecha_ingreso');
            $table->string('numero_empleado', 40)->nullable()->unique();
            $table->string('cargo');
            $table->string('jefe', 40)->nullable()->unique();
            $table->string('zona');
            $table->string('municipio');
            $table->string('departamento');
            $table->string('ventas2019');      
            $table->string('imagen', 128)->nullable();
            $table->string('cell_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_empl');
    }
}
