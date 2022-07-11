<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nombre',191);
            $table->string('apellido',191);
            $table->string('correo',191);
            $table->string('telefono',191);
            $table->bigInteger('idRol')->unsigned();
            $table->foreign('idRol','fk_usuario_a_rol')->references('id')->on('rols');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nombre');
            $table->dropColumn('apellido');
            $table->dropColumn('correo');
            $table->dropColumn('telefono');
            $table->dropForeign('fk_usuario_a_rol');
            $table->dropColumn('idRol');
        });

   
    }
};
