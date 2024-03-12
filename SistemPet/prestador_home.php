<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/img.js"></script>
    <title>Cadastro de Dados Pessoais</title>
</head>
<body>
<div class="container">    
    <div class="col-md-12 d-flex align-items-center justify-content-center">
        <div class="col-md-6">
            <div class="col-md-12 d-flex align-items-center justify-content-center">
                <a href="index.php"><img src="./img/Logo.png" alt="Logo" class="img-fluid" id="logo"></a>    
            </div>
            <br>
            <h2>Dados Pessoais</h2>
            <div class="col-md-3 text-center" id="perfil">
                <img src="" alt="load" class="img-fluid" id="load" name="arquivo_perfil">
            </div>
            <?php            
                if(isset($_GET['nome'])) {
                    // Recupera o nome completo do usuário da URL
                    $nomeCompleto = $_GET['nome'];
                    echo '<h3>' . $nomeCompleto . '</h3>';
                }                
            ?>
            <br>
            <div class="row">
                <div class="col-md-4">
                </div>                
            </div>
            <br>
            <br>
            <hr>
            <div class="text-left mt-5 mb-5">
                <p class="text-left">Sobre</p>
                <input type="text" name="sobre" id="sobre">
            </div>
            <hr>
            <div class="text-left mt-5 mb-5">
                <p class="text-left">Especializações</p>             
            </div>
            <hr>
            <div class="text-left mt-5 mb-5">
                <p class="text-left">Avaliações</p>
                <input type="text" name="avaliacoes" id="avaliacoes">            
            </div>
        </div>
    </div>
</div>      
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>