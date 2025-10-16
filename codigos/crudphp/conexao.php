<?php 

define('host','localhost');
define('usuario','root'); 
define('senha',''); 
define('banco','teste');
define('port','3308');

$conn = mysqli_connect(host,usuario,senha,banco,port) or die 
('Não foi possível conectar!' . $conexao->connect_error);

?>