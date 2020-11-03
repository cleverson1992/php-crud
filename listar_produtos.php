<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <title>Listar Produtos</title>

  </head>
  <body>
    
    <div class="container mt-5">

      <h3>Lista de Produtos</h3> 

      <table class="table mt-4 table-hover table-striped table-dark ">
        <thead>
          <tr>
            <th scope="col">Nro Produto</th>
            <th scope="col">Nome Produto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Fornecedor</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>

          <?php 

            include 'conexao.php';
            $sql = "SELECT * FROM `estoque`";
            $busca = mysqli_query($conexao, $sql);
            
            while ($array = mysqli_fetch_array($busca)) {
              
              $id_estoque = $array['id_estoque'];
              $nroproduto = $array['nroproduto'];
              $nomeproduto = $array['nomeproduto'];
              $categoria = $array['categoria'];
              $quantidade = $array['quantidade'];
              $fornecedor = $array['fornecedor'];
              
          ?>
        
          <tr>

            <td><?php echo $nroproduto ?> </td>
            <td><?php echo $nomeproduto ?> </td>
            <td><?php echo $categoria ?> </td>
            <td><?php echo $quantidade ?> </td>
            <td><?php echo $fornecedor ?> </td>
            <td class="d-flex justify-content-center">
              <a class="btn btn-warning btn-sm text-light mr-2" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"> <i class="fas fa-edit mr-1"> </i> Editar</a>

              <a class="btn btn-danger btn-sm text-light" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"> <i class="fas fa-trash-alt mr-1"> </i> Excluir</a>
            </td>

          </tr>

          <?php } ?>

      </table>
      
    </div>

    <div class="container">    
      <a href="index.php" role="button" class="btn btn-primary float-right"> <i class="fas fa-home mr-2"></i> Inicio </a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>