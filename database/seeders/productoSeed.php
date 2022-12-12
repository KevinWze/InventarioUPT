<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\productosModel;

class productoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre = ['Producto 1','Producto 2','Producto 3','Producto 4','Producto 5'];
        $descripcion = ['Descripcion 1','Descripcion 2','Descripcion 3','Descripcion 4','Descripcion 5'];
        $precio = ['100','200','300','400','500'];
        $unidades = ['10','20','30','40','50'];
        foreach ($nombre as $key => $value) {
            $producto = new productosModel();
            $producto->nombre = $value;
            $producto->descripcion = $descripcion[$key];
            $producto->precio = $precio[$key];
            $producto->unidades = $unidades[$key];
            $producto->save();
        }
    }
}
