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
    
    <h1>MEDIÇÕES | {{$medicoes->id_projeto}}-{{$medicoes->projeto}}</h1>
    
    <div id="form-inner">
    
        <form class="Form_Menu" name="Frm_Home" action="/home" method="POST">
                @csrf
                <input Name="Home" type="submit" value="Home">
        </form>

        <form class="Form_Menu" name="Frm_Projetos" action="/projetos" method="POST">
                @csrf
                <input Name="Projetos" type="submit" value="Projetos">
        </form>

        <form class="Form_Menu" name="Frm_Medicoes" action="/medicoes" method="POST">
                @csrf
                <input Name="id_projeto" type="hidden" value="{{$medicoes->id_projeto}}">
                <input Name="projeto" type="hidden" value="{{$medicoes->projeto}}">
                <input Name="Medicoes" type="submit" value="Medicoes">
        </form>
    </div>

    <div id="form_cadastro">
        <form action="/medicoes-update" method="POST">
            @csrf
            
            <input Name="id" type="hidden" value="{{$medicoes->id}}">
            <input Name="id_projeto" type="hidden" value="{{$medicoes->id_projeto}}" >
            <input Name="projeto" type="hidden" value="{{$medicoes->projeto}}" >
            
            <div class="linha_form">
                <div class="titulo_campo_form">Medicao</div>
                <input class="campo_form" Name="medicao" type="text" value="{{$medicoes->medicao}}">
                </div>
            <div class="linha_form">
                <div class="titulo_campo_form">Data Medição</div>
                <input class="campo_form" Name="dt_medicao" type="text" value="{{$medicoes->dt_medicao}}">
            </div>

            <div class="btn_form">
                <input Name="salvar" type="submit" value="Salvar">
            </div>
        </form>
    </div>

</div>  
</body>
</html>