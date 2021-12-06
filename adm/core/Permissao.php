<?php

namespace Core;

if (!defined('R4F5CC')) {
    header('Location: /');
    die('ERRO: Pagina não encontrada');
}

class Permissao {

    private string $urlController;
    private array $pgPublica;
    private array $pgRestrita;
    private string $resultado;

    function getResultado(): string {
        return $this->resultado;
    }

    public function index($urlcontroller): void {
        $this->urlController = $urlcontroller;
        $this->pgPublica = ["login"];

        if (in_array($this->urlController, $this->pgPublica)) {
            $this->resultado = $this->urlController;
        } else {
            $this->pgRestrita();
        }
    }

    public function pgRestrita(): void {
        $this->pgRestrita = ["home"];

        if (in_array($this->urlController, $this->pgRestrita)) {
            $this->verificarLogin();
        } else {
            $_SESSION['msg'] = "<p style='color: f00'> ERRO: Pagina não Encontrada! </p>";
            $urldestino = URLADM . "login";
            header("Location: $urldestino ");
        }
    }

    
    public function verificarLogin():void {
        if(isset($_SESSION['idusario']) AND isset($_SESSION['nomeusuario']) AND isset($_SESSION['emailusuario'])){
            $this->resultado= $this->urlController;
        } else {
             $_SESSION['msg'] = "<p style='color: f00'> ERRO: Faça o Login para acessar a página </p>";
            $urldestino = URLADM . "login";
            header("Location: $urldestino ");
        }
    }
}
