<?php

namespace App\adms\Controllers;

if (!defined('RSR1937NA')) {
   //   header("Location: /");
   die("Erro: pagina nao encontrada");
}
// pagina listar usuario no banco
class ListDatas2
{
   private array|string|null $data;

   /** @var array $dataForm Recebe os dados do formulario */
   private array|null $dataForm;

   /** @var string|int|null $page Recebe o número página */
   private string|int|null $page;

   /** @var string|null $searchName Recebe o nome do usuario */
   private string|null $search_in;

   /** @var string|null $searchEmail Recebe o email do usuario */
   private string|null $search_fn;

   public function index(string|int|null $page = null): void
   {

      $this->page = (int) $page ? $page : 1;

      $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

      

      $this->search_in =   filter_input(INPUT_GET, 'date_in', FILTER_DEFAULT);
      $this->search_fn =   filter_input(INPUT_GET, 'date_fn', FILTER_DEFAULT);

      $listData = new \App\adms\Models\AdmsListDatas2();

      if (isset($this->dataForm['SendData2'])) {
         unset($this->dataForm['SendData2']);
         $this->data['form'] = $this->dataForm;
         $listData->listSearchDatas($this->page, $this->dataForm);
          
         
      } elseif ((!empty($this->search_in)) and (!empty($this->search_fn))) {
         $listData->listSearchDatas($this->page, $this->search_in, $this->search_fn);
          $this->data['form']['date_in'] = $this->search_in;
          $this->data['form']['date_fn'] = $this->search_fn; 

      }
       
       else {
     
         $listData->listDatas2($this->page);
      }
      if ($listData->getResult()) {
         $this->data['listdata'] = $listData->getResultBd();
         $this->data['pagination'] = $listData->getResultPg();
      } else {
         $this->data['listdata'] = [];
         $this->data['pagination'] = "";
      }

      $this->data['sidebarActive'] = "list-users";

      $viewCon = new \Core\ConfigView("adms/Views/banco/dataBase2", $this->data);
      $viewCon->loadViewLogin();
   }
}
