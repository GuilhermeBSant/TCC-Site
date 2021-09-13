<?php 
    require_once '../conexao.php';

    session_start();
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
    {
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      unset($_SESSION['id']);
      header('location:../index.php');
      } if($_SESSION['id']){
  $id = $_SESSION['id'];
  

	$sql = "SELECT * FROM sis_equipamentos WHERE id= '$id'";
	$result = $connect->query($sql);
    $data = $result->fetch_assoc();
  
    $logado = $_SESSION['id'];
// echo "$logado"
 

?>
<!DOCTYPE html>
<html lang="pt_BR">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Reserva de Aparelhos de som</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="icon" href="imgs/favicon.png">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<script>
function funcao1()
{
alert("Reserva realizada com sucesso!");
}
</script>
</head>

<body>

	<div id="booking" class="section">
		
		<div class="booking-form">
	
		<div class="section-center">
		
				<div class="container">
				    
				<div class="row">
				    
					<div class="booking-form">
						<form action="recebes.php" method="post" onsubmit="return funcao1()">
						    <input type=hidden name="id" value="<?php echo $logado ?>">
							<div class="row no-margin">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Nome do professor</span>
									   <input class="form-control" type="text" name="nomes" value="<?php echo $data['nome'] ?>" disabled>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row no-margin">
										<div class="col-md-5">
											<div class="form-group">
												<span class="form-label">Data do agendamento</span>
												<input class="form-control" type="date" name="datas" required>
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group">
												<span class="form-label">Selecionar aparelho</span>
												<select class="form-control" name="aparelhos">
													<option value="1">Aparelho de som 1</option>
													<option value="2">Aparelho de som 2</option>
													<option value="3">Aparelho de som 3</option>
													<option value="4">Aparelho de som 4</option>
													<option value="5">Aparelho de som 5</option>
													<option value="6">Aparelho de som 6</option>
													<option value="7">Aparelho de som 7</option>
													<option value="8">Aparelho de som 8</option>
													<option value="9">Aparelho de som 9</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<span class="form-label">Período</span>
												<select class="form-control" name="periodos">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn">Reservar!</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
<?php } ?>