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
        padding-left: 14.75%;
        padding-right: 14.75%;
      }


      nav li:hover{
        background-color: black;
      }

      .z-depth-5{
        -webkit-box-shadow: 0 24px 38px 3px rgba(87,159,255,0.14), 0 9px 46px 8px rgba(87,159,255,0.12), 0 11px 15px -7px rgba(87,159,255,0.2);
        box-shadow: 0 24px 38px 3px rgba(87,159,255,0.14), 0 9px 46px 8px rgba(87,159,255,0.12), 0 11px 15px -7px rgba(87,159,255,0.2);
      }

      .page-footer {
        color: #fff;
        background-color: #579fff;
      }

      main{
        min-height: 77.5vh;
        padding-left: 16%;
        padding-right: 16%;
      }

      .row{ 
        margin: 0 !important;
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

