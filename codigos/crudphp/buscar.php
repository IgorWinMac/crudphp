<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">
</head>
<body>

<div class="container">

<header>
    <h1>Sistema de Busca</h1>
</header>

<form action="acaoBuscar.php" method="GET">
  <div class="mb-3">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="buscar_usuario">
  </div>

  <button type="submit" name="" class="btn btn-primary">Buscar</button>
</form>

<p><a href="lista.php">Voltar</a></p>

</div>
    
</body>
</html>