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
        body {
            min-height: 50rem;
            padding-top: 3.5rem;
        }
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
                        <li class="nav-item">
                            <a class="nav-link" href="sobre-empresa.php">Sobre Empresa</a>
                        </li>
                        <li class="nav-item active">
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
        <div class="jumbotron head-contato">
            <div class="container">
                <h1 class="text-center">Contacto</h1>
            </div>            
        </div>
        <div class="jumbotron contato">
            <div class="container">
                <div class="row featurette">
                    <div class="col-md-6 mb-4">
                        <form>
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Nome completo" required>
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Seu melhor e-mail" required>
                            </div>

                            <div class="form-group">
                                <label for="subject">Assunto</label>
                                <input name="subject" type="text" class="form-control" id="subject" placeholder="Assunto da mensagem" required>
                            </div>

                            <div class="form-group">
                                <label for="content">Mensagem</label>
                                <textarea name="content" class="form-control" id="content" rows="3" placeholder="Conteúdo da mensagem" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h3>Entre em contato -(+244) 998 850 517 </h3>
                        <p class="lead">Segunda a Sexta: 08:30 às 12:00 e 13:30 às 18:00</p>
                        <hr>
                        <address>
                            <strong>Endereço.</strong>
                            Bairro do Dokota<br>
                            Benguela - Angola<br>
                            (+244) 998 850 517<br>
                        </address>
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
