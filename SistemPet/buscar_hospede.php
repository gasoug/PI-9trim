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
            <h3>Encontrar Hóspedes</h3>
            <p>Endereço</p>
            <div class="col-md-3 text-center">
                <input type="text" class="form-control" id="login1" name="login" required>
            </div>                
            <hr>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="dataDe">Data Entrada</label>
                    <div class="form-group">                            
                        <input type="date" class="form-control" id="dataDe">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dataAte">Data Saída</label>
                        <input type="date" class="form-control" id="dataAte">
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
                    <label for="dataDe">Faixa de preço (por noite)</label>
                    <div class="form-group">                            
                        <input type="date" class="form-control" id="dataDe">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dataAte"></label>
                        <input type="date" class="form-control" id="dataAte">
                    </div>
                </div>                    
            </div>
            <hr>
            <div class="text-center mt-5 mb-5">
                <button type="submit" id="enviar_cadastro" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </div>
</div>      
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>