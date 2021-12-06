<?php

namespace App\sts\Models;

if(!defined('R4F5CC')){
    header('Location: /');
    die('ERRO: Pagina não encontrada');
}

use PDO;

class Conn {
   private string $db="mysql";
   private string $host="localhost";
   private string $user="root";
   private string $pass="";
   private string $dbname="escolaweb";
   private int    $port=3306; 
   private object $conect;
   
   protected function connect() {
       try {
          // $this->$conect = new PDO($this->db.':host='.$this->host.';dbname='.$this->dbname,$this->user, $this->pass);
          $this->conect = $this->conect = new PDO($this->db.':host='.$this->host.';port='.$this->port.';dbname='.$this->dbname,$this->user, $this->pass);
          return  $this->conect;
       } catch (Exception $exc) {
           die('Erro! tente novamente');
       }
          
   }
}
