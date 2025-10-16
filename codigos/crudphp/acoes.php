<?php
include 'conexao.php';

// Captura os dados do POST
$nome = $_POST['nome'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$senha = isset($_POST['senha']) ? mysqli_real_escape_string($conn, password_hash(trim($_POST['senha']), PASSWORD_DEFAULT)) : '';

// Query com placeholders
$sql = "INSERT INTO usuarios (nome, email, data_nascimento, senha) VALUES (?, ?, ?, ?)";

// Prepara a query
$stmt = $conn->prepare($sql);

// Liga os parâmetros (4 strings: "ssss",)
$stmt->bind_param("ssss", $nome, $email, $data_nascimento, $senha);

// Executa
if ($stmt->execute()) {
    echo "<strong>Dados inseridos com sucesso!</strong>";
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

<p><a href="index.php">Voltar</a></p>
