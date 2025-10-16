<?php 

require 'conexao.php';

    if(isset($_POST['delete_usuario'])){
        $usuario_id = mysqli_real_escape_string($conn, $_POST['delete_usuario']);

        $sql = "DELETE FROM usuarios WHERE id = '$usuario_id'";

        mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn) > 0){
            echo "<h4>Usuário apagado com sucesso!</h4>";
        }else{
            echo "<h4>NÃO foi possível apagar!</h4>";
        }
    }
?>

<p><a href="lista.php">Voltar</a></p>