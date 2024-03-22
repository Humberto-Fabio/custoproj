<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <title>PROJETOS | ENTREGAS</title>
</head>
<body>
<div id="about-container">

    <h1>ENTREGAS | {{$entrega->id_projeto}} - {{$entrega->projeto}} | {{$entrega->medicao}}</h1>

    <div id="form-inner">

        <form class="Form_Menu" name="Frm_Home" action="/home" method="POST">
                @csrf
                <input Name="Home" type="submit" value="Home">
        </form>

        <form  class="Form_Menu"   name="Frm_Projetos" action="/projetos" method="POST">
                @csrf
                <input Name="Nova_Projeto" type="submit" value="Projetos">
        </form>

        <form  class="Form_Menu" name="Frm_Medicoes" action="/medicoes" method="POST">
                @csrf
                <input Name="id_projeto" type="hidden" value="{{$entrega->id_projeto}}">
                <input Name="projeto" type="hidden" value="{{$entrega->projeto}}">
                <input Name="id_medicao" type="hidden" value="{{$entrega->id_medicao}}">
                <input Name="medicao" type="hidden" value="{{$entrega->medicao}}">
                <input Name="Medicoes" type="submit" value="Medicoes">
        </form>

        <form class="Form_Menu"  name="Frm_Entregas" action="/entregas" method="POST">
                @csrf
                <input Name="id_projeto" type="hidden" value="{{$entrega->id_projeto}}">
                <input Name="projeto" type="hidden" value="{{$entrega->projeto}}">
                <input Name="id_medicao" type="hidden" value="{{$entrega->id_medicao}}">
                <input Name="medicao" type="hidden" value="{{$entrega->medicao}}">
                <input Name="id_entrega" type="hidden" value="{{$entrega->id_entrega}}">
                <input Name="entrega" type="hidden" value="{{$entrega->entrega}}">
                <input Name="Entregas" type="submit" value="Entregas">
        </form>
    
    </div>


<form action="/entregas-update" method="POST">
    @csrf
        <input Name="id" type="hidden" value="{{$entrega->id}}">
        
            <input Name="id_projeto" type="hidden" value="{{$entrega->id_projeto}}">
            <input Name="projeto" type="hidden" value="{{$entrega->projeto}}">
            <input Name="id_medicao" type="hidden" value="{{$entrega->id_medicao}}">
            <input Name="medicao" type="hidden" value="{{$entrega->medicao}}">

            <div class="linha_form">
                <div class="titulo_campo_form">Local</div>
                <input  class="campo_form" Name="local" type="text" value="{{$entrega->local}}">
            </div>
            
            <div class="linha_form">
                <div class="titulo_campo_form">Entrega</div>
                <input class="campo_form" Name="entrega" type="text" value="{{$entrega->entrega}}">
            </div>

            <div class="linha_form">
                <div class="titulo_campo_form">Valor</div>
                <input class="campo_form" Name="valor" type="text" value="{{$entrega->valor}}">
            </div>

            <div class="linha_form">
                <div class="titulo_campo_form">Conclusão</div>
                <input class="campo_form" Name="conclusao" type="text" value="{{$entrega->conclusao}}">
            </div>

            <div class="linha_form">
                <div class="titulo_campo_form">Data Inicio</div>
                <input class="campo_form" Name="data_inicio" type="text" value="{{$entrega->data_inicio}}">
            </div>

            <div class="linha_form">
                <div class="titulo_campo_form">Data Entrega</div>
                <input class="campo_form" Name="data_entrega" type="text" value="{{$entrega->data_entrega}}">
            </div>
            <div class="btn_form">
                <input Name="salvar" type="submit" value="Salvar">
            </div>
        </form>
</body>
</html>