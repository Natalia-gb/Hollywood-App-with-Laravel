<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Film;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Film::truncate();
        DB::table('films')->insert([
            'nombre' => 'El padrino',
            'duracion' => '3',
            'anio' => '1972-03-05',
            'genero' => 'Mafia'
        ]);

        DB::table('films')->insert([
            'nombre' => 'Ocean"s eight',
            'duracion' => '2',
            'anio' => '2018-12-11',
            'genero' => 'Películas de robos'
        ]);

        DB::table('films')->insert([
            'nombre' => 'Baywatch',
            'duracion' => '2',
            'anio' => '2017-05-27',
            'genero' => 'Comedia cinematográfica, Género de acción, Drama'
        ]);

        DB::table('films')->insert([
            'nombre' => 'Fast and Furious 9',
            'duracion' => '2',
            'anio' => '2021-06-25',
            'genero' => 'Acción, aventuras, crimen, suspenso'
        ]);

    }
}
