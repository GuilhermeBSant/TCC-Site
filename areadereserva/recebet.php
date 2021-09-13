   
<?php require_once '../conexao.php';
if($_POST) {
   
    $data = $_POST['datat'];
    $aparelho = $_POST['aparelhot'];
    $periodo = $_POST['periodot'];
    $id = $_POST['id'];
    
  


 
$sql = "UPDATE sis_equipamentos SET datatv ='$data', aparelhotv= '$aparelho', periodotv= '$periodo' WHERE id= '$id'";
 

 if($connect->query($sql) === TRUE) {
header("location: ../areausuario/areausuario.php");
 die();

 } else {
 echo "Essa ação não foi possivel: ". $connect->error;
 }
 $connect->close();
} 
?>