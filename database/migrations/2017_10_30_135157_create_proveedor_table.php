<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('proveedor', 100);
            //$table->char('dni', 8);
            $table->string('empresa', 70);
            $table->char('ruc', 11);
            $table->string('direccion', 80);
            $table->string('telefono', 15);
            $table->string('correo', 50);
            $table->date('fecha_ingreso');
            $table->string('descripcion', 100);
            $table->string('estado', 30);
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
        Schema::dropIfExists('proveedor');
    }
}
