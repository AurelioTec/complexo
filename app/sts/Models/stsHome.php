<?php

namespace App\sts\Models;
if(!defined('R4F5CC')){
    header('Location: /');
    die('ERRO: Pagina não encontrada');
}

class stsHome extends Conn {

    private object $conn;
    private array $dados;

    public function index() {
        $this->conn = $this->connect();
        $this->viewTopo();
         $this->viewTituloQuadro();
        $this->viewQuadHonra();
        return $this->dados;
    }

    private function viewTopo() {
        $queryHomeTopo = "SELECT titulotopo, subtitulotopo, txtbotaotopo, linkbtntopo, imagemtopo FROM hometopo LIMIT 1";
        $resultHomeTopo = $this->conn->prepare($queryHomeTopo);
        $resultHomeTopo->execute();
        $this->dados['topo'] = $resultHomeTopo->fetch();
    }

    private function viewTituloQuadro() {
        $queryHomeTquadro = "SELECT tituloquadro, subtituloquadro FROM homequdro LIMIT 1";
        $resultHomeTQuadro = $this->conn->prepare($queryHomeTquadro);
        $resultHomeTQuadro->execute();
        $this->dados['tquadro'] = $resultHomeTQuadro->fetch();
    } 
    
    
    
    private function viewQuadHonra() {
        $queryQuadHonra = "SELECT
     quadhonra.idquadro,
     alunos.nome,
     alunos.sobrenome,
     quadhonra.anolectivo,
     curso.cursodesc,
     classes.clasdesc,
     periodo.descperiodo,
     alunos.foto,
     quadhonra.obs
FROM
     quadhonra  INNER JOIN matricula  ON quadhonra.fkmatricula  = matricula.idmatricula
     INNER JOIN  alunos ON matricula.fkaluno = alunos.idaluno
     INNER JOIN  curso ON matricula.fkidcurso = curso.idcurso
     INNER JOIN  classes ON matricula.fkclasse = classes.idclasses
     INNER JOIN  periodo ON classes.fkperiodo = periodo.idperiodo
     ORDER BY quadhonra.idquadro DESC LIMIT 3 ";
        $resultQuadHonra = $this->conn->prepare($queryQuadHonra);
        $resultQuadHonra->execute();
        $this->dados['quadHonra'] = $resultQuadHonra->fetchAll();
    }

}
