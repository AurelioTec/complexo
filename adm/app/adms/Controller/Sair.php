<?php
namespace App\adms\Controller;

if(!defined('R4F5CC')){
    header('Location: /');
    die('ERRO: Pagina não encontrada');
}

class Sair{
    

    public function index(){
 
        unset( $_SESSION['idusario'],
               $_SESSION['nomeusuario'],
               $_SESSION['emailusuario']);
        $_SESSION['msg']="<p style='color: green'> Usuario Deslogado</p>";
        $urlDestino=URLADM.'login';
        header("Location: $urlDestino");
}

}