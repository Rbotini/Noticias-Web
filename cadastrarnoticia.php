<?php
require_once 'bd/conexao.php';
session_start();

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$assunto = $_POST['assunto'];

  if(empty($titulo)|| empty($categoria) || empty($assunto)){
     $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>
                           Preeencha Todos Os campos
                         </div>";
   }else{
       $cadastrar = "INSERT INTO jornal(titulo,categoria,assunto)Values('$titulo','$categoria','$assunto')";
        $cadastrado_dados =  mysqli_query($conexao,$cadastrar);

       }

if($cadastrado_dados){
    $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>
     <h5>Noticia Cadastrada com sucesso!</h5>
      </div>";
        header("location:noticias.php");
  
}else{
      $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>
      Preencha todos os campos!
    </div>";
    header("location:noticias.php");
}


 

