<?php
namespace App\adms\Controllers;
if(!defined('RSR1937NA')){
  //   header("Location: /");
  die("Erro: pagina nao encontrada");
 }
 
class Sobre
{ 
  private string|int|null $id; // RECEBE O ID PASSADO COMO PARAMETRO
  private array|null $data = []; //RECEBE OS DADOS DA CONTROLE 
  private array|null $dataForm; //$dataForm, recebe os dados do formulario
    public function index():void
    {
        $this->data = [];
        echo "Pagina controle Sobre<br>";
      $viewCon = new \Core\ConfigView("adms/Views/sobre/sobre",$this->data);
      $viewCon->loadView();
        
    }
}