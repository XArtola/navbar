<?php

use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class ProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Models\Proyecto::class, 5)->create();
        DB::table('proyectos')->where('id', 1)->update(['empleado_id' => 2, 'fechafin'=>'2020-02-17']);
        DB::table('proyectos')->where('id', 2)->update(['empleado_id' => 8]);
        DB::table('proyectos')->where('id', 3)->update(['empleado_id' => 4, 'fechafin'=>'2021-12-31']);
        DB::table('proyectos')->where('id', 4)->update(['empleado_id' => 1]);
        DB::table('proyectos')->where('id', 5)->update(['empleado_id' => 6]);

        /*
        $fecha = date('Y/m/d');
  
        for ($i=0;$i<5;$i++) {
            $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
            $fechainicio = date ( 'Y/m/d' , $fechainicio);
      
            $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
            $fechafin = date ( 'Y/m/d' , $fechafin );
             Proyecto::insert([
                'nombre' => Str::random(10),
                'titulo' => Str::random(20),
                'fechainicio' => $fechainicio,
                'fechafin'  => $fechafin,
                'horasestimadas' => rand(500,3000)
            ]);
        }*/
    }

    public function down()
    { }
}
