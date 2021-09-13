<?php
$localhost = "localhost";
$username = "u622849691_eeepja";
$password = "informatica2AB";
$dbname = "u622849691_aluno";
// create connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
 die("A conexão Falhou: " . $connect->connect_error);
} else {
 
}
?>

