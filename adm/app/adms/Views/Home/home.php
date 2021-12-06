<?php 
if(!defined('R4F5CC')){
    header('Location: /');
    die('ERRO: Pagina não encontrada');
}

echo"Seja Bem vindo ".$_SESSION['nomeusuario']."<br>";
echo "<a href='".URLADM."sair'>Sair</a>";

  