<?php
require_once 'conexao.php';
if($_GET) {
 $id = $_GET['id'];

 $sql = "UPDATE sis_equipamentos SET ativo = 0 WHERE id = {$id}";
 if($connect->query($sql) === TRUE) {
 header("location: index.php");
 die();
 } else {
 echo "Error updating record : " . $connect->error;
 }
 $connect->close();
}