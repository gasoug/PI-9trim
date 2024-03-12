<?php
    require_once 'root.php'; 

    $sistema = new sistema(); 
    $conn = mysqli_connect($sistema->server, $sistema->user, $sistema->pass, $sistema->bd) or die(mysqli_error($conn));
    
    $endedeco = $_POST['endereco'];
    $disponibilidade_ini = $_POST['disponibilidade_ini'];
    $disponibilidade_fim = $_POST['disponibilidade_fim'];
    $valorDe = $_POST['valorDe'];
    $valorAte = $_POST['valorAte'];
    $genero = $_POST['genero'];
    $medicamento_oral = ($_POST['medicamento_oral'] == 'on') ? 1 : 0;
    $medicamento_injetavel = ($_POST['medicamento_injetavel'] == 'on') ? 1 : 0;
    $aceita_gatos = ($_POST['aceita_gatos'] == 'on') ? 1 : 0;

    $resultado = $conn->query("SELECT p.foto_perfil, p.nome, p.valor_hospedagem, a.estrelas FROM prestador p left join endereco e on e.cod_prestador = p.cod_prestador left join avaliacao a on a.cod_prestador = p.cod_prestador WHERE e.logradouro like '"%'$endedeco'%"' p.disponibilidade_ini = '$disponibilidade_ini' and p.disponibilidade_fim = '$disponibilidade_fim' and p.valor_hospedagem >= '$valorDe' and p.valor_hospedagem <= '$valorAte' and(p.medicamento_oral = '$medicamento_oral' or p.medicamento_injetavel = '$medicamento_injetavel' or p.aceita_gatos = '$aceita_gatos')");
    if ($resultado->num_rows > 0) {               
        $row = $resultado->fetch_assoc();
    }
?>