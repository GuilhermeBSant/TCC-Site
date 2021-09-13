   
<?php require_once '../conexao.php';
if($_POST) {
   
    $data = $_POST['datap'];
    $aparelho = $_POST['aparelhop'];
    $periodo = $_POST['periodop'];
    $id = $_POST['id'];
    
  


 
$sql = "UPDATE sis_equipamentos SET datap ='$data', aparelhop= '$aparelho', periodop= '$periodo' WHERE id= '$id'";
 

 if($connect->query($sql) === TRUE) {
header("location: ../areausuario/areausuario.php");
 die();

 } else {
 echo "Essa ação não foi possivel: ". $connect->error;
 }
 $connect->close();
} 
?>