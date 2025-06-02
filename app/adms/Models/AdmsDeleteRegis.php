<?php

namespace App\adms\Models;

if(!defined('RSR1937NA')){
  //   header("Location: /");
  die("Erro: pagina nao encontrada");
 }
 
//ARQUIVO PARA APAGAR USUARIO NO BANCO DE DADOS
class AdmsDeleteRegis
{

  private bool $result = false; //RECEBE O RESULTADO DA EXECUÇÃO DA CLASSE
  private int $id; // RECEBE O ID PASSADO COMO PARAMETRO
  private array|null $resultBd; //RECEBE OS DADOS DO BANCO DE DADOS
  //RECEBE O RESULTADO DA CLASSE E RETORNA O RESULTADO DA CLASSE
  public function getResult(): bool
  {
    return $this->result;
  }

  public function deleteRegis(int $id): void
  {
    $this->id = (int) $id;
    if ($this->viewRegis()) {
    //  var_dump($this->resultBd[0]);

      $deleteUser = new \App\adms\Models\helper\AdmsDelete();
      $deleteUser->exeDelete("sequencia", "WHERE id =:id ", "id={$this->id}");
      if ($deleteUser->getResult()) {

        $_SESSION['msg'] = "<p style='color:green;'>Registro Apagado com sucesso!<p>";
        $this->result = true;
      } else {
        $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Registro não Apagado com sucesso!<p>";
        $this->result = false;
      }
    } else {
      $this->result = false;
    }
  }
  //busca os dados no banco de 
  private function viewRegis(): bool
  {
    $viewAdmsRead = new \App\adms\Models\helper\AdmsRead();
    $viewAdmsRead->fullRead("SELECT id FROM sequencia WHERE id=:id LIMIT :limit", "id={$this->id}&limit=1");
    $this->resultBd = $viewAdmsRead->getResult();
    if ($this->resultBd) {

      return true;

    } else {
      $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Registro não encontrado!<p>";
      return false;
    }
  }
  //deleta a imagem e o diretório 

}
