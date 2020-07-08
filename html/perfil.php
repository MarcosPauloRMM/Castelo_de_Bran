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
    <script src="../js/cadastro-login.js"></script>
    <title>Página Inicial</title>
</head>
<body class="bg-dark">
<?php include 'navbar.php' ?> 

<?php
require_once '../php/conexao.php';
session_start();

try{
    
$codigousuario = $_SESSION['cd_leitor'];
echo($codigousuario);
$select = "SELECT h.cd_leitor
FROM historia h WHERE h.cd_leitor = :codigo DESC";   
$stmt = $conexao->prepare($select);

$stmt->bindParam(':codigo',$codigousuario);

echo($codigousuario);
$sucesso = $stmt->execute();

    $historias = null;
    if ($sucesso === true) {
        while ($leitores = $stmt->fetch()){
            $historias[] = [
                'nomeHistoria' => $leitores['nomeHistoria'],
            ];
        }
        
    }
    
}catch(Exception $e) {
    echo 'Exception -> ';
    var_dump($e->getMessage());
}

?>
<?php if (!is_null($historias)) { ?>
    
        <div class="mt-3 container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="card w-75">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">Minhas Histórias:</h5>
                        </div>
                            <?php foreach ($historias as $historia) : ?>
                                <h5><a href="/html/historia.php"><?=$historia['nomeHistoria']?></a></h5>
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