<!DOCTYPE html>
<html lang="en">
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
    <title>Página Inicial</title>
</head>
<?php include 'navbar.php' ?> 
<body class="bg-dark">

        <div class="mt-5 container h-100 ">
            <div class="row h-100 justify-content-center ">
                <div class="card w-50 justify-content-center">
                    <div class="card">
                       
                        <h3 class="mt-5 fonte-titulo-entrar-cadastrar card-text text-center">Venha, chegue mais perto e deleite-se...</h3>
                        <p class="text-center card-text mb-3"><small class="text-muted">Há trevas na vida e há luzes, e você é uma das luzes, a luz de todas as luzes</small></p>

                        <div class="card-body d-flex justify-content-center">
                            <form method="POST" action="../php/cadastro-login.php" class="w-50">
                                <input type="hidden" name="tipo-cadastro" value="3" />

                                <div class="form-group">
                                    <input type="text" id="entrar-email" name="email-leitor" placeholder="Email" class="form-control" required/>
                                </div>
                                
                                <div class="form-group">
                                    <input type="password" id="entrar-senha" name="senha-leitor" placeholder="Senha" class="form-control" required/>
                                </div>
                                
                                <div class="form-group">
                                    <button class="btn btn-secondary form-control">Entrar</i></button>
                                </div>
                                
                                <div class="form-group text-center">
                                    <a href="cadastrar.php" class="card-text mb-3"><small class="text-muted">Esqueceu sua senha?</small></a>
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