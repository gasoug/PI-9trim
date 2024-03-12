<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Encontrar Hóspedes</title>
</head>
<body>
<div class="container">    
    <div class="col-md-12 d-flex align-items-center justify-content-center">
        <div class="col-md-6">
        <form id="form" method="post" action="backend/buscar_hospede.php"> 
            <h3>Encontrar Hóspedes</h3>
            <p>Endereço</p>
            <div class="col-md-12 text-center">
                <input type="text" class="form-control" id="login1" name="endereco" required>
            </div>                
            <hr>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="dataDe">Data Entrada</label>
                    <div class="form-group">                            
                        <input type="date" class="form-control" id="dataDe" name="disponibilidade_ini">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dataAte">Data Saída</label>
                        <input type="date" class="form-control" id="dataAte" name="disponibilidade_fim">
                    </div>
                </div>                    
            </div>
            <hr>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="genero">Gênero do pet?</label>
                    <div class="form-group">                            
                        <label>
                            <input type="radio" name="genero" value="macho"> Macho
                        </label>                        
                    </div>                    
                </div>
                <div class="col-md-6">
                    <label for="genero"></label>
                    <div class="form-group"> 
                        <label>
                            <input type="radio" name="genero" value="femea"> Fêmea
                        </label>
                    </div>               
                </div>
            </div>
            <hr>              
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="valorDe">Faixa de preço (por noite)</label>
                    <div class="form-group">                            
                        <input type="date" class="form-control" id="valorDe" name="valorDe">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="valorAte"></label>
                        <input type="date" class="form-control" id="valorAte" name="valorAte">
                    </div>
                </div>                    
            </div>
            <hr>
            <div class="form-group">
                <label for="txt_necessidade">Especializações</label>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="medicamento_oral" name="medicamento_oral">
                    <label class="form-check-label" for="medicamento_oral"> Aplica medicamento Oral</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="medicamento_injetavel" name="medicamento_injetavel">
                    <label class="form-check-label" for="medicamento_injetavel"> Aplica medicamento Injetável</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="aceita_gatos" name="aceita_gatos">
                    <label class="form-check-label" for="aceita_gatos"> Aceita Gatos</label>
                </div>                                
            </div>  
            <br>                          
            <div class="text-center mt-5 mb-5">
                <button type="submit" id="enviar_cadastro" class="btn btn-primary">Buscar</button>
            </div>
        </form>
        </div>
    </div>
</div>      
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>