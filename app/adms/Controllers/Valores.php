<?php

namespace App\adms\Controllers;

if (!defined('RSR1937NA')) {
  //   header("Location: /");
  die("Erro: pagina nao encontrada");
}

class Valores
{

  private string|int|null $key; // RECEBE O ID PASSADO COMO PARAMETRO
  private array|null $data = []; //RECEBE OS DADOS DA CONTROLE 
  private array|null $dataForm; //$dataForm, recebe os dados do formulario
  public function index(): void
  {
    
    $this->key = filter_input(INPUT_GET, "key", FILTER_DEFAULT);

    if (!empty($this->key)) {
      $viewsValores = new \App\adms\Models\AdmsValores();
      $viewsValores->readValue();
      if ($viewsValores->getResult()) {
        $this->data =  $viewsValores->getResultBd();
        $this->viewValores();
      } else {
        $urlRedirect = URLADM . "dashboard/index";
        header("location:  $urlRedirect");
      }
    } else {

      $viewsValores = new \App\adms\Models\AdmsValores();
      $valor =  $viewsValores->viewValor();
      if ($viewsValores->getResult()) {
        $this->data = $viewsValores->getResultBd();
        //   var_dump($this->data);
        $this->viewValores();
      } else {
        $urlRedirect = URLADM . "listar-jogos/index";
        header("location:  $urlRedirect");
      }
    }
  }
  private function viewValores(): void
  {

    $viewCon = new \Core\ConfigView("adms/Views/jogos/listValores", $this->data);
    $viewCon->loadViewLogin();
  }
}
