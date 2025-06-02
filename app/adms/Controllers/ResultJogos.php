<?php

namespace App\adms\Controllers;

if (!defined('RSR1937NA')) {
  //   header("Location: /");
  die("Erro: pagina nao encontrada");
}

class ResultJogos
{
  private string|int|null $id; // RECEBE O ID PASSADO COMO PARAMETRO
  private array|null $data = []; //RECEBE OS DADOS DA CONTROLE 
  private array|null $dataForm; //$dataForm, recebe os dados do formulario


  public function index(): void
  {

    $conferir = new \App\adms\Models\AdmsResultJogo();
    $conferir->confjogos();
    if ($conferir->getResult()) {
      $urlRedirect = URLADM . "listar-jogos/index";
    header("location:  $urlRedirect");

    }else{
      $urlRedirect = URLADM . "listar-jogos/index";
     header("location:  $urlRedirect");
    }
  }
  /*
  private function viewDashboard(): void
  {

    $viewCon = new \Core\ConfigView("adms/Views/users/dashboard", $this->data);
    $viewCon->loadViewHome();
  }
    */
  
}
