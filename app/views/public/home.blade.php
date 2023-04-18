@extends('templates.principal')

@section('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@stop

@section('conteudo')

<div class="slider">
    <ul class="slides">
      <li>
        <img src="https://img.ltwebstatic.com/images3_pi/2022/05/25/1653449022cd4bd2426a6887e96e5825bcd3f2ac19.webp"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://img.ltwebstatic.com/images3_pi/2022/05/25/1653449022cd4bd2426a6887e96e5825bcd3f2ac19.webp"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://img.ltwebstatic.com/images3_pi/2022/05/25/1653449022cd4bd2426a6887e96e5825bcd3f2ac19.webp"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://img.ltwebstatic.com/images3_pi/2022/05/25/1653449022cd4bd2426a6887e96e5825bcd3f2ac19.webp"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>

<div class="imagemprincipal">
      <img src='{{asset("imagens/CASADOEVANGELICONEWIMAGE.png")}}'>
</div>


<h1>Feminino</h1>
<h3>Camisas</h3>
<div class='divprodutos'>
    @for($i=0; $i < 8;$i++ )
    <div class="divproduto">
      <img src="https://img.ltwebstatic.com/images3_pi/2022/05/25/1653449022cd4bd2426a6887e96e5825bcd3f2ac19.webp" alt="">

    </div>
    @endfor
</div>
<!-- prod 2 -->
<h3>Saias Longas</h3>
<div class='divprodutos'>
    @for($i=0; $i < 8;$i++ )
    <div class="divproduto">
      <img src="https://img.ltwebstatic.com/gspCenter/goodsImage/2023/2/12/6511070283_1047163/A012878BA67AEACE10B2AD9B363AB944_thumbnail_600x.jpg" alt="">

    </div>
    @endfor
</div>
<div class='divprodutos'>
    @for($i=0; $i < 8;$i++ )
    <div class="divproduto">
      <img src="https://img.ltwebstatic.com/gspCenter/goodsImage/2023/3/31/2157521486_1059049/C952B9CE4F3E63F729CE71968CE8ED65_thumbnail_600x.jpg" alt="">

    </div>
    @endfor
</div>
  
<script> 
  $(document).ready(function(){
    $('.slider').slider();
  });
  </script>


@stop


