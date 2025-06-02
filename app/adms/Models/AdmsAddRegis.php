<?php

namespace App\adms\Models;

use App\adms\Models\helper\AdmsConn;
use PDO;

if (!defined('RSR1937NA')) {
  //   header("Location: /");
  die("Erro: pagina nao encontrada");
}

//ARQUIVO DA CADASTRO DE USUÁRIO
class AdmsAddRegis extends AdmsConn

{
  private array|null $data; // RECEBE OS DADOS DO FORMULARIO
  private $result = false; //RECEBE O RESULTADO DA EXECUÇÃO DA CLASSE
  private array $arrayAdd; // RECEBE OS DADOS DO BANCO DE DADOS APRAVES DO RELPE ADMSREAD
  private $resultBd; //$resultBd Recebe os registros do banco de dados
  private bool|int $resultRepetir = false; //Recebe o resultado da verificação
  private object $conn;


  public function getResultBd()
  {
    return $this->resultBd;
  }
  public function getResultRepetir()
  {
    return $this->resultRepetir;
  }

  public function getResult()
  {
    return $this->result;
  }

  public function receberRegis(array $data = null)

  {
       $this->arrayAdd = $data;
      
    $result = new \App\adms\Models\helper\AdmsRead();
    $result->fullRead("SELECT id,colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz 
     FROM sequencia");
    $resultTab = $result->getResult();
    foreach ($resultTab as $value) {
      $this->verifique($value);
      if ($this->getResultRepetir()) {
        $this->creatRegisDuplicado($value, $this->resultBd);
      }
    }
    if($this->getResult()){
    //  $this->resultRepetir = false;
    }else{
      $this->createRegis($this->arrayAdd);
    } 
  }

  public function verifique(array $data): void
  {
    $this->data = $this->arrayAdd;
    
    $value = $data;
    extract($value);

    if (($colUm == $this->data['0']) and ($colDois == $this->data['1']) and ($colTres == $this->data['2'])
      and ($colQuatro == $this->data['3']) and ($colCinco == $this->data['4']) and ($colSeis == $this->data['5'])
      and ($colSete == $this->data['6']) and ($colOite == $this->data['7']) and ($colNove == $this->data['8'])
      and ($colDez == $this->data['9']) and ($colOnze == $this->data['10']) and ($colDoze == $this->data['11'])
      and ($colTrez == $this->data['12']) and ($colQuatz == $this->data['13']) and ($colQuinz == $this->data['14'])
    ) {
      //  $_SESSION['msg'] = "<p style'color:#f00'>Sequencia ja Existe no Banco! </p>";
      $this->resultBd = $id;
      $this->resultRepetir = true;
    }
  }

  public function createRegis(array $data)
  {
    date_default_timezone_set('America/Sao_Paulo');
    $seq = $data;
    $sequencia['colUm'] = $seq[0];
    $sequencia['colDois'] = $seq[1];
    $sequencia['colTres'] = $seq[2];
    $sequencia['colQuatro'] = $seq[3];
    $sequencia['colCinco'] = $seq[4];
    $sequencia['colSeis'] = $seq[5];
    $sequencia['colSete'] = $seq[6];
    $sequencia['colOite'] = $seq[7];
    $sequencia['colNove'] = $seq[8];
    $sequencia['colDez'] = $seq[9];
    $sequencia['colOnze'] = $seq[10];
    $sequencia['colDoze'] = $seq[11];
    $sequencia['colTrez'] = $seq[12];
    $sequencia['colQuatz'] = $seq[13];
    $sequencia['colQuinz'] = $seq[14];
    $sequencia['creatdat'] = date("Y-m-d H:i:s");

    $result = new \App\adms\Models\helper\AdmsCreate();
    $result->exeCreate("sequencia", $sequencia);

    if ($result->getResult()) {
      $_SESSION['msg'] = "<p style='color:green;'>Sequencia Cadastrada com Sucesso na Tabela  Repetição! </p>";
      $this->result = true;
    } else {
      $_SESSION['msg'] = "<p style='color:#f00;>Sequencia Não Cadastrada com Sucesso na Tabela  Repetição! </p>";
      $this->result = false;
    }
  }

  public function creatRegisDuplicado(array $data, int $id)
  {
    $rep = $data;

    $repetir['id_seq'] = (string) $id;
    $repetir['prim_col'] = $rep['colUm'];
    $repetir['segun_col'] = $rep['colDois'];
    $repetir['tercer_col'] = $rep['colTres'];
    $repetir['quarta_col'] = $rep['colQuatro'];
    $repetir['quinta_col'] = $rep['colCinco'];
    $repetir['sexta_col'] = $rep['colSeis'];
    $repetir['set_col'] = $rep['colSete'];
    $repetir['oit_col'] = $rep['colOite'];
    $repetir['none_col'] = $rep['colNove'];
    $repetir['dec_col'] = $rep['colDez'];
    $repetir['decPri_col'] = $rep['colOnze'];
    $repetir['decSeg_col'] = $rep['colDoze'];
    $repetir['decTec_col'] = $rep['colTrez'];
    $repetir['decQuar_col'] = $rep['colQuatz'];
    $repetir['decQuit_col'] = $rep['colQuinz'];
    $repetir['creatdat'] = date("Y-m-d H: i:");

    $result = new \App\adms\Models\helper\AdmsCreate();
    $result->exeCreate("repetir", $repetir);
    if ($result->getResult()) {
      $_SESSION['msg'] = "<p style='color:green;'>Sequencia Cadastrada com Sucesso na Tabela  Repetição! </p>";
      $this->result = true;
    } else {
      $_SESSION['msg'] = "<p style='color:#f00;>Sequencia Não Cadastrada com Sucesso na Tabela  Repetição! </p>";
      $this->result = false;
    }
  }
}
