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

        <form  class="Form_Menu"   name="Frm_Projetos" action="/projetos" method="POST">
                @csrf
                <input Name="Nova_Projeto" type="submit" value="Projetos">
        </form>
        
        <form  class="Form_Menu"   name="Frm_Medicoes" action="/medicoes" method="POST">
                @csrf
                <input Name="id_projeto" type="hidden" value="{{$id_projeto}}">
                <input Name="projeto" type="hidden" value="{{$projeto}}">
                <input Name="id_medicao" type="hidden" value="{{$id_medicao}}">
                <input Name="medicao" type="hidden" value="{{$medicao}}">
                <input Name="Medicoes" type="submit" value="Medicoes">
        </form>
        
        <form class="Form_Menu" name="Frm_Entregas" action="/entregas-new" method="POST">
                @csrf
                
                <input Name="id_projeto" type="hidden" value="{{$id_projeto}}">
                <input Name="projeto" type="hidden" value="{{$projeto}}">
                <input Name="id_medicao" type="hidden" value="{{$id_medicao}}">
                <input Name="medicao" type="hidden" value="{{$medicao}}">
                <input Name="Nova_Entrega" type="submit" value="Nova Entrega">
        </form>
    </div>
    
    @foreach($entregas as $entrega)

    <div class="Title_Projeto"> 
        [{{$entrega->id_projeto}}] - {{$entrega->projeto}} - {{$entrega->medicao}}
    </div>
    
    <div class="Title_Entrega">Entrega: {{$entrega->entrega}} </div>

        <p>Valor Previsto: R$ {{$entrega->soma_prev}}</p>
        <p>Valor Realizado: R$ {{$entrega->soma_real}}</p>
        <p>Data Entrega: {{$entrega->data_entrega}}</p>
        <p>Conclusão: 0 %</p>

    <div id="brand">
    
        <form class="Form_Menu" name="Frm_Delete" action="/entregas-delete" method="POST">
            @csrf
            <input Name="id_medicao" type="hidden" value={{$entrega->id_medicao}}>
            <input Name="medicao" type="hidden" value={{$entrega->medicao}}>
            <input Name="id" type="hidden" value={{$entrega->id}}>
            <input Name="Excluir" type="submit" value="Excluir">
        </form>

        <form class="Form_Menu" name="Frm_Edit" action="/entregas-edit" method="POST">
            @csrf
            <input Name="id" type="hidden" value={{$entrega->id}}>
            <input Name="Editar" type="submit" value="Editar">
        </form>

        <form class="Form_Menu" name="Frm_Atividades" action="/atividades" method="POST">
              @csrf
              <input Name="id" type="hidden" value={{$entrega->id}}>
              <input Name="id_projeto" type="hidden" value="{{$entrega->id_projeto}}">
              <input Name="projeto" type="hidden" value="{{$entrega->projeto}}">
              <input Name="id_medicao" type="hidden" value="{{$entrega->id_medicao}}">
              <input Name="medicao" type="hidden" value="{{$entrega->medicao}}">
              <input Name="id_entrega" type="hidden" value={{$entrega->id}}>
              <input Name="entrega" type="hidden" value="{{$entrega->entrega}}">             
              <input Name="Atividades" type="submit" value="Atividades">
        </form>
    </div>

    <img class="linha_azul" src="/img/ponto_azul.png">
    
    @endforeach
</div>   
</body>
</html>