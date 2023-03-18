<!DOCTYPE html>
<html>
  <head>
      <title>Page Title</title>
      <meta charset="UTF-8">
      <meta name="description" content="Free Web tutorials">
      <meta name="keywords" content="HTML, CSS, JavaScript">
      <link rel="stylesheet" href="main.css">
  </head>
  
  <body>
      <p id="textoApresentacao">Calculadora de IMC</p>
      
      <label style="top: 40vh;left: 39vw;position: absolute;">
        Peso:
        <input type="text" id="peso">
      </label>
      
      <label style="top: 40vh;left: 51vw;position: absolute;">
        Altura:
        <input type="text" id="altura">
      </label>
     
      <button onclick="calculadora()" id="botao">Clique aqui</button>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="imc.js"></script>
  </body>
</html>