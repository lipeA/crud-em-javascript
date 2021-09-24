<?php
// configurações de uma banco local.
$server = "localhost";
$database = "banco_teste"; 
$user = "root";
$pass = "";

try {
    $conn = new PDO('mysql:host=localhost; dbname ='.$database,$user,$pass);
} catch (PDOException $error) {
    return "<h3> erro ão conectar com o banco.</h3>".$error->getMessage();
}

?>
