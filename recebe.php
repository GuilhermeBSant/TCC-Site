<?php require_once 'conexao.php';

 session_start();
  $captcha = $_POST['captcha'];
  $senha = $_POST['password'];
  $email = $_POST['email'];
 
  

 $sql = "SELECT * FROM sis_equipamentos WHERE email ='$email' and senha='$senha'";

 $result = $connect->query($sql);
 $data = $result->fetch_assoc();
 session_start();
 $id = $data['id'];

 
    if($captcha == true){
        header('Location: index.php ');
    }else{
         
        if($email == 'admin@gmail.com' && $senha == 'admin'){
            header('Location: areaadm/index.php ');
        }else if($email == $data['email'] && $senha == $data['senha']){
            
             $_SESSION['email'] = $email;
             $_SESSION['senha'] = $senha;
             $_SESSION['id'] = $id;
             
           
            header('Location: areausuario/areausuario.php');
        }else if (empty($_POST['email']) || (empty($_POST['senha']))) {
          
            header('Location: index.php ');
          
        }else {
          
            header('Location: index.php ');
          
        }
                
 
    }; 

?>

