<?php 
if(!defined('R4F5CC')){
    header('Location: /');
    die('ERRO: Pagina não encontrada');
}
?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">
    <div class="container">
        <img src="<?php echo URL; ?>app/sts/assets/dist/images/BookWhite.png" width="32" height="32" alt="commercial" class="img" />
        <a class="navbar-brand" href="index.php">Escolar Nº 1237</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
                aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link" href="">Entrar</a>
                </li>
                <li class="nav-item  active">
                    <a class="nav-link" href="#">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron descr-top" style="background-image: url('<?php echo URL; ?>app/sts/assets/dist/images/<?php echo $this->dados['topo']['imagemtopo']; ?>')">
    <div class="container text-center">
        <h1 class="display-4"><?php echo $this->dados['topo']['titulotopo']; ?></h1>
        <p class="lead"><?php echo $this->dados['topo']['subtitulotopo']; ?> </p>
        <a class="btn btn-primary btn-lg" href="<?php echo $this->dados['topo']['linkbtntopo']; ?>" role="button"><?php echo $this->dados['topo']['txtbotaotopo']; ?></a>
    </div>
</div>

<div class="jumbotron descr-serv">
    <div class="container text-center">
        <h2 class="display-4"><?php echo $this->dados['tquadro']['tituloquadro']; ?></h2>
        <p class="lead pb-4 para"><?php echo $this->dados['tquadro']['subtituloquadro']; ?></p>
            <div class="row circlo ">
                
        <?php foreach ($this->dados['quadHonra'] as $row) { ?>
                <div class="col-lg-4 ">
                    <div class=" rounded-circle circulo centralizar border border-info shadow imageesq" style="background-image: url('<?php $row['idquadro'] = 3;
        echo URL; ?>app/sts/assets/dist/images/<?php echo $row['foto']; ?>")>
                    </div>
                    <h2 class="mt-4 mb-4"><?php echo $row['nome'] . $row['sobrenome']; ?></h2>
                    <h4><?php echo $row['clasdesc']; ?>Classe-<?php echo $row['descperiodo']; ?></h4>
                    <p>
    <?php echo $row['obs']; ?>
                    </p>
                </div>
               
<?php } ?>
            </div>
    </div>
</div>


  