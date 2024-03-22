<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <title>Document</title>
</head>
<body>

<div id="about-container">

    <h1>ATIVIDADES | {{$atividade->id_projeto}} - {{$atividade->projeto}} | {{$atividade->medicao}} | {{$atividade->entrega}}</h1>

    <div id="form-inner">

        <form class="Form_Menu" name="Frm_Projetos" action="/projetos" method="POST">
                @csrf
                <input Name="Nova_Projeto" type="submit" value="Projetos">
        </form>
        
        <form class="Form_Menu" name="Frm_Medicoes" action="/medicoes" method="POST">
                @csrf
                <input Name="id_projeto" type="hidden" value="{{$atividade->id_projeto}}">
                <input Name="projeto" type="hidden" value="{{$atividade->projeto}}">
                <input Name="id_medicao" type="hidden" value="{{$atividade->id_medicao}}">
                <input Name="medicao" type="hidden" value="{{$atividade->medicao}}">
                <input Name="Medicoes" type="submit" value="Medicoes">
        </form>

        <form class="Form_Menu" name="Frm_Entregas" action="/entregas" method="POST">
                @csrf
                <input Name="id_projeto" type="hidden" value="{{$atividade->id_projeto}}">
                <input Name="projeto" type="hidden" value="{{$atividade->projeto}}">
                <input Name="id_medicao" type="hidden" value="{{$atividade->id_medicao}}">
                <input Name="medicao" type="hidden" value="{{$atividade->medicao}}">
                <input Name="id_entrega" type="hidden" value="{{$atividade->id_entrega}}">
                <input Name="entrega" type="hidden" value="{{$atividade->entrega}}">
                <input Name="Entregas" type="submit" value="Entregas">
        </form>

        <form class="Form_Menu" name="Frm_Atividades" action="/atividades" method="POST">
                @csrf
                <input Name="id_projeto" type="hidden" value="{{$atividade->id_projeto}}">
                <input Name="projeto" type="hidden" value="{{$atividade->projeto}}">
                <input Name="id_medicao" type="hidden" value="{{$atividade->id_medicao}}">
                <input Name="medicao" type="hidden" value="{{$atividade->medicao}}">
                <input Name="id_entrega" type="hidden" value="{{$atividade->id_entrega}}">
                <input Name="entrega" type="hidden" value="{{$atividade->entrega}}">             
                <input Name="Atividades" type="submit" value="Atividades">
        </form>
    </div>
    
    <div id="form_cadastro">

        <form class="Form_Menu" action="/atividades-update" method="POST">
            @csrf
        
            <input Name="id_projeto" type="hidden"  value="{{$atividade->id_projeto}}">
            <input Name="projeto" type="hidden"  value="{{$atividade->projeto}}">
            <input Name="id_medicao" type="hidden"  value="{{$atividade->id_medicao}}">
            <input Name="medicao" type="hidden"  value="{{$atividade->medicao}}">
            <input Name="id_entrega" type="hidden"  value="{{$atividade->id_entrega}}">
            <input Name="entrega" type="hidden"  value="{{$atividade->entrega}}">
            <input Name="id" type="hidden" value="{{$atividade->id}}">

            <div class="linha_form">
                <div class="titulo_campo_form">Atividade</div>
                <input class="campo_form" Name="atividade" type="text" value="{{$atividade->atividade}}">
            </div>
            
            <div class="linha_form">
                <div class="titulo_campo_form">Descrição</div>
                <input class="campo_form" Name="descricao" type="text" value="{{$atividade->descricao}}">
            </div>           
            
            <div class="linha_form">
                <div class="titulo_campo_form">Valor</div>
                <input class="campo_form" Name="valor" type="text" value="{{$atividade->valor}}">
            </div>

            <div class="linha_form">
                <div class="titulo_campo_form">Duração (Dias)</div>
                <input class="campo_form" Name="duracao" type="text" value="{{$atividade->duracao}}">
            </div>

            <div class="linha_form">
                <div class="titulo_campo_form">Concluido (%)</div>
                <input class="campo_form" Name="concluido" type="text"  value="{{$atividade->concluido}}">
            </div>

            <div class="btn_form">    
                <input Name="salvar" type="submit" value="Salvar">
            </div>

        </form>

    </div>
</div>

</body>
</html>