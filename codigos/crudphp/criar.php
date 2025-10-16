<?php 
require 'conexao.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">
</head>
<body>

<nav>
<!-- As a heading -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Navbar</span>
  </div>
</nav>
</nav>

<header>
    <h1>Formulário para novos usuários</h1>
</header>

<h4>Página Inicial
<a href="index.php" class="btn btn-danger float-end">Voltar</a>
</h4>

<form action="acoes.php" method="post">
  <div class="mb-3">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome">
   
  </div>
  <div class="mb-3">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email">
  
  </div>
  <div class="mb-3">
    <label for="data_nascimento">Data de Nascimento</label>
    <input type="date" class="form-control" name="data_nascimento">
   
  </div>
  <div class="mb-3">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" name="senha">
  </div>

  <button type="submit" name="criar.php" class="btn btn-primary">Salvar</button>
</form>
    
</body>
</html>