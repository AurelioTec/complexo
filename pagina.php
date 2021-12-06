<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Escola Nº 1237</title>  
        <meta charset="UTF-8">
        <link rel="icon" href="app/dist/images/ico.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="app/dist/css/personalizado.css">
        <link rel="stylesheet" href="app/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="app/dist/fonts/font/bootstrap-icons.css">
        <link rel="stylesheet" href="app/dist/css/all.css">
        <link rel="stylesheet" href="app/dist/css/navbar.css">
    </head>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
            .imgCircle{
                align-content: center;
                width:64px;
                height: 64px;     
            }
        }
    </style>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">
            <div class="container">
                <img src="app/dist/images/BookWhite.png" width="32" height="32" alt="commercial" class="img"/>
                <a class="navbar-brand" href="index.php">Escola BG Nº1237</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre-empresa.php">Sobre Empresa</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>
                    </ul> 
                    <ul class="navbar-nav navbar-right">

                        <li class="nav-item active">
                            <a class="nav-link" href="app/view/login.php">Entrar</a>
                        </li>
                        <li class="nav-item  active">
                            <a class="nav-link" href="#">Sair</a>
                        </li>
                    </ul>  
                </div>
            </div>
        </nav>

        <div class="jumbotron descr-top">
            <div class="container text-center">
                <h1 class="display-4">Temos a solução que o seu negócio precisa!</h1>
                <p class="lead">Publicitamos o seu négocio ou evento, negociamos com o cliente e entregamos a tempo e hora, simples e facil a um clique.</p>
                <a class="btn btn-primary btn-lg" href="contato.php" role="button">Contato</a>
            </div>
        </div>

        <div class="jumbotron descr-serv">
            <div class="container text-center">
                <h2 class="display-4">Okuyevisa</h2>
                <p class="lead pb-4 para">Torna-se um fornecedor, publicita aqui o seu negocio ou evento e atinge o seu publico alvo com um simples clique.</p>
                <?php
                require './vendor/autoload.php ';
                $url = new Core\ConfigController();
                $url->carregar();
                ?>
                
            </div>
        
        <div class="container text-center">
            <div class="row circlo">
                <div class="col-lg-4">
                    <div class=" rounded-circle circulo centralizar border border-info shadow imageesq">                 
                    </div>
                    <h2 class="mt-4 mb-4">Fabio Aurélio</h2>
                    <h4>Web Designer|Programador</h4>
                    <p>Eng.Informático pela ISPM-Benguela Web Disigner e Programador morador do bairro da Calomanga-Benguela, telf.(+244)998 850 517<br> email: aureliofabio16@gmail.com</p>
                </div>
                <div class="col-lg-4">
                    <div class="rounded-circle circulo centralizar border border-info shadow imagecentro">
                    </div>
                    <h2 class="mt-4 mb-4">Edmar Ernesto</h2>
                    <h4>CEO|Programador</h4>
                    <p>Eng.Informático pela UKB-Benguela fundador da Okuyevisa morador do bairro do Dokota-Benguela, telf.(+244)999 999 999<br> email: edmarernesto@gmail.com
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="rounded-circle circulo centralizar border border-info shadow imagedir">
                    </div>
                    <h2 class="mt-4 mb-4">Nilton Safuluca</h2>
                    <h4>Sócio|Emprendedor</h4>
                    <p>PCA da NEJS-Prestação de Serviçoes e Telecomunicações morador do bairro do Cotél-Benguela, telf.(+244)922 899 247<br> email: niltonsafuluca@gmail.com
                    </p>
                </div>
            </div>
        </div>
    </div> 


<div class="jumbotron footer-per">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4">
                <h5>Okuyevisa</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="index.php" class="link-footer">Home</a>
                    </li>
                    <li>
                        <a href="sobre-empresa.php" class="link-footer">Sobre Empresa</a>
                    </li>
                    <li>
                        <a href="contato.php" class="link-footer">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <h5>Contato</h5>
                <ul class="list-unstyled">
                    <ul class="list-unstyled">
                        <li>
                            <a href="tel: XXXXXXXXXXX" class="link-footer">(+244) 998 850 517</a>
                        </li>
                        <li>
                            <a href="contato.php" class="link-footer">Bairro do Dokota</a>
                        </li>
                        <li>
                            <a href="contato.php" class="link-footer">NIF: XX.XXX.XXX/XXXX-XX</a>
                        </li>
                    </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <h5>Redes Sociais</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#" target="_blank" class="link-footer">Instagram</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="link-footer">Facebook</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="link-footer">Whatsapp</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="app/dist/js/jquery-slim.min.js"></script>  
<script src="app/dist/js/jquery.min.js"></script>    
<script src="app/dist/js/popper.min.js"></script> 
<script src="app/dist/js/feather.min.js"></script>
<script src="app/dist/js/bootstrap.min.js"></script> 
</body>
</html>
