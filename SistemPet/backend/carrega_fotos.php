<?php
    require_once 'root.php'; 
    
    $sistema = new sistema(); 
    $conn = mysqli_connect($sistema->server, $sistema->user, $sistema->pass, $sistema->bd) or die(mysqli_error($conn));
    
    $login = $_POST['login'];
    $login2 = $_GET['login'];

    // Query para buscar a imagem do banco de dados (substitua "sua_tabela" pelo nome da sua tabela e "seu_campo_blob" pelo nome do campo BLOB onde a imagem está armazenada)
    $query = $conn->prepare("SELECT foto_perfil FROM prestador WHERE login = '$login'");
    $query->execute([$login]);
    $resultado = $query->fetch();

    if ($resultado) {
        // Define o tipo de conteúdo como imagem
        header("Content-Type: image/jpeg"); // Altere o tipo de imagem conforme necessário    
        // Exibe a imagem
        echo $resultado['foto_perfil'];
    } else {
        // Se a imagem não for encontrada, retorne uma imagem de substituição
        header("Content-Type: image/jpeg"); // Altere o tipo de imagem conforme necessário
        readfile("./img/default_image.jpg"); // Substitua pelo caminho da sua imagem de substituição
    }
?>