   
<?php require_once '../conexao.php';
if($_POST) {
   
    $data = $_POST['datas'];
    $aparelho = $_POST['aparelhos'];
    $periodo = $_POST['periodos'];
    $id = $_POST['id'];
    
  


 
$sql = "UPDATE sis_equipamentos SET datas ='$data', aparelhos= '$aparelho', periodos= '$periodo' WHERE id= '$id'";
 

 if($connect->query($sql) === TRUE) {
header("location: ../areausuario/areausuario.php");
 die();

 } else {
 echo "Essa ação não foi possivel: ". $connect->error;
 }
 $connect->close();
} 
?>