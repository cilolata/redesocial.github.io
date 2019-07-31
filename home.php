<?php

session_start();


?>

<?php require_once("head.php"); ?>

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
                    <li class="nav-item"><a href="perfil.php" class="nav-link text-success">Perfil</a></li>
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
<!--inicio main-->
<main class="container" id="main-profile">

    <!--inicio section pesquisar-->
    <section class="pesquisar">
        <h4 class=" paragrafo-pesquisar text-center text-capitalize font-weight-light ">Ache um grupo ou
            atividade e
            junte-se para transformar a sua comunidade</h4>
        <div class="d-flex mt-4">
            <div class="input-group d-flex justify-content-center">
                <input type="text" class="input-group-text bg-white" style="width:500px;" id="" placeholder="Pesquisar">
                <button type="button" class="btn btn-link"><img src="img/search.png" style="width:40px;" class="ml-2" alt=""></button>
            </div>
        </div>
    </section>
    <!--fim section pesquisar-->

    <!--inicio minhas comunidades-->
    <section class="minhas_comunidades mt-5">
        <h5 class="text-success"> Minhas Comunidades</h5>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 cardAnuncioCont">
                <div class="card d-block">
                    <img class="card-img-top" src="img\imagem1.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Título do card</h5>
                        <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer
                            preencher o conteúdo do card.</p>
                        <a href="#" class="btn btn-success">Visitar</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 cardAnuncioCont">
                <div class="card d-block">
                    <img class="card-img-top" src="img\imagem1.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Título do card</h5>
                        <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer
                            preencher o conteúdo do card.</p>
                        <a href="#" class="btn btn-success">Visitar</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 cardAnuncioCont">
                <div class="card d-block">
                    <img class="card-img-top" src="img\imagem1.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Título do card</h5>
                        <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer
                            preencher o conteúdo do card.</p>
                        <a href="#" class="btn btn-success">Visitar</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 cardAnuncioCont">
                <div class="card d-block">
                    <img class="card-img-top" src="img\imagem1.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Título do card</h5>
                        <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer
                            preencher o conteúdo do card.</p>
                        <a href="#" class="btn btn-success">Visitar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<!--inicio main-->
<?php require_once("footer.php"); ?>