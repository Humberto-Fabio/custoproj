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
    
    <h1>GERENCIAMENTO DE PROJETOS</h1>
    
    <div id="form-inner">
    
        <form  class="Form_Menu" name="Frm_User" action="/User" method="POST">
                @csrf
                <input Name="Novo_User" type="submit" value="Novo Usuario">
        </form>

        <form class="Form_Menu" name="Frm_Projetos" action="/projetos" method="POST">
                @csrf
                <input Name="Nova_Projeto" type="submit" value="Projetos">
        </form>


    </div>
</div>    
</body>
</html>