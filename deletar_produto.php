<?php

  include 'conexao.php';

  $id = $_GET['id'];

  $sql = "DELETE FROM `estoque` WHERE  id_estoque = $id";

  $deletar = mysqli_query ($conexao, $sql); 

?>

 <!-- pagina de voltar ao inicio  -->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <div class="container mt-5" style="">
    <div class="d-flex flex-column">

      <h4 class="mx-auto">PRODUTO DELETADO COM SUCESSO!</h4>
      <span class="mx-auto d-block pt-2">
        <a href="listar_produtos.php" role="button" class="btn btn-primary btn-sm">VOLTAR</a>
      </span>

    </div>
  </div>
 </div>