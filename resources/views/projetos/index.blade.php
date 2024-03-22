<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
<body>

<div id="about-container">

    <h1>PROJETOS</h1>

    <div id="form-inner">

        <form class="Form_Menu" name="Frm_Home" action="/home" method="POST">
                @csrf
                <input Name="Home" type="submit" value="Home">
        </form>

        <form class="Form_Menu" name="Frm_Projetos" action="/projetos-new" method="POST">
                @csrf
                <input Name="Nova_Projeto" type="submit" value="Novo Projeto">
        </form>

    </div>

    @foreach($projetos as $projeto)

      <p><div class="Title_Projeto">[ {{$projeto->id}} ] - {{$projeto->projeto}}</div></p>
      <p>Local   : {{$projeto->local}}</p>

       <div id="brand">

            <form class="Form_Menu" name="Frm_Delete" action="/projetos-delete" method="POST">
                @csrf
                <input Name="id" type="hidden" value={{$projeto->id}}>
                <input Name="Excluir" type="submit" value="Excluir">
            </form>	

            <form class="Form_Menu" name="Frm_Edit" action="/projetos-edit" method="POST">
                @csrf
                <input Name="id" type="hidden" value={{$projeto->id}}>
                <input Name="Editar" type="submit" value="Editar">
            </form>

            <form class="Form_Menu"  name="Frm_Medicoes" action="/medicoes" method="POST">
                @csrf
                <input Name="id_projeto" type="hidden" value="{{$projeto->id}}">
                <input Name="projeto" type="hidden" value="{{$projeto->projeto}}">
                <input Name="Medicoes" type="submit" value="Medicoes">
            </form>
            
        </div>
        <img class="linha_azul" src="/img/ponto_azul.png">
    @endforeach
</div>      
</body>
</html>