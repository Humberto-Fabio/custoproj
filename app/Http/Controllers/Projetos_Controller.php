<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Projetos;

class Projetos_Controller extends Controller
{
    public function index() {
        $projetos = Projetos::all();
        return view('projetos.index',['projetos'=>$projetos]);
    }

    public function create() {
        return view('projetos.create');
    }

    public function store(Request $request) {

        $projeto = new Projetos;
        $projeto->projeto = $request->projeto;
        $projeto->local = $request->local;
        $projeto->save();

        $projetos = Projetos::all();
        return view('projetos.index',['projetos'=>$projetos]);
    }

    public function delele_row(Request $request) {
        
        if($request->id){
            $id = $request->id;
            $projeto = new Projetos;
            $projeto = Projetos::find($id);
            $projeto->delete();

            $projetos = Projetos::all();
            return view('projetos.index',['projetos'=>$projetos]);
        }
    }
    public function edit_row(Request $request) {
        
        if($request->id){
            $id = $request->id;
            $projeto = new Projetos;
            $projeto = Projetos::find($id);
            return view("projetos.edit",['projeto'=>$projeto]);
        }
    }


    public function update_row(Request $request) {
        
        if($request->id){
            $id = $request->id;
            $projeto = new Projetos;
            $projeto = Projetos::find($id);
            $projeto->projeto = $request->projeto;
            $projeto->local = $request->local; 
            $projeto->update();
            
            $projetos = Projetos::all();
            return view('projetos.index',['projetos'=>$projetos]);
        }
    }
}
