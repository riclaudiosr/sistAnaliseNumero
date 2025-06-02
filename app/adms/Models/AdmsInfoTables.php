<?php

namespace App\adms\Models;

if (!defined('RSR1937NA')) {
  header("Location: /");
  die("Erro: Página não encontrada<br>");
}


// Visualizar a configuração de email no banco de dados

class AdmsInfoTables
{
  private bool $result = false; //$result Recebe true quando executar o processo com sucesso e false quando houver erro 
  private array $resultBd; // $resultBd Recebe os registros do banco de dados 
  //private int|string|array|null $data;//$id Recebe o id do registro 
  function getResult(): bool
  {
    return $this->result;
  }

  function getResultBd(): array
  {
    return $this->resultBd;
  }

  public function totTables()
  {
    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS totTables FROM sequencia");
    $idTable = $idTable->getResult();
    extract($idTable[0]);
    return $totTables;
  }

  public function colUm()
  {
    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colUm1 FROM sequencia WHERE colUm = 1");
    $colUm1 = $idTable->getResult();
    extract($colUm1[0]);
    $this->resultBd['um1'] = $colUm1;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colUm2 FROM sequencia WHERE colUm = 2");
    $colUm2 = $idTable->getResult();
    extract($colUm2[0]);
    $this->resultBd['um2'] = $colUm2;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colUm3 FROM sequencia WHERE colUm = 3");
    $colUm3 = $idTable->getResult();
    extract($colUm3[0]);
    $this->resultBd['um3'] = $colUm3;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colUm4 FROM sequencia WHERE colUm = 4");
    $colUm4 = $idTable->getResult();
    extract($colUm4[0]);
    $this->resultBd['um4'] = $colUm4;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colUm5 FROM sequencia WHERE colUm = 5");
    $colUm5 = $idTable->getResult();
    extract($colUm5[0]);
    $this->resultBd['um5'] = $colUm5;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colUm6 FROM sequencia WHERE colUm = 6");
    $colUm1 = $idTable->getResult();
    extract($colUm1[0]);
    $this->resultBd['um6'] = $colUm6;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colUm7 FROM sequencia WHERE colUm = 7");
    $colUm2 = $idTable->getResult();
    extract($colUm2[0]);
    $this->resultBd['um7'] = $colUm7;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colUm8 FROM sequencia WHERE colUm = 8");
    $colUm3 = $idTable->getResult();
    extract($colUm3[0]);
    $this->resultBd['um8'] = $colUm8;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colUm9 FROM sequencia WHERE colUm = 9");
    $colUm4 = $idTable->getResult();
    extract($colUm4[0]);
    $this->resultBd['um9'] = $colUm9;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colUm10 FROM sequencia WHERE colUm = 10");
    $colUm5 = $idTable->getResult();
    extract($colUm5[0]);
    $this->resultBd['um10'] = $colUm10;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colUm11 FROM sequencia WHERE colUm = 11");
    $colUm1 = $idTable->getResult();
    extract($colUm1[0]);
    $this->resultBd['um11'] = $colUm11;
  }

  public function colDois()
  {
    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDois2 FROM sequencia WHERE colDois = 2");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dois2'] = $colDois2;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDois3 FROM sequencia WHERE colDois = 3");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dois3'] = $colDois3;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDois4 FROM sequencia WHERE colDois = 4");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dois4'] = $colDois4;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDois5 FROM sequencia WHERE colDois = 5");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dois5'] = $colDois5;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDois6 FROM sequencia WHERE colDois = 6");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dois6'] = $colDois6;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDois7 FROM sequencia WHERE colDois = 7");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dois7'] = $colDois7;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDois8 FROM sequencia WHERE colDois = 8");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dois8'] = $colDois8;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDois9 FROM sequencia WHERE colDois = 9");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dois9'] = $colDois9;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDois10 FROM sequencia WHERE colDois = 10");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dois10'] = $colDois10;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDois11 FROM sequencia WHERE colDois = 11");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dois11'] = $colDois11;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDois12 FROM sequencia WHERE colDois = 12");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dois12'] = $colDois12;
  }

  public function colTres()
  {
    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTres3 FROM sequencia WHERE colTres = 3");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['tres3'] = $colTres3;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTres4 FROM sequencia WHERE colTres = 4");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['tres4'] = $colTres4;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTres5 FROM sequencia WHERE colTres = 5");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['tres5'] = $colTres5;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTres6 FROM sequencia WHERE colTres = 6");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['tres6'] = $colTres6;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTres7 FROM sequencia WHERE colTres = 7");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['tres7'] = $colTres7;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTres8 FROM sequencia WHERE colTres = 8");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['tres8'] = $colTres8;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTres9 FROM sequencia WHERE colTres = 9");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['tres9'] = $colTres9;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTres10 FROM sequencia WHERE colTres = 10");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['tres10'] = $colTres10;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTres11 FROM sequencia WHERE colTres = 11");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['tres11'] = $colTres11;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTres12 FROM sequencia WHERE colTres = 12");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['tres12'] = $colTres12;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTres13 FROM sequencia WHERE colTres = 13");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['tres13'] = $colTres13;
  }

  public function colQuatro()
  {
    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatro4  FROM sequencia WHERE colQuatro = 4");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatro4'] = $colQuatro4;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatro5 FROM sequencia WHERE colQuatro = 5");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatro5'] = $colQuatro5;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatro6 FROM sequencia WHERE colQuatro = 6");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatro6'] = $colQuatro6;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatro7  FROM sequencia WHERE colQuatro = 7");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatro7'] = $colQuatro7;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatro8 FROM sequencia WHERE colQuatro = 8");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatro8'] = $colQuatro8;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatro9 FROM sequencia WHERE colQuatro = 9");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatro9'] = $colQuatro9;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatro10 FROM sequencia WHERE colQuatro = 10");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatro10'] = $colQuatro10;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatro11 FROM sequencia WHERE colQuatro = 11");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatro11'] = $colQuatro11;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatro12  FROM sequencia WHERE colQuatro = 12");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatro12'] = $colQuatro12;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatro13 FROM sequencia WHERE colQuatro = 13");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatro13'] = $colQuatro13;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatro14 FROM sequencia WHERE colQuatro = 14");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatro14'] = $colQuatro14;
  }

  public function colCinco()
  {
    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colCinco5  FROM sequencia WHERE colCinco = 5");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['cinco5'] = $colCinco5;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colCinco6 FROM sequencia WHERE colCinco = 6");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['cinco6'] = $colCinco6;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colCinco7 FROM sequencia WHERE colCinco = 7");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['cinco7'] = $colCinco7;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colCinco8  FROM sequencia WHERE colCinco = 8");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['cinco8'] = $colCinco8;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colCinco9 FROM sequencia WHERE colCinco = 9");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['cinco9'] = $colCinco9;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colCinco10 FROM sequencia WHERE colCinco = 10");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['cinco10'] = $colCinco10;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colCinco11 FROM sequencia WHERE colCinco = 11");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['cinco11'] = $colCinco11;


    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colCinco12 FROM sequencia WHERE colCinco = 12");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['cinco12'] = $colCinco12;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colCinco13  FROM sequencia WHERE colCinco = 13");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['cinco13'] = $colCinco13;


    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colCinco14 FROM sequencia WHERE colCinco = 14");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['cinco14'] = $colCinco14;


    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colCinco15 FROM sequencia WHERE colCinco = 15");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['cinco15'] = $colCinco15;
  }

  public function colSeis()
  {
    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSeis6  FROM sequencia WHERE colSeis = 6");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['seis6'] = $colSeis6;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSeis7 FROM sequencia WHERE colSeis = 7");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['seis7'] = $colSeis7;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSeis8 FROM sequencia WHERE colSeis = 8");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['seis8'] = $colSeis8;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSeis9  FROM sequencia WHERE colSeis = 9");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['seis9'] = $colSeis9;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSeis10 FROM sequencia WHERE colSeis = 10");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['seis10'] = $colSeis10;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSeis11 FROM sequencia WHERE colSeis = 11");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['seis11'] = $colSeis11;


    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSeis12 FROM sequencia WHERE colSeis = 12");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['seis12'] = $colSeis12;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSeis13 FROM sequencia WHERE colSeis = 13");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['seis13'] = $colSeis13;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSeis14  FROM sequencia WHERE colSeis = 14");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['seis14'] = $colSeis14;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSeis15 FROM sequencia WHERE colSeis = 15");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['seis15'] = $colSeis15;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSeis16 FROM sequencia WHERE colSeis = 16");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['seis16'] = $colSeis16;
  }
  public function colSete()
  {
    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSete7  FROM sequencia WHERE colSete = 7");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['sete7'] = $colSete7;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSete8 FROM sequencia WHERE colSete = 8");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['sete8'] = $colSete8;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSete9 FROM sequencia WHERE colSete = 9");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['sete9'] = $colSete9;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSete10  FROM sequencia WHERE colSete = 10");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['sete10'] = $colSete10;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSete11 FROM sequencia WHERE colSete = 11");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['sete11'] = $colSete11;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSete12 FROM sequencia WHERE colSete = 12");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['sete12'] = $colSete12;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSete13 FROM sequencia WHERE colSete = 13");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['sete13'] = $colSete13;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSete14 FROM sequencia WHERE colSete = 14");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['sete14'] = $colSete14;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSete15  FROM sequencia WHERE colSete = 15");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['sete15'] = $colSete15;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSete16 FROM sequencia WHERE colSete = 16");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['sete16'] = $colSete16;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colSete17 FROM sequencia WHERE colSete = 17");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['sete17'] = $colSete17;
  }

  public function colOite()
  {
    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOite8  FROM sequencia WHERE colOite = 8");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['oite8'] = $colOite8;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOite9 FROM sequencia WHERE colOite = 9");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['oite9'] = $colOite9;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOite10 FROM sequencia WHERE colOite = 10");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['oite10'] = $colOite10;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOite11  FROM sequencia WHERE colOite = 11");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['oite11'] = $colOite11;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOite12 FROM sequencia WHERE colOite = 12");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['oite12'] = $colOite12;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOite13 FROM sequencia WHERE colOite = 13");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['oite13'] = $colOite13;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOite14 FROM sequencia WHERE colOite = 14");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['oite14'] = $colOite14;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOite15 FROM sequencia WHERE colOite = 15");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['oite15'] = $colOite15;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOite16  FROM sequencia WHERE colOite = 16");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['oite16'] = $colOite16;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOite17 FROM sequencia WHERE colOite = 17");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['oite17'] = $colOite17;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOite18 FROM sequencia WHERE colOite = 18");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['oite18'] = $colOite18;
  }
  public function colNove()
  {
    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colNove9  FROM sequencia WHERE colNove = 9");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['nove9'] = $colNove9;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colNove10 FROM sequencia WHERE colNove = 10");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['nove10'] = $colNove10;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colNove11 FROM sequencia WHERE colNove = 11");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['nove11'] = $colNove11;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colNove12  FROM sequencia WHERE colNove = 12");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['nove12'] = $colNove12;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colNove13 FROM sequencia WHERE colNove = 13");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['nove13'] = $colNove13;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colNove14 FROM sequencia WHERE colNove = 14");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['nove14'] = $colNove14;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colNove15 FROM sequencia WHERE colNove = 15");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['nove15'] = $colNove15;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colNove16 FROM sequencia WHERE colNove = 16");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['nove16'] = $colNove16;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colNove17  FROM sequencia WHERE colNove = 17");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['nove17'] = $colNove17;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colNove18 FROM sequencia WHERE colNove = 18");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['nove18'] = $colNove18;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colNove19 FROM sequencia WHERE colNove = 19");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['nove19'] = $colNove19;
  }

  public function colDez()
  {
    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDez10  FROM sequencia WHERE colDez = 10");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dez10'] = $colDez10;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDez11 FROM sequencia WHERE colDez = 11");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dez11'] = $colDez11;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDez12 FROM sequencia WHERE colDez = 12");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dez12'] = $colDez12;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDez13  FROM sequencia WHERE colDez = 13");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dez13'] = $colDez13;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDez14 FROM sequencia WHERE colDez = 14");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dez14'] = $colDez14;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDez15 FROM sequencia WHERE colDez = 15");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dez15'] = $colDez15;


    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDez16 FROM sequencia WHERE colDez = 16");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dez16'] = $colDez16;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDez17 FROM sequencia WHERE colDez = 17");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dez17'] = $colDez17;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDez18  FROM sequencia WHERE colDez = 18");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dez18'] = $colDez18;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDez19 FROM sequencia WHERE colDez = 19");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dez19'] = $colDez19;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDez20 FROM sequencia WHERE colDez = 20");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['dez20'] = $colDez20;
  }

  public function colOnze()
  {
    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOnze11  FROM sequencia WHERE colOnze = 11");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['onze11'] = $colOnze11;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOnze12 FROM sequencia WHERE colOnze = 12");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['onze12'] = $colOnze12;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOnze13 FROM sequencia WHERE colOnze = 13");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['onze13'] = $colOnze13;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOnze14  FROM sequencia WHERE colOnze = 14");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['onze14'] = $colOnze14;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOnze15 FROM sequencia WHERE colOnze = 15");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['onze15'] = $colOnze15;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOnze16 FROM sequencia WHERE colOnze = 16");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['onze16'] = $colOnze16;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOnze17 FROM sequencia WHERE colOnze = 17");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['onze17'] = $colOnze17;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOnze18 FROM sequencia WHERE colOnze = 18");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['onze18'] = $colOnze18;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOnze19  FROM sequencia WHERE colOnze = 19");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['onze19'] = $colOnze19;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOnze20 FROM sequencia WHERE colOnze = 20");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['onze20'] = $colOnze20;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colOnze21 FROM sequencia WHERE colOnze = 21");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['onze21'] = $colOnze21;
  }

  public function colDoze()
  {
    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDoze12  FROM sequencia WHERE colDoze = 12");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['doze12'] = $colDoze12;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDoze13 FROM sequencia WHERE colDoze = 13");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['doze13'] = $colDoze13;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDoze14 FROM sequencia WHERE colDoze = 14");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['doze14'] = $colDoze14;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDoze15  FROM sequencia WHERE colDoze = 15");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['doze15'] = $colDoze15;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDoze16 FROM sequencia WHERE colDoze = 16");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['doze16'] = $colDoze16;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDoze17 FROM sequencia WHERE colDoze = 17");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['doze17'] = $colDoze17;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDoze18 FROM sequencia WHERE colDoze = 18");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['doze18'] = $colDoze18;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDoze19 FROM sequencia WHERE colDoze = 19");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['doze19'] = $colDoze19;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDoze20  FROM sequencia WHERE colDoze = 20");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['doze20'] = $colDoze20;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDoze21 FROM sequencia WHERE colDoze = 21");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['doze21'] = $colDoze21;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colDoze22 FROM sequencia WHERE colDoze = 22");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['doze22'] = $colDoze22;
  }

  public function colTrez()
  {
    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTrez13  FROM sequencia WHERE colTrez = 13");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['trez13'] = $colTrez13;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTrez14 FROM sequencia WHERE colTrez = 14");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['trez14'] = $colTrez14;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTrez15 FROM sequencia WHERE colTrez = 15");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['trez15'] = $colTrez15;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTrez16  FROM sequencia WHERE colTrez = 16");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['trez16'] = $colTrez16;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTrez17 FROM sequencia WHERE colTrez = 17");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['trez17'] = $colTrez17;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTrez18 FROM sequencia WHERE colTrez = 18");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['trez18'] = $colTrez18;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTrez19 FROM sequencia WHERE colTrez = 19");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['trez19'] = $colTrez19;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTrez20 FROM sequencia WHERE colTrez = 20");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['trez20'] = $colTrez20;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTrez21  FROM sequencia WHERE colTrez = 21");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['trez21'] = $colTrez21;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTrez22 FROM sequencia WHERE colTrez = 22");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['trez22'] = $colTrez22;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colTrez23 FROM sequencia WHERE colTrez = 23");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['trez23'] = $colTrez23;
  }

  public function colQuatz()
  {
    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatz14  FROM sequencia WHERE colQuatz = 14");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatz14'] = $colQuatz14;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatz15 FROM sequencia WHERE colQuatz = 15");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatz15'] = $colQuatz15;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatz16 FROM sequencia WHERE colQuatz = 16");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatz16'] = $colQuatz16;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatz17  FROM sequencia WHERE colQuatz = 17");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatz17'] = $colQuatz17;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatz18 FROM sequencia WHERE colQuatz = 18");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatz18'] = $colQuatz18;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatz19 FROM sequencia WHERE colQuatz = 19");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatz19'] = $colQuatz19;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatz20 FROM sequencia WHERE colQuatz = 20");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatz20'] = $colQuatz20;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatz21 FROM sequencia WHERE colQuatz = 21");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatz21'] = $colQuatz21;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatz22  FROM sequencia WHERE colQuatz = 22");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatz22'] = $colQuatz22;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatz23 FROM sequencia WHERE colQuatz = 23");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatz23'] = $colQuatz23;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuatz24 FROM sequencia WHERE colQuatz = 24");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quatz24'] = $colQuatz24;
  }

  public function colQuinz()
  {
    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuinz15  FROM sequencia WHERE colQuinz = 15");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quinz15'] = $colQuinz15;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuinz16 FROM sequencia WHERE colQuinz = 16");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quinz16'] = $colQuinz16;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuinz17 FROM sequencia WHERE colQuinz = 17");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quinz17'] = $colQuinz17;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuinz18  FROM sequencia WHERE colQuinz = 18");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quinz18'] = $colQuinz18;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuinz19 FROM sequencia WHERE colQuinz = 19");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quinz19'] = $colQuinz19;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuinz20 FROM sequencia WHERE colQuinz = 20");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quinz20'] = $colQuinz20;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuinz21 FROM sequencia WHERE colQuinz = 21");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quinz21'] = $colQuinz21;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuinz22 FROM sequencia WHERE colQuinz = 22");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quinz22'] = $colQuinz22;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuinz23  FROM sequencia WHERE colQuinz = 23");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quinz23'] = $colQuinz23;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuinz24 FROM sequencia WHERE colQuinz = 24");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quinz24'] = $colQuinz24;

    $idTable = new \App\adms\Models\helper\AdmsRead();
    $idTable->fullRead("SELECT COUNT(id) AS colQuinz25 FROM sequencia WHERE colQuinz = 25");
    $colun = $idTable->getResult();
    extract($colun[0]);
    $this->resultBd['quinz25'] = $colQuinz25;
  }
  public function tableNegative()
  {
    $exeJogo = new \App\adms\Models\helper\AdmsRead();
    $exeJogo->fullRead("SELECT id  FROM  sequencia order by id desc limit 1");
    $ultimaId = $exeJogo->getResult()[0];
    $ultimaId = (int) $ultimaId['id'];
    $ultimaId =  $ultimaId - 1;

    for ($i = 0; $i < 100; $i++) {
      $exeJogo = new \App\adms\Models\helper\AdmsRead();
      $exeJogo->fullRead("SELECT id,colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz,creatdat 
             FROM  sequencia where id =:id", "id={$ultimaId}");
      $num1 = 0;$num2 = 0;$num3 = 0;$num4 = 0;$num5 = 0;$num6 = 0;$num7 = 0;$num8 = 0;$num9 = 0;$num10 = 0;$num11 = 0;$num12 = 0;$num13 = 0;$num14 = 0;$num15 = 0;$num16 = 0;
      $num17 = 0;$num18 = 0;$num19 = 0;$num20 = 0;$num21 = 0;$num22 = 0;$num23 = 0;$num24 = 0;$num25 = 0;
      if ($exeJogo->getResult()) {
        $valor = $exeJogo->getResult()[0];
        sort($valor);
        for ($i = 1; $i <= 25; $i++) {
          if (($i != $valor[0]) && ($i != $valor[1]) && ($i != $valor[2]) && ($i != $valor[3]) && ($i != $valor[4]) && ($i != $valor[5]) && ($i != $valor[6]) && ($i != $valor[7])
            && ($i != $valor[8]) && ($i != $valor[9]) && ($i != $valor[10]) && ($i != $valor[11]) && ($i != $valor[12]) && ($i != $valor[13]) && ($i != $valor[14])
          ) {
            switch ($i) {
              case 1:
                $num1++;
                break;
              case 2:
                $num2++;
                break;
              case 3:
                $num3++;
                break;
              case 4:
                $num4++;
                break;
              case 5:
                $num5++;
                break;
              case 6:
                $num6++;
                break;
              case 7:
                $num7++;
                break;
              case 8:
                $num8++;
                break;
              case 9:
                $num9++;
                break;
              case 10:
                $num10++;
                break;
              case 11:
                $num11++;
                break;
              case 12:
                $num12++;
                break;
                case 13:
                  $num13++;
                  break;
                case 14:
                  $num14++;
                  break;
                case 15:
                  $num15++;
                  break;
                case 16:
                  $num16++;
                  break;
                case 17:
                  $num17++;
                  break;
                case 18:
                  $num18++;
                  break;
                case 19:
                  $num19++;
                  break;
                case 20:
                  $num20++;
                  break;
                case 21:
                  $num21++;
                  break;
                case 22:
                  $num22++;
                  break;
                case 23:
                  $num23++;
                  break;
                case 24:
                  $num24++;
                  break;
                  case 25:
                    $num25;
                    default;
            }
          }
        }
        $ultimaId = $ultimaId - 1;
      } else {
        $ultimaId = $ultimaId - 1;
      }
    }
    $resultFinal =[$num1,$num2,$num3,$num4,$num5,$num6,$num7,$num6,$num9,$num10,$num11,$num12,$num13,$num14,$num15,$num16,$num17,$num18,$num17,$num18,$num19,$num20,$num21,$num22,$num23,$num24,$num25];
  }
}
