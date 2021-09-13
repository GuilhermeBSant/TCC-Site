<?php require_once 'conexao.php';
if($_POST) {
 $status = $_POST['status'];  
 $nome = $_POST['nome'];   
 $email = $_POST['email'];
 $senha= $_POST['senha'];
 $datatv = $_POST['datatv'];
 $aparelhotv = $_POST['aparelhotv'];
 $periodotv = $_POST['periodotv'];
 $datap = $_POST['datap'];
 $aparelhop = $_POST['aparelhop'];
 $periodop = $_POST['periodop'];
 $datas = $_POST['datas'];
 $aparelhos = $_POST['aparelhos'];
 $periodos = $_POST['periodos'];
 $id = $_POST['id'];


 
$sql = "UPDATE sis_equipamentos SET ativo ='$status', nome= '$nome' ,email='$email',senha= '$senha', datatv = '$datatv', aparelhotv = '$aparelhotv',periodotv = '$periodotv', datap = '$datap', aparelhop = '$aparelhop', periodop = '$periodop', datas = '$datas', aparelhos = '$aparelhos', periodos = '$periodos' WHERE id= '$id'";



 if($connect->query($sql) === TRUE) {
header("location: index.php");
 die();

 } else {
 echo "Essa ação não foi possivel: ". $connect->error;
 }
 $connect->close();
}
?>