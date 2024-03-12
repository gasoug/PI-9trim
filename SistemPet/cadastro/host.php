<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro de Dados Pessoais</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="col-md-12 d-flex align-items-center justify-content-center">
                    <a href="../index.php"><img src="../img/Logo.png" alt="Logo" class="img-fluid" id="logo"></a>    
                </div>
                <br>
                <h2>Dados Pessoais</h2>
                <!-- Imagem de perfil com borda arredondada -->
                <form id="form" method="post" action="../backend/incluir_host.php" enctype="multipart/form-data"> 
                    <div class="col-md-3 text-center" id="perfil">
                    <input type="file" class="custom-file-input" id="load" name="arquivo_perfil" accept="image/jpeg, image/jpg, image/png">
                        <label class="custom-file-label" id="load" for="load">+</label>                
                    </div>
                    <h4>Foto de perfil</h4>            
                    <br>
                    <div class="mb-3">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required>
                    </div>
                    <div class="mb-3">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control" id="celular" name="celular" required>
                    </div>
                    <div class="mb-3">
                        <label for="data-nascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" id="data-nascimento" name="data-nascimento" required>
                    </div>
                    <div class="mb-3">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" required>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control" id="numero" name="numero" required>
                        </div>
                        <div class="col-md-8">
                            <label for="complemento">Complemento</label>
                            <input type="text" class="form-control" id="complemento" name="complemento">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="genero">Gênero</label>
                        <select class="form-control" id="genero" name="genero">
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>
                    <h5>Meus Pets</h5>
                    <div class="row">
                    <div class="col-md-3" id="anexar">
                        <input type="file" class="custom-file-input" id="search" name="arquivo_pet" accept="image/jpeg, image/jpg, image/png">
                        <label class="custom-file-label" id="search" for="search">+</label>
                    </div>
                        <div class="col-md-9 mb-3">
                            <label for="nome-pet">Nome do Pet</label>
                            <input type="text" class="form-control" id="nome-pet" name="nome-pet"  >
                            <label for="idade-pet">Idade do Pet</label>
                            <input type="text" class="form-control" id="idade-pet" name="idade-pet"  >
                        </div>
                    </div>
                    <br>            
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="valor_hospedagem">Valor da Hospedagem</label>
                                <input type="text" class="form-control" id="valor_hospedagem" name="valor_hospedagem" placeholder="Digite o valor">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Disponível final de semana</label>
                            <div class="form-group form-check">
                                <input type="radio" class="form-check-input" id="disponivelSim" name="final_semana" value="sim">
                                <label class="form-check-label" for="disponivelSim">Sim</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="radio" class="form-check-input" id="disponivelNao" name="final_semana"  value="nao">
                                <label class="form-check-label" for="disponivelNao">Não</label>
                            </div>
                        </div>
                    </div>     
                    <div class="row mt-3">
                        <label>Período Disponível:</label>
                        <div class="col-md-6">
                            <label for="dataDe">De</label>
                            <div class="form-group">                            
                                <input type="date" class="form-control" id="dataDe" name="disponibilidade_ini">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dataAte">Até</label>
                                <input type="date" class="form-control" id="dataAte" name="disponibilidade_fim">
                            </div>
                        </div>                    
                    </div>
                    <br>
                    <div class="row">
                        <br>
                        <label>Peso do Pet</label>
                        <div class="col d-flex justify-content-evenly">
                            <label for="pesoPet">8<span id="pesoPetValue"></label>                        
                        </div>            
                        <div class="col d-flex justify-content-evenly">
                            <label for="pesoPet">40+ <span id="pesoPetValue"></label>                        
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                <div class="col d-flex justify-content-start">
                                    <label for="pesoPet">Até<span id="pesoPetValue"></label>                        
                                </div>            
                            </div>                    
                            <div class="col-md-10">
                                <input type="range" id="pesoPet" min="8" max="40" name="peso_pet">                        
                            </div>  
                            <div class="col-md-1">
                                <div class="col d-flex justify-content-end">
                                    <label for="pesoPet">Kg<span id="pesoPetValue"></label>                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="genero">Aceita Pet que não seja cadastrado?</label>
                            <div class="form-group">
                            <br>                     
                                <label>
                                    <input type="radio" class="form-check-input" name="aceitaPet" value="sim"> Sim
                                </label>                        
                            </div>                    
                        </div>
                        <div class="col-md-6">
                            <label for="genero"></label>
                            <div class="form-group"> 
                            <br>
                                <label>
                                    <input type="radio" class="form-check-input" name="aceitaPet" value="nao"> Não
                                </label>
                            </div>               
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="necessidades">Necessidades e objetivos:</label>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="renda_principal" name="renda_principal">
                                    <label class="form-check-label" for="renda_principal">Obter Renda Principal</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="renda_extra" name="renda_extra">
                                    <label class="form-check-label" for="renda_extra">Obter Renda Extra</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="socializacao" name="socializacao">
                                    <label class="form-check-label" for="socializacao">Socialização</label>
                                </div>                                
                            </div>                            
                        </div>                        
                        <div class="mb-6">
                            <br>
                            <label for="txt_necessidade">Outras Necessidades e Objetivos</label>
                            <textarea class="form-control" id="txt_necessidade" name="txt_necessidade" maxlength="200"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-6 mb-6">
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
                        </div>
                    <div class="mb-3">
                    <br>
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" maxlength="50"  >
                    </div>   
                    <!-- Senha -->
                    <div class="mb-3">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" maxlength="12" required>
                    </div>
                    <!-- Checkbox para concordar com os termos -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="concordo-termos" name="concordo-termos" required>
                        <label class="form-check-label" for="concordo-termos">Li e concordo com os <a href="./termo/termo-privacidade.pdf" target="_blank" style="color:#C37796;">Termos e condições de uso e Política de privacidade</a>.</label>
                    </div>
                    <!-- Checkbox para receber emails -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="receber-emails" name="receber-emails">
                        <label class="form-check-label" for="receber-emails">Gostaria de receber novidades por e-mail.</label>
                    </div>
                    <!-- Botão de Envio -->
                    <div class="text-center mb-5">
                        <button type="submit" id="enviar_cadastro" class="btn btn-primary">Enviar Cadastro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>