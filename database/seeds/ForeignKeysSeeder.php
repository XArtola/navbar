<?php

use Illuminate\Database\Seeder;

class ForeignKeysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Para evitar errores de referencia se insertan los campos con clave foranea en este seeder
        //Id del empleado que dirige cada departamento
        DB::table('departamentos')->where('id', 1)->update(['jefe_id' => 7]);
        DB::table('departamentos')->where('id', 2)->update(['jefe_id' => 3]);
        DB::table('departamentos')->where('id', 3)->update(['jefe_id' => 5]);

        //Id del departamento al que pertenece cada empleado
        DB::table('empleados')->where('id', 1)->update(['departamento_id' => 1]);
        DB::table('empleados')->where('id', 2)->update(['departamento_id' => 1]);
        DB::table('empleados')->where('id', 3)->update(['departamento_id' => 2]);
        DB::table('empleados')->where('id', 4)->update(['departamento_id' => 2]);
        DB::table('empleados')->where('id', 5)->update(['departamento_id' => 3]);
        DB::table('empleados')->where('id', 6)->update(['departamento_id' => 3]);
        DB::table('empleados')->where('id', 7)->update(['departamento_id' => 1]);
        DB::table('empleados')->where('id', 8)->update(['departamento_id' => 2]);
        DB::table('empleados')->where('id', 9)->update(['departamento_id' => 3]);
        DB::table('empleados')->where('id', 10)->update(['departamento_id' => 1]);
    }
}
