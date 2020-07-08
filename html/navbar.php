<?php
if (!isset($_SESSION['leitor'])){
    session_start();
}

?>


<p class="text-danger"><nav class="navbar navbar-dark bg-danger"></p>
    <!-- Brand -->
    <a class="navbar-brand" href="index.php">Castelo de Bran</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="autores.php">Todos os Autores <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="projeto.php">Meu Projeto <span class="sr-only">(current)</span></a>
                </li>
                <?php if(isset($_SESSION['leitor'])){?>
                    

                    
                    <li class="nav-item active">
                        <a class="nav-link" id="perfil" href="/html/perfil.php" tabindex="-1" aria-disabled="true"><?=$_SESSION['leitorNome']?></a>
                    </li>

                    <li class="nav-item active">
                    <p class="font-weight-light"><a href="../php/sair-sessao.php" class="btn btn-outline-light">Logout</a></p>
                    </li>
                <?php } else{ ?>
                    <li class="nav-item active">
                        <a class="nav-link" id="entrar" href="/html/entrar.php" tabindex="-1" aria-disabled="true">Login</a>
                    </li>

                <?php } ?>

                <?php if (!isset($_SESSION['leitor'])){?>
                    <a class="btn btn-outline-light" id="cadastrar" href="/html/cadastrar.php">Cadastrar</a>
                <?php } ?>
        </ul>
    </div> 
</nav>
