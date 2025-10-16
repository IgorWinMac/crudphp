<?php
session_start();
require 'conexao.php' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">
</head>
<body>

  <div class="container">

<nav>
<!-- As a heading -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Navbar</span>
  </div>
</nav>
</nav>

<h4>Ações
  <a href="criar.php" class="btn btn-primary">Adicionar</a> <a href="buscar.php" class="btn btn-success">Buscar</a>
</h4>

<header>
    <h1>Lista de Usuários</h1>
</header>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = 'SELECT * FROM usuarios'; 
    $usuarios = mysqli_query($conn, $sql);
    if (mysqli_num_rows($usuarios) > 0) {
      foreach($usuarios as $usuario){
    ?>
    <tr>
      <td><?=$usuario['id']?></td>
      <td><?=$usuario['nome']?></td>
      <td><?=$usuario['email']?></td>
      <td><?=$usuario['data_nascimento']?></td>
      <td><a href="visualizar.php?id=<?=$usuario['id']?>" class="btn btn-secondary btn-sm">Visualizar</a></td>
      <td><a href="editar.php?id=<?=$usuario['id']?>" class="btn btn-success btn-sm">Editar</a></td>
      <td><form action="acaoApagar.php" method="post" class="d-inline">
        <button onclick="return confirm('Tem certeza que deseja apagar ?')" type="submit" name="delete_usuario" value="<?=$usuario['id']?>" class="btn btn-danger btn-sm">Excluir</button>
      </form></td>
    </tr>
    <?php 
      }
    }else{
      echo 'Nenhum usuário encontrado';
    }
    ?>
  </tbody>
</table>

<p><a href="index.php">Voltar</a></p>

</div>
    
</body>
</html>