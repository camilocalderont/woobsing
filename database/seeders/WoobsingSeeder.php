<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class WoobsingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('rols')->insert([
            [
                'id' => 1,
                'nombre' => 'admin',
            ],
            [
                'id' => 2,
                'nombre' => 'cliente',
            ]            
        ]);

        DB::table('permisos')->insert([
            [
                'id' => 1,
                'permiso' => 'Permiso 1',
            ],
            [
                'id' => 2,
                'permiso' => 'Permiso 2',
            ],  
            [
                'id' => 3,
                'permiso' => 'Permiso 3',
            ]                    
        ]);        


        DB::table('rol_permisos')->insert([
            [
                'idRol' => 1,
                'idPermiso' => 1,
            ],
            [
                'idRol' => 1,
                'idPermiso' => 2,
            ],
            [
                'idRol' => 2,
                'idPermiso' => 3,
            ],
            [
                'idRol' => 2,
                'idPermiso' => 1,
            ],                                                      
        ]);           



        DB::table('users')->insert([
            [
                'name' => 'cantinflas',
                'email' => 'cantinflas@gmail.com',
                'password' => Hash::make('password'),
                'nombre'=>'Mario',
                'apellido'=>'Moreno',
                'correo'=>'cantinflas@gmail.com',
                'telefono'=>'1234567',
                'idRol'=>1
            ],
            [
                'name' => 'chaplin',
                'email' => 'chaplin@gmail.com',
                'password' => Hash::make('password'),
                'nombre'=>'Charles',
                'apellido'=>'Chaplin',
                'correo'=>'chaplin@gmail.com',
                'telefono'=>'98765432',
                'idRol'=>1                
            ],
            [
                'name' => 'camilocalderont',
                'email' => 'camilocalderont@gmail.com',
                'password' => Hash::make('password'),
                'nombre'=>'Camilo',
                'apellido'=>'Calderon',
                'correo'=>'camilocalderont@gmail.com',
                'telefono'=>'1012383991',
                'idRol'=>2                
            ],            
            
        ]);

    }
}
