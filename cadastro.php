<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Área de cadastro</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="icon" href="assets/images/favicon.png">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/loginz.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="assets/images/logo3.png" alt=logo" class="logo">
              </div>
              <p class="login-card-description">Cadastre-se aqui</p>
              <form action="recebecadastro.php" method="post">
              <div class="form-group">
                    <input type="hidden" name"captcha">
                    <label for="name" class="sr-only">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome"
                    required="">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name"captcha">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Endereço de Email"
                    required="">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name"captcha">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email2" class="form-control" placeholder="Confirme o endereço de Email"
                    required="">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Crie uma senha "
                    required="">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password2" class="form-control" placeholder="Confirme a senha"
                    required="">
                  </div>
                  <button type="submit" name="login" id="login" class="btn btn-block login-btn mb-4" value="Login">Criar conta</button> 
                </form>
               <!-- <a href="esqueceuasenha.php" class="forgot-password-link">Esqueceu a senha?</a> -->
                <p class="login-card-footer-text">Já é cadastrado? <a href="index.php" class="text-reset">Clique aqui para logar na sua conta</a></p>
                <nav class="login-card-footer-nav">
                 <!-- <a href="termosdeuso.php">Termos de uso.</a>
                  <a href="politicadeprivacidade.php">Política de Privacidade</a>
                </nav> -->
            </div>
          </div>
        </div>
      </div>
      <!-- . -->
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
