<?php 
    require 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizualizar</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous">
</head>
<body>

<?php 

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $conn->prepare("SELECT id, nome, email, data_nascimento FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $usuarios = $resultado->fetch_assoc();
    } else {
        $erro = "Usuário não encontrado.";
    }

    $stmt->close();
} else {
    $erro = "ID inválido.";
}

$conn->close();
?>


<body>
    <div class="container">
        <h2>Detalhes do Usuário</h2>

        <?php if (isset($erro)) : ?>
            <p style="color: red;"><?php echo $erro; ?></p>
        <?php else : ?>
            <div class="campo">
                <label>ID:</label> 
                <p class="form-control"><?php echo $usuarios['id']; ?></p>
            </div>
            <div class="campo">
                <label>Nome:</label> 
                <p class="form-control"><?php echo $usuarios['nome']; ?></p>
            </div>
            <div class="campo">
                <label>Email:</label> 
                <p class="form-control"><?php echo $usuarios['email']; ?></p>
            </div>
            <div class="campo">
                <label>Data de Nascimento:</label> 
                <p class="form-control"><?php echo $usuarios['data_nascimento']; ?></p>
            </div>
        <?php endif; ?>
    </div>
    <p><a href="lista.php">Voltar</a></p>
</body>
</html>
