<?php
// configurações de uma banco local.
$server = "localhost";
$database = "banco_teste";
$user = "root";
$pass = "";

// passando a string de conexão.
$conn = mysqli_connect($server, $user, $pass);

if (!$conn) {
    //mensagem de erro ao conectar com o banco
    die("Falha ao conectar com o bacno".mysqli_connect_error);
}


?>
