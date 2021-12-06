<?php
namespace App\sts\Controllers;
if(!defined('R4F5CC')){
    header('Location: /');
    die('ERRO: Pagina não encontrada');
}

class Home {
    
    private $dados;
    
    public function index() {
        $viewHome =new \App\sts\Models\stsHome();
        $this->dados=$viewHome->index();
        
        $carregarView =new \Core\ConfigView("sts/Views/Home/home", $this->dados);
        $carregarView->renderisar();
    }
}
