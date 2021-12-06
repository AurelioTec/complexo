<?php
namespace Core;

if(!defined('R4F5CC')){
    header('Location: /');
    die('ERRO: Pagina não encontrada');
}

class ConfigController{

    private string $url;

    public function __construct(){
        if(!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))){
            $this->url= filter_input(INPUT_GET, "url", FILTER_DEFAULT);
        } else{
            $this->url= "Login";
        }
    }

    public function carregar(){  
       $this->config();
       $valPermissao=new \Core\Permissao();
       $valPermissao->index($this->url);
       $urlController= ucwords($this->url);
       $classe="\\App\\adms\\Controller\\".$urlController;
       $classeCarregar =new $classe;
       $classeCarregar->index();

    }
    
    public function config() {
        
        define('URLADM', 'http://localhost/complexo/adm/');
    }
}