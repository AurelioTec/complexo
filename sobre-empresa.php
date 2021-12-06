<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Okuyevisa-Home</title>  
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
        }
    </style>
    <body>
         <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">
            <div class="container">
                <img src="app/dist/svgs/commercial.png" width="32" height="32" alt="commercial" class="img"/>
                <a class="navbar-brand" href="index.php">Okuyevisa</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="sobre-empresa.php">Sobre Empresa</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>
                    </ul> 
                    <ul class="navbar-nav navbar-right">
                        <li class="nav-item active">
                            <a class="nav-link" href="app/view/login.php">Login</a>
                        </li>
                        <li class="nav-item  active">
                            <a class="nav-link" href="#">Cadastrar</a>
                        </li>
                    </ul>  
                </div>
            </div>
        </nav>

        <div class="jumbotron head-sobre">
            <div class="container">
                <h1 class="text-center">Sobre a Empresa</h1>
            </div>            
        </div>

        <div class="jumbotron sobre">
            <div class="container">
                <div class="row featurette">
                    <div class="col-md-9 order-md-2">
                        <h2 class="featurette-heading">Projecto</h2>
                        <p class="lead">O Okuyevisa é uma plataforma que permite as empresas, comerciantes, prestadores de serviços e público em geral publicitar seus produtos ou serviços a nível local.</p>
                    </div>

                    <div class="col-md-3 order-md-1">
                        <img src="app/dist/fonts/icons/award.svg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="150" height="150" alt="Detalhes do serviços...">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-9 order-md-2">
                        <h2 class="featurette-heading">Objectivos</h2>
                        <p class="lead">Facilitar a criação de uma montra de vendedores e prestadores de serviços a nível do município.<br>
                            Facilitar aos vendedores e prestadores de serviços anunciarem suas ofertas e promoções.<br>
                            Facilitar ao publico conhecer os melhores vendedores e prestadores de serviço do município.
                        </p>
                    </div>

                    <div class="col-md-3 order-md-1">
                        <img src="app/dist/fonts/icons/graph-up.svg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="150" height="150" alt="Detalhes do serviços...">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-9 order-md-2">
                        <h2 class="featurette-heading">Visão/Parceria</h2>
                        <p class="lead">Ajustar a nossa plataforma de acordo as necessidades dos nossos parceiros.<br>
                            Parceiros: Fornecedores de produtos e serviços, público pesquisador de produtos e serviços.
                        </p>
                    </div>

                    <div class="col-md-3 order-md-1">
                        <img src="app/dist/fonts/icons/people.svg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="150" height="150" alt="Detalhes do serviços...">
                    </div>
                </div>
                <hr class="featurette-divider"> 
                <div class="container text-center">
                    <div class="row circlo">
                        <div class="col-lg-4">
                            <div class="rounded-circle circulo centralizar border border-info shadow">
                                <i class="bi-megaphone-fill"></i>
                            </div>
                            <h2 class="mt-4 mb-4">Publicidade</h2>
                            <p>O seu negócio ou evento publicado aqui na okuyevisa e nos ajudammos a espalhar atravez de outras mideas sociais para qualquer canto de Benguela.</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="rounded-circle circulo centralizar border border-info shadow">
                                <i class="bi-bicycle"></i>
                            </div>
                            <h2 class="mt-4 mb-4">Entrega</h2>
                            <p>Disponibilizamos serviços de entrega dos seus produtos a clientes de qualquer parte da cidade de Benguela, a entrega é feita a tempo e hora das 8h as 18h.</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="rounded-circle circulo centralizar border border-info shadow">
                                <i class="bi-geo-alt-fill"></i>
                            </div>
                            <h2 class="mt-4 mb-4">Ponto de entrega</h2>
                            <p>Nós estamos em Benguela nos seguites Bairros: Dokota, Cotel, Centro da Cidade, Vila das Acacias, Navegantes, Casseque, Caponte City, Setenta, entre outros.</p>
                        </div>
                    </div>
                    <hr class="featurette-divider">
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
                                    <a href="contato.php" class="link-footer">Bairro do Dokota </a>
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
