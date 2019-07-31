<?php require_once("head.php"); ?>

<?php 

session_start();

?>

<header>
    <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light shadow-sm p-3 mb-5">
        <div class="container">

            <!--cabeçalho logo e nome--->
            <a href="index.php" class="navbar-brand d-flex align-items-center">
                <img src="img/light-bulb (4).png" alt="imagem_logo" class="d-inline-block">
                <span>Nome da Rede</span>
            </a>
            <!--fim cabeçalho logo e nome-->

            <!--menu collapse-->

            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="nav-principal">
                <ul class="navbar-nav list-unstyle ml-auto">
                    <li class="nav-item"><a href="#" class="nav-link text-success">Comunidades</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-success">Mensagens</a></li>
                    <li class="nav-item"><a href="home.php" class="nav-link text-success">Voltar</a></li>
                    <li class="nav-item"><a href="logoff.php" class="nav-link text-success">Sair</a></li>
                </ul>
            </div>
            <!--fim -menu collapse-->

            <!--inicio menu cabeçalho-->

            <div class="media">
                <img class="ml-3" style="width:50px;" src="img/perfil.png" alt="Imagem de exemplo genérica">
            </div>
        </div>
        <!--fim menu cabeçalho-->
    </nav>
</header>
<main class="container">


</main>
<section class="container">
    <div class="row">

        <aside class="col-lg-2 col-sm-12">
            <img src="img/perfil.png" style="width:100px;">
        </aside>
        <form class="col-lg-10 col-sm-12">
            <div class="form-group">
                <label for="">Nome</label>
                <input type="text" class="form-control" id="" aria-describedby="" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="">Sobrenome</label>
                <input type="text" class="form-control" id="" placeholder="Digite seu Sobrenome">
            </div>
            <div class="form-group">
                <label for="1">País</label>
                <input type="text" class="form-control" id="" placeholder="Digite o seu País">
            </div>
            <div class="form-group">
                <label for="1">Estado</label>
                <input type="text" class="form-control" id="" placeholder="Digite o seu Estado">
            </div>
            <div class="form-group">
                <label for="">Cidade</label>
                <input type="text" class="form-control" id="" placeholder="Digite a sua Cidade">
            </div>
            <div class="form-group">
                <label for="">Interesses</label>
                <input type="text" class="form-control" id="" placeholder="Digite o seus Interesses">
            </div>

            <button type="submit" class="btn btn-success  mt-2">Submit</button>
        </form>
    </div>
</section>

<?php require_once("footer.php"); ?>