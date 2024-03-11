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
    $valor_hospedagem = doubleval($_POST['valor_hospedagem']);
    $valor_formatado = number_format($valor_hospedagem, 2, '.', '');
    $disponibilidade_ini = $_POST['disponibilidade_ini'];
    $disponibilidade_fim = $_POST['disponibilidade_fim'];
    $peso_pet = $_POST['peso_pet'];
    $final_semana = ($_POST['final_semana'] == 'sim') ? true : false;
    $aceita_pet = ($_POST['aceitaPet'] == 'sim') ? true : false;
    $renda_principal = ($_POST['renda_principal'] == 'on') ? true : false;
    $renda_extra = ($_POST['renda_extra'] == 'on') ? true : false;
    $socializacao = ($_POST['socializacao'] == 'on') ? true : false;
    $txt_necessidade = $_POST['txt_necessidade'];

    // Prepara a instrução SQL para inserir os dados na tabela
    $sql = "INSERT INTO prestador (nome, email, cpf, celular, data_nascimento, genero, usuario, senha, foto_perfil, valor_hospedagem, final_semana, disponibilidade_ini, disponibilidade_fim, peso_pet, Pet_Nao_Castrado, renda_principal, renda_extra, socializacao, txt_necessidade)
    VALUES ('$nome', '$email', '$cpf', '$celular', '$data_nascimento', '$genero', '$usuario', '$senha', '$foto_perfil', '$valor_formatado', '$final_semana', '$disponibilidade_ini', '$disponibilidade_fim', '$peso_pet', '$aceita_pet', '$renda_principal', '$renda_extra', '$socializacao','$txt_necessidade')";    

    // Executa a instrução SQL
    if ($conn->query($sql) === TRUE) {
        $resultado  = $conn->query("SELECT COD_PRESTADOR FROM PRESTADOR WHERE USUARIO = '$usuario'");
        if ($resultado->num_rows > 0) {
            // Extrai o valor de cod_usuario do resultado da consulta
            $row = $resultado->fetch_assoc();
            $cod_prestador = $row["COD_PRESTADOR"];
            $sql_pet = "INSERT INTO pet (cod_prestador, nome, idade, anexo) VALUES ('$cod_prestador', '$nome_pet', '$idade_pet', '$foto_pet')";
            $conn->query($sql_pet) or die(mysqli_error($conn));
        }
        echo "<script>Swal.fire('Sucesso', 'Cadastro realizado com sucesso!', 'success').then(function() { window.location = '../index.php'; });</script>";
    } else {
        echo "<script>Swal.fire('Erro', 'Erro ao cadastrar: " . $conn->error . "', 'error');</script>";
    }    
    // Fecha a conexão
    $conn->close();

?>