<?php

require_once './bd/conexao.php';
session_start();

  $nome = $_POST['categoria'];


    if(empty($nome)){
        $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>
        <h5>Preencha todos os campos</h5>
       </div>";
       header("location:categoria.php");
    }else{
        $result_categoria = "INSERT INTO categoria (nome)VALUES('$nome')";
        $result_insert = mysqli_query($conexao,$result_categoria);
    }

  if($result_insert ){
      $_SESSION['msg'] = "<div class='alert-sucesso'>
                            <h5>Categoria cadastrada com Sucesso</h5>
                           </div>";
                           header("location:categoria.php");
  }else{
    $_SESSION['msg'] = "<div class='alert-danger' role='alert'>
    <h5>Preencha todos os campos</h5>
   </div>";
   header("location:categoria.php");
  }

?>