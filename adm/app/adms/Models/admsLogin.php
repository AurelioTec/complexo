<?php

namespace App\adms\Models;
if(!defined('R4F5CC')){
    header('Location: /');
    die('ERRO: Pagina não encontrada');
}
use PDO;
class admsLogin extends Conn {
    
    
    private object $conn;
    private $dados;
    private $resultadodb;
    private bool $resultado = false;
    
    function getResultado(): bool {
        return $this->resultado;
    }

    function setResultado(bool $resultado): void {
        $this->resultado = $resultado;
    }

        public function login( array $dados=null) {
        $this->dados=$dados;
        $this->conn =$this->connect();
        $queryLogin="SELECT idusuario, nome, email,senha FROM usuarios WHERE email=:email LIMIT 1";
        $resultLogin=$this->conn->prepare($queryLogin);
        $resultLogin->bindParam(':email',$this->dados['usuario'], PDO::PARAM_STR);
        $resultLogin->execute();
        $this->resultadodb=$resultLogin->fetch();
        if($this->resultadodb){
            $this->validarSenha();
        } else {
            $_SESSION['msg']="<p style='color: f00'> ERRO: Usuario não encotrado </p>";
            $this->resultado=false;
        }
    }
   public function validarSenha() {
       
       if(password_verify($this->dados['senha'], $this->resultadodb['senha'])){
           $_SESSION['idusario']=$this->resultadodb['senha'];
            $_SESSION['nomeusuario']=$this->resultadodb['nome'];
             $_SESSION['emailusuario']=$this->resultadodb['email'];
             $this->resultado=true;
       } else {
            $_SESSION['msg']="<p style='color: f00'> ERRO: Usuario ou Senha Incorreta </p>";
            $this->resultado=false;
       }
   }
   
}
