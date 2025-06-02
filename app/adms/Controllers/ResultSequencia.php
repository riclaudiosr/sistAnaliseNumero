<?php

namespace App\adms\Controllers;

if (!defined('RSR1937NA')) {
  //   header("Location: /");
  die("Erro: pagina nao encontrada");
}

class ResultSequencia
{
  private string $key; // RECEBE O ID PASSADO COMO PARAMETRO
  private array|null $data = []; //RECEBE OS DADOS DA CONTROLE 
  private array|null $dataForm; //$dataForm, recebe os dados do formulario


  public function index(): void
  {/*
    $this->key = filter_input(INPUT_GET, "key", FILTER_DEFAULT);
//var_dump($this->key);
    if (!empty($this->key)) {
      
    $deleteUser = new \App\adms\Models\AdmsClearTable;
 //     $deleteUser->clearTable($this->key);
    }*/

    $conferir = new \App\adms\Models\AdmsResultJogo();
    $conferir->confSequencia();
   
    if ($conferir->getResult()) {

      $urlRedirect = URLADM . "list-datas/index";
    header("location:  $urlRedirect");
    }else{
      $urlRedirect = URLADM . "dashboard/index";
    header("location:  $urlRedirect");
    }
  }
}
