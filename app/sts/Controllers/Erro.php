<?php
namespace App\sts\Controllers;
if(!defined('R4F5CC')){
    header('Location: /');
    die('ERRO: Pagina não encontrada');
}

class Erro {
     public function index() {
        echo "Pagina Erro Controoller <br>";
        
    }
}
