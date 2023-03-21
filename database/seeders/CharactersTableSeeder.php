<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Character;
use Illuminate\Support\Facades\DB;


class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Character::truncate();
        DB::table('characters')->insert([
            'idPelicula' => '1',
            'idActor' => '1',
            'personaje' => 'Vito Corleone',
            'minutosEscena' => '255'
        ]);

        DB::table('characters')->insert([
            'idPelicula' => '3',
            'idActor' => '2',
            'personaje' => 'Mitch Buchannon',
            'minutosEscena' => '200'
        ]);

        DB::table('characters')->insert([
            'idPelicula' => '2',
            'idActor' => '3',
            'personaje' => 'Debbie Ocean',
            'minutosEscena' => '150'
        ]);

        DB::table('characters')->insert([
            'idPelicula' => '4',
            'idActor' => '4',
            'personaje' => 'Ian Shaw',
            'minutosEscena' => '223'
        ]);
    }
}
