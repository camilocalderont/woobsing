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
        Schema::create('rol_permisos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idRol')->unsigned();
            $table->foreign('idRol','fk_pivot_permisos_a_rol')->references('id')->on('rols');
            $table->bigInteger('idPermiso')->unsigned();
            $table->foreign('idPermiso','fk_pivot_rol_a_permisos')->references('id')->on('permisos');                        
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
        Schema::table('rol_permisos', function (Blueprint $table) {
            $table->dropForeign('fk_pivot_permisos_a_rol');
            $table->dropForeign('fk_pivot_rol_a_permisos');                        

        });        
        Schema::dropIfExists('rol_permisos');
    }
};
