<?php
namespace App\adms\Controller;

if(!defined('R4F5CC')){
    header('Location: /');
    die('ERRO: Pagina não encontrada');
}

class Login{
    
private $dados;
private $dadosForm;
    
    public function index(){
        $this->dadosForm= filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(!empty($this->dadosForm['sendLogin'])){
           $validaLogin = new \App\adms\Models\admsLogin();
           $validaLogin->login($this->dadosForm);
           if($validaLogin->getResultado()){
               $urldestino= URLADM."home";
               header("Location: $urldestino ");
           } else {
               $this->dados['form']= $this->dadosForm;
           }
        }
        $carregarView =new \Core\ConfigView("adms/Views/Login/login", $this->dados);
        $carregarView->renderisar();;
}

}