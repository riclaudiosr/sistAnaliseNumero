<?php

namespace App\adms\Controllers;

if (!defined('RSR1937NA')) {
    //   header("Location: /");
    die("Erro: pagina nao encontrada");
}
//CONTROLLER DE CADASTRAR NOVO USUARIO

class AddRegis
{
    private array|null $data = [];
    //$dataForm, recebe os dados do formulario
    private array|null $dataForm;
    public function index(): void
    {
        $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if ((!empty($this->dataForm['SendFormRegis'])) and (isset($this->dataForm['um']))) {
            unset($this->dataForm['SendFormRegis']);
            for ($num = 0; $num < count($this->dataForm['um']); $num++) {
            }
              //     var_dump($this->dataForm);
            //verifica se exeste dados para ser enviados
            $verif = new \App\adms\Models\helper\AdmsValEmptyField();
            $verif->verifique($num);
            if ($verif->getResult()) {
            //preparaçao e analisa os dados para ser salvo 
                $regist = new \App\adms\Models\AdmsAddRegis();
                $regist->receberRegis($this->dataForm['um']);
                if ($regist->getResult()) {
                    $id_seq = $regist->getResultBd();
                    //caso os dados ja exitem cadastrado
                    $creatR = new \App\adms\Models\AdmsAddRegis();
                    $creatR->creatRegisDuplicado($this->dataForm, $id_seq);

                    if ($creatR->getResult()) {
                        $urlRedirect = URLADM . "list-datas2/index";
                            header("location:  $urlRedirect");
                        
                    } else {     
                        $urlRedirect = URLADM . "add-Regis/index";
                      // header("location:  $urlRedirect");
                    }

                } else {
                    //caso os dados não exista no banco
                    $creat = new \App\adms\Models\AdmsAddRegis();
                    $creat->createRegis($this->dataForm['um']);
                    if ($creat->getResult()) {
                        $urlRedirect = URLADM . "list-datas/index";
                        header("location:  $urlRedirect");
                    } else {
                        $urlRedirect = URLADM . "add-Regis/index";
                      //  header("location:  $urlRedirect");
                    }
                }
                $this->data['form'] = $this->dataForm;
                $this->viewAddRegis();
            } else {
                $urlRedirect = URLADM . "add-Regis/index";
                  header("location:  $urlRedirect");
            }
        } else {

            $this->viewAddRegis();
        }
        //  $this->data = null;

    }
    private function viewAddRegis(): void
    {
        $listSelect = new \App\adms\Models\AdmsAddUsers();
        $this->data['select'] = $listSelect->listSelect();

        $viewCon = new \Core\ConfigView("adms/Views/banco/addRegis", $this->data);
        $viewCon->loadView();
    }
}
