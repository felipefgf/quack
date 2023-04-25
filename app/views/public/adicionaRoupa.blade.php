@extends('templates.principal')

@section('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@stop

@section('conteudo')
    <form action="{{URL::To('/adicionaRoupa')}}" method="post" class="col s12 row">
        <div class="col l6 offset-l3">
            <div class="input-field col s12">
                <input placeholder="Placeholder" name="nome" id="first_name" type="text" class="validate">
                <label for="first_name">Nome</label>
            </div>

            <div class="input-field col s12">
                <input id="last_name" name="tamanho" type="text" class="validate">
                <label for="last_name">Tamanho</label>
            </div>
            <button class="btn" type="submit">Enviar</button>
        </div>
    </form>
@stop


