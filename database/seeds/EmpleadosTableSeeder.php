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
        Empleado::insert([

            [
                'nombre' => 'Xabier',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099'
            ],
            [
                'nombre' => 'A',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099'
            ],
            [
                'nombre' => 'B',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099'
            ],
            [
                'nombre' => 'C',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099'
            ],
            [
                'nombre' => 'D',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099'
            ],
            [
                'nombre' => 'E',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099'
            ],
            [
                'nombre' => 'F',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099'
            ],
            [
                'nombre' => 'G',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099'
            ],
            [
                'nombre' => 'H',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099'
            ],
            [
                'nombre' => 'I',
                'apellido' => 'Artola',
                'email' => 'a@a.com',
                'telefono' => '943362099'
            ]

        ]);
    }
}
