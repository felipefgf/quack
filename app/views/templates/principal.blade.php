<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <title>Casa do Evangélico</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            

    <style> 

      section{
        height: 300px;
      }

      nav{
        background-color: #579fff;
      }


      nav li:hover{
        background-color: black;
      }

      .z-depth-5{
        -webkit-box-shadow: 0 24px 38px 3px rgba(0,0,200,0.14), 0 9px 46px 8px rgba(0,0,200,0.12), 0 11px 15px -7px rgba(0,0,200,0.2);
        box-shadow: 0 24px 38px 3px rgba(0,0,200,0.14), 0 9px 46px 8px rgba(0,0,200,0.12), 0 11px 15px -7px rgba(0,0,200,0.2);
      }

      .page-footer {
        color: #fff;
        background-color: #579fff;
      }

  </style>


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
    <main style="min-height:68vh">
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
            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2014 Copyright Text
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
    </div>
  </footer>
</html>

