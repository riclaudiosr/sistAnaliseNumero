<?php

namespace App\adms\Controllers;

if (!defined('RSR1937NA')) {
  //   header("Location: /");
  die("Erro: pagina nao encontrada");
}

class Dashboard
{
  private array|null $data = [];
  private string $key;
  //$dataForm, recebe os dados do formulario
  private array|null $dataForm;


  public function index(): void
  {
    $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    if ((!empty($this->dataForm['SendFormRegis'])) and (isset($this->dataForm['um']))) {
      unset($this->dataForm['SendFormRegis']);
      for ($num = 0; $num < count($this->dataForm['um']); $num++) {
      }

      //VERIFICAR SE O FORMULÁRIO E VALIDO
      $verif = new \App\adms\Models\helper\AdmsValEmptyField();
      $verif->verifique($num);
      if ($verif->getResult()) {
      
        $regist = new \App\adms\Models\AdmsAddRegis();
        $regist->receberRegis($this->dataForm['um']);
        if ($regist->getResult()) {
          
          if ($regist->getResultRepetir()) {
            $urlRedirect = URLADM . "list-datas2/index";
            header("location:  $urlRedirect");
          } else {
            $calculos = new \App\adms\Models\AdmsCalculateInf();
            $calculos->calculoColuns();
            //$calculos->editJogo();

            if ($calculos->getResult()) {
              $this->data = $calculos->getResultBd();
              $this->viewDashboard();
            } else {
              $urlRedirect = URLADM . "dashboard/index";
              header("location:  $urlRedirect");
            }
          }
        } else {
          $urlRedirect = URLADM . "dashboard/index";
            header("location:  $urlRedirect");
        }
      }else{
        $this->data['form'] = $this->dataForm;
        $this->viewDashboard();
      }

    } else {
      $this->viewDashboard();
     }
    
  }
  private function viewDashboard(): void
  {

    $viewCon = new \Core\ConfigView("adms/Views/users/dashboard", $this->data);
    $viewCon->loadViewHome();
  }
}
