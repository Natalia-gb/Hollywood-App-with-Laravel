<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Character;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function verPeliculas($idPelicula){
        $film = Film::find($idPelicula);
        return view('verPeliculas', ['film' => $film]);
    }
}
