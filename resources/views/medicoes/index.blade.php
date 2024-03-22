<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <title>PROJETOS | MEDICOES</title>
    

</head>
<body>

<div id="about-container">
    
    <h1>MEDIÇÕES | {{$id_projeto}}-{{$projeto}}</h1>
    
    <div id="form-inner">

        <form class="Form_Menu"  name="Frm_Projetos" action="/projetos" method="POST">
                @csrf
                <input Name="Nova_Projeto" type="submit" value="Projetos">
        </form>

        <form class="Form_Menu"  name="Frm_Medicoes" action="/medicoes-new" method="POST">
                @csrf
                <input Name="id_projeto" type="hidden" value="{{$id_projeto}}">
                <input Name="projeto" type="hidden" value="{{$projeto}}">
                <input Name="Nova_Medicao" type="submit" value="Nova Medição">
        </form>
    </div>

    @foreach($medicoes as $medicao)

        <p><div class="Title_Projeto"> [{{$medicao->id_projeto}}] - {{$medicao->projeto}} - {{$medicao->medicao}}</div></p>
        <p>Valor Previsto: R$ {{$medicao->soma_prev}}</p>
        <p>Valor Realizado: R$ {{$medicao->soma_real}}</p>
        <p>Data Medição: {{$medicao->dt_medicao}}</p>

        <div id="brand">

        <form class="Form_Menu"  name="Frm_Delete" action="/medicoes-delete" method="POST">
            @csrf
            <input Name="id" type="hidden" value={{$medicao->id}}>
            <input Name="id_projeto" type="hidden" value="{{$id_projeto}}">
            <input Name="projeto" type="hidden" value="{{$projeto}}">
            <input Name="Excluir" type="submit" value="Excluir">
        </form>

        <form class="Form_Menu"  name="Frm_Edit" action="/medicoes-edit" method="POST">
            @csrf
            <input Name="id_projeto" type="hidden" value="{{$id_projeto}}">
            <input Name="projeto" type="hidden" value="{{$projeto}}">
            <input Name="id" type="hidden" value={{$medicao->id}}>
            <input Name="Editar" type="submit" value="Editar">
        </form>

        <form class="Form_Menu"  name="Frm_Entregas" action="/entregas" method="POST">
              @csrf
              <input Name="id_projeto" type="hidden" value="{{$id_projeto}}">
              <input Name="projeto" type="hidden" value="{{$projeto}}">
              <input Name="id_medicao" type="hidden" value="{{$medicao->id}}">
              <input Name="medicao" type="hidden" value="{{$medicao->medicao}}">
              <input Name="Entregas" type="submit" value="Entregas">
         </form>

        </div>

        <img class="linha_azul" src="/img/ponto_azul.png">

    @endforeach
</div>
</body>
</html>