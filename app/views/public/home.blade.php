@extends('templates.principal')

@section('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@stop

@section('conteudo')
  <div class="imagemprincipal">
      <img src='{{asset("imagens/CASADOEVANGELICONEWIMAGE.png")}}'>
  </div>
  <div class='divprodutos'>
    @for($i=0; $i < 8;$i++ )
    <div class="divproduto">
      <img src="https://img.ltwebstatic.com/images3_pi/2022/05/25/1653449022cd4bd2426a6887e96e5825bcd3f2ac19.webp" alt="">

    </div>
    @endfor
  </div>
  
  
@stop