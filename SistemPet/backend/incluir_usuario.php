<?php
    require_once 'root.php'; 
    
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';

    $sistema = new sistema(); 
    $conn = mysqli_connect($sistema->server, $sistema->user, $sistema->pass, $sistema->bd) or die(mysqli_error($conn));
    if(isset($_FILES['arquivo_perfil']) && $_FILES['arquivo_perfil']['error'] === UPLOAD_ERR_OK) {
        $arquivo_perfil = $_FILES['arquivo_perfil']['tmp_name'];
        $foto_perfil = addslashes(file_get_contents($arquivo_perfil));
    }

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $celular = $_POST['celular'];
    $data_nascimento = $_POST['data-nascimento'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $genero = $_POST['genero'];

    if(isset($_FILES['arquivo_pet']) && $_FILES['arquivo_pet']['error'] === UPLOAD_ERR_OK) {
        $arquivo_pet = $_FILES['arquivo_pet']['tmp_name'];
        $foto_pet = addslashes(file_get_contents($arquivo_pet));
    }

    $nome_pet = $_POST['nome-pet'];
    $idade_pet = $_POST['idade-pet'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Prepara a instrução SQL para inserir os dados na tabela
    $sql = "INSERT INTO usuarios (nome, email, cpf, celular, data_nascimento, genero, usuario, senha, foto_perfil)
    VALUES ('$nome', '$email', '$cpf', '$celular', '$data_nascimento', '$genero', '$usuario', '$senha', '$foto_perfil')";    

    // Executa a instrução SQL
    if ($conn->query($sql) === TRUE) {
        $resultado  = $conn->query("SELECT COD_USUARIO FROM USUARIOS WHERE USUARIO = '$usuario'");
        if ($resultado->num_rows > 0) {
            // Extrai o valor de cod_usuario do resultado da consulta
            $row = $resultado->fetch_assoc();
            $cod_usuario = $row["COD_USUARIO"];
            $sql_pet = "INSERT INTO pet (cod_usuario, nome, idade, anexo) VALUES ('$cod_usuario', '$nome_pet', '$idade_pet', '$foto_pet')";
            $sql_endereco = "INSERT INTO endereco (cod_usuario, logradouro, numero) VALUES ('$cod_usuario', '$endereco', '$numero')";
            $conn->query($sql_pet) or die(mysqli_error($conn));
            $conn->query($sql_endereco) or die(mysqli_error($conn));
        }
        echo "<script>alert('Cadastro realizado com sucesso!'); window.location = '../index.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar: " . $conn->error . "'); </script>";
    }    
    // Fecha a conexão
    $conn->close();

?>