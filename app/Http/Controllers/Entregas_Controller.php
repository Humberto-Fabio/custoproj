<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Entregas;
use Illuminate\Support\Facades\DB;

class Entregas_Controller extends Controller
{
    public function index(Request $request) {
        
        $sql = "SELECT a.*, projetos.projeto, medicoes.medicao FROM ";
        $sql = $sql . " ( SELECT entregas.id,";
        $sql = $sql . " entregas.id_projeto,";
        $sql = $sql . " entregas.id_medicao ,";
        $sql = $sql . " entregas.entrega,";
        $sql = $sql . " entregas.data_entrega,";
        $sql = $sql . " IFNULL(b.soma_concluido,0) AS soma_real,"; 
        $sql = $sql . " IFNULL(b.soma_previsto,0) AS soma_prev"; 
        $sql = $sql . " FROM entregas"; 
        $sql = $sql . " LEFT JOIN ("; 
        $sql = $sql . " SELECT atividades.id_entrega,"; 
        $sql = $sql . " SUM(atividades.valor * (atividades.concluido/100)) AS soma_concluido,";
        $sql = $sql . " SUM(atividades.valor) AS soma_previsto";
        $sql = $sql . " FROM atividades";
        $sql = $sql . " GROUP BY atividades.id_entrega) as b";
        $sql = $sql . " ON entregas.id = b.id_entrega) AS a, projetos , medicoes";
        $sql = $sql . " WHERE a.id_projeto = ". $request->id_projeto;
        $sql = $sql . " AND a.id_medicao = ". $request->id_medicao;
        $sql = $sql . " AND projetos.id = a.id_projeto";
        $sql = $sql . " AND medicoes.id = a.id_medicao;";
        
        $entregas = DB::select($sql);

        return view('entregas.index',[
                'entregas'=>$entregas,
                'id_projeto'=>$request->id_projeto,
                'projeto'=>$request->projeto,
                'id_medicao'=>$request->id_medicao,
                'medicao'=>$request->medicao,
                'conclusao' => 0
        ]);

    }

    public function create(Request $request) {
        return view('entregas.create',[
            'id_projeto'=>$request->id_projeto,
            'projeto'=>$request->projeto,
            'id_medicao'=>$request->id_medicao,
            'medicao'=>$request->medicao
        ]);
    }

    public function store(Request $request) {

        $entrega = new Entregas;
        $entrega->id_projeto = $request->id_projeto;
        $entrega->id_medicao = $request->id_medicao;
        $entrega->entrega = $request->entrega;
        $entrega->local = $request->local;
        
        $entrega->data_inicio = $request->data_inicio;
        $entrega->data_entrega = $request->data_entrega;
        $entrega->save();

        $sql = "SELECT a.*, projetos.projeto, medicoes.medicao FROM ";
        $sql = $sql . " ( SELECT entregas.id,";
        $sql = $sql . " entregas.id_projeto,";
        $sql = $sql . " entregas.id_medicao ,";
        $sql = $sql . " entregas.entrega,";
        $sql = $sql . " entregas.data_entrega,";
        $sql = $sql . " IFNULL(b.soma_concluido,0) AS soma_real,"; 
        $sql = $sql . " IFNULL(b.soma_previsto,0) AS soma_prev"; 
        $sql = $sql . " FROM entregas"; 
        $sql = $sql . " LEFT JOIN ("; 
        $sql = $sql . " SELECT atividades.id_entrega,"; 
        $sql = $sql . " SUM(atividades.valor * (atividades.concluido/100)) AS soma_concluido,";
        $sql = $sql . " SUM(atividades.valor) AS soma_previsto";
        $sql = $sql . " FROM atividades";
        $sql = $sql . " GROUP BY atividades.id_entrega) as b";
        $sql = $sql . " ON entregas.id = b.id_entrega) AS a, projetos , medicoes";
        $sql = $sql . " WHERE a.id_projeto = ". $request->id_projeto;
        $sql = $sql . " AND a.id_medicao = ". $request->id_medicao;
        $sql = $sql . " AND projetos.id = a.id_projeto";
        $sql = $sql . " AND medicoes.id = a.id_medicao;";
        
        $entregas = DB::select($sql);

        return view('entregas.index',[
                'entregas'=>$entregas,
                'id_projeto'=>$request->id_projeto,
                'projeto'=>$request->projeto,
                'id_medicao'=>$request->id_medicao,
                'medicao'=>$request->medicao,
                'conclusao' => 0
        ]);

    }

    public function delele_row(Request $request) {
        
        if($request->id){
            $id = $request->id;
            $entrega = new Entregas;
            $entrega = Entregas::find($id);
            $entrega->delete();
   
            $sql = "SELECT a.*, projetos.projeto, medicoes.medicao FROM ";
            $sql = $sql . " ( SELECT entregas.id,";
            $sql = $sql . " entregas.id_projeto,";
            $sql = $sql . " entregas.id_medicao ,";
            $sql = $sql . " entregas.entrega,";
            $sql = $sql . " entregas.data_entrega,";
            $sql = $sql . " IFNULL(b.soma_concluido,0) AS soma_real,"; 
            $sql = $sql . " IFNULL(b.soma_previsto,0) AS soma_prev"; 
            $sql = $sql . " FROM entregas"; 
            $sql = $sql . " LEFT JOIN ("; 
            $sql = $sql . " SELECT atividades.id_entrega,"; 
            $sql = $sql . " SUM(atividades.valor * (atividades.concluido/100)) AS soma_concluido,";
            $sql = $sql . " SUM(atividades.valor) AS soma_previsto";
            $sql = $sql . " FROM atividades";
            $sql = $sql . " GROUP BY atividades.id_entrega) as b";
            $sql = $sql . " ON entregas.id = b.id_entrega) AS a, projetos , medicoes";
            $sql = $sql . " WHERE a.id_projeto = ". $request->id_projeto;
            $sql = $sql . " AND a.id_medicao = ". $request->id_medicao;
            $sql = $sql . " AND projetos.id = a.id_projeto";
            $sql = $sql . " AND medicoes.id = a.id_medicao;";
            
            $entregas = DB::select($sql);
    
            return view('entregas.index',[
                    'entregas'=>$entregas,
                    'id_projeto'=>$request->id_projeto,
                    'projeto'=>$request->projeto,
                    'id_medicao'=>$request->id_medicao,
                    'medicao'=>$request->medicao,
                    'conclusao' => 0
            ]);

        }
    }
    
    public function edit_row(Request $request) {
        
        if($request->id){
            $id = $request->id;
            $entrega = new Entregas;
            $entrega = Entregas::find($id);
            return view("entregas.edit",['entrega'=>$entrega]);
        }
    }

    public function update_row(Request $request) {
        
        if($request->id){
            $id = $request->id;
            $entrega = new Entregas;
            $entrega = Entregas::find($id);
            $entrega->id_projeto = $request->id_projeto;
            $entrega->id_medicao = $request->id_medicao;
            $entrega->entrega = $request->entrega;
            $entrega->local = $request->local;
            $entrega->data_inicio = $request->data_inicio;
            $entrega->data_entrega = $request->data_entrega;
            $entrega->update();
            
            $sql = "SELECT a.*, projetos.projeto, medicoes.medicao FROM ";
            $sql = $sql . " ( SELECT entregas.id,";
            $sql = $sql . " entregas.id_projeto,";
            $sql = $sql . " entregas.id_medicao ,";
            $sql = $sql . " entregas.entrega,";
            $sql = $sql . " entregas.data_entrega,";
            $sql = $sql . " IFNULL(b.soma_concluido,0) AS soma_real,"; 
            $sql = $sql . " IFNULL(b.soma_previsto,0) AS soma_prev"; 
            $sql = $sql . " FROM entregas"; 
            $sql = $sql . " LEFT JOIN ("; 
            $sql = $sql . " SELECT atividades.id_entrega,"; 
            $sql = $sql . " SUM(atividades.valor * (atividades.concluido/100)) AS soma_concluido,";
            $sql = $sql . " SUM(atividades.valor) AS soma_previsto";
            $sql = $sql . " FROM atividades";
            $sql = $sql . " GROUP BY atividades.id_entrega) as b";
            $sql = $sql . " ON entregas.id = b.id_entrega) AS a, projetos , medicoes";
            $sql = $sql . " WHERE a.id_projeto = ". $request->id_projeto;
            $sql = $sql . " AND a.id_medicao = ". $request->id_medicao;
            $sql = $sql . " AND projetos.id = a.id_projeto";
            $sql = $sql . " AND medicoes.id = a.id_medicao;";
            
            $entregas = DB::select($sql);
    
            return view('entregas.index',[
                    'entregas'=>$entregas,
                    'id_projeto'=>$request->id_projeto,
                    'projeto'=>$request->projeto,
                    'id_medicao'=>$request->id_medicao,
                    'medicao'=>$request->medicao,
                    'conclusao' => 0
            ]);
        }
    }
}
