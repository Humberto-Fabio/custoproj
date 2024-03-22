<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Medicoes;
use Illuminate\Support\Facades\DB;

class Medicoes_Controller extends Controller
{
    public function index(Request $request) {

        if($request->id_projeto){

            #$medicao = new Medicoes;
            #$medicao = Medicoes::where('id_projeto','=',$request->id_projeto)->get();
            
            $sql = "SELECT medicoes.*, ";
            $sql = $sql . " IFNULL(b.soma_concluido,0) AS soma_real,";
            $sql = $sql . " IFNULL(b.soma_previsto,0) AS soma_prev";
            $sql = $sql . " FROM medicoes";
            $sql = $sql . " LEFT JOIN (";
            $sql = $sql . " SELECT atividades.id_medicao, ";
            $sql = $sql . " SUM(atividades.valor * (atividades.concluido/100)) AS soma_concluido,";
            $sql = $sql . " SUM(atividades.valor) AS soma_previsto";
            $sql = $sql . " FROM atividades";
            $sql = $sql . " GROUP BY atividades.id_medicao) as b";
            $sql = $sql . " ON medicoes.id = b.id_medicao";
            $sql = $sql . " AND medicoes.id_projeto = ". $request->id_projeto .";";

            $medicao = DB::select($sql);

            return view('Medicoes.index',[
                    'medicoes'=>$medicao,
                    'id_projeto'=>$request->id_projeto,
                    'projeto'=>$request->projeto
            ]);
        }
    }

    public function create(Request $request) {
        $medicao = new Medicoes;
        $medicao->id_projeto = $request->id_projeto;
        $medicao->projeto = $request->projeto;
        return view('medicoes.create',['medicoes'=>$medicao]);
    }

    public function store(Request $request) {

        $medicao = new Medicoes;
        $medicao->id_projeto = $request->id_projeto;
        $medicao->projeto = $request->projeto;
        $medicao->medicao = $request->medicao;
        $medicao->dt_medicao = $request->dt_medicao;


        $medicao->save();
    
        #$medicao = Medicoes::all();
    
        $sql = "SELECT medicoes.*, ";
        $sql = $sql . " IFNULL(b.soma_concluido,0) AS soma_real,";
        $sql = $sql . " IFNULL(b.soma_previsto,0) AS soma_prev";
        $sql = $sql . " FROM medicoes";
        $sql = $sql . " LEFT JOIN (";
        $sql = $sql . " SELECT atividades.id_medicao, ";
        $sql = $sql . " SUM(atividades.valor * (atividades.concluido/100)) AS soma_concluido,";
        $sql = $sql . " SUM(atividades.valor) AS soma_previsto";
        $sql = $sql . " FROM atividades";
        $sql = $sql . " GROUP BY atividades.id_medicao) as b";
        $sql = $sql . " ON medicoes.id = b.id_medicao";
        $sql = $sql . " AND medicoes.id_projeto = ". $request->id_projeto .";";

        $medicao = DB::select($sql);

        return view('Medicoes.index',[
                'medicoes'=>$medicao,
                'id_projeto'=>$request->id_projeto,
                'projeto'=>$request->projeto
        ]);
    
    }

    public function delele_row(Request $request) {
        
        if($request->id){
            $id = $request->id;
            $medicao = new Medicoes;
            $medicao = Medicoes::find($id);
            $medicao->delete();

            $sql = "SELECT medicoes.*, ";
            $sql = $sql . " IFNULL(b.soma_concluido,0) AS soma_real,";
            $sql = $sql . " IFNULL(b.soma_previsto,0) AS soma_prev";
            $sql = $sql . " FROM medicoes";
            $sql = $sql . " LEFT JOIN (";
            $sql = $sql . " SELECT atividades.id_medicao, ";
            $sql = $sql . " SUM(atividades.valor * (atividades.concluido/100)) AS soma_concluido,";
            $sql = $sql . " SUM(atividades.valor) AS soma_previsto";
            $sql = $sql . " FROM atividades";
            $sql = $sql . " GROUP BY atividades.id_medicao) as b";
            $sql = $sql . " ON medicoes.id = b.id_medicao";
            $sql = $sql . " AND medicoes.id_projeto = ". $request->id_projeto .";";

            $medicao = DB::select($sql);

            return view('Medicoes.index',[
                    'medicoes'=>$medicao,
                    'id_projeto'=>$request->id_projeto,
                    'projeto'=>$request->projeto
            ]);

        }
    }
    public function edit_row(Request $request) {
        
        if($request->id){
            $id = $request->id;
            $medicao = new Medicoes;
            $medicao = Medicoes::find($id);
            return view("medicoes.edit",['medicoes'=>$medicao]);
        }
    }

    public function update_row(Request $request) {
        
        if($request->id){
            $id = $request->id;
            $medicao = new Medicoes;
            $medicao = Medicoes::find($id);
            $medicao->id_projeto = $request->id_projeto;
            $medicao->projeto = $request->projeto;
            $medicao->medicao = $request->medicao;
            $medicao->dt_medicao = $request->dt_medicao;
            $medicao->update();

            #$medicao = Medicoes::all();

            $sql = "SELECT medicoes.*, ";
            $sql = $sql . " IFNULL(b.soma_concluido,0) AS soma_real,";
            $sql = $sql . " IFNULL(b.soma_previsto,0) AS soma_prev";
            $sql = $sql . " FROM medicoes";
            $sql = $sql . " LEFT JOIN (";
            $sql = $sql . " SELECT atividades.id_medicao, ";
            $sql = $sql . " SUM(atividades.valor * (atividades.concluido/100)) AS soma_concluido,";
            $sql = $sql . " SUM(atividades.valor) AS soma_previsto";
            $sql = $sql . " FROM atividades";
            $sql = $sql . " GROUP BY atividades.id_medicao) as b";
            $sql = $sql . " ON medicoes.id = b.id_medicao";
            $sql = $sql . " AND medicoes.id_projeto = ". $request->id_projeto .";";

            $medicao = DB::select($sql);

            return view('Medicoes.index',[
                    'medicoes'=>$medicao,
                    'id_projeto'=>$request->id_projeto,
                    'projeto'=>$request->projeto
            ]);
        }
    }
}
