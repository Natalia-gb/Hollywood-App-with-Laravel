<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = array('id','name', 'nacionality', 'date_of_birthday', 'years_of_experience');
    protected $primaryKey = 'id';
    
    public function films(){
        return $this->belongsToMany('App\Models\Film', 'characters', 'idPelicula', 'idActor');
    }

    public function roles(){
        return $this->hasMany('App\Models\Character', 'idActor');
    }
}
