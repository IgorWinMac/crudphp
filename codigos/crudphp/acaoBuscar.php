<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous">
</head>
<body>

<div class="container">
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Nascimento</th>
    </tr>
  </thead>
  <tbody>

<h2>Resultado da Busca</h2>
    
</body>
</html>

<?php 
    require 'conexao.php';

    $resultado = "";
    if(isset($_GET['buscar_usuario'])){
        $nome = $conn->real_escape_string($_GET['buscar_usuario']);

        $sql = "SELECT * FROM usuarios WHERE nome LIKE '%$nome%'";
        $res = $conn->query($sql);

        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['data_nascimento']) . "</td>";
                echo "</tr>";
            }

        }else{
            $resultado = "<h2>Nenhum resultado encontrado!</h2>";
        }
    }
    echo $resultado;
?>

</table>

<p><a href="buscar.php">Voltar</a></p>

</div>