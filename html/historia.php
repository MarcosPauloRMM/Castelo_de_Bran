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
<body class="bg-dark">
<?php include 'navbar.php' ?> 
<?php
require '../php/conexao.php';
try{
    $select = "SELECT l.nm_leitor nomeLeitor, h.nm_historia nomeHistoria, h.ds_genero generoHistoria, h.ds_conteudo conteudoHistoria 
    FROM historia h INNER JOIN leitor l on h.cd_leitor = l.cd_leitor
     ORDER BY h.cd_historia DESC";        
    $comando = $conexao->prepare($select);
    
    $sucesso = $comando->execute();
    
    $historias = null;
    if ($sucesso === true) {
        while ($leitores = $comando->fetch()){
            $historias[] = [
                'nomeAutor' => $leitores['nomeLeitor'],
                'nomeHistoria' => $leitores['nomeHistoria'],
                'generoHistoria' => $leitores['generoHistoria'],
                'conteudoHistoria' => $leitores['conteudoHistoria']
            ];
        }
        
    }
    
}catch(Exception $e) {
    echo 'Exception -> ';
    var_dump($e->getMessage());
}

?>
<?php if (!is_null($historias)) { ?>
    <?php foreach ($historias as $historia) : ?>
        <div class="mt-3 container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="card w-75">
                    <div class="card">
                        <div class="card-body">
                            
                        </div>
                            <h5>Titulo: <?=$historia['nomeHistoria']?></h5>
                            <h5>Autor: <?=$historia['nomeAutor']?></h5>
                            <p class="card-text"><small class="text-muted"><?=$historia['generoHistoria']?></small></p>
                            <p class="card-text text-left ml-5"><?=$historia['conteudoHistoria']?></p>
                        </div>
                </div>
            </div>
        </div>
    <?php endforeach?>
<?php }else{ ?>
    <div class="h-100">
        <div class="row h-100 justify-content-center align-items-center">
        <div class="alert alert-danger" role="alert">
            <div class="align-middle" >
               <h5 class="mt-5" >Seja bem vindo ao castelo, chegue mais perto e conte a sua história...</h5>
            </div>
        </div>
            
        </div>
    </div>
<?php }?>
</body>