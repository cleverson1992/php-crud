<?php 

  include 'conexao.php';

  $nroproduto = $_POST['nroproduto']; //recebe o valor do atibuto
  $nomeproduto = $_POST['nomeproduto'];
  $categoria = $_POST['categoria'];
  $quantidade = $_POST['quantidade'];
  $fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>

 <!-- pagina de voltar ao inicio  -->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <div class="container mt-5" style="">
    <div class="d-flex flex-column">
      <h4 class="mx-auto">PRODUTO ADICIONADO COM SUCESSO!</h4>
      <span class="mx-auto d-block pt-2">
        <a href="index.php" role="button" class="btn btn-primary btn-sm">Cadastrar novo item</a>
      </span>

    </div>
  </div>
 </div>