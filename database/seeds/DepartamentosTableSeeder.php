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

        ]);
    }
}
