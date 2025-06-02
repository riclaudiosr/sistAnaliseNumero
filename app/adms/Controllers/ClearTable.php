<?php

namespace App\adms\Controllers;

if (!defined('RSR1937NA')) {
  //   header("Location: /");
  die("Erro: pagina nao encontrada");
}
//CONTROLLER EDITAR USERS

class ClearTable
{
  private string $data; // RECEBE O ID PASSADO COMO PARAMETRO
  private string|int|null $dataForm; // RECEBE OS DADOS DO FORMULÁRIO


  public function index(): void
  {
    $this->data = filter_input(INPUT_GET, "key", FILTER_DEFAULT);


    if (!empty($this->data)) {
var_dump($this->data);
      $deleteUser = new \App\adms\Models\AdmsClearTable;
      $deleteUser->clearTable($this->data);
    } else {
      $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Necessário selecionar o usuario!<p>";
    }
    if ($this->data == "jogos") {
      $urlRedirect = URLADM . "listar-jogos/index";
      header("location:  $urlRedirect");
    } elseif ($this->data == "repetir") {
      $urlRedirect = URLADM . "list-datas2/index";
      header("location:  $urlRedirect");
    }else {
      $urlRedirect = URLADM . "dashboard/index";
      header("location:  $urlRedirect");
    }
  }
}
