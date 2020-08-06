<?php
 
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>FORMULÁRIO DE INSCRIÇÃO</title>
    <meta charset="UTF-8">
    <meta name= "author" content="">
    <meta name= "description" content="">
    <meta name= "viewport" content="width=device-width, initial=1">
  </head>
  <body>
    <p>Formulário para inscrição de competidor</p>

    <form action="script.php" method="post">
      <p>Seu nome: <input type= "text" name= "nome"/></p>
      <p>Sua idade: <input type= "text" name= "idade"/></p>
      <p><input type="submit" value="Enviar dados de competidor"/></p>


    </form>
  </body>
</html>