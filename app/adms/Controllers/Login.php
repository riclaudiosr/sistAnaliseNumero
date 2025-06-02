<?php

namespace App\adms\Controllers;
if(!defined('RSR1937NA')){
    //   header("Location: /");
    die("Erro: pagina nao encontrada");
   }

class Login
{
    private array|null $data = [];
    //$dataForm, recebe os dados do formulario
    private array|null $dataForm;
    public function index(): void
    {
        $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($this->dataForm['sendLogin'])) {
           //  var_dump($this->dataForm);
           $valLogin = new \App\adms\Models\AdmsLogin();
           $valLogin->login($this->dataForm);
           
            if($valLogin->getResult()){
                if($valLogin->getKey() == 4){
                    $urlRedirect =URLADM ."view-profile/index/{$_SESSION['user_id']}";
                    header("location:  $urlRedirect");
                }elseif($valLogin->getKey() == 3){

                }elseif($valLogin->getKey() == 2){
                    $urlRedirect =URLADM ."dashboard/index";
                    header("location:  $urlRedirect");
                }elseif($valLogin->getKey() == 1){
                    $urlRedirect =URLADM ."dashboard/index";
                    header("location:  $urlRedirect");
                    
                }

               $urlRedirect =URLADM ."dashboard/index";
             //  header("location:  $urlRedirect");
            }else{
                 $this->data['form'] = $this->dataForm;
            }
        }
        $viewCon = new \Core\ConfigView("adms/Views/login/login", $this->data);
        $viewCon->loadView();
    }
}
