<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\usuarioModel;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre = ['Usuario 1','Usuario 2','Usuario 3','Usuario 4','Usuario 5'];
        $apellido = ['Apellido 1','Apellido 2','Apellido 3','Apellido 4','Apellido 5'];
        $email = ['Hola@gmail.com','user@gmail.com','user2@gmail.com','user3@gmail.com','user4@gmail.com'];
        $password = ['123456','123456','123456','123456','123456'];
        foreach ($nombre as $key => $value) {
            $usuario = new usuarioModel();
            $usuario->nombre = $value;
            $usuario->apellido = $apellido[$key];
            $usuario->email = $email[$key];
            $usuario->password = $password[$key];
            $usuario->save();
        }
    }
}
