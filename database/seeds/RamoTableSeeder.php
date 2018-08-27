<?php

use Illuminate\Database\Seeder;

class RamoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $registro = new \App\Ramo();
		$registro->nome = 'Informática';
		$registro->save();
       
        $registro = new \App\Ramo();
		$registro->nome = 'Construção Civil';
		$registro->save();
       
        $registro = new \App\Ramo();
		$registro->nome = 'Alimentício';
		$registro->save();
    }
}
