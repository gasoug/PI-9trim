<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
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
                <input type="file" class="custom-file-input" id="load" name="arquivo" accept="*/*">
                <label class="custom-file-label" id="load" for="load">+</label>
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
                    <img src="https://www.patasdacasa.com.br/sites/default/files/styles/webp/public/2023-06/golden-retriever0.jpg.webp?itok=fHXM1X62" alt="Logo" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://www.patasdacasa.com.br/sites/default/files/styles/webp/public/2023-06/golden-retriever0.jpg.webp?itok=fHXM1X62" alt="Logo" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://www.patasdacasa.com.br/sites/default/files/styles/webp/public/2023-06/golden-retriever0.jpg.webp?itok=fHXM1X62" alt="Logo" class="img-fluid">
                </div>
            </div>            
            <div class="text-center mt-5 mb-5">
                <a href="buscar_hospede.php"><button class="btn btn-primary" id="cadastrar">Encontrar Hóspede</button></a>
            </div>
        </div>
    </div>
</div>      
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>