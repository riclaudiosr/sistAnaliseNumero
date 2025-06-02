<?php

namespace App\adms\Models;

if(!defined('RSR1937NA')){
  //   header("Location: /");
  die("Erro: pagina nao encontrada");
 }
 
//ARQUIVO PARA APAGAR USUARIO NO BANCO DE DADOS
class AdmsClearTable
{

  private bool $result = false; //RECEBE O RESULTADO DA EXECUÇÃO DA CLASSE
  private string $data; // RECEBE O ID PASSADO COMO PARAMETRO
  private array|null $resultBd; //RECEBE OS DADOS DO BANCO DE DADOS
  //RECEBE O RESULTADO DA CLASSE E RETORNA O RESULTADO DA CLASSE
  public function getResult(): bool
  {
    return $this->result;
  }

  public function clearTable(string $data): void
  {
    $this->data = $data;
        
    if ($this->viewTable()) {
      
      $deleteUser = new \App\adms\Models\helper\AdmsDelete();
      $deleteUser->exeDelete("{$this->data}");
      if ($deleteUser->getResult()) {

        $_SESSION['msg'] = "<p style='color:green;'>Registros Apagados com sucesso!<p>";
        $this->result = true;
      } else {
        $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Registros não Apagados com sucesso!<p>";
        $this->result = false;
      }
    } else {
      $this->result = false;
    }
  }
  //busca os dados no banco de 
  private function viewTable(): bool
  {
    $viewAdmsRead = new \App\adms\Models\helper\AdmsRead();
    $viewAdmsRead->fullRead("SELECT id FROM {$this->data}");
    $this->resultBd = $viewAdmsRead->getResult();
    if ($this->resultBd) {

      return true;

    } else {
      $_SESSION['msg'] = "<p style='color:#f00;'>Erro: a Tabela já Esta Vazia!<p>";
      return false;
    }
  }
  //deleta a imagem e o diretório 

}
