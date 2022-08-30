<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class UserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //leer el archivo de datos
        $json=File::get('database/_data/users.json');
        //2.convertir los datoss de un arreglo
        $arreglo_usuarios= json_decode($json);
        //3recorrer el arreglo
        //var_dump($arreglo_usuarios);
        foreach($arreglo_usuarios as $usuario){
        //4.registra el usuario en bd
        // se utiliza el metoso ::create
           User::create([

                   "name" => $usuario->name,
                   "email" => $usuario->email,
                   "password" => Hash::make(
                                     $usuario->password
                    )    
           ]);

           }
    }
}
