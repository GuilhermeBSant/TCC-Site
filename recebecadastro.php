<?php
require_once 'conexao.php';

 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $email2 = $_POST['email2'];
 $senha = $_POST['password'];
 $senha2 = $_POST['password2'];
 
if(($email == $email2) && ($senha == $senha2)){
 if($_POST){

 $sql = "INSERT INTO sis_equipamentos (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
 if($connect->query($sql) === TRUE) {

 header("location: cadok.php");
 die();


 }
 $connect->close();

 }
    
   }else {
 //echo "Error " . $sql . ' ' . $connect->connect_error;
  header("location: cadfail.php");
   die();}
   ?>