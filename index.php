<?php

require_once 'bd/conexao.php';

  $resultado_query = "SELECT * FROM jornal";

  $dados = mysqli_query($conexao,$resultado_query)


?>



<!doctype html>
<html lang="pt-br">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilo/style.css">
 
  </head>
  <body>
  <div class="container-fluid">
  <?php
      include 'menu.php';
      
      
      ?>
  </div>
  <div class="main">
  
    <?php
    
     while ($recebe_resultado = mysqli_fetch_array($dados)) {
       $titulo = $recebe_resultado['titulo'];
       $assunto = $recebe_resultado['assunto'];
       $categoria = $recebe_resultado['categoria'];
      echo '<div class="container-box">';
      echo '<h1>'.$titulo.'</h1>';
      echo '<p>'.$assunto.'</p>';
      echo '<h3>categoria:'.$categoria.'</h3>';
      echo '<a type="submit" class="btn-acessar" href="">Acessar</a>';
      echo '</div>';
     }
    
    
    ?>
    
    

    
  </div>
      

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>