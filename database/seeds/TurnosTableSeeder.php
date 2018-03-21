<?php

use Illuminate\Database\Seeder;
use App\Turno;
class TurnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //
    	$turnos = array(
    		['descripcion' => 'Matutino'],
    		['descripcion' => 'Vespertino'],
    		['descripcion' => 'Nocturno'],
    		['descripcion' => 'Jornada Acumulada'],
    		['descripcion' => 'Especiales'],
    		['descripcion' => 'Sabado']
    		);
    	foreach ($turnos as $turno) {
    		Turno::create($turno);
    	}
    }
}
