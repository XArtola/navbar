<?php

use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Models\Empleado::class,1000)->create();
        /*
        Empleado::insert([

            [
                'nombre' => 'Xabier',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'A',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'B',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'C',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'D',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'E',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'F',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'G',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'H',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099',
                'departamento_id' => 1
            ],
            [
                'nombre' => 'I',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099',
                'departamento_id' => 1
            ]

        ]);

        */
    }
}
