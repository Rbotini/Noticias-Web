<?php

session_start();
require_once 'bd/conexao.php';
$resul_query =  "SELECT * FROM categoria";
$resultado =   mysqli_query($conexao,$resul_query);

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
    <link rel="stylesheet" href="./estilo/noticias.css">
    <link rel="stylesheet" href="./estilo/style.css">
</head>

<body>
    <?php
    include 'menu.php'
    ?>
    <div class="container-fluid">
        <main>
            <h2>Cadastro de Notícias</h2>
            <form action="cadastrarnoticia.php" method="POST">
                <div class="form-group">
                    <label for="titulonoticia">Titulo da Notícia</label>
                    <input type="text" class="form-control" id="" name="titulo" placeholder="Enter titulo da Notícia">
                    
                </div>
                <div class="form-group">
                    <select  class="form-control" name="categoria" id="">
                      <option  style="color:#A60F0F;font-weight: bold;" value="">Selecione uma Categoria</option>
                         <?php
                           
                            while ($dados = mysqli_fetch_array($resultado)) {
                                $nome = $dados['nome'];
                                echo '<option name="categoria" style="color:#460273;font-weight: bold;" value="'.$nome.'">'.$nome.'</option>';
                            }
                           
                         ?>

                        
                    </select>
                </div>
                <div class="form-group">
                
                    <textarea class="form-control"  name="assunto" id="text-area" placeholder="Conteudo da noticia" cols="30" rows="2">

                    </textarea>
                </div>
                
                <button type="submit" class="btn btn-success">Cadastrar</button>
                <a style=" width: 6rem;font-family:'Oswald';" class="btn btn-outline-danger" href="index.php">Voltar</a>

                <?php
                   if(isset($_SESSION['msg'])){
                      echo $_SESSION['msg'];
                      unset($_SESSION['msg']);
                    }
            
            ?>
                
            </form>
           
           
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>