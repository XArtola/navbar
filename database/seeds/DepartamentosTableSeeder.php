<?php

use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Models\Departamento::class,3)->create();

        /*
        Departamento::insert([

            [
                'nombre' => 'Tecnologia',
            ],
            [
                'nombre' => 'Investigación',
            ],
            [
                'nombre' => 'Programación',
            ]

        ]);*/


    }

    
}
