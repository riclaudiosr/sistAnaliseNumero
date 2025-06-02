<?php

namespace App\adms\Controllers;

if (!defined('RSR1937NA')) {
  //   header("Location: /");
  die("Erro: pagina nao encontrada");
}
//CONTROLLER DE CADASTRAR NOVO USUARIO

class AddJogos
{
  private array $data; // os calculos da contreller informationData
  private string|int $key;
  //$dataForm, recebe os dados do formulario
  private array|null $dataForm;
  public function index(): void
  {
    $this->key = filter_input(INPUT_GET, "key", FILTER_DEFAULT);
    if (!empty($this->key)) {

      $deleteUser = new \App\adms\Models\AdmsClearTable;
      $deleteUser->clearTable($this->key);
    }

    $addJogos = new \App\adms\Models\AdmsAddJogos();
    $addJogos->addMaisJogos();
    
    if ($addJogos->getResult()) {
      $urlRedirect = URLADM . "listar-jogos/index";
       header("location:  $urlRedirect");
    } else {
      $urlRedirect = URLADM . "list-datas/index";
   header("location:  $urlRedirect");
    }
  }
}
