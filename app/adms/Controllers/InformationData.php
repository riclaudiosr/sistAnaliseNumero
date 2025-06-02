<?php
/*
namespace App\adms\Controllers;

if (!defined('RSR1937NA')) {
    //   header("Location: /");
    die("Erro: pagina nao encontrada");
}
//CONTROLLER DE CADASTRAR NOVO USUARIO

class InformationData
{
    private string|int|array|null $data = [];
    private array|null $dataForm;
    public function index(): void
    {
        $this->data = filter_input(INPUT_GET, "key", FILTER_DEFAULT);
        if (!empty($this->data)) { 
            $deleteUser = new \App\adms\Models\AdmsClearTable;
            $deleteUser->clearTable($this->data);
        }
        
        $idsColuns = new \App\adms\Models\AdmsCalculateInf();
        $idsColuns->calculoColuns();
       $this->data = $idsColuns->getResult();
      if($this->data){
        $this->data = $idsColuns->getResultBd();
        $this->viewInfo();
   
      }else{
         $this->viewInfo();
      }
       
    }
    private function viewInfo(): void
    {
        $viewCon = new \Core\ConfigView("adms/Views/users/dashboard", $this->data);
        $viewCon->loadViewHome();
    }
}
*/