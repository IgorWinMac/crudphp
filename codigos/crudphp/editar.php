<?php 
    require 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">
</head>
<body>

<?php 
    if(isset($_GET['id'])){
        $usuario_id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "SELECT * FROM usuarios WHERE id = '$usuario_id'";
        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) > 0){
            $usuario = mysqli_fetch_array($query);
?>


<header>
    <h1>Formulário para Edição</h1>
</header>

<form action="acaoEditar.php" method="post">
    <input type="hidden" name="usuario_id" value="<?=$usuario['id']?>">
  <div class="mb-3">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" value="<?=$usuario['nome']?>">
   
  </div>
  <div class="mb-3">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" value="<?=$usuario['email']?>">
  
  </div>
  <div class="mb-3">
    <label for="data_nascimento">Data de Nascimento</label>
    <input type="date" class="form-control" name="data_nascimento" value="<?=$usuario['data_nascimento']?>">
   
  </div>
  <div class="mb-3">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" name="senha">
  </div>

  <button type="submit" name="criar.php" class="btn btn-primary">Salvar</button>
</form>

<?php 
    }else{
        echo "<h5>Usuário NÃO encontrado!</h5>";
    }
}
?>

<p><a href="lista.php">Voltar</a></p>
    
</body>
</html>