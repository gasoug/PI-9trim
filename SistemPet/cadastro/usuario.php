<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script  src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/script.js"></script>
    <title>Cadastro de Dados Pessoais</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex align-items-center justify-content-center">
        <div class="col-md-6">
            <div class="col-md-12 d-flex align-items-center justify-content-center">
                <a href="index.html"><img src="../img/Logo.png" alt="Logo" class="img-fluid" id="logo"></a>    
            </div>
          <br>
            <h2>Dados Pessoais</h2>
            <!-- Imagem de perfil com borda arredondada -->
            <form id="form" method="post" action="../backend/incluir_usuario.php" enctype="multipart/form-data"> 
                <div class="col-md-3 text-center" id="perfil">
                    <input type="file" class="custom-file-input" id="load" name="arquivo_perfil" accept="*/*">
                    <label class="custom-file-label" id="load" for="load">+</label>                
                </div>
                <h4>Foto de perfil</h4>            
                <br>
                <div class="mb-3">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome"  >
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email"  >
                </div>
                <div class="mb-3">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" maxlength="14" >
                </div>
                <div class="mb-3">
                    <label for="celular">Celular</label>
                    <input type="text" class="form-control" id="celular" name="celular" maxlength="14" >
                </div>
                <div class="mb-3">
                    <label for="data-nascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" id="data-nascimento" name="data-nascimento"  >
                </div>
                <div class="mb-3">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco"  >
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="numero">Número</label>
                        <input type="text" class="form-control" id="numero" name="numero"  >
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="complemento">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="genero">Gênero</label>
                    <select class="form-control" id="genero" name="genero">
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>
                <!-- Seção "Meus Pets" -->
                <h5>Meus Pets</h5>
                <div class="row">
                <div class="col-md-3" id="anexar">
                    <input type="file" class="custom-file-input" id="search" name="arquivo_pet" accept="*/*">
                    <label class="custom-file-label" id="search" for="search">+</label>
                </div>
                    <div class="col-md-9 mb-3">
                        <label for="nome-pet">Nome do Pet</label>
                        <input type="text" class="form-control" id="nome-pet" name="nome-pet"  >
                        <label for="idade-pet">Idade do Pet</label>
                        <input type="text" class="form-control" id="idade-pet" name="idade-pet"  >
                    </div>
                </div>
                <br>
                <div class="mb-3">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" maxlength="50"  >
                </div>          
                <div class="mb-3">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" maxlength="12"  >
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="concordo-termos" name="concordo-termos"  >
                    <label class="form-check-label" for="concordo-termos">Li e concordo com os <a href="./termo/termo-privacidade.pdf" target="_blank" style="color:#C37796;">Termos e condições de uso e Política de privacidade</a>.</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="receber-emails" name="receber-emails">
                    <label class="form-check-label" for="receber-emails">Gostaria de receber novidades por e-mail.</label>
                </div>
                <!-- Botão de Envio -->
                <div class="text-center mb-5">
                    <button type="submit" id="enviar_cadastro" class="btn btn-primary">Enviar Cadastro</button>
                </div>
            </form>    
        </div>
    </div>
</div>
</body>
</html>