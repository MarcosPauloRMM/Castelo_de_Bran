<?php

$tipo = $_GET['tipo'] ?? null;

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/5804ca3769.js"></script>
    <script ype="module" src="../js/index.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/comum.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="estilos/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilos/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="estilos/style.css"/>
    <script src="../js/index.js"></script>
    <script src="../js/cadastro-login.js"></script>
    <title>Página Inicial</title>
</head>
<?php include 'navbar.php' ?> 
<body class="bg-dark">
    <div class="container-fluid">
                <div class="mt-5 container h-100 ">
            <div class="row h-100 justify-content-center ">
                <div class="card w-50 justify-content-center">
                    <div class="card">
                       
                        <h3 class="mt-5 fonte-titulo-entrar-cadastrar card-text text-center" id="titulo-card">Bem vindo ao Castelo de Bran</h3>
                        <p class="text-center card-text mb-3"><small class="text-muted" id="legenda-titulo-card">É nos fracassos que aprendemos e não no delírio do sucesso!</small></p>
                        
                        
                        <div class="card-body d-flex justify-content-center">
                            <form class="w-50" name="cadastro-senha" id="cadastro-login" method="POST" action="../php/cadastro-login.php">
                                <input type="hidden" name="tipo-cadastro" id="tipo-cadastro" value="<?= $tipo ?>"/>
                                <div class="form-group">
                                    <input type="email" id="cadastrar-email" placeholder="Email" name="email-validacao" class="form-control" required/>
                                    <div class="invalid-feedback">
                                       Preencha seu email antes de continuar
                                    </div>
                                </div>

                                <div id="div-codigo-recuperar-senha" class="d-none">
                                    <div class="form-group">
                                        <input type="text" id="input-codigo-troca-senha" data-mask="000-000" placeholder="000-000" class="form-control" required/>
                                        <div class="invalid-feedback">
                                           Preencha seu email antes de continuar
                                        </div>
                                    </div>
                                </div>
                                <div class="d-none" id="div-nova-senha">
                                    <div class="form-group">
                                        <input type="password" id="nova-senha" placeholder="Nova senha" class="form-control" name="senha-validacao" required/>
                                    </div>
    
                                    <div class="form-group">
                                        <input type="password" id="confirma-nova-senha" placeholder="Confirmar nova senha" class="form-control" required/>
                                    </div>
                                    <p class="text-center d-none mb-3" id="p-mensagem-senha"><small class="text-danger" id="mensagem-senha"></small></p>
                                </div>
                                <div id="novo-cadastro" class="d-none">
                                    <div class="form-group">
                                        <input type="text" name="nome-leitor" id="nome-cadastro" placeholder="Nome completo" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email-leitor" id="email-cadastro" placeholder="Email" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="confirma-email-cadastro" placeholder="Confirmar email" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="senha-leitor" id="senha-cadastro" placeholder="Senha" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="mb-5 btn btn-secondary form-control" id="avancar-cadastro">Avançar</i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
</body>
</html>