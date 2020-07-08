<?php
require '../php/conexao.php';

try{
    $select = "SELECT l.nm_leitor nomeLeitor, h.nm_historia nomeHistoria, h.ds_genero generoHistoria, h.ds_sinopse sinopseHistoria FROM historia h INNER JOIN leitor l on h.cd_leitor = l.cd_leitor ORDER BY h.cd_historia DESC";        
    $comando = $conexao->prepare($select);
    
    $sucesso = $comando->execute();
    
    $historias = null;
    if ($sucesso === true) {
        while ($leitores = $comando->fetch()){
            $historias[] = [
                'nomeAutor' => $leitores['nomeLeitor'],
                'nomeHistoria' => $leitores['nomeHistoria'],
                'generoHistoria' => $leitores['generoHistoria'],
                'sinopseHistoria' => $leitores['sinopseHistoria']
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
                        <h5 class="card-header">NOVA HISTÓRIA</h5>
                        <div class="card-body">
                            <span class="text-right">Autor: <?=$historia['nomeAutor']?></span>
                        </div>
                            <h5 class="card-title"><?=$historia['nomeHistoria']?></h5>
                            <p class="card-text"><small class="text-muted"><?=$historia['generoHistoria']?></small></p>
                            <p class="card-text text-left ml-5"><?=$historia['sinopseHistoria']?></p>
                            <a href="/html/historia.php" class="btn btn-danger">Ver mais</a>
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