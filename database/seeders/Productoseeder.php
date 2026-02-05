<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\producto;

class Productoseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'Nombre'=> 'Harina',
            'Precio'=> 50.72,
            'Stock'=> 30,
            'Descripcion'=> 'harina de maiz precosida',
        ]);
        
        Producto::create([
            'Nombre'=> 'Arroz',
            'Precio'=> 45.72,
            'Stock'=> 30,
            'Descripcion'=> 'Arroz seleccionado',
        ]);

        Producto::create([
            'Nombre'=> 'Azucar',
            'Precio'=> 60.85,
            'Stock'=> 30,
            'Descripcion'=> 'Azucar de caña',
        ]);

        Producto::create([
            'Nombre'=> 'Cafe',
            'Precio'=> 80.23,
            'Stock'=> 30,
            'Descripcion'=> 'Granos de cafe selecionados',
        ]);
    }
}
