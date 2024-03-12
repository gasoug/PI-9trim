<?php
    require_once 'root.php'; 

    $sistema = new sistema(); 
    $conn = mysqli_connect($sistema->server, $sistema->user, $sistema->pass, $sistema->bd) or die(mysqli_error($conn));

    $login = $_POST['login'];

    // Query para buscar a imagem do banco de dados
    $resultado = $conn->query("SELECT * FROM prestador WHERE usuario = '$login'");
    if ($resultado->num_rows > 0) {               
        $row = $resultado->fetch_assoc();

        // Codificar a imagem blob como base64
        $imagem_base64 = base64_encode($row['foto_perfil']);
        $imagem_src = 'data:image/jpeg;base64,' . $imagem_base64; // Assumindo que a imagem é JPEG, ajuste conforme necessário

        // Adicionar a fonte da imagem ao array de resposta
        $retorno = ['imagem' => $imagem_src];
        header("Content-Type: aplication/json");

        echo json_encode($retorna);
    } else {
        echo json_encode(['error' => 'Login não fornecido']);
    }

?>
