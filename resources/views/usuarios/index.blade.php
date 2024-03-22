<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />

    <title>USUARIO LOGIN</title>
</head>
<body>

    <div id="about-container">
        <h1>LOGIN</h1>
    
        <div id="form_cadastro">
            <form action="/home" method="POST">
                @csrf
                
                <div class="linha_form"> 
                    <div class="titulo_campo_form">Usuario</div> 
                    <input class="campo_form" Name="nome" type="text" placeholder="Usuário">
                </div>
                <div class="linha_form"> 
                    <div class="titulo_campo_form">Local</div> 
                    <input class="campo_form" Name="senha" type="password" placeholder="Password">
                </div>
                <div class="btn_form"> 
                    <input Name="btn_login" type="submit" value="Entrar">
                </div>
            </form>
        </div>
    
    </div>
</body>
</html>