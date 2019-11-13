<?php

use Illuminate\Database\Seeder;
use app\Models\Departamento;
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
               'name' => 'Zapatos negros',
               'description' => 'Zapatos negros de cuero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis pharetra ipsum, varius commodo risus. Curabitur porta, velit quis viverra accumsan, mauris metus varius ipsum, sed faucibus dui nisi et felis. Fusce dignissim mauris a elementum mattis. Nulla interdum erat eget lorem volutpat efficitur.',
               'stock' => '15',
               'price' => '39.95',
               'photo' => '1.jpg',
               'link' => 'https://www.youtube.com/embed/WWJtZSaSd7M',
               'language' => 'multi',
               'shopId' => '1'
           ],
    }
}
