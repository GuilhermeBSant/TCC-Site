<?php require_once 'conexao.php';

if($_GET['id']) {
 $id = $_GET['id'];
 $sql = "SELECT * FROM sis_equipamentos WHERE id = {$id}";
 $result = $connect->query($sql);
 $data = $result->fetch_assoc();
 $connect->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <!-- Meta tags Obrigatórias -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-
MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <title>Área do ADM</title>
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
 <div class="container">
 <h1 class="mx-auto" style="width:100px"> Editar</h1>
 <form method="post" action="atualiza.php">
 <div class="form-group">
                            <div class="form-group">
                                <span class="form-label">Nome</span>
                                <input class="form-control" name="nome" id="nome" type="text" placeholder="Nome completo" value="<?php echo $data['nome'] ?>">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Email</span>
                                <input class="form-control" name="email" id="email" type="email" placeholder="Email" value="<?php echo $data['email'] ?>">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Senha</span>
                                <input class="form-control" name="senha" id="senha" type="text" placeholder="*******" maxlength="14" value="<?php echo $data['senha'] ?>" >
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Data tv</span>
                                        <input class="form-control" name="datatv" id="datatv" type="date"  value="<?php echo $data['datatv'] ?>">
                                    </div>
                                </div>
                                 <div class="form-group">
                                <span class="form-label">Aparelho tv</span>
                                <input class="form-control" name="aparelhotv" id="aparelhotv" type="text" placeholder="aparelhotv" value="<?php echo $data['aparelhotv'] ?>">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Período tv</span>
                                <input class="form-control" name="periodotv" type="text" placeholder="periodotv" maxlength="14" value="<?php echo $data['periodotv'] ?>" >
                            </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Data projetor</span>
                                        <input class="form-control" name="datap" id="datap" type="date"  value="<?php echo $data['datap'] ?>">
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                <span class="form-label">Aparelho projetor</span>
                                <input class="form-control" name="aparelhop" id="aparelhop" type="text" placeholder="aparelhop" value="<?php echo $data['aparelhop'] ?>">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Período projetor</span>
                                <input class="form-control" name="periodop" id="periodop" type="text" placeholder="periodop" maxlength="14" value="<?php echo $data['periodop'] ?>" >
                            </div>
                            
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Data som</span>
                                        <input class="form-control" name="datas" id="datas" type="date"  value="<?php echo $data['datas'] ?>">
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                <span class="form-label">Aparelho som</span>
                                <input class="form-control" name="aparelhos" id="aparelhos" type="text" placeholder="aparelhos" value="<?php echo $data['aparelhos'] ?>">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Período som</span>
                                <input class="form-control" name="periodos" id="periodos" type="text" placeholder="periodos" maxlength="16" value="<?php echo $data['periodos'] ?>" >
                            </div>
                            
                            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" >
 

 
 
 <div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1"
  <?php 
  if($data['ativo']==1){
  echo"checked";
  }
  ?>
  value= 1
  >
  <label class="form-check-label" for="flexRadioDefault1">
    Ativo
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value= 0
  <?php 
  if($data['ativo']==0){
  echo"checked";
  }
  ?>>
  <label class="form-check-label" for="flexRadioDefault2">
    Inativo
  </label>
</div>
 
 
 
 
 <br>
 <button class="btn btn-success" type="submit">Atualizar</button>

 <a href="index.php">
 <input type="button" class="btn btn-primary" type="submit" value="Voltar" ></a>
 </div>
 </form>



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
<?php
 }
?>