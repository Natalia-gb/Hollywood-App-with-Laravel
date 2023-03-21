<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ActorController extends Controller
{
    public function index(){
        //$actors = DB::table('actors')->get();
        $actors = Actor::all();
        Session::put('actors', $actors);
        //Session::get('actors');
        return view('ActorView');
    }

    public function verID(){
        $id = request('id');
        return view('ver', ['id' => $id]);
    }

    public function verActor(){
        $id = request("id");
        $actor = Actor::find($id);
        return view('ver', ['actor' => $actor]);
    }

    public function verGET($id){
        $actor = Actor::find($id);
        // $films = $actor->films;
        $roles = $actor->roles;
        return view('ver', ['actor' => $actor, 'roles' => $roles]);
    }

    public function borrar(){
        $id = request('id');
        Actor::destroy($id);
        return redirect()->action([ActorController::class, 'index']);
    }

    public function editar(){
        $id = request("id");
        $actorEditar = Actor::find($id);
        return view('editar', compact('actorEditar'));
    }

    public function editarGET($id){
        $idActor = Actor::find($id);
        return view('editar', compact('idActor'));
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required|string',
            'nacionality' => 'required|string',
            'date_of_birthday' => 'required|date',
            'years_of_experience' => 'required|integer'
        ]);

        $id = request('id');
        $name = request('name');
        $nacionality = request('nacionality');
        $date_of_birthday = request('date_of_birthday');
        $years_of_experience = request('years_of_experience');

        Actor::where('id', $id)->update([
            'name' => $name,
            'nacionality' => $nacionality,
            'date_of_birthday' => $date_of_birthday,
            'years_of_experience' => $years_of_experience
        ]);

        return redirect()->action([ActorController::class, 'index']);
    }

    public function crear(){
        return view('crear');
    }


    public function actualizadoCrear(Request $request){
        $request->validate([
            'name' => 'required|string',
            'nacionality' => 'required|string',
            'date_of_birthday' => 'required|date',
            'years_of_experience' => 'required|integer'
        ]);
        Actor::create($request->all());
        return redirect()->action([ActorController::class, 'index']);
    }

    public function ordenarASC(){
        $actors = Actor::orderBy('name', 'ASC')->get();
        return view('ActorView', ['actors' => $actors]);
    }

    public function ordenarDESC(){
        $actors = Actor::orderBy('name', 'DESC')->get();
        return view('ActorView', ['actors' => $actors]);
    }

}
