<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>

<div id="about-container">

    <h1>PROJETOS</h1>

    <div id="form-inner">

        <form class="Form_Menu" name="Frm_Home" action="/home" method="POST">
                    @csrf
                    <input Name="Home" type="submit" value="Home">
        </form>

        <form class="Form_Menu" name="Frm_Projetos" action="/projetos" method="POST">
                @csrf
                <input Name="Nova_Projeto" type="submit" value="Projetos">
        </form>

    </div>

    <div id="form_cadastro">
        <form action="/projetos-update" method="POST">
            @csrf
            <input Name="id" type="hidden" value="{{$projeto->id}}">
            <div class="linha_form"> 
                <div class="titulo_campo_form">Projeto</div> 
                <input class="campo_form" Name="projeto" type="text" value="{{$projeto->projeto}}">
            </div>
            <div class="linha_form"> 
                <div class="titulo_campo_form">Local</div> 
                <input class="campo_form" Name="local" type="text" value="{{$projeto->local}}">
            </div>
            <div class="btn_form"> 
                <input Name="salvar" type="submit" value="Salvar">
            </div>
        </form>
    </div>

</div>

</body>
</html>