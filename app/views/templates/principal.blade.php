<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <title>Casa do Evangélico</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/principal.css')}}">
  </head>
  <body>
    <header>
      <nav class="z-depth-5">

        <ul>
          <li><a href="#">Início</a></li>
          <li><a href="#">Roupas Masculinas</a></li>
          <li><a href="#">Roupas Femininas</a></li>
          <li><a href="#">Roupas Infantis</a></li>
          <li><a href="#">Assessórios</a></li>
          <li><a href="#decoracao">Decoração</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </nav>
    </header>
    <main>
        @yield("conteudo")
    </main>
  </body>

  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Footer Content</h5>
          <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Whatsapp</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</html>

