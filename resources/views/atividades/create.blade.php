<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />

    <title>PROJETOS | ATIVIDADES</title>
</head>
<body>

<div id="about-container">
    
<h1>ATIVIDADES | {{$id_projeto}} - {{$projeto}} | {{$medicao}} | {{$entrega}}</h1>
    
    <div id="form-inner">

        <form class="Form_Menu" name="Frm_Projetos" action="/projetos" method="POST">
                @csrf
                <input Name="Nova_Projeto" type="submit" value="Projetos">
        </form>
        
        <form class="Form_Menu" name="Frm_Medicoes" action="/medicoes" method="POST">
                @csrf
                <input Name="id_projeto" type="hidden" value="{{$id_projeto}}">
                <input Name="projeto" type="hidden" value="{{$projeto}}">
                <input Name="id_medicao" type="hidden" value="{{$id_medicao}}">
                <input Name="medicao" type="hidden" value="{{$medicao}}">
                <input Name="Medicoes" type="submit" value="Medicoes">
        </form>

        <form class="Form_Menu" name="Frm_Entregas" action="/entregas" method="POST">
                @csrf
                <input Name="id_projeto" type="hidden" value="{{$id_projeto}}">
                <input Name="projeto" type="hidden" value="{{$projeto}}">
                <input Name="id_medicao" type="hidden" value="{{$id_medicao}}">
                <input Name="medicao" type="hidden" value="{{$medicao}}">
                <input Name="id_entrega" type="hidden" value="{{$id_entrega}}">
                <input Name="entrega" type="hidden" value="{{$entrega}}">
                <input Name="Entregas" type="submit" value="Entregas">
        </form>

        <form class="Form_Menu" name="Frm_Atividades" action="/atividades" method="POST">
                @csrf
                <input Name="id_projeto" type="hidden" value="{{$id_projeto}}">
                <input Name="projeto" type="hidden" value="{{$projeto}}">
                <input Name="id_medicao" type="hidden" value="{{$id_medicao}}">
                <input Name="medicao" type="hidden" value="{{$medicao}}">
                <input Name="id_entrega" type="hidden" value={{$id_entrega}}>
                <input Name="entrega" type="hidden" value="{{$entrega}}">             
                <input Name="Atividades" type="submit" value="Atividades">
        </form>
    </div>

    <div id="form_cadastro">
        <form action="/atividades-store" method="POST">
            
            @csrf
            <input Name="id_projeto" type="hidden"  value="{{$id_projeto}}">
            <input Name="projeto" type="hidden"  value="{{$projeto}}">
            <input Name="id_medicao" type="hidden"  value="{{$id_medicao}}">
            <input Name="medicao" type="hidden"  value="{{$medicao}}">
            <input Name="id_entrega" type="hidden"  value="{{$id_entrega}}">
            <input Name="entrega" type="hidden"  value="{{$entrega}}">

            <div class="linha_form">
            <div class="titulo_campo_form">Atividade</div>
            <input  class="campo_form" Name="atividade" type="text">
            </div>
            
            <div class="linha_form">
            <div class="titulo_campo_form">Descrição</div>
            <input  class="campo_form" Name="descricao" type="text">
            </div>

            <div class="linha_form">
            <div class="titulo_campo_form">Valor</div>
            <input class="campo_form" Name="valor" type="text">
            </div>

            <div class="linha_form">
                <div class="titulo_campo_form">Duração (dias)</div>
                <input class="campo_form" Name="duracao" type="text">
            </div>

            <div class="linha_form">
            <div class="titulo_campo_form">Concluido (%)</div>
            <input class="campo_form" Name="concluido" type="text">
            </div>
            
            <div class="btn_form">
            <input Name="salvar" type="submit" value="Salvar">
            </div>
        </form>
    </div>

<div id="about-container">
</body>
</html>