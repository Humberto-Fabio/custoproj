<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Atividades;

class Atividades_Controller extends Controller
{
    public function index(Request $request) {
        $atividades = Atividades::where('id_entrega','=',$request->id_entrega)->get();
        return view('atividades.index',[
                'atividades'=>$atividades,
                'id_projeto'=>$request->id_projeto,
                'projeto'=>$request->projeto,
                'id_medicao'=>$request->id_medicao,
                'medicao'=>$request->medicao,
                'id_entrega'=>$request->id_entrega,
                'entrega'=>$request->entrega
        ]);
        #$atividade = new Atividades;
        #$atividade = Atividades::all();
        return view('atividades.index',['atividades'=>$atividades]);
    }


    public function create(Request $request) {
         
        return view('atividades.create',[
            'id_projeto'=>$request->id_projeto,
            'projeto'=>$request->projeto,
            'id_medicao'=>$request->id_medicao,
            'medicao'=>$request->medicao,
            'id_entrega'=>$request->id_entrega,
            'entrega'=>$request->entrega
        ]);
    }

    public function store(Request $request) {

        $atividade = new Atividades;
        $atividade->id_projeto = $request->id_projeto;
        $atividade->projeto = $request->projeto;
        $atividade->id_medicao = $request->id_medicao;
        $atividade->medicao = $request->medicao;
        $atividade->id_entrega = $request->id_entrega;
        $atividade->entrega = $request->entrega;
        $atividade->atividade = $request->atividade;
        $atividade->descricao = $request->descricao;
        $atividade->valor = $request->valor;
        $atividade->duracao = $request->duracao;
        $atividade->concluido = $request->concluido;
        $atividade->save();

        $atividades = Atividades::where('id_entrega','=',$request->id_entrega)->get();
        return view('atividades.index',[
                'atividades'=>$atividades,
                'id_projeto'=>$request->id_projeto,
                'projeto'=>$request->projeto,
                'id_medicao'=>$request->id_medicao,
                'medicao'=>$request->medicao,
                'id_entrega'=>$request->id_entrega,
                'entrega'=>$request->entrega
        ]);
        
        #$atividade = Atividades::all();
        #return view('atividades.index',['atividades'=>$atividade]);
    }

    public function delele_row(Request $request) {
        
        if($request->id){
            
            $id = $request->id;
            $atividade = new Atividades;
            $atividade = Atividades::find($id);
            $atividade->delete();

            #$atividade = Atividades::all();
            #return view('atividades.index',['atividades'=>$atividade]);

            $atividades = Atividades::where('id_entrega','=',$request->id_entrega)->get();

            return view('atividades.index',[
                    'atividades'=>$atividades,
                    'id_projeto'=>$request->id_projeto,
                    'projeto'=>$request->projeto,
                    'id_medicao'=>$request->id_medicao,
                    'medicao'=>$request->medicao,
                    'id_entrega'=>$request->id_entrega,
                    'entrega'=>$request->entrega
            ]);

        }
    }

    public function edit_row(Request $request) {
        
        if($request->id){
            $id = $request->id;
            $atividade = new Atividades;
            $atividade = Atividades::find($id);
            return view("atividades.edit",['atividade'=>$atividade]);
        }
    }

    public function update_row(Request $request) {
        
        if($request->id){
            $id = $request->id;
            $atividade = new Atividades;
            $atividade = Atividades::find($id);
            $atividade->id_projeto = $request->id_projeto;
            $atividade->projeto = $request->projeto;
            $atividade->id_medicao = $request->id_medicao;
            $atividade->medicao = $request->medicao;
            $atividade->id_entrega = $request->id_entrega;
            $atividade->entrega = $request->entrega;
            $atividade->atividade = $request->atividade;
            $atividade->descricao = $request->descricao;
            $atividade->valor = $request->valor;
            $atividade->duracao = $request->duracao;
            $atividade->concluido = $request->concluido;
            $atividade->update();

            $atividades = Atividades::where('id_entrega','=',$request->id_entrega)->get();
            return view('atividades.index',[
                    'atividades'=>$atividades,
                    'id_projeto'=>$request->id_projeto,
                    'projeto'=>$request->projeto,
                    'id_medicao'=>$request->id_medicao,
                    'medicao'=>$request->medicao,
                    'id_entrega'=>$request->id_entrega,
                    'entrega'=>$request->entrega
            ]);

            #$atividade = Atividades::all();
            #return view('atividades.index',['atividades'=>$atividade]);
        }
    }
}
