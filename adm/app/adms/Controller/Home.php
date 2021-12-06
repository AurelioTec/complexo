<?php
namespace App\adms\Controller;

if(!defined('R4F5CC')){
    header('Location: /');
    die('ERRO: Pagina não encontrada');
}

class Home{
    

    public function index(){
 
        $carregarView=new \Core\ConfigView("adms/Views/Home/home");
        $carregarView->renderisar();
        
}

}