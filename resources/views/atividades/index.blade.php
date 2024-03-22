<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />

    <title>PROJETOS | ATIVIDADES</title>

</head>
<body>

<div id="about-container">

    <h1>ATIVIDADES | {{$id_projeto}} - {{$projeto}} | {{$medicao}} | {{$entrega}}</h1>

    <div id="form-inner">

        <form class="Form_Menu" name="Frm_Projetos" action="/projetos" method="POST">
                @csrf
                <input Name="Nova_Projeto" type="submit" value="Projetos">
        </form>
        
        <form class="Form_Menu" name="Frm_Medicoes" action="/medicoes" method="POST">
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
                <input Name="id_entrega" type="hidden" value="{{$id_entrega}}">
                <input Name="entrega" type="hidden" value="{{$entrega}}">
                <input Name="Entregas" type="submit" value="Entregas">
        </form>

        <form class="Form_Menu" name="Frm_Atividades" action="/atividades-new" method="POST">
                @csrf
                <input Name="id_projeto" type="hidden" value="{{$id_projeto}}">
                <input Name="projeto" type="hidden" value="{{$projeto}}">
                <input Name="id_medicao" type="hidden" value="{{$id_medicao}}">
                <input Name="medicao" type="hidden" value="{{$medicao}}">
                <input Name="id_entrega" type="hidden" value="{{$id_entrega}}">
                <input Name="entrega" type="hidden" value="{{$entrega}}">
                <input Name="Nova_Atividade" type="submit" value="Nova Atividade">
        </form>

    </div>

    @foreach($atividades as $atividade)

    <div class="Title_Projeto"> 
        [{{$atividade->id_projeto}}] - {{$atividade->projeto}} - {{$atividade->medicao}}
    </div>

    <div class="Title_Entrega">Entrega: {{$atividade->entrega}}</div>

    <div id="Title_Atividade">Atividade: {{$atividade->atividade}}</div>

        <p>Descrição: {{$atividade->descricao}}</p>
        <p>Valor: R$ {{$atividade->valor}}</p>
        <p>Duração: {{$atividade->duracao}} Dias</p>
        <p>Concluido: {{$atividade->concluido}} %</p>
    <div id="brand">

        <form  class="Form_Menu"  name="Frm_Delete" action="/atividades-delete" method="POST">
            @csrf
                <input Name="id_projeto" type="hidden" value="{{$atividade->id_projeto}}">
                <input Name="projeto" type="hidden" value="{{$atividade->projeto}}">
                <input Name="id_medicao" type="hidden" value="{{$atividade->id_medicao}}">
                <input Name="medicao" type="hidden" value="{{$atividade->medicao}}">
                <input Name="id_entrega" type="hidden" value="{{$atividade->id_entrega}}">
                <input Name="entrega" type="hidden" value="{{$atividade->entrega}}">
            <input Name="id" type="hidden" value={{$atividade->id}}>
            <input Name="Excluir" type="submit" value="Excluir">
        </form>

        <form  class="Form_Menu"  name="Frm_Edit" action="/atividades-edit" method="POST">
            @csrf
            <input Name="id_projeto" type="hidden" value="{{$atividade->id_projeto}}">
            <input Name="projeto" type="hidden" value="{{$atividade->projeto}}">
            <input Name="id_medicao" type="hidden" value="{{$atividade->id_medicao}}">
            <input Name="medicao" type="hidden" value="{{$atividade->medicao}}">
            <input Name="id_entrega" type="hidden" value="{{$atividade->id_entrega}}">
            <input Name="entrega" type="hidden" value="{{$atividade->entrega}}">
            <input Name="id" type="hidden" value={{$atividade->id}}>
            <input Name="Editar" type="submit" value="Editar">
        </form>
    </div>

    <img class="linha_azul" src="/img/ponto_azul.png">
    
    @endforeach

</div>
</body>
</html>