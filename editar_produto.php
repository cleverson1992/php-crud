<?php 

    include  'conexao.php';

    $id = $_GET['id'];

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Cadastro de produto</title>

    <!-- style local -->
    <style type="text/css">
      
      #tamanhoContainer {
        width: 500px;
      }

    </style>

  </head>
  <body>
    
    <div class="container mt-5" id="tamanhoContainer" >
      <h4 class="mb-4">Formulário de Cadastro</h4>
      <form action="_inserir_produto.php" method="post">
      <?php

        $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
        $buscar = mysqli_query($conexao, $sql);
        while ($array = mysqli_fatch_array($buscar)){

            $id_estoque = $array['id_estoque'];
            $nroproduto = $array['nroproduto'];
            $nomeproduto = $array['nomeproduto'];
            $categoria = $array['categoria'];
            $quantidade = $array['quantidade'];
            $fornecedor = $array['fornecedor'];

        ?>
        <div class="form-group">
          <label >Nro do Produto</label>
          <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disable>
        </div>

        <div class="form-group">
          <label >Nome do  Produto</label>
          <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
        </div>

        <div class="form-group">
          <label >Categoria</label>
          <select class="form-control" name="categoria" value="<?php echo $categoria ?>">
            <option>Perifericos</option>
            <option>Hardware</option>
            <option>Software</option>
            <option>Celulares</option>
          </select>
        </div>

        <div class="form-group">
          <label >Quantidade</label>
          <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
        </div>

        <div class="form-group">
          <label >Fornecedor</label>
          <select class="form-control" name="fornecedor" value="<?php echo $fornecedor ?>">
            <option>Fornecedor A</option>
            <option>Fornecedor B</option>
            <option>Fornecedor C</option>
          </select>
        </div>

        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-primary btn-sm">Atualizar</button>
        </div>

      </form>
    <?php } ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>