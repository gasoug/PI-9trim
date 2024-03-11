<?php
    require_once 'root.php'; 
    
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';

    $sistema = new sistema(); 
    $conn = mysqli_connect($sistema->server, $sistema->user, $sistema->pass, $sistema->bd) or die(mysqli_error($conn));

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Consulta SQL para verificar se o login e a senha correspondem a um registro no banco de dados
    $sql_usuario = "SELECT * FROM usuarios WHERE usuario='$login' AND senha='$senha'";
    $result_usuario = $conn->query($sql_usuario);

    $sql_prestador = "SELECT * FROM prestador WHERE usuario='$login' AND senha='$senha'";
    $result_prestador = $conn->query($sql_prestador);

    // Verifica se o resultado da consulta retornou algum registro
    if ($result_usuario->num_rows > 0) {
        $row = $result_usuario->fetch_assoc();
        $nome_usuario = $row['Nome'];
        echo "<script>alert('sucesso_usuario')</script>";
        header("Location: ../usuario_home.php?nome=" . $nome_usuario);        
    } else if ($result_prestador->num_rows > 0) {
        $row = $result_prestador->fetch_assoc();
        $nome_prestador = $row['Nome'];
        echo "<script>alert('sucesso_prestador')</script>";
        header("Location: ../prestador_home.php?nome=" . $nome_prestador);        
    } else {
        echo "<script>Alert('Dados incorretos. Verifique" . $conn->error . ");</script>";
        echo "<script>console.log('falha')</script>";
        header("Location: ../index.php");
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
?>