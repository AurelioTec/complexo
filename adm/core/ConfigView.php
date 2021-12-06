<?php

namespace Core;

if(!defined('R4F5CC')){
    header('Location: /');
    die('ERRO: Pagina não encontrada');
}

class ConfigView {
    
    private string $nome;
    private $dados;
    
    public function __construct($nome, array $dados=null) {
        $this->nome = $nome;
        $this->dados = $dados; 
    }
    
    public function renderisar() {
        if(file_exists('app/'.$this->nome.'.php')){
            include 'app/adms/Views/include/head.php';
            include 'app/'.$this->nome.'.php';
           // include 'app/sts/Views/include/rodape.php';
            include 'app/adms/Views/include/footer.php';
        }else{
            echo "Erro ao carregar a Pagina <br>";
            echo "Erro ao carregar a View{$this->nome} <br>";
        }
    }
    
}
