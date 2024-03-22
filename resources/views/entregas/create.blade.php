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

    <h1>ENTREGAS | {{$id_projeto}} - {{$projeto}} | {{$medicao}}</h1>

    <div id="form-inner">

        <form class="Form_Menu" name="Frm_Home" action="/home" method="POST">
                    @csrf
                    <input Name="Home" type="submit" value="Home">
        </form>

        <form  class="Form_Menu"   name="Frm_Medicoes" action="/medicoes" method="POST">
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
                <input Name="Entregas" type="submit" value="Entregas">
        </form>

   </div>

    <div id="form_cadastro">
    <form action="/entregas-store" method="POST">
        @csrf

            <input class="campo_form" Name="id_projeto" type="hidden" value="{{$id_projeto}}">
            <input class="campo_form" Name="projeto" type="hidden" value="{{$projeto}}">
            <input class="campo_form" Name="id_medicao" type="hidden" value="{{$id_medicao}}">
            <input class="campo_form" Name="medicao" type="hidden" value="{{$medicao}}">
      
        <div class="linha_form">
            <div class="titulo_campo_form">Local</div>
            <input class="campo_form" Name="local" type="text">
        </div>
        <div class="linha_form">
            <div class="titulo_campo_form">Entrega</div>
            <input class="campo_form" Name="entrega" type="text">
        </div>
        
        <!-- 
            <div class="linha_form">
                 <div class="titulo_campo_form">valor</div>
                 <input class="campo_form" Name="valor" type="text">
             </div>
             <div class="linha_form">
                 <div class="titulo_campo_form">Conclusão</div>
                 <input class="campo_form" Name="conclusao" type="text">
            </div> 
        !-->
        
        <div class="linha_form">
            <div class="titulo_campo_form">Data Inicio</div>
            <input class="campo_form" Name="data_inicio" type="text">
        </div>
        <div class="linha_form">
            <div class="titulo_campo_form">Data Entrega</div>
            <input class="campo_form" Name="data_entrega" type="text">
        </div>
        <div class="btn_form">
            <input Name="salvar" type="submit" value="Salvar">
        </div>
    </form>
    </div>
</div>
</body>
</html>