<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $primaryKey = 'idPelicula';

    public function actors(){
        return $this->belongsToMany('App\Models\Actor', 'characters', 'idPelicula', 'idActor');
    }

    public function roles(){
        return $this->hasMany('App\Models\Character', 'idPelicula');
    }
}
