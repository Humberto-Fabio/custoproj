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

        <form id="Form_Menu" action="/projetos-store" method="POST">
            @csrf
            <div class="linha_form"> 
                <div class="titulo_campo_form">Projeto</div> 
                <input class="campo_form" Name="projeto" type="text" placeholder="Titulo do Projeto">
            </div>

            <div class="linha_form"> 
                <div class="titulo_campo_form">Local</div> 
                <input class="campo_form" Name="local" type="text" placeholder="Local do projeto">
            </div>

                <div class="btn_form">
                    <input Name="salvar" type="submit" value="Salvar">
                </div>

        </form>
        
    </div>
</div>
</body>
</html>