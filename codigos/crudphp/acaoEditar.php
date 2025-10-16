<?php 

    require 'conexao.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST['usuario_id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data_nascimento = $_POST['data_nascimento'];
        $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conn, password_hash(trim($_POST['senha']), PASSWORD_DEFAULT)) : '' ;

        $sql = "UPDATE usuarios SET nome = ?, email = ?, data_nascimento = ?, senha = ? WHERE id = ?";

        $stmt = $conn->prepare($sql);

        if($stmt === false){
            die("ERRO na preparação da query!" . $conn->error);
        }

        $stmt->bind_param("ssssi",$nome,$email,$data_nascimento,$senha,$id);

        if($stmt->execute()){
            echo "Registro atualizado com sucesso!";
        }else{
            echo "ERRO ao atualizar!" . $stmt->error;
        }

        $stmt->close();

    }

    $conn->close();
?>

<p><a href="lista.php">Voltar</a></p>