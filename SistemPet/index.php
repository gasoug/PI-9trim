<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./js/img.js"></script>
  <link rel="stylesheet" href="./css/style.css">
  <title>Formulário de Login</title>
</head>

<body>
  <h3>Entre ou cadastre-se</h3>
  <div class="container-ini">
    <div class="row">
      <div class="col-md-12 d-flex align-items-center justify-content-center">
        <!-- Conteúdo centralizado -->
        <div class="col-md-6">
          <div class="col-md-12 d-flex align-items-center justify-content-center">
            <a href="index.php"><img src="./img/Logo.png" alt="Logo" class="img-fluid" id="logo"></a>    
          </div>
          <form id="form" method="post" action="backend/logar.php"> 
            <div class="mb-3">
              <label for="login1">Login:</label>
              <input type="text" class="form-control" id="login1" name="login" required>
            </div>
            <div class="mb-3">
              <label for="senha1">Senha:</label>
              <input type="password" class="form-control" id="senha1" name="senha" required>
            </div>
            <div class="mb-3 d-flex justify-content-between align-items-center">
              <label for="lembrar-senha" class="mb-0">
                <input type="checkbox" id="lembrar-senha" name="lembrar-senha"> Lembrar senha
              </label>
              <a href="#" id="recovery">Recuperar senha</a>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary" id="logar" onclick="carregar()">Logar</button>
              <br>
              <br>              
            </div>
          </form>
          <h5 class="text-center">Não possui cadastro?</h5>
          <br>
          <div class="mb-2 text-center">
            <a href="cadastro/usuario.php"><button class="btn btn-primary" id="cadastrar">Cadastrar</button></a>
          </div>
          <br>
          <div class="mb-2 text-center">
            <a href="cadastro/host.php"><button class="btn btn-secondary" id="host">Quero ser host</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>