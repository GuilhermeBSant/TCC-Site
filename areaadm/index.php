<?php require_once 'conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <!-- Meta tags Obrigatórias -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-
MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <!-- https://fontawesome.com/ para obter mais fontes-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

 <title>Área do ADM</title>
 <style>
 


</style> 
 </head>
 <body>
 <div class="fluid">
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index.php">Área do Administrador</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" ariacontrols="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
 <span class="navbar-toggler-icon"></span>
 </button>


 </nav>
 </div>
 
 
 
 
 
 <div class="container-fluid">
 <h1 class="mx-auto" style="width:550px">Membros Ativos </h1>
 <table class="table table-striped">
 <thead>
 <tr>
 <th scope="col">NOME </th>
 <th scope="col">EMAIL</th>
 <th scope="col">SENHA</th>
 <th scope="col">DATA TV</th>
 <th scope="col">TV SELECIONADA</th>
 <th scope="col">PERIODO TV</th>
 <th scope="col">DATA PROJETOR</th>
 <th scope="col">PROJETOR SELECIONADO</th>
 <th scope="col">PERIODO PROJETOR</th>
 <th scope="col">DATA SOM</th>
 <th scope="col">SOM SELECIONADO</th>
 <th scope="col">PERIODO SOM</th>
 <th scope="col" colspan="2">AÇÃO</th>
 </tr>
 </thead>
 <tbody>
 <?php
 
 $sql = "SELECT * FROM sis_equipamentos WHERE ativo = 1";
 $result = $connect->query($sql);
 if($result-> num_rows >0) {
 while($row = $result->fetch_assoc()) {
     
 echo "<tr>
 <td>".$row['nome']." </td>
 <td>".$row['email']."</td>
 <td>".$row['senha']."</td>
 <td>".date('d/m/Y', strtotime($row['datatv']))."</td>
 <td>".$row['aparelhotv']."</td>
 <td>".$row['periodotv']."</td>
 <td>".date('d/m/Y', strtotime($row['datap']))."</td>
 <td>".$row['aparelhop']."</td>
 <td>".$row['periodop']."</td>
 <td>".date('d/m/Y', strtotime($row['datas']))."</td>
 <td>".$row['aparelhos']."</td>
 <td>".$row['periodos']."</td>
 <td>
 <a href='editar.php?id=".$row['id']."'><i class='fas fa-user-edit '> </i>
 </td>
 <td>
 <a href='remover.php?id=".$row['id']."'><i class='fas fa-eraser'> </i>
 </tr>";
 }
 } else {
 echo "<tr><td colspan='5'><center><h1> </h1></center></td></tr>";
 }
 ?>
 </tbody>
</table>
 </div>
 
 
 
  <div class="container-fluid">
 <h1 class="mx-auto" style="width:550px">Membros Inativos</h1>
 <table class="table table-striped">
 <thead>
 <tr>
 <th scope="col">NOME </th>
 <th scope="col">EMAIL</th>
 <th scope="col">SENHA</th>
 <th scope="col">DATA TV</th>
 <th scope="col">TV SELECIONADA</th>
 <th scope="col">PERIODO TV</th>
 <th scope="col">DATA PROJETOR</th>
 <th scope="col">PROJETOR SELECIONADO</th>
 <th scope="col">PERIODO PROJETOR</th>
 <th scope="col">DATA SOM</th>
 <th scope="col">SOM SELECIONADO</th>
 <th scope="col">PERIODO SOM</th>
 <th scope="col" colspan="2">AÇÃO</th>
 </tr>
 </thead>
 <tbody>
 <?php
 
 $sql = "SELECT * FROM sis_equipamentos WHERE ativo = 0";
 $result = $connect->query($sql);
 if($result-> num_rows >0) {
 while($row = $result->fetch_assoc()) {
     
 echo "<tr>
 <td>".$row['nome']." </td>
 <td>".$row['email']."</td>
 <td>".$row['senha']."</td>
 <td>".date('d/m/Y', strtotime($row['datatv']))."</td>
 <td>".$row['aparelhotv']."</td>
 <td>".$row['periodotv']."</td>
 <td>".date('d/m/Y', strtotime($row['datap']))."</td>
 <td>".$row['aparelhop']."</td>
 <td>".$row['periodop']."</td>
 <td>".date('d/m/Y', strtotime($row['datas']))."</td>
 <td>".$row['aparelhos']."</td>
 <td>".$row['periodos']."</td>
 <td>
 <a href='editar.php?id=".$row['id']."'><i class='fas fa-user-edit '> </i>
 </td>
 <td>
 <a href='remover.php?id=".$row['id']."'><i class='fas fa-eraser'> </i>
 </tr>";
 }
 } else {
 echo "<tr><td colspan='5'><center><h1> </h1></center></td></tr>";
 }
 ?>
 </tbody>
</table>
 </div>
 
 
 
 
 
 
 <!-- JavaScript (Opcional) -->
 <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-
ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-
ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </body>
</html>