@extends('templates.principal')

@section('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@stop

@section('conteudo')
<div class="slider">
    <ul class="slides">
      <li>
        <img src="http://localhost/imagens/CASADOEVANGELICONEWIMAGE.png"> <!-- random image -->
        <div class="caption center-align">
          <h3>Bla</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://img.ltwebstatic.com/images3_pi/2022/05/25/1653449022cd4bd2426a6887e96e5825bcd3f2ac19.webp"> <!-- random image -->
        <div class="caption left-align">
          <h3>Bla</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://img.ltwebstatic.com/images3_pi/2022/05/25/1653449022cd4bd2426a6887e96e5825bcd3f2ac19.webp"> <!-- random image -->
        <div class="caption right-align">
          <h3>Bla</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://img.ltwebstatic.com/images3_pi/2022/05/25/1653449022cd4bd2426a6887e96e5825bcd3f2ac19.webp"> <!-- random image -->
        <div class="caption center-align">
          <h3>Bla</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
  
<div> 
<img id="imgBGAnjo" src="{{asset('imagens/backgroundAnjo.jpg')}}">

<h3>Camisas</h3>
<div class='divprodutos'>
    @foreach($roupas as $r)
    <div class="divproduto">
        <img src="https://img.ltwebstatic.com/images3_pi/2022/05/25/1653449022cd4bd2426a6887e96e5825bcd3f2ac19.webp" alt="">
        <p>{{$r->nome}}</p>
        <p>{{$r->marca}}</p>
    </div>
    @endforeach
</div>
  
<script> 
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems);
  });
  </script>
@stop


