<?php

namespace App\adms\Models;

use App\adms\Models\helper\AdmsConn;
use PDO;

if (!defined('RSR1937NA')) {
  //   header("Location: /");
  die("Erro: pagina nao encontrada");
}

//ARQUIVO DA CADASTRO DE USUÁRIO
class AdmsAddJogos extends AdmsConn

{
  private int $id; // RECEBE OS IDS
  private array $data; // RECEBE OS DADOS DO FORMULARIO
  private array $tabNove; // recebe os dados da tabela tab_nove
  private bool $result = false; //RECEBE O RESULTADO DA EXECUÇÃO DA CLASSE
  private bool $igual = true; //RECEBE recebe o resultado do metodo verificar
  private array $positivos; // RECEBE OS DADOS DO BANCO DE DADOS DA TABELA CALCULO
  private array $negativos; // RECEBE OS DADOS DO BANCO DE DADOS DA TABELA NEGATIVOS
  private array|null $resultBd; //$resultBd Recebe os registros do banco de dados
  private array|null $tabDoze; //recebe os dados da tabela tab_doze
  private object $conn;

  //RECEBE OS DADOS DO BANCO DE DADOS
  public function getResultBd()
  {
    return $this->resultBd;
  }
  //RECEBE O RESULTADO DA CLASS
  public function getResult()
  {
    return $this->result;
  }
  //RECEBE O RESULTADO DA COMPARAÇÃO DO DADOS
  public function getIgual()
  {
    return $this->igual;
  }
  //CADASTAR OS DADOS NO BANCO USANDO OS DADOS RECEBIDO DA CONTROLLER, DADOS VINDO DIRETO DOS CALCULOS
  public function addMaisJogos(): void
  {
    $deleteUser = new \App\adms\Models\AdmsClearTable;
    // $deleteUser->clearTable("jogos");

    $calculo = new \App\adms\Models\helper\AdmsRead();
    $calculo->fullRead("SELECT  colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz
                          FROM  seq_gerada");
    $this->positivos = $calculo->getResult();

    //   var_dump($this->positivos);
    // unset($this->positivos[10], $this->positivos[9], $this->positivos[8], $this->positivos[7] , $this->positivos[6] , $this->positivos[5],$this->positivos[4]); 


    // var_dump($this->positivos);
    $exeJogo = new \App\adms\Models\helper\AdmsRead();
    $exeJogo->fullRead("SELECT id   FROM  sequencia order by id desc limit 1");
    $ultimaId = $exeJogo->getResult()[0];
    $ultimaId = (int) $ultimaId['id'];

    //  $this->AddText();


    //  $this->jogoEdit();
    // $this->jogoEdit11();
    // $this->jogoEdit12();
    // $this->jogoEdit10();
    // $this->jogoEdit6();

    // $this->gerarJogos();
    $this->selectJogoDia();

    //  $this->positivos[] = $this->data;
    //  $this->coparaResul();

    //$this->selectJogoDia($this->positivos);

    //  $this->edit10neg();


    //  var_dump($this->positivos);

    //  var_dump($value);

    date_default_timezone_set('America/Sao_Paulo');
    $tabp = $this->positivos[2];
    $tabp['creatdat'] = date('Y-m-d H:i');
    //  var_dump($tabp);
    for ($i = 0; $i < 1; $i++) {
      $addJogo = new \App\adms\Models\helper\AdmsCreate();
      // $addJogo->exeCreate("jogos",  $tabp);
    }

    // $this->exeMais12();

    //$this->exeMais8();
    //  $this->exeMais10();
    // $this->exeMais11();


    //   $this->exeTableNovePositivo();

    //  $this->quinz6();
    //   $this->resultUltimoIdSeq();
    //  $this->compilarCalculo();

  }



  function gerarJogos()
  {
    for ($i1 =  1; $i1 <=  8; $i1++) {
      for ($i2 = 2; $i2 <=  9; $i2++) {
        for ($i3 =  3; $i3 <=  10; $i3++) {
          if (
            $i1 != $i2 && $i1 != $i3 && $i2 != $i3
          ) {
            $dados1[] = [$i1, $i2, $i3];
          }
        }
      }
    }
    for ($i1 =  4; $i1 <=  11; $i1++) {
      for ($i2 = 5; $i2 <=  12; $i2++) {
        for ($i3 =  6; $i3 <=  13; $i3++) {
          if (
            $i1 != $i2 && $i1 != $i3 && $i2 != $i3
          ) {
            $dados2[] = [$i1, $i2, $i3];
          }
        }
      }
    }
    for ($i1 =  7; $i1 <= 14; $i1++) {
      for ($i2 = 9; $i2 <=  16; $i2++) {
        for ($i3 =  11; $i3 <=  19; $i3++) {
          if (
            $i1 != $i2 && $i1 != $i3 && $i2 != $i3
          ) {
            $dados3[] = [$i1, $i2, $i3];
          }
        }
      }
    }
    for ($i1 =  13; $i1 <=  20; $i1++) {
      for ($i2 = 14; $i2 <=  21; $i2++) {
        for ($i3 =  15; $i3 <=  22; $i3++) {
          if (
            $i1 != $i2 && $i1 != $i3 && $i2 != $i3
          ) {
            $dados4[] = [$i1, $i2, $i3];
          }
        }
      }
    }
    for ($i1 =  16; $i1 <=  23; $i1++) {
      for ($i2 = 17; $i2 <=  24; $i2++) {
        for ($i3 =  18; $i3 <=  25; $i3++) {
          if (
            $i1 != $i2 && $i1 != $i3 && $i2 != $i3
          ) {
            $dados5[] = [$i1, $i2, $i3];
          }
        }
      }
    }
    // var_dump($dados5);
    $valor = [$dados1, $dados2, $dados3, $dados4, $dados5];

    for ($s = 0; $s <= 232; $s++) {
      foreach ($valor as $key) {
        foreach ($key[$s] as $p) {
          $d[] = (int) $p;
        }
      }
      // $m[] = $d;
      //  var_dump($d);
      if (($d[0] == $d[1]) or ($d[0] == $d[2]) or ($d[0] == $d[3]) or ($d[0] == $d[4]) or ($d[0] == $d[5]) or ($d[0] == $d[6]) or ($d[0] == $d[7]) or ($d[0] == $d[8]) or ($d[0] == $d[9]) or ($d[0] == $d[10]) or ($d[0] == $d[11]) or ($d[0] == $d[12]) or ($d[0] == $d[13]) or ($d[0] == $d[14])) {
      } elseif (($d[1] == $d[2]) or ($d[1] == $d[3]) or ($d[1] == $d[4]) or ($d[1] == $d[5]) or ($d[1] == $d[6]) or ($d[1] == $d[7]) or ($d[1] == $d[8]) or ($d[1] == $d[9]) or ($d[1] == $d[10]) or ($d[1] == $d[11]) or ($d[1] == $d[12]) or ($d[1] == $d[13]) or ($d[1] == $d[14])) {
      } elseif (($d[2] == $d[3]) or ($d[2] == $d[4]) or ($d[2] == $d[5]) or ($d[2] == $d[6]) or ($d[2] == $d[7]) or ($d[2] == $d[8]) or ($d[2] == $d[9]) or ($d[2] == $d[10]) or ($d[2] == $d[11]) or ($d[2] == $d[12]) or ($d[2] == $d[13]) or ($d[2] == $d[14])) {
      } elseif (($d[3] == $d[4]) or ($d[3] == $d[5]) or ($d[3] == $d[6]) or ($d[3] == $d[7]) or ($d[3] == $d[8]) or ($d[3] == $d[9]) or ($d[3] == $d[10]) or ($d[3] == $d[11]) or ($d[3] == $d[12]) or ($d[3] == $d[13]) or ($d[3] == $d[14])) {
      } elseif (($d[4] == $d[5]) or ($d[4] == $d[6]) or ($d[4] == $d[7]) or ($d[4] == $d[8]) or ($d[4] == $d[9]) or ($d[4] == $d[10]) or ($d[4] == $d[11]) or ($d[4] == $d[12]) or ($d[4] == $d[13]) or ($d[4] == $d[14])) {
      } elseif (($d[5] == $d[6]) or ($d[5] == $d[7]) or ($d[5] == $d[8]) or ($d[5] == $d[9]) or ($d[5] == $d[10]) or ($d[5] == $d[11]) or ($d[5] == $d[12]) or ($d[5] == $d[13]) or ($d[5] == $d[14])) {
      } elseif (($d[6] == $d[7])  or ($d[6] == $d[8]) or ($d[6] == $d[9]) or ($d[6] == $d[10]) or ($d[6] == $d[11]) or ($d[6] == $d[12]) or ($d[6] == $d[13]) or ($d[6] == $d[14])) {
      } elseif (($d[7] == $d[8]) or ($d[7] == $d[9])   or ($d[7] == $d[10])  or ($d[7] == $d[11])  or ($d[7] == $d[12]) or ($d[7] == $d[13])  or ($d[7] == $d[14])) {
      } elseif (($d[8] == $d[9]) or ($d[8] == $d[10]) or ($d[8] == $d[11]) or ($d[8] == $d[12]) or ($d[8] == $d[13]) or ($d[8] == $d[14])) {
      } elseif (($d[9] == $d[10]) or ($d[9] == $d[11]) or ($d[9] == $d[12]) or ($d[9] == $d[13]) or ($d[9] == $d[14])) {
      } elseif (($d[10] == $d[11]) or ($d[10] == $d[12]) or ($d[10] == $d[13]) or ($d[10] == $d[14])) {
      } elseif (($d[11] == $d[12]) or $d[11] == $d[13] or $d[11] == $d[14]) {
      } elseif (($d[12] == $d[13]) or $d[12] == $d[14]) {
      } elseif ($d[13] == $d[14]) {
      } else {
        $m[] = $d;
      }
      // $m[] = $d;
      unset($d);
    }

    // var_dump($m);
    foreach ($m as $m1) {
      $this->data = $m1;
      $this->addJogo();
    }
  }

  function selectJogoDia()
  {

    $deleteUser = new \App\adms\Models\AdmsClearTable;
    $deleteUser->clearTable("jogos");
    $value = new \App\adms\Models\helper\AdmsRead();
    $value->fullRead("SELECT id From sequencia order by id asc limit 1");
    $id = (int) $value->getResult()[0]['id'];


    $this->id = $id + 0;

    for ($i = 0; $i < 1; $i++) {
      $value = new \App\adms\Models\helper\AdmsRead();
      $value->fullRead("SELECT colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz
       FROM sequencia WHERE id=:id", "id={$this->id}");
      if ($value->getResult()) {
        $value = $value->getResult();
        $this->data = $value[0];
        //  var_dump($this->data );
        for ($n1 = 0; $n1 < 16; $n1++) {
          $this->addJogo();
        }

        $this->id = $this->id + 1;
        $this->result = true;
      } else {
        $this->id = $this->id + 1;
        $this->result = false;
      }
    }
  }
  function edit10neg()
  {
    $deleteUser = new \App\adms\Models\AdmsClearTable;
    $deleteUser->clearTable("tab_doze");

    $exeJogo = new \App\adms\Models\helper\AdmsRead();
    $exeJogo->fullRead("SELECT colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz  FROM  seq_gerada ");
    if ($exeJogo->getResult()) {
      $valor = $exeJogo->getResult()[0];
      sort($valor);
      //  var_dump($valor);
      for ($s = 1; $s <= 25; $s++) {
        if (($s != $valor[0]) && ($s != $valor[1]) && ($s != $valor[2]) && ($s != $valor[3]) && ($s != $valor[4]) && ($s != $valor[5]) && ($s != $valor[6]) && ($s != $valor[7])
          && ($s != $valor[8]) && ($s != $valor[9]) && ($s != $valor[10]) && ($s != $valor[11]) && ($s != $valor[12]) && ($s != $valor[13]) && ($s != $valor[14])
        ) {
          $v1[] = $s;
        }
      }
      $neg[] = $valor;
      unset($valor);
      //   var_dump($neg);
      $this->addTab_doze($neg);
      //}
      // sort($valor);
      $data = $v1;
      //  var_dump($data);
      for ($i1 =  0; $i1 <=  6; $i1++) {
        for ($i2 = $i1; $i2 <=  7; $i2++) {
          for ($i3 =  $i2; $i3 <=  8; $i3++) {
            for ($i4 =  $i3; $i4 <=  9; $i4++) {

              if (
                $i1 != $i2 && $i1 != $i3  && $i1 != $i4
                && $i2 != $i3 && $i2 != $i4
                && $i3 != $i4
              ) {
                $dados1[] = [$data[$i1], $data[$i2], $data[$i3], $data[$i4]];
              }
            }
          }
        }
      }
    }

    $valor = [$dados1];
    //var_dump($dados1);

    for ($s = 0; $s <= 209; $s++) {
      foreach ($valor as $key) {
        foreach ($key[$s] as $p) {
          $d[] = (int) $p;
        }
      }
      $m[] = $d;
      //  var_dump($d);
      if (($d[0] == $d[1]) or ($d[0] == $d[2]) or ($d[0] == $d[3])) {
      } elseif (($d[1] == $d[2]) or ($d[1] == $d[3])) {
      } elseif (($d[2] == $d[3])) {
      } else {
        $m[] = $d;
      }
      // $m[] = $d;
      unset($d);
      // var_dump($m);
    }

    //   var_dump($m);
    $this->addTab_doze($m);
  }

  public function coparaResul()
  {
    $exeJogo = new \App\adms\Models\helper\AdmsRead();
    // $exeJogo->fullRead("SELECT  colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete  FROM  tab_doze");
    //   $tab_doze = $exeJogo->getResult()[0];

    $exeJogo = new \App\adms\Models\helper\AdmsRead();
    $exeJogo->fullRead("SELECT id  FROM  seq_gerada order by id desc limit 1");
    $ultimaId = $exeJogo->getResult()[0];

    $ultimaId = (int) $ultimaId['id'];
    $ultimaId =  $ultimaId - 1;
    $num = 0;
    for ($n = 1; $n <= $ultimaId; $n++) {
      $exeJogo = new \App\adms\Models\helper\AdmsRead();
      $exeJogo->fullRead("SELECT id, colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz
                FROM  seq_gerada where id =:id", "id={$ultimaId}");
      if ($exeJogo->getResult()) {
        $valor = $exeJogo->getResult()[0];
        $id = $valor['id'];

        $ultimaId = $ultimaId - 1;
      } else {
        $ultimaId = $ultimaId - 1;
      }
    }
    //  var_dump($num);
    //SELECIONO OS Q MAIS SAUI POR COLUNA

  }

  function jogoEdit6()
  {

    $deleteUser = new \App\adms\Models\AdmsClearTable;
    $deleteUser->clearTable("tab_doze");

    $exeJogo = new \App\adms\Models\helper\AdmsRead();
    $exeJogo->fullRead("SELECT colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz  FROM  seq_gerada ");
    if ($exeJogo->getResult()) {
      $valor = $exeJogo->getResult()[0];
      sort($valor);
      //  var_dump($valor);
      for ($s = 1; $s <= 25; $s++) {
        if (($s != $valor[0]) && ($s != $valor[1]) && ($s != $valor[2]) && ($s != $valor[3]) && ($s != $valor[4]) && ($s != $valor[5]) && ($s != $valor[6]) && ($s != $valor[7])
          && ($s != $valor[8]) && ($s != $valor[9]) && ($s != $valor[10]) && ($s != $valor[11]) && ($s != $valor[12]) && ($s != $valor[13]) && ($s != $valor[14])
        ) {
          $neg[] = $s;
        }
      }
      // var_dump(  $neg);
      $n1[] = $neg;
      $this->addTab_doze($n1);
      $data = $valor;
      // var_dump($data);
      for ($i1 =  0; $i1 <=  9; $i1++) {
        for ($i2 = $i1; $i2 <=  10; $i2++) {
          for ($i3 = $i2; $i3 <=  11; $i3++) {
            if (
              $i1 != $i2 && $i1 != $i3 && $i2 != $i3
            ) {
              $dados1[] = [$data[$i1], $data[$i2], $data[$i3]];
            }
          }
        }
      }
      for ($i1 =  3; $i1 <=  12; $i1++) {
        for ($i2 = $i1; $i2 <=  13; $i2++) {
          for ($i3 = $i2; $i3 <=  14; $i3++) {
            if (
              $i1 != $i2 && $i1 != $i3 && $i2 != $i3
            ) {
              $dados2[] = [$data[$i1], $data[$i2], $data[$i3]];
            }
          }
        }
      }



      //   var_dump($dados1);
      $valor = [$dados1, $dados2];

      for ($s = 0; $s <= 219; $s++) {
        foreach ($valor as $key) {
          foreach ($key[$s] as $p) {
            $d[] = (int) $p;
          }
        }
        //var_dump($d);
        if (($d[0] == $d[1]) or ($d[0] == $d[2]) or ($d[0] == $d[3]) or ($d[0] == $d[4]) or ($d[0] == $d[5])) {
        } elseif (($d[1] == $d[2]) or ($d[1] == $d[3]) or ($d[1] == $d[4]) or ($d[1] == $d[5])) {
        } elseif (($d[2] == $d[3]) or ($d[2] == $d[4]) or ($d[2] == $d[5])) {
        } elseif (($d[3] == $d[4]) or ($d[3] == $d[5])) {
        } elseif (($d[4] == $d[5])) {
        } else {
          $m[] = $d;
        }
        unset($d);
      }
    }
    //  var_dump($m);


    $this->addTab_doze($m);
  }

  function jogoEdit10()
  {

    $deleteUser = new \App\adms\Models\AdmsClearTable;
    $deleteUser->clearTable("tab_doze");

    $exeJogo = new \App\adms\Models\helper\AdmsRead();
    $exeJogo->fullRead("SELECT colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz  FROM  seq_gerada ");
    if ($exeJogo->getResult()) {
      $valor = $exeJogo->getResult()[0];
      sort($valor);
      //  var_dump($valor);
      for ($s = 1; $s <= 25; $s++) {
        if (($s != $valor[0]) && ($s != $valor[1]) && ($s != $valor[2]) && ($s != $valor[3]) && ($s != $valor[4]) && ($s != $valor[5]) && ($s != $valor[6]) && ($s != $valor[7])
          && ($s != $valor[8]) && ($s != $valor[9]) && ($s != $valor[10]) && ($s != $valor[11]) && ($s != $valor[12]) && ($s != $valor[13]) && ($s != $valor[14])
        ) {
          $v1[] = $s;
        }
      }
      $neg[] = $v1;
      // var_dump(  $neg);
      $this->addTab_doze($neg);

      $data = $valor;

      shuffle($data);

      for ($i1 =  0; $i1 <=  5; $i1++) {
        for ($i2 = $i1; $i2 <=  6; $i2++) {
          for ($i3 =  $i2; $i3 <=  7; $i3++) {
            for ($i4 =  $i3; $i4 <=  8; $i4++) {
              for ($i5 =  $i4; $i5 <=  9; $i5++) {
                if (
                  $i1 != $i2 && $i1 != $i3 && $i1 != $i4 && $i1 != $i5
                  && $i2 != $i3 && $i2 != $i4 && $i2 != $i5
                  && $i3 != $i4 && $i3 != $i5
                  && $i4 != $i5
                ) {
                  $dados1[] = [$data[$i1], $data[$i2], $data[$i3], $data[$i4], $data[$i5]];
                }
              }
            }
          }
        }
      }
      for ($i1 =  5; $i1 <=  10; $i1++) {
        for ($i2 = $i1; $i2 <=  11; $i2++) {
          for ($i3 =  $i2; $i3 <=  12; $i3++) {
            for ($i4 =  $i3; $i4 <=  13; $i4++) {
              for ($i5 =  $i4; $i5 <=  14; $i5++) {
                if (
                  $i1 != $i2 && $i1 != $i3 && $i1 != $i4 && $i1 != $i5
                  && $i2 != $i3 && $i2 != $i4 && $i2 != $i5
                  && $i3 != $i4 && $i3 != $i5
                  && $i4 != $i5
                ) {
                  // $dados[]=[$i1,$i2,$i3];

                  $dados2[] = [$data[$i1], $data[$i2], $data[$i3], $data[$i4], $data[$i5]];
                }
              }
            }
          }
        }
      }

      $valor = [$dados1, $dados2];

      for ($s = 0; $s <= 251; $s++) {
        foreach ($valor as $key) {
          foreach ($key[$s] as $p) {
            $d[] = (int) $p;
          }
        }
        if (($d[0] == $d[1]) or ($d[0] == $d[2]) or ($d[0] == $d[3]) or ($d[0] == $d[4]) or ($d[0] == $d[5]) or ($d[0] == $d[6]) or ($d[0] == $d[7]) or ($d[0] == $d[8]) or ($d[0] == $d[9])) {
        } elseif (($d[1] == $d[2]) or ($d[1] == $d[3]) or ($d[1] == $d[4]) or ($d[1] == $d[5]) or ($d[1] == $d[6]) or ($d[1] == $d[7]) or ($d[1] == $d[8]) or ($d[1] == $d[9])) {
        } elseif (($d[2] == $d[3]) or ($d[2] == $d[4]) or ($d[2] == $d[5]) or ($d[2] == $d[6]) or ($d[2] == $d[7]) or ($d[2] == $d[8]) or ($d[2] == $d[9])) {
        } elseif (($d[3] == $d[4]) or ($d[3] == $d[5]) or ($d[3] == $d[6]) or ($d[3] == $d[7]) or ($d[3] == $d[8]) or ($d[3] == $d[9])) {
        } elseif (($d[4] == $d[5]) or ($d[4] == $d[6]) or ($d[4] == $d[7]) or ($d[4] == $d[8]) or ($d[4] == $d[9])) {
        } elseif (($d[5] == $d[6]) or ($d[5] == $d[7]) or ($d[5] == $d[8]) or ($d[5] == $d[9])) {
        } elseif (($d[6] == $d[7]) or ($d[6] == $d[8]) or ($d[6] == $d[9])) {
        } elseif (($d[7] == $d[8]) or ($d[7] == $d[9])) {
        } elseif (($d[8] == $d[9])) {
        } else {
          $m[] = $d;
        }
        unset($d);
      }
    }

    //var_dump($m);
    $this->addTab_doze($m);
  }

  public function jogoEdit12()
  {

    $deleteUser = new \App\adms\Models\AdmsClearTable;
    $deleteUser->clearTable("tab_doze");

    $exeJogo = new \App\adms\Models\helper\AdmsRead();
    $exeJogo->fullRead("SELECT colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz  FROM  seq_gerada ");
    if ($exeJogo->getResult()) {
      $valor = $exeJogo->getResult()[0];
      sort($valor);
      //  var_dump($valor);
      for ($s = 1; $s <= 25; $s++) {
        if (($s != $valor[0]) && ($s != $valor[1]) && ($s != $valor[2]) && ($s != $valor[3]) && ($s != $valor[4]) && ($s != $valor[5]) && ($s != $valor[6]) && ($s != $valor[7])
          && ($s != $valor[8]) && ($s != $valor[9]) && ($s != $valor[10]) && ($s != $valor[11]) && ($s != $valor[12]) && ($s != $valor[13]) && ($s != $valor[14])
        ) {
          $v1[] = $s;
        }
      }
      $neg[] = $v1;
      //   var_dump($neg);
      $this->addTab_doze($neg);
      //}
      // sort($valor);
      $data = $valor;
      //  var_dump($data);
      for ($i1 =  0; $i1 <=  2; $i1++) {
        for ($i2 = $i1; $i2 <=  3; $i2++) {
          for ($i3 =  $i2; $i3 <=  4; $i3++) {
            for ($i4 =  $i3; $i4 <=  5; $i4++) {
              for ($i5 =  $i4; $i5 <=  6; $i5++) {
                for ($i6 =  $i5; $i6 <=  7; $i6++) {
                  for ($i7 =  $i6; $i7 <=  8; $i7++) {
                    for ($i8 =  $i7; $i8 <=  9; $i8++) {
                      for ($i9 =  $i8; $i9 <=  10; $i9++) {
                        for ($i10 =  $i9; $i10 <=  11; $i10++) {
                          for ($i11 =  $i10; $i11 <=  12; $i11++) {
                            for ($i12 =  $i11; $i12 <=  13; $i12++) {
                              for ($i13 =  $i12; $i13 <=  14; $i13++) {
                                if (
                                  $i1 != $i2 && $i1 != $i3  && $i1 != $i4 && $i1 != $i5 && $i1 != $i6 && $i1 != $i7 && $i1 != $i8 && $i1 != $i9 && $i1 != $i10 && $i1 != $i11 && $i1 != $i12 && $i1 != $i13
                                  && $i2 != $i3 && $i2 != $i4  && $i2 != $i5 && $i2 != $i6 && $i2 != $i7 && $i2 != $i8 && $i2 != $i9 && $i2 != $i10 && $i2 != $i11 && $i2 != $i12 && $i2 != $i13
                                  && $i3 != $i4 && $i3 != $i5  && $i3 != $i6 && $i3 != $i7 && $i3 != $i8 && $i3 != $i9 && $i3 != $i10 && $i3 != $i11 && $i3 != $i12 && $i3 != $i13
                                  && $i4 != $i5  && $i4 != $i6  && $i4 != $i7  && $i4 != $i8  && $i4 != $i9 && $i4 != $i10 && $i4 != $i11 && $i4 != $i12  && $i4 != $i13
                                  && $i5 != $i6  && $i5 != $i7 && $i5 != $i8 && $i5 != $i9 && $i5 != $i10 && $i5 != $i11  && $i5 != $i12 && $i5 != $i13
                                  && $i6 != $i7   && $i6 != $i8 && $i6 != $i9 && $i6 != $i10 && $i6 != $i11 && $i6 != $i12 && $i6 != $i13
                                  && $i7 != $i8  && $i7 != $i9 && $i7 != $i10 && $i7 != $i11 && $i7 != $i12 && $i7 != $i13
                                  && $i8 != $i9  && $i8 != $i10 && $i8 != $i11 && $i8 != $i12 && $i8 != $i13
                                  && $i9 != $i10 && $i9 != $i11 && $i9 != $i12 && $i9 != $i13
                                  && $i10 != $i11  && $i10 != $i12 && $i10 != $i13
                                  && $i11 != $i12  && $i11 != $i13
                                  && $i12 != $i13
                                ) {
                                  $dados1[] = [$data[$i1], $data[$i2], $data[$i3], $data[$i4], $data[$i5], $data[$i6], $data[$i7], $data[$i8], $data[$i9], $data[$i10], $data[$i11], $data[$i12], $data[$i13]];
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }

      //   var_dump($dados1);
      $valor = [$dados1];

      for ($s = 0; $s <= 104; $s++) {
        foreach ($valor as $key) {
          foreach ($key[$s] as $p) {
            $d[] = (int) $p;
          }
        }
        //  var_dump($d);
        if (($d[0] == $d[1]) or ($d[0] == $d[2]) or ($d[0] == $d[3]) or ($d[0] == $d[4]) or ($d[0] == $d[5]) or ($d[0] == $d[6]) or ($d[0] == $d[7]) or ($d[0] == $d[8]) or ($d[0] == $d[9]) or ($d[0] == $d[10]) or ($d[0] == $d[11])) {
        } elseif (($d[1] == $d[2]) or ($d[1] == $d[3]) or ($d[1] == $d[4]) or ($d[1] == $d[5])  or ($d[1] == $d[6]) or ($d[1] == $d[7]) or ($d[1] == $d[8])  or ($d[1] == $d[9]) or ($d[1] == $d[10]) or ($d[1] == $d[11])) {
        } elseif (($d[2] == $d[3]) or ($d[2] == $d[4]) or ($d[2] == $d[5]) or ($d[2] == $d[6]) or ($d[2] == $d[7]) or ($d[2] == $d[8]) or ($d[2] == $d[9]) or ($d[2] == $d[10]) or ($d[2] == $d[11])) {
        } elseif (($d[3] == $d[4]) or ($d[3] == $d[5]) or ($d[3] == $d[6]) or ($d[3] == $d[7]) or ($d[3] == $d[8]) or ($d[3] == $d[9]) or ($d[3] == $d[10]) or ($d[3] == $d[11])) {
        } elseif (($d[4] == $d[5]) or ($d[4] == $d[6]) or ($d[4] == $d[7])  or ($d[4] == $d[8]) or ($d[4] == $d[9]) or ($d[4] == $d[10]) or ($d[4] == $d[11])) {
        } elseif (($d[5] == $d[6]) or ($d[5] == $d[7]) or ($d[5] == $d[8]) or ($d[5] == $d[9]) or ($d[5] == $d[10]) or ($d[5] == $d[11])) {
        } elseif (($d[6] == $d[7]) or ($d[6] == $d[8]) or ($d[6] == $d[9]) or ($d[6] == $d[10]) or ($d[6] == $d[11])) {
        } elseif (($d[7] == $d[8]) or ($d[7] == $d[9]) or ($d[7] == $d[10]) or ($d[7] == $d[11])) {
        } elseif (($d[8] == $d[9]) or ($d[8] == $d[10]) or ($d[8] == $d[11])) {
        } elseif (($d[9] == $d[10]) or ($d[9] == $d[11])) {
        } elseif (($d[10] == $d[11])) {
        } else {
          $m[] = $d;
        }
        unset($d);
      }
    }
    //    var_dump($m);
    $this->addTab_doze($m);
  }

  public function jogoEdit()
  {

    $deleteUser = new \App\adms\Models\AdmsClearTable;
    $deleteUser->clearTable("tab_doze");

    $exeJogo = new \App\adms\Models\helper\AdmsRead();
    $exeJogo->fullRead("SELECT colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz  FROM  seq_gerada ");
    if ($exeJogo->getResult()) {
      $valor = $exeJogo->getResult()[0];
      sort($valor);
      // var_dump($valor);
      for ($s = 1; $s <= 25; $s++) {
        if (($s != $valor[0]) && ($s != $valor[1]) && ($s != $valor[2]) && ($s != $valor[3]) && ($s != $valor[4]) && ($s != $valor[5]) && ($s != $valor[6]) && ($s != $valor[7])
          && ($s != $valor[8]) && ($s != $valor[9]) && ($s != $valor[10]) && ($s != $valor[11]) && ($s != $valor[12]) && ($s != $valor[13]) && ($s != $valor[14])
        ) {
          $v1[] = $s;
        }
      }
      $neg[] = $v1;
      $this->addTab_doze($neg);

      $data = $valor;
      for ($i1 =  0; $i1 <=  6; $i1++) {
        for ($i2 = $i1; $i2 <=  7; $i2++) {
          for ($i3 =  $i2; $i3 <=  8; $i3++) {
            if (
              $i1 != $i2 && $i1 != $i3 && $i2 != $i3
            ) {
              $dados1[] = [$data[$i1], $data[$i2], $data[$i3]];
            }
          }
        }
      }
      for ($i1 =  3; $i1 <=  9; $i1++) {
        for ($i2 = $i1; $i2 <=  10; $i2++) {
          for ($i3 =  $i2; $i3 <=  11; $i3++) {
            if (
              $i1 != $i2 && $i1 != $i3 && $i2 != $i3
            ) {
              // $dados[]=[$i1,$i2,$i3];

              $dados2[] = [$data[$i1], $data[$i2], $data[$i3]];
            }
          }
        }
      }
      for ($i1 =  6; $i1 <=  12; $i1++) {
        for ($i2 = $i1; $i2 <=  13; $i2++) {
          for ($i3 =  $i2; $i3 <=  14; $i3++) {
            if (
              $i1 != $i2 && $i1 != $i3 && $i2 != $i3
            ) {

              $dados3[] = [$data[$i1], $data[$i2], $data[$i3]];
            }
          }
        }
      }
      //   var_dump($dados1);
      $valor = [$dados1, $dados2, $dados3];

      for ($s = 0; $s <= 83; $s++) {
        foreach ($valor as $key) {
          foreach ($key[$s] as $p) {
            $d[] = (int) $p;
          }
        }
        //  $m[] = $d;
        // var_dump($d);
        if (($d[0] == $d[1]) or ($d[0] == $d[2]) or ($d[0] == $d[3]) or ($d[0] == $d[4]) or ($d[0] == $d[5]) or ($d[0] == $d[6]) or ($d[0] == $d[7]) or ($d[0] == $d[8])) {
        } elseif (($d[1] == $d[2]) or ($d[1] == $d[3]) or ($d[1] == $d[4]) or ($d[1] == $d[5]) or ($d[1] == $d[6]) or ($d[1] == $d[7]) or ($d[1] == $d[8])) {
        } elseif (($d[2] == $d[3]) or ($d[2] == $d[4]) or ($d[2] == $d[5]) or ($d[2] == $d[6]) or ($d[2] == $d[7]) or ($d[2] == $d[8])) {
        } elseif (($d[3] == $d[4]) or ($d[3] == $d[5]) or ($d[3] == $d[6]) or ($d[3] == $d[7]) or ($d[3] == $d[8])) {
        } elseif (($d[4] == $d[5]) or ($d[4] == $d[6]) or ($d[4] == $d[7]) or ($d[4] == $d[8])) {
        } elseif (($d[5] == $d[6]) or ($d[5] == $d[7]) or ($d[5] == $d[8])) {
        } elseif (($d[6] == $d[7]) or ($d[6] == $d[8])) {
        } elseif (($d[7] == $d[8])) {
        } else {
          $m[] = $d;
        }
        // $m[] = $d;
        unset($d);
        // var_dump($m);
      }
    }
    // var_dump($m);

    $this->addTab_doze($m);
  }
  public function jogoEdit11()
  {

    $deleteUser = new \App\adms\Models\AdmsClearTable;
    $deleteUser->clearTable("tab_doze");

    $exeJogo = new \App\adms\Models\helper\AdmsRead();
    $exeJogo->fullRead("SELECT colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz  FROM  seq_gerada ");
    if ($exeJogo->getResult()) {
      $valor = $exeJogo->getResult()[0];
      sort($valor);
      //  var_dump($valor);
      for ($s = 1; $s <= 25; $s++) {
        if (($s != $valor[0]) && ($s != $valor[1]) && ($s != $valor[2]) && ($s != $valor[3]) && ($s != $valor[4]) && ($s != $valor[5]) && ($s != $valor[6]) && ($s != $valor[7])
          && ($s != $valor[8]) && ($s != $valor[9]) && ($s != $valor[10]) && ($s != $valor[11]) && ($s != $valor[12]) && ($s != $valor[13]) && ($s != $valor[14])
        ) {
          $v1[] = $s;
        }
      }
      $neg[] = $v1;
      $this->addTab_doze($neg);
      //}
      // sort($valor);
      $data = $valor;
      for ($i1 =  0; $i1 <=  4; $i1++) {
        for ($i2 = $i1; $i2 <=  5; $i2++) {
          for ($i3 =  $i2; $i3 <=  6; $i3++) {
            for ($i4 =  $i3; $i4 <=  7; $i4++) {
              for ($i5 =  $i4; $i5 <=  8; $i5++) {
                for ($i6 =  $i5; $i6 <=  9; $i6++) {
                  for ($i7 =  $i6; $i7 <=  10; $i7++) {
                    for ($i8 =  $i7; $i8 <=  11; $i8++) {
                      for ($i9 =  $i8; $i9 <=  12; $i9++) {
                        for ($i10 =  $i9; $i10 <=  13; $i10++) {
                          for ($i11 =  $i10; $i11 <=  14; $i11++) {

                            if (
                              $i1 != $i2 && $i1 != $i3  && $i1 != $i4 && $i1 != $i5 && $i1 != $i6 && $i1 != $i7 && $i1 != $i8 && $i1 != $i9 && $i1 != $i10 && $i1 != $i11
                              && $i2 != $i3 && $i2 != $i4  && $i2 != $i5 && $i2 != $i6 && $i2 != $i7 && $i2 != $i8 && $i2 != $i9 && $i2 != $i10 && $i2 != $i11
                              && $i3 != $i4 && $i3 != $i5  && $i3 != $i6 && $i3 != $i7 && $i3 != $i8 && $i3 != $i9 && $i3 != $i10 && $i3 != $i11
                              && $i4 != $i5  && $i4 != $i6  && $i4 != $i7  && $i4 != $i8  && $i4 != $i9 && $i4 != $i10 && $i4 != $i11
                              && $i5 != $i6  && $i5 != $i7 && $i5 != $i8 && $i5 != $i9 && $i5 != $i10 && $i5 != $i11
                              && $i6 != $i7   && $i6 != $i8 && $i6 != $i9 && $i6 != $i10 && $i6 != $i11
                              && $i7 != $i8  && $i7 != $i9 && $i7 != $i10 && $i7 != $i11
                              && $i8 != $i9  && $i8 != $i10 && $i8 != $i11
                              && $i9 != $i10 && $i9 != $i11
                              && $i10 != $i11
                            ) {
                              $dados1[] = [$data[$i1], $data[$i2], $data[$i3], $data[$i4], $data[$i5], $data[$i6], $data[$i7], $data[$i8], $data[$i9], $data[$i10], $data[$i11]];
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }

      //    var_dump($dados1);
      $valor = [$dados1];

      for ($s = 0; $s <= 1364; $s++) {
        foreach ($valor as $key) {
          foreach ($key[$s] as $p) {
            $d[] = (int) $p;
          }
        }
        //  var_dump($d);
        if (($d[0] == $d[1]) or ($d[0] == $d[2]) or ($d[0] == $d[3]) or ($d[0] == $d[4]) or ($d[0] == $d[5]) or ($d[0] == $d[6]) or ($d[0] == $d[7]) or ($d[0] == $d[8]) or ($d[0] == $d[9]) or ($d[0] == $d[10])) {
        } elseif (($d[1] == $d[2]) or ($d[1] == $d[3]) or ($d[1] == $d[4]) or ($d[1] == $d[5])  or ($d[1] == $d[6]) or ($d[1] == $d[7]) or ($d[1] == $d[8])  or ($d[1] == $d[9]) or ($d[1] == $d[10])) {
        } elseif (($d[2] == $d[3]) or ($d[2] == $d[4]) or ($d[2] == $d[5]) or ($d[2] == $d[6]) or ($d[2] == $d[7]) or ($d[2] == $d[8]) or ($d[2] == $d[9]) or ($d[2] == $d[10])) {
        } elseif (($d[3] == $d[4]) or ($d[3] == $d[5]) or ($d[3] == $d[6]) or ($d[3] == $d[7]) or ($d[3] == $d[8]) or ($d[3] == $d[9]) or ($d[3] == $d[10])) {
        } elseif (($d[4] == $d[5]) or ($d[4] == $d[6]) or ($d[4] == $d[7])  or ($d[4] == $d[8]) or ($d[4] == $d[9]) or ($d[4] == $d[10])) {
        } elseif (($d[5] == $d[6]) or ($d[5] == $d[7]) or ($d[5] == $d[8]) or ($d[5] == $d[9]) or ($d[5] == $d[10])) {
        } elseif (($d[6] == $d[7]) or ($d[6] == $d[8]) or ($d[6] == $d[9]) or ($d[6] == $d[10])) {
        } elseif (($d[7] == $d[8]) or ($d[7] == $d[9]) or ($d[7] == $d[10])) {
        } elseif (($d[8] == $d[9]) or ($d[8] == $d[10])) {
        } elseif (($d[9] == $d[10])) {
        } else {
          $m[] = $d;
        }
        unset($d);
      }
    }
    //  var_dump($m);
    $this->addTab_doze($m);
  }
  public function compilarCalculo()
  {
    //  var_dump($this->positivos);
    sort($this->positivos);
    $valor = $this->positivos;
    //  var_dump($valor);

    for ($i1 = 0; $i1 <= 6; $i1++) {
      $n1 = $valor[$i1];
      for ($i2 = 1; $i2 <= 6; $i2++) {
        $n2 = $valor[$i2];
        for ($i3 = 2; $i3 <= 6; $i3++) {
          $n3 = $valor[$i3];
          for ($i4 = 3; $i4 <= 6; $i4++) {
            $n4 = $valor[$i4];
            for ($i5 = 4; $i5 <= 6; $i5++) {
              $n5 = $valor[$i5];
              //   for ($i6 = 5; $i6 <= 5; $i6++) {
              // $n6 = $valor[$i6];

              if (
                $n1 != $n2 && $n1 != $n3 && $n1 != $n4 && $n1 != $n5 //&& $n1 != $n6
                && $n2 != $n3 && $n2 != $n4 && $n2 != $n5 //&& $n2 != $n6
                && $n3 != $n4 && $n3 != $n5 // && $n3 != $n6
                && $n4 != $n5 // && $n4 != $n6
                //   && $n5 != $n6
              ) {
                $jogo[] = [$n1, $n2, $n3, $n4, $n5];
                //  }
              }
            }
          }
        }
      }
    }
    // var_dump($jogo);
    $this->addTab_doze($jogo);
  }

  public function addTab_seis($value): void
  {
    foreach ($value as $data) {
      sort($data);
      $tab_seis['colUm'] =  (string)  $data[0];
      $tab_seis['colDois'] = (string)  $data[1];
      $tab_seis['colTres'] = (string)  $data[2];
      $tab_seis['colQuatro'] =  (string) $data[3];
      $tab_seis['colCinco'] = (string)  $data[4];
      if (isset($data[5])) {
        $tab_seis['colSeis'] = (string) $data[5];
      }

      // $this->verificar12($tab_doze);
      // if ($this->getIgual()) {
      date_default_timezone_set('America/Sao_Paulo');
      $tab_seis['creatdat'] = date('Y-m-d');

      $addJogo = new \App\adms\Models\helper\AdmsCreate();
      $addJogo->exeCreate("tab_seis", $tab_seis);
      //  }
    }
  }

  public function addTab_doze($value): void
  {
    //  var_dump($value);
    foreach ($value as $data) {
      sort($data);
      $tab_doze['colUm'] =  (string)  $data[0];
      $tab_doze['colDois'] = (string)  $data[1];
      $tab_doze['colTres'] = (string)  $data[2];
      $tab_doze['colQuatro'] =  (string) $data[3];

      if (isset($data[4])) {
        $tab_doze['colCinco'] = (string) $data[4];
      }

      if (isset($data[5])) {
        $tab_doze['colSeis'] = (string) $data[5];
      }
      if (isset($data[6])) {
        $tab_doze['colSete'] = (string) $data[6];
      }
      if (isset($data[7])) {
        $tab_doze['colOite'] = (string) $data[7];
      }

      if (isset($data[8])) {
        $tab_doze['colNove'] = (string) $data[8];
      }

      if (isset($data[9])) {
        $tab_doze['colDez'] = (string) $data[9];
      }
      if (isset($data[10])) {
        $tab_doze['colOnze'] = (string) $data[10];
      }
      if (isset($data[11])) {
        $tab_doze['colDoze'] = (string) $data[11];
      }
      if (isset($data[12])) {
        $tab_doze['colTrez'] = (string) $data[12];
      }

      if (isset($data[13])) {
        $tab_doze['colQuatz'] = (string) $data[13];
      }
      if (isset($data[14])) {
        $tab_doze['colQuinz'] = (string) $data[14];
      }

      //   var_dump($tab_doze);
      $this->verificar12($tab_doze);
      if ($this->getIgual()) {
        date_default_timezone_set('America/Sao_Paulo');
        $tab_doze['creatdat'] = date('Y-m-d');

        $addJogo = new \App\adms\Models\helper\AdmsCreate();
        //var_dump($tab_doze);

        $addJogo->exeCreate("tab_doze", $tab_doze);
      }
    }
  }
  public function verificar12(array $data)
  {
    $verific = new \App\adms\Models\helper\AdmsRead();
    $verific->fullRead("SELECT colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez FROM tab_doze");
    if ($verific->getResult()) {
      $this->resultBd = $verific->getResult();
      foreach ($this->resultBd as $value) {
        extract($value);
        sort($data);
        if (($colUm == $data[0]) && ($colDois == $data[1]) && ($colTres == $data[2])
          && ($colQuatro == $data[3]) && ($colCinco == $data[4]) && ($colSeis == $data[5])
          && ($colSete == $data[6]) && ($colOite == $data[7]) && ($colNove == $data[8]) && ($colDez == $data[9])
        ) {
          $this->igual = false;
        } else {

          $this->igual = true;
        }
      }
    } else {
      $this->igual = true;
    }
  }



  public function quinz6(): void
  {
    $num = 12;
    $value = new \App\adms\Models\helper\AdmsRead();
    $value->fullRead("SELECT id, colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz
   FROM sequencia Where acertos =:acertos", "acertos={$num}");
    $value = $value->getResult();
    $this->resultBd = $value;

    foreach ($this->resultBd as $key) {
      $this->data = $key;
      $this->addJogo();
    }
  }

  public function exeMais11(): void
  {
    $deleteUser = new \App\adms\Models\AdmsClearTable;
    $deleteUser->clearTable("jogos");

    $tab_trez = new \App\adms\Models\helper\AdmsRead();
    $tab_trez->fullRead("SELECT colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze FROM tab_doze");

    if ($tab_trez->getResult()) {
      $this->resultMais(1);
      // var_dump($this->resultMais);
      $this->tabDoze = $tab_trez->getResult();
      unset($this->tabDoze[0]);
      if (!empty($this->tabDoze)) {
        foreach ($this->tabDoze as $value) {
          // var_dump($value);
          $this->compilarMais11($value);
          $this->addJogo();
        }
      }
    } else {
      $this->result = false;
    }
  }


  //METODO DE VERIFICAÇÃO SE JA EXISTE A SEQUENCIA CADASTRADA NA TABELA JOGOS
  public function verificar(array $data)
  {
    // var_dump($data);
    $verific = new \App\adms\Models\helper\AdmsRead();
    $verific->exeRead("jogos");

    if ($verific->getResult()) {
      $nr1 = $verific->getResult();
      foreach ($nr1 as $value) {
        extract($value);
        if (($colUm == $data['colUm']) && ($colDois == $data['colDois']) && ($colTres == $data['colTres'])
          && ($colQuatro == $data['colQuatro']) && ($colCinco == $data['colCinco']) && ($colSeis == $data['colSeis'])
          && ($colSete == $data['colSete']) && ($colOite == $data['colOite']) && ($colNove == $data['colNove'])
          && ($colDez == $data['colDez']) && ($colOnze == $data['colOnze']) && ($colDoze == $data['colDoze']) && ($colDoze == $data['colTrez'])
        ) {
          $this->igual = false;
        } else {
          $this->igual = true;
        }
      }
    } else {
      $this->igual = true;
    }
  }

  //METODO FINAL DA EXECUCAO DO CADASTRO NA TABELA JOGOS
  public function addJogo(): void
  {
    // var_dump($this->data);
    sort($this->data);
    // var_dump($this->data);

    date_default_timezone_set('America/Sao_Paulo');
    $jogo['colUm'] = $this->data[0];
    $jogo['colDois'] = $this->data[1];
    $jogo['colTres'] = $this->data[2];
    $jogo['colQuatro'] = $this->data[3];
    $jogo['colCinco'] = $this->data[4];
    $jogo['colSeis'] = $this->data[5];
    $jogo['colSete'] = $this->data[6];
    $jogo['colOite'] = $this->data[7];
    $jogo['colNove'] = $this->data[8];
    $jogo['colDez'] = $this->data[9];
    $jogo['colOnze'] = $this->data[10];
    $jogo['colDoze'] = $this->data[11];
    $jogo['colTrez'] =  $this->data[12];
    $jogo['colQuatz'] = $this->data[13];
    $jogo['colQuinz'] = $this->data[14];
    $jogo['creatdat'] = date('Y-m-d H:i:s');
    $this->verificar($jogo);
    if ($this->getIgual()) {
      $addJogo = new \App\adms\Models\helper\AdmsCreate();
      $addJogo->exeCreate("jogos", $jogo);
    }
  }
  //ULTIMO BUSCA O ULTIMO JOGO INCERIDO NA TABELA SEQUENCIA
  public function resultUltimoId(): void
  {
    $value = new \App\adms\Models\helper\AdmsRead();
    $value->fullRead("SELECT id, colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz,creatdat
     FROM sequencia ORDER BY id DESC limit 1");
    $value = $value->getResult();
    $this->resultBd = $value[0];
  }

  public function resultTableDoze(): void
  {
    $value = new \App\adms\Models\helper\AdmsRead();
    $value->fullRead("SELECT id, colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze
     FROM sequencia ORDER BY id asc limit 1");
    $value = $value->getResult();
    $this->resultBd = $value[0];
  }

  public function resultUltimoIdSeq(): void
  {

    $value = new \App\adms\Models\helper\AdmsRead();
    $value->fullRead("SELECT id From sequencia order by id desc limit 1");
    $id = (int) $value->getResult()[0]['id'];
    $this->id = $id - 0;

    $value = new \App\adms\Models\helper\AdmsRead();
    $value->fullRead("SELECT id, colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz,creatdat
     FROM sequencia WHERE id=:id LIMIT :limit", "id={$this->id}&limit=1");
    if ($value->getResult()) {
      $value = $value->getResult();
      $this->resultBd = $value[0];
      // var_dump($this->resultBd);
    }
  }

  //BUSCA UMA SEQUENCIA DE QUENZE NUMEROS QUE MENOS SAIU NA TABELA SEQUENCIA
  public function result10(): void
  {
    $value = new \App\adms\Models\helper\AdmsRead();
    $value->fullRead("SELECT colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz FROM tab_seis");
    if ($value->getResult()) {
      $value = $value->getResult();

      $this->resultBd = $value[0];
    } else {
      $this->result = false;
    }
  }
  //BUSCA OS QUINZE NUMEROS QUE MAIS SAIU NA TABELA SEQUENCIA
  public function resultMais($key): void
  {
    $value = new \App\adms\Models\helper\AdmsRead();
    $value->fullRead("SELECT id From seq_gerada order by id asc limit 1");
    $id = $value->getResult()[0];
    $id = (int) $id['id'];

    $this->id = $id + $key;
    $value = new \App\adms\Models\helper\AdmsRead();
    $value->fullRead("SELECT colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz
   FROM seq_gerada WHERE id=:id LIMIT :limit", "id={$this->id}&limit=1");
    if ($value->getResult()) {
      $value = $value->getResult();
      $this->resultBd = $value[0];
      $this->result = true;
    } else {
      $this->result = false;
    }
  }
  public function exeMais10(): void
  {
    $deleteUser = new \App\adms\Models\AdmsClearTable;
    $deleteUser->clearTable("jogos");

    $tab_trez = new \App\adms\Models\helper\AdmsRead();
    $tab_trez->fullRead("SELECT colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez FROM tab_doze");

    if ($tab_trez->getResult()) {
      $this->resultMais(1);

      $this->tabDoze = $tab_trez->getResult();
      if (!empty($this->tabDoze)) {
        foreach ($this->tabDoze as $value) {
          $this->compilar10($value);
          $this->addJogo();
        }
      }
    } else {
      $this->result = false;
    }
  }
  public function exeMais12(): void
  {
    $deleteUser = new \App\adms\Models\AdmsClearTable;
    $deleteUser->clearTable("jogos");

    $tab_trez = new \App\adms\Models\helper\AdmsRead();
    $tab_trez->fullRead("SELECT colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze FROM tab_doze");

    if ($tab_trez->getResult()) {

      $this->resultMais(1);

      $this->tabDoze = $tab_trez->getResult();
      //  var_dump($this->tabDoze);
      unset($this->tabDoze[0]);

      if (!empty($this->tabDoze)) {
        foreach ($this->tabDoze as $value) {
          //     var_dump($value);
          $this->compilarMais12($value);
          $this->addJogo();
        }
      }
    } else {
      $this->result = false;
    }
  }

  public function exeMais8(): void
  {
    $deleteUser = new \App\adms\Models\AdmsClearTable;
    $deleteUser->clearTable("jogos");

    $tab_trez = new \App\adms\Models\helper\AdmsRead();
    $tab_trez->fullRead("SELECT colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite FROM tab_doze");

    if ($tab_trez->getResult()) {
      $this->resultMais(1);
      $this->tabDoze = $tab_trez->getResult();
      unset($this->tabDoze[0]);
      if (!empty($this->tabDoze)) {
        foreach ($this->tabDoze as $value) {
          //     var_dump($value);
          $this->compilarMais8($value);
          //   var_dump($this->data);
          $this->addJogo();
        }
      }
    } else {
      $this->result = false;
    }
  }

  public function idCalculo6(int $key): void
  {
    $value = new \App\adms\Models\helper\AdmsRead();
    $value->fullRead("SELECT id From seq_gerada order by id asc limit 1");
    $id = (int) $value->getResult()[0]['id'];
    $this->id = $id + $key;


    $value = new \App\adms\Models\helper\AdmsRead();
    $value->fullRead("SELECT id, colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz,creatdat
     FROM seq_gerada WHERE id=:id  LIMIT :limit", "id={$this->id}&limit=1");
    if ($value->getResult()) {
      $value = $value->getResult();
      if ($value[0]['colQuinz'] === null) {
        unset($value[0]['colQuinz']);
        if ($value[0]['colQuatz'] === null) {
          unset($value[0]['colQuatz']);
          if ($value[0]['colTrez'] === null) {
            unset($value[0]['colTrez']);
            if ($value[0]['colDoze'] === null) {
              unset($value[0]['colDoze']);
              if ($value[0]['colOnze'] === null) {
                unset($value[0]['colOnze']);
                if ($value[0]['colDez'] === null) {
                  unset($value[0]['colDez']);
                  if ($value[0]['colNove'] === null) {
                    unset($value[0]['colNove']);
                    if ($value[0]['colOite'] === null) {
                      unset($value[0]['colOite']);
                      if ($value[0]['colSete'] === null) {
                        unset($value[0]['colSete']);
                        if ($value[0]['colSeis'] === null) {
                          unset($value[0]['colSeis']);
                          if ($value[0]['colCinco'] === null) {
                            unset($value[0]['colCinco']);
                            if ($value[0]['colQuatro'] === null) {
                              unset($value[0]['colQuatro']);
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
      unset($value[0]['id']);
      unset($value[0]['creatdat']);
      ///  var_dump($value[0]);
      $this->resultBd = $value[0];

      $this->result = true;
    } else {
      $this->result = false;
    }
  }

  function compilarMais11(array $data): void
  {
    sort($this->resultBd);
    //  var_dump($this->resultBd);
    $valor = $data;

    extract($valor);
    $tab['colUm'] = $colUm;
    $tab['colDois'] = $colDois;
    $tab['colTres'] = $colTres;
    $tab['colQuatro'] = $colQuatro;
    $tab['colCinco'] = $colCinco;
    $tab['colSeis'] = $colSeis;
    $tab['colSete'] = $colSete;
    $tab['colOite'] = $colOite;
    $tab['colNove'] = $colNove;
    $tab['colDez'] = $colDez;
    $tab['colOnze'] = $colOnze;

    $tab['colDoze'] = $this->resultBd[0];
    if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $colOnze) {
      $tab['colDoze'] = $this->resultBd[1];
      if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $colOnze) {
        $tab['colDoze'] = $this->resultBd[2];
        if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $colOnze) {
          $tab['colDoze'] = $this->resultBd[3];
          if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $colOnze) {
            $tab['colDoze'] = $this->resultBd[4];
            if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $colOnze) {
              $tab['colDoze'] = $this->resultBd[5];
              if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $colOnze) {
                $tab['colDoze'] = $this->resultBd[6];
                if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $colOnze) {
                  $tab['colDoze'] = $this->resultBd[7];
                  if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $colOnze) {
                    $tab['colDoze'] = $this->resultBd[8];
                    if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $colOnze) {
                      $tab['colDoze'] = $this->resultBd[9];
                    }
                  }
                }
              }
            }
          }
        }
      }
    }

    $tab['colTrez'] = $this->resultBd[1];
    if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
      $tab['colTrez'] = $this->resultBd[2];
      if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
        $tab['colTrez'] = $this->resultBd[3];
        if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
          $tab['colTrez'] = $this->resultBd[4];
          if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
            $tab['colTrez'] = $this->resultBd[5];
            if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
              $tab['colTrez'] = $this->resultBd[6];
              if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
                $tab['colTrez'] = $this->resultBd[7];
                if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
                  $tab['colTrez'] = $this->resultBd[8];
                  if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
                    $tab['colTrez'] = $this->resultBd[9];
                    if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
                      $tab['colTrez'] = $this->resultBd[1];
                    }
                  }
                }
              }
            }
          }
        }
      }
    }

    $tab['colQuatz'] = $this->resultBd[2];
    if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
      $tab['colQuatz'] = $this->resultBd[3];
      if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
        $tab['colQuatz'] = $this->resultBd[4];
        if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
          $tab['colQuatz'] = $this->resultBd[5];
          if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
            $tab['colQuatz'] = $this->resultBd[6];
            if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
              $tab['colQuatz'] = $this->resultBd[7];
              if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                $tab['colQuatz'] = $this->resultBd[8];
                if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                  $tab['colQuatz'] = $this->resultBd[9];
                  if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                    $tab['colQuatz'] = $this->resultBd[0];
                    if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                      $tab['colQuatz'] = $this->resultBd[1];
                    }
                  }
                }
              }
            }
          }
        }
      }
    }

    $tab['colQuinz'] = $this->resultBd[3];
    if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
      $tab['colQuinz'] = $this->resultBd[4];
      if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
        $tab['colQuinz'] = $this->resultBd[5];
        if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
          $tab['colQuinz'] = $this->resultBd[6];
          if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
            $tab['colQuinz'] = $this->resultBd[7];
            if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
              $tab['colQuinz'] = $this->resultBd[8];
              if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                $tab['colQuinz'] = $this->resultBd[9];
                if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                  $tab['colQuinz'] = $this->resultBd[0];
                  if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                    $tab['colQuinz'] = $this->resultBd[1];
                    if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                      $tab['colQuinz'] = $this->resultBd[2];
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    $this->data = $tab;
    //  var_dump( $this->data);
  }
  function compilarMais12(array $data): void
  {
    sort($this->resultBd);
    //  var_dump($this->resultBd);
    $valor = $data;

    extract($valor);
    $tab['colUm'] = $colUm;
    $tab['colDois'] = $colDois;
    $tab['colTres'] = $colTres;
    $tab['colQuatro'] = $colQuatro;
    $tab['colCinco'] = $colCinco;
    $tab['colSeis'] = $colSeis;
    $tab['colSete'] = $colSete;
    $tab['colOite'] = $colOite;
    $tab['colNove'] = $colNove;
    $tab['colDez'] = $colDez;
    $tab['colOnze'] = $colOnze;
    $tab['colDoze'] = $colDoze;
    //  $tab['colTrez'] = $colTrez;


    $tab['colTrez'] = $this->resultBd[1];
    if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
      $tab['colTrez'] = $this->resultBd[2];
      if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
        $tab['colTrez'] = $this->resultBd[3];
        if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
          $tab['colTrez'] = $this->resultBd[4];
          if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
            $tab['colTrez'] = $this->resultBd[5];
            if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
              $tab['colTrez'] = $this->resultBd[6];
              if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
                $tab['colTrez'] = $this->resultBd[7];
                if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
                  $tab['colTrez'] = $this->resultBd[8];
                  if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
                    $tab['colTrez'] = $this->resultBd[9];
                    if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $colOnze or $tab['colTrez'] == $tab['colDoze']) {
                      $tab['colTrez'] = $this->resultBd[1];
                    }
                  }
                }
              }
            }
          }
        }
      }
    }

    $tab['colQuatz'] = $this->resultBd[2];
    if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
      $tab['colQuatz'] = $this->resultBd[3];
      if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
        $tab['colQuatz'] = $this->resultBd[4];
        if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
          $tab['colQuatz'] = $this->resultBd[5];
          if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
            $tab['colQuatz'] = $this->resultBd[6];
            if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
              $tab['colQuatz'] = $this->resultBd[7];
              if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                $tab['colQuatz'] = $this->resultBd[8];
                if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                  $tab['colQuatz'] = $this->resultBd[9];
                  if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                    $tab['colQuatz'] = $this->resultBd[0];
                    if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $colOnze or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                      $tab['colQuatz'] = $this->resultBd[1];
                    }
                  }
                }
              }
            }
          }
        }
      }
    }

    $tab['colQuinz'] = $this->resultBd[3];
    if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
      $tab['colQuinz'] = $this->resultBd[4];
      if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
        $tab['colQuinz'] = $this->resultBd[5];
        if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
          $tab['colQuinz'] = $this->resultBd[6];
          if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
            $tab['colQuinz'] = $this->resultBd[7];
            if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
              $tab['colQuinz'] = $this->resultBd[8];
              if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                $tab['colQuinz'] = $this->resultBd[9];
                if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                  $tab['colQuinz'] = $this->resultBd[0];
                  if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                    $tab['colQuinz'] = $this->resultBd[1];
                    if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $colOnze or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                      $tab['colQuinz'] = $this->resultBd[2];
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    $this->data = $tab;
    //  var_dump( $this->data);
  }

  function conferTab()
  {
    $this->idCalculo6(1);

    $n1 = $this->resultBd;

    sort($n1);
    unset($this->resultBd);

    $this->idCalculo6(2);
    $n2 = $this->resultBd;

    sort($n2);
    unset($this->resultBd);
    switch ($n1[0]) {
      case $n1[1]:
        $n1[0] = $n2[0];
        break;
      case $n1[2]:
        $n1[0] = $n2[0];
        break;
      case $n1[3]:
        $n1[0] = $n2[0];
        break;
      case $n1[4]:
        $n1[0] = $n2[0];
      default;
    }
    switch ($n1[1]) {
      case $n1[2]:
        $n1[1] = $n2[1];
        break;
      case $n1[3]:
        $n1[1] = $n2[1];
        break;
      case $n1[4]:
        $n1[1] = $n2[1];
        break;
      case $n1[5]:
        $n1[1] = $n2[1];
      default;
    }
    switch ($n1[2]) {
      case $n1[3]:
        $n1[2] = $n2[2];
        break;
      case $n1[4]:
        $n1[2] = $n2[2];
        break;
      case $n1[5]:
        $n1[2] = $n2[2];
        break;
      case $n1[6]:
        $n1[2] = $n2[2];
      default;
    }
    switch ($n1[3]) {
      case $n1[4]:
        $n1[3] = $n2[3];
        break;
      case $n1[5]:
        $n1[3] = $n2[3];
        break;
      case $n1[6]:
        $n1[3] = $n2[3];
        break;
      case $n1[7]:
        $n1[3] = $n2[3];
      default;
    }
    switch ($n1[4]) {
      case $n1[5]:
        $n1[4] = $n2[4];
        break;
      case $n1[6]:
        $n1[4] = $n2[4];
        break;
      case $n1[7]:
        $n1[4] = $n2[4];
        break;
      case $n1[8]:
        $n1[4] = $n2[4];
      default;
    }
    switch ($n1[5]) {
      case  $n1[6]:
        $n1[5] = $n2[0];
        break;
      case  $n1[7]:
        $n1[5] = $n2[1];
        break;
      case  $n1[8]:
        $n1[5] = $n2[2];
        break;
      case  $n1[9]:
        $n1[5] = $n2[3];
      default;
    }
    switch ($n1[6]) {
      case $n1[7]:
        $n1[6] = $n2[0];
        break;
      case $n1[8]:
        $n1[6] = $n2[1];
        break;
      case $n1[9]:
        $n1[6] = $n2[2];
      default;
    }
    switch ($n1[7]) {
      case $n1[8]:
        $n1[7] = $n2[0];
        break;
      case $n1[9]:
        $n1[7] = $n2[1];
      default;
    }
    switch ($n1[8]) {
      case $n1[9]:
        $n1[8] = $n2[3];
      default;
    }

    $this->resultBd['colUm'] = $n1['9'];
    $this->resultBd['colDois'] = $n1['8'];
    $this->resultBd['colTres'] = $n1['7'];
    $this->resultBd['colQuatro'] = $n1['6'];
    $this->resultBd['colCinco'] = $n1['5'];
    $this->resultBd['colSeis'] = $n1['4'];
    $this->resultBd['colSete'] = $n1['3'];
    $this->resultBd['colOite'] = $n1['2'];
    $this->resultBd['colNove'] = $n1['1'];
    $this->resultBd['colDez'] = $n1['0'];
    // $this->resultBd  = $n1;
  }

  function compilarMais8(array $data): void
  {
    $valor = $data;

    sort($this->resultBd);
    sort($valor);

    $tab['colUm'] = $valor[0];
    $tab['colDois'] = $valor[1];
    $tab['colTres'] = $valor[2];
    $tab['colQuatro'] = $valor[3];
    $tab['colCinco'] = $valor[4];
    $tab['colSeis'] = $valor[5];
    $tab['colSete'] = $valor[6];
    $tab['colOite'] = $valor[7];
    // $tab['colNove'] = $valor[8];

    $tab['colNove'] = $this->resultBd[0];
    if ($tab['colNove'] == $valor[0] or $tab['colNove'] == $valor[1] or $tab['colNove'] == $valor[2] or $tab['colNove'] == $valor[3] or $tab['colNove'] == $valor[4] or $tab['colNove'] == $valor[5] or $tab['colNove'] == $valor[6] or $tab['colNove'] == $valor[7] or $tab['colNove'] == $tab['colOite']) {
      $tab['colNove'] = $this->resultBd[1];
      if ($tab['colNove'] == $valor[0] or $tab['colNove'] == $valor[1] or $tab['colNove'] == $valor[2] or $tab['colNove'] == $valor[3] or $tab['colNove'] == $valor[4] or $tab['colNove'] == $valor[5] or $tab['colNove'] == $valor[6] or $tab['colNove'] == $valor[7] or $tab['colNove'] == $tab['colOite']) {
        $tab['colNove'] = $this->resultBd[2];
        if ($tab['colNove'] == $valor[0] or $tab['colNove'] == $valor[1] or $tab['colNove'] == $valor[2] or $tab['colNove'] == $valor[3] or $tab['colNove'] == $valor[4] or $tab['colNove'] == $valor[5] or $tab['colNove'] == $valor[6] or $tab['colNove'] == $valor[7] or $tab['colNove'] == $tab['colOite']) {
          $tab['colNove'] = $this->resultBd[3];
          if ($tab['colNove'] == $valor[0] or $tab['colNove'] == $valor[1] or $tab['colNove'] == $valor[2] or $tab['colNove'] == $valor[3] or $tab['colNove'] == $valor[4] or $tab['colNove'] == $valor[5] or $tab['colNove'] == $valor[6] or $tab['colNove'] == $valor[7] or $tab['colNove'] == $tab['colOite']) {
            $tab['colNove'] = $this->resultBd[4];
            if ($tab['colNove'] == $valor[0] or $tab['colNove'] == $valor[1] or $tab['colNove'] == $valor[2] or $tab['colNove'] == $valor[3] or $tab['colNove'] == $valor[4] or $tab['colNove'] == $valor[5] or $tab['colNove'] == $valor[6] or $tab['colNove'] == $valor[7] or $tab['colNove'] == $tab['colOite']) {
              $tab['colNove'] = $this->resultBd[5];
              if ($tab['colNove'] == $valor[0] or $tab['colNove'] == $valor[1] or $tab['colNove'] == $valor[2] or $tab['colNove'] == $valor[3] or $tab['colNove'] == $valor[4] or $tab['colNove'] == $valor[5] or $tab['colNove'] == $valor[6] or $tab['colNove'] == $valor[7] or $tab['colNove'] == $tab['colOite']) {
                $tab['colNove'] = $this->resultBd[6];
                if ($tab['colNove'] == $valor[0] or $tab['colNove'] == $valor[1] or $tab['colNove'] == $valor[2] or $tab['colNove'] == $valor[3] or $tab['colNove'] == $valor[4] or $tab['colNove'] == $valor[5] or $tab['colNove'] == $valor[6] or $tab['colNove'] == $valor[7] or $tab['colNove'] == $tab['colOite']) {
                  $tab['colNove'] = $this->resultBd[7];
                  if ($tab['colNove'] == $valor[0] or $tab['colNove'] == $valor[1] or $tab['colNove'] == $valor[2] or $tab['colNove'] == $valor[3] or $tab['colNove'] == $valor[4] or $tab['colNove'] == $valor[5] or $tab['colNove'] == $valor[6] or $tab['colNove'] == $valor[7] or $tab['colNove'] == $tab['colOite']) {
                    $tab['colNove'] = $this->resultBd[8];
                    if ($tab['colNove'] == $valor[0] or $tab['colNove'] == $valor[1] or $tab['colNove'] == $valor[2] or $tab['colNove'] == $valor[3] or $tab['colNove'] == $valor[4] or $tab['colNove'] == $valor[5] or $tab['colNove'] == $valor[6] or $tab['colNove'] == $valor[7] or $tab['colNove'] == $tab['colOite']) {
                      $tab['colNove'] = $this->resultBd[9];
                      if ($tab['colNove'] == $valor[0] or $tab['colNove'] == $valor[1] or $tab['colNove'] == $valor[2] or $tab['colNove'] == $valor[3] or $tab['colNove'] == $valor[4] or $tab['colNove'] == $valor[5] or $tab['colNove'] == $valor[6] or $tab['colNove'] == $valor[7] or $tab['colNove'] == $tab['colOite']) {
                        $tab['colNove'] = $this->resultBd[10];
                        if ($tab['colNove'] == $valor[0] or $tab['colNove'] == $valor[1] or $tab['colNove'] == $valor[2] or $tab['colNove'] == $valor[3] or $tab['colNove'] == $valor[4] or $tab['colNove'] == $valor[5] or $tab['colNove'] == $valor[6] or $tab['colNove'] == $valor[7] or $tab['colNove'] == $tab['colOite']) {
                          $tab['colNove'] = $this->resultBd[11];
                          if ($tab['colNove'] == $valor[0] or $tab['colNove'] == $valor[1] or $tab['colNove'] == $valor[2] or $tab['colNove'] == $valor[3] or $tab['colNove'] == $valor[4] or $tab['colNove'] == $valor[5] or $tab['colNove'] == $valor[6] or $tab['colNove'] == $valor[7] or $tab['colNove'] == $tab['colOite']) {
                            $tab['colNove'] = $this->resultBd[12];
                            if ($tab['colNove'] == $valor[0] or $tab['colNove'] == $valor[1] or $tab['colNove'] == $valor[2] or $tab['colNove'] == $valor[3] or $tab['colNove'] == $valor[4] or $tab['colNove'] == $valor[5] or $tab['colNove'] == $valor[6] or $tab['colNove'] == $valor[7] or $tab['colNove'] == $tab['colOite']) {
                              $tab['colNove'] = $this->resultBd[13];
                              if ($tab['colNove'] == $valor[0] or $tab['colNove'] == $valor[1] or $tab['colNove'] == $valor[2] or $tab['colNove'] == $valor[3] or $tab['colNove'] == $valor[4] or $tab['colNove'] == $valor[5] or $tab['colNove'] == $valor[6] or $tab['colNove'] == $valor[7] or $tab['colNove'] == $tab['colOite']) {
                                $tab['colNove'] = $this->resultBd[14];
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }

    $tab['colDez'] = $this->resultBd[1];
    if ($tab['colDez'] == $valor[0] or $tab['colDez'] == $valor[1] or $tab['colDez'] == $valor[2] or $tab['colDez'] == $valor[3] or $tab['colDez'] == $valor[4] or $tab['colDez'] == $valor[5] or $tab['colDez'] == $valor[6] or $tab['colDez'] == $valor[7] or $tab['colDez'] ==  $tab['colOite']  or $tab['colDez'] == $tab['colNove']) {
      $tab['colDez'] = $this->resultBd[2];
      if ($tab['colDez'] == $valor[0] or $tab['colDez'] == $valor[1] or $tab['colDez'] == $valor[2] or $tab['colDez'] == $valor[3] or $tab['colDez'] == $valor[4] or $tab['colDez'] == $valor[5] or $tab['colDez'] == $valor[6] or $tab['colDez'] == $valor[7] or $tab['colDez'] ==  $tab['colOite'] or $tab['colDez'] == $tab['colNove']) {
        $tab['colDez'] = $this->resultBd[3];
        if ($tab['colDez'] == $valor[0] or $tab['colDez'] == $valor[1] or $tab['colDez'] == $valor[2] or $tab['colDez'] == $valor[3] or $tab['colDez'] == $valor[4] or $tab['colDez'] == $valor[5] or $tab['colDez'] == $valor[6] or $tab['colDez'] == $valor[7] or $tab['colDez'] ==  $tab['colOite'] or $tab['colDez'] == $tab['colNove']) {
          $tab['colDez'] = $this->resultBd[4];
          if ($tab['colDez'] == $valor[0] or $tab['colDez'] == $valor[1] or $tab['colDez'] == $valor[2] or $tab['colDez'] == $valor[3] or $tab['colDez'] == $valor[4] or $tab['colDez'] == $valor[5] or $tab['colDez'] == $valor[6] or $tab['colDez'] == $valor[7] or $tab['colDez'] ==  $tab['colOite'] or $tab['colDez'] == $tab['colNove']) {
            $tab['colDez'] = $this->resultBd[5];
            if ($tab['colDez'] == $valor[0] or $tab['colDez'] == $valor[1] or $tab['colDez'] == $valor[2] or $tab['colDez'] == $valor[3] or $tab['colDez'] == $valor[4] or $tab['colDez'] == $valor[5] or $tab['colDez'] == $valor[6] or $tab['colDez'] == $valor[7] or $tab['colDez'] ==  $tab['colOite'] or $tab['colDez'] == $tab['colNove']) {
              $tab['colDez'] = $this->resultBd[6];
              if ($tab['colDez'] == $valor[0] or $tab['colDez'] == $valor[1] or $tab['colDez'] == $valor[2] or $tab['colDez'] == $valor[3] or $tab['colDez'] == $valor[4] or $tab['colDez'] == $valor[5] or $tab['colDez'] == $valor[6] or $tab['colDez'] == $valor[7] or $tab['colDez'] ==  $tab['colOite'] or $tab['colDez'] == $tab['colNove']) {
                $tab['colDez'] = $this->resultBd[7];
                if ($tab['colDez'] == $valor[0] or $tab['colDez'] == $valor[1] or $tab['colDez'] == $valor[2] or $tab['colDez'] == $valor[3] or $tab['colDez'] == $valor[4] or $tab['colDez'] == $valor[5] or $tab['colDez'] == $valor[6] or $tab['colDez'] == $valor[7] or $tab['colDez'] ==  $tab['colOite'] or $tab['colDez'] == $tab['colNove']) {
                  $tab['colDez'] = $this->resultBd[8];
                  if ($tab['colDez'] == $valor[0] or $tab['colDez'] == $valor[1] or $tab['colDez'] == $valor[2] or $tab['colDez'] == $valor[3] or $tab['colDez'] == $valor[4] or $tab['colDez'] == $valor[5] or $tab['colDez'] == $valor[6] or $tab['colDez'] == $valor[7] or $tab['colDez'] ==  $tab['colOite'] or $tab['colDez'] == $tab['colNove']) {
                    $tab['colDez'] = $this->resultBd[9];
                    if ($tab['colDez'] == $valor[0] or $tab['colDez'] == $valor[1] or $tab['colDez'] == $valor[2] or $tab['colDez'] == $valor[3] or $tab['colDez'] == $valor[4] or $tab['colDez'] == $valor[5] or $tab['colDez'] == $valor[6] or $tab['colDez'] == $valor[7] or $tab['colDez'] ==  $tab['colOite'] or $tab['colDez'] == $tab['colNove']) {
                      $tab['colDez'] = $this->resultBd[10];
                      if ($tab['colDez'] == $valor[0] or $tab['colDez'] == $valor[1] or $tab['colDez'] == $valor[2] or $tab['colDez'] == $valor[3] or $tab['colDez'] == $valor[4] or $tab['colDez'] == $valor[5] or $tab['colDez'] == $valor[6] or $tab['colDez'] == $valor[7] or $tab['colDez'] ==  $tab['colOite'] or $tab['colDez'] == $tab['colNove']) {
                        $tab['colDez'] = $this->resultBd[11];
                        if ($tab['colDez'] == $valor[0] or $tab['colDez'] == $valor[1] or $tab['colDez'] == $valor[2] or $tab['colDez'] == $valor[3] or $tab['colDez'] == $valor[4] or $tab['colDez'] == $valor[5] or $tab['colDez'] == $valor[6] or $tab['colDez'] == $valor[7] or $tab['colDez'] ==  $tab['colOite'] or $tab['colDez'] == $tab['colNove']) {
                          $tab['colDez'] = $this->resultBd[12];
                          if ($tab['colDez'] == $valor[0] or $tab['colDez'] == $valor[1] or $tab['colDez'] == $valor[2] or $tab['colDez'] == $valor[3] or $tab['colDez'] == $valor[4] or $tab['colDez'] == $valor[5] or $tab['colDez'] == $valor[6] or $tab['colDez'] == $valor[7] or $tab['colDez'] ==  $tab['colOite'] or $tab['colDez'] == $tab['colNove']) {
                            $tab['colDez'] = $this->resultBd[13];
                            if ($tab['colDez'] == $valor[0] or $tab['colDez'] == $valor[1] or $tab['colDez'] == $valor[2] or $tab['colDez'] == $valor[3] or $tab['colDez'] == $valor[4] or $tab['colDez'] == $valor[5] or $tab['colDez'] == $valor[6] or $tab['colDez'] == $valor[7] or $tab['colDez'] ==  $tab['colOite'] or $tab['colDez'] == $tab['colNove']) {
                              $tab['colDez'] = $this->resultBd[14];
                              if ($tab['colDez'] == $valor[0] or $tab['colDez'] == $valor[1] or $tab['colDez'] == $valor[2] or $tab['colDez'] == $valor[3] or $tab['colDez'] == $valor[4] or $tab['colDez'] == $valor[5] or $tab['colDez'] == $valor[6] or $tab['colDez'] == $valor[7] or $tab['colDez'] ==  $tab['colOite'] or $tab['colDez'] == $tab['colNove']) {
                                $tab['colDez'] = $this->resultBd[0];
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }

    $tab['colOnze'] = $this->resultBd[2];
    if ($tab['colOnze'] == $valor[0] or $tab['colOnze'] == $valor[1] or $tab['colOnze'] == $valor[2] or $tab['colOnze'] == $valor[3] or $tab['colOnze'] == $valor[4] or $tab['colOnze'] == $valor[5] or $tab['colOnze'] == $valor[6] or $tab['colOnze'] == $valor[7] or $tab['colOnze'] ==  $tab['colOite'] or $tab['colOnze'] == $tab['colNove'] or $tab['colOnze'] == $tab['colDez']) {
      $tab['colOnze'] = $this->resultBd[3];
      if ($tab['colOnze'] == $valor[0] or $tab['colOnze'] == $valor[1] or $tab['colOnze'] == $valor[2] or $tab['colOnze'] == $valor[3] or $tab['colOnze'] == $valor[4] or $tab['colOnze'] == $valor[5] or $tab['colOnze'] == $valor[6] or $tab['colOnze'] == $valor[7] or $tab['colOnze'] ==  $tab['colOite'] or $tab['colOnze'] == $tab['colNove'] or $tab['colOnze'] == $tab['colDez']) {
        $tab['colOnze'] = $this->resultBd[4];
        if ($tab['colOnze'] == $valor[0] or $tab['colOnze'] == $valor[1] or $tab['colOnze'] == $valor[2] or $tab['colOnze'] == $valor[3] or $tab['colOnze'] == $valor[4] or $tab['colOnze'] == $valor[5] or $tab['colOnze'] == $valor[6] or $tab['colOnze'] == $valor[7] or $tab['colOnze'] ==  $tab['colOite'] or $tab['colOnze'] == $tab['colNove'] or $tab['colOnze'] == $tab['colDez']) {
          $tab['colOnze'] = $this->resultBd[5];
          if ($tab['colOnze'] == $valor[0] or $tab['colOnze'] == $valor[1] or $tab['colOnze'] == $valor[2] or $tab['colOnze'] == $valor[3] or $tab['colOnze'] == $valor[4] or $tab['colOnze'] == $valor[5] or $tab['colOnze'] == $valor[6] or $tab['colOnze'] == $valor[7] or $tab['colOnze'] ==  $tab['colOite'] or $tab['colOnze'] == $tab['colNove'] or $tab['colOnze'] == $tab['colDez']) {
            $tab['colOnze'] = $this->resultBd[6];
            if ($tab['colOnze'] == $valor[0] or $tab['colOnze'] == $valor[1] or $tab['colOnze'] == $valor[2] or $tab['colOnze'] == $valor[3] or $tab['colOnze'] == $valor[4] or $tab['colOnze'] == $valor[5] or $tab['colOnze'] == $valor[6] or $tab['colOnze'] == $valor[7] or $tab['colOnze'] ==  $tab['colOite'] or $tab['colOnze'] == $tab['colNove'] or $tab['colOnze'] == $tab['colDez']) {
              $tab['colOnze'] = $this->resultBd[7];
              if ($tab['colOnze'] == $valor[0] or $tab['colOnze'] == $valor[1] or $tab['colOnze'] == $valor[2] or $tab['colOnze'] == $valor[3] or $tab['colOnze'] == $valor[4] or $tab['colOnze'] == $valor[5] or $tab['colOnze'] == $valor[6] or $tab['colOnze'] == $valor[7] or $tab['colOnze'] ==  $tab['colOite'] or $tab['colOnze'] == $tab['colNove'] or $tab['colOnze'] == $tab['colDez']) {
                $tab['colOnze'] = $this->resultBd[8];
                if ($tab['colOnze'] == $valor[0] or $tab['colOnze'] == $valor[1] or $tab['colOnze'] == $valor[2] or $tab['colOnze'] == $valor[3] or $tab['colOnze'] == $valor[4] or $tab['colOnze'] == $valor[5] or $tab['colOnze'] == $valor[6] or $tab['colOnze'] == $valor[7] or $tab['colOnze'] ==  $tab['colOite'] or $tab['colOnze'] == $tab['colNove'] or $tab['colOnze'] == $tab['colDez']) {
                  $tab['colOnze'] = $this->resultBd[9];
                  if ($tab['colOnze'] == $valor[0] or $tab['colOnze'] == $valor[1] or $tab['colOnze'] == $valor[2] or $tab['colOnze'] == $valor[3] or $tab['colOnze'] == $valor[4] or $tab['colOnze'] == $valor[5] or $tab['colOnze'] == $valor[6] or $tab['colOnze'] == $valor[7] or $tab['colOnze'] ==  $tab['colOite'] or $tab['colOnze'] == $tab['colNove'] or $tab['colOnze'] == $tab['colDez']) {
                    $tab['colOnze'] = $this->resultBd[10];
                    if ($tab['colOnze'] == $valor[0] or $tab['colOnze'] == $valor[1] or $tab['colOnze'] == $valor[2] or $tab['colOnze'] == $valor[3] or $tab['colOnze'] == $valor[4] or $tab['colOnze'] == $valor[5] or $tab['colOnze'] == $valor[6] or $tab['colOnze'] == $valor[7] or $tab['colOnze'] ==  $tab['colOite'] or $tab['colOnze'] == $tab['colNove'] or $tab['colOnze'] == $tab['colDez']) {
                      $tab['colOnze'] = $this->resultBd[11];
                      if ($tab['colOnze'] == $valor[0] or $tab['colOnze'] == $valor[1] or $tab['colOnze'] == $valor[2] or $tab['colOnze'] == $valor[3] or $tab['colOnze'] == $valor[4] or $tab['colOnze'] == $valor[5] or $tab['colOnze'] == $valor[6] or $tab['colOnze'] == $valor[7] or $tab['colOnze'] ==  $tab['colOite'] or $tab['colOnze'] == $tab['colNove'] or $tab['colOnze'] == $tab['colDez']) {
                        $tab['colOnze'] = $this->resultBd[12];
                        if ($tab['colOnze'] == $valor[0] or $tab['colOnze'] == $valor[1] or $tab['colOnze'] == $valor[2] or $tab['colOnze'] == $valor[3] or $tab['colOnze'] == $valor[4] or $tab['colOnze'] == $valor[5] or $tab['colOnze'] == $valor[6] or $tab['colOnze'] == $valor[7] or $tab['colOnze'] ==  $tab['colOite'] or $tab['colOnze'] == $tab['colNove'] or $tab['colOnze'] == $tab['colDez']) {
                          $tab['colOnze'] = $this->resultBd[13];
                          if ($tab['colOnze'] == $valor[0] or $tab['colOnze'] == $valor[1] or $tab['colOnze'] == $valor[2] or $tab['colOnze'] == $valor[3] or $tab['colOnze'] == $valor[4] or $tab['colOnze'] == $valor[5] or $tab['colOnze'] == $valor[6] or $tab['colOnze'] == $valor[7] or $tab['colOnze'] ==  $tab['colOite'] or $tab['colOnze'] == $tab['colNove'] or $tab['colOnze'] == $tab['colDez']) {
                            $tab['colOnze'] = $this->resultBd[14];
                            if ($tab['colOnze'] == $valor[0] or $tab['colOnze'] == $valor[1] or $tab['colOnze'] == $valor[2] or $tab['colOnze'] == $valor[3] or $tab['colOnze'] == $valor[4] or $tab['colOnze'] == $valor[5] or $tab['colOnze'] == $valor[6] or $tab['colOnze'] == $valor[7] or $tab['colOnze'] ==  $tab['colOite'] or $tab['colOnze'] == $tab['colNove'] or $tab['colOnze'] == $tab['colDez']) {
                              $tab['colOnze'] = $this->resultBd[0];
                              if ($tab['colOnze'] == $valor[0] or $tab['colOnze'] == $valor[1] or $tab['colOnze'] == $valor[2] or $tab['colOnze'] == $valor[3] or $tab['colOnze'] == $valor[4] or $tab['colOnze'] == $valor[5] or $tab['colOnze'] == $valor[6] or $tab['colOnze'] == $valor[7] or $tab['colOnze'] ==  $tab['colOite'] or $tab['colOnze'] == $tab['colNove'] or $tab['colOnze'] == $tab['colDez']) {
                                $tab['colOnze'] = $this->resultBd[1];
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }

    $tab['colDoze'] = $this->resultBd[3];
    if ($tab['colDoze'] == $valor[0] or $tab['colDoze'] == $valor[1] or $tab['colDoze'] == $valor[2] or $tab['colDoze'] == $valor[3] or $tab['colDoze'] == $valor[4] or $tab['colDoze'] == $valor[5] or $tab['colDoze'] == $valor[6] or $tab['colDoze'] == $valor[7] or $tab['colDoze'] ==  $tab['colOite'] or $tab['colDoze'] == $tab['colNove'] or $tab['colDoze'] == $tab['colDez'] or $tab['colDoze'] == $tab['colOnze']) {
      $tab['colDoze'] = $this->resultBd[4];
      if ($tab['colDoze'] == $valor[0] or $tab['colDoze'] == $valor[1] or $tab['colDoze'] == $valor[2] or $tab['colDoze'] == $valor[3] or $tab['colDoze'] == $valor[4] or $tab['colDoze'] == $valor[5] or $tab['colDoze'] == $valor[6] or $tab['colDoze'] == $valor[7] or $tab['colDoze'] ==  $tab['colOite'] or $tab['colDoze'] == $tab['colNove'] or $tab['colDoze'] == $tab['colDez'] or $tab['colDoze'] == $tab['colOnze']) {
        $tab['colDoze'] = $this->resultBd[5];
        if ($tab['colDoze'] == $valor[0] or $tab['colDoze'] == $valor[1] or $tab['colDoze'] == $valor[2] or $tab['colDoze'] == $valor[3] or $tab['colDoze'] == $valor[4] or $tab['colDoze'] == $valor[5] or $tab['colDoze'] == $valor[6] or $tab['colDoze'] == $valor[7] or $tab['colDoze'] ==  $tab['colOite'] or $tab['colDoze'] == $tab['colNove'] or $tab['colDoze'] == $tab['colDez'] or $tab['colDoze'] == $tab['colOnze']) {
          $tab['colDoze'] = $this->resultBd[6];
          if ($tab['colDoze'] == $valor[0] or $tab['colDoze'] == $valor[1] or $tab['colDoze'] == $valor[2] or $tab['colDoze'] == $valor[3] or $tab['colDoze'] == $valor[4] or $tab['colDoze'] == $valor[5] or $tab['colDoze'] == $valor[6] or $tab['colDoze'] == $valor[7] or $tab['colDoze'] ==  $tab['colOite'] or $tab['colDoze'] == $tab['colNove'] or $tab['colDoze'] == $tab['colDez'] or $tab['colDoze'] == $tab['colOnze']) {
            $tab['colDoze'] = $this->resultBd[7];
            if ($tab['colDoze'] == $valor[0] or $tab['colDoze'] == $valor[1] or $tab['colDoze'] == $valor[2] or $tab['colDoze'] == $valor[3] or $tab['colDoze'] == $valor[4] or $tab['colDoze'] == $valor[5] or $tab['colDoze'] == $valor[6] or $tab['colDoze'] == $valor[7] or $tab['colDoze'] ==  $tab['colOite'] or $tab['colDoze'] == $tab['colNove'] or $tab['colDoze'] == $tab['colDez'] or $tab['colDoze'] == $tab['colOnze']) {
              $tab['colDoze'] = $this->resultBd[8];
              if ($tab['colDoze'] == $valor[0] or $tab['colDoze'] == $valor[1] or $tab['colDoze'] == $valor[2] or $tab['colDoze'] == $valor[3] or $tab['colDoze'] == $valor[4] or $tab['colDoze'] == $valor[5] or $tab['colDoze'] == $valor[6] or $tab['colDoze'] == $valor[7] or $tab['colDoze'] ==  $tab['colOite'] or $tab['colDoze'] == $tab['colNove'] or $tab['colDoze'] == $tab['colDez'] or $tab['colDoze'] == $tab['colOnze']) {
                $tab['colDoze'] = $this->resultBd[9];
                if ($tab['colDoze'] == $valor[0] or $tab['colDoze'] == $valor[1] or $tab['colDoze'] == $valor[2] or $tab['colDoze'] == $valor[3] or $tab['colDoze'] == $valor[4] or $tab['colDoze'] == $valor[5] or $tab['colDoze'] == $valor[6] or $tab['colDoze'] == $valor[7] or $tab['colDoze'] ==  $tab['colOite'] or $tab['colDoze'] == $tab['colNove'] or $tab['colDoze'] == $tab['colDez'] or $tab['colDoze'] == $tab['colOnze']) {
                  $tab['colDoze'] = $this->resultBd[10];
                  if ($tab['colDoze'] == $valor[0] or $tab['colDoze'] == $valor[1] or $tab['colDoze'] == $valor[2] or $tab['colDoze'] == $valor[3] or $tab['colDoze'] == $valor[4] or $tab['colDoze'] == $valor[5] or $tab['colDoze'] == $valor[6] or $tab['colDoze'] == $valor[7] or $tab['colDoze'] ==  $tab['colOite'] or $tab['colDoze'] == $tab['colNove'] or $tab['colDoze'] == $tab['colDez'] or $tab['colDoze'] == $tab['colOnze']) {
                    $tab['colDoze'] = $this->resultBd[11];
                    if ($tab['colDoze'] == $valor[0] or $tab['colDoze'] == $valor[1] or $tab['colDoze'] == $valor[2] or $tab['colDoze'] == $valor[3] or $tab['colDoze'] == $valor[4] or $tab['colDoze'] == $valor[5] or $tab['colDoze'] == $valor[6] or $tab['colDoze'] == $valor[7] or $tab['colDoze'] ==  $tab['colOite'] or $tab['colDoze'] == $tab['colNove'] or $tab['colDoze'] == $tab['colDez'] or $tab['colDoze'] == $tab['colOnze']) {
                      $tab['colDoze'] = $this->resultBd[12];
                      if ($tab['colDoze'] == $valor[0] or $tab['colDoze'] == $valor[1] or $tab['colDoze'] == $valor[2] or $tab['colDoze'] == $valor[3] or $tab['colDoze'] == $valor[4] or $tab['colDoze'] == $valor[5] or $tab['colDoze'] == $valor[6] or $tab['colDoze'] == $valor[7] or $tab['colDoze'] ==  $tab['colOite'] or $tab['colDoze'] == $tab['colNove'] or $tab['colDoze'] == $tab['colDez'] or $tab['colDoze'] == $tab['colOnze']) {
                        $tab['colDoze'] = $this->resultBd[13];
                        if ($tab['colDoze'] == $valor[0] or $tab['colDoze'] == $valor[1] or $tab['colDoze'] == $valor[2] or $tab['colDoze'] == $valor[3] or $tab['colDoze'] == $valor[4] or $tab['colDoze'] == $valor[5] or $tab['colDoze'] == $valor[6] or $tab['colDoze'] == $valor[7] or $tab['colDoze'] ==  $tab['colOite'] or $tab['colDoze'] == $tab['colNove'] or $tab['colDoze'] == $tab['colDez'] or $tab['colDoze'] == $tab['colOnze']) {
                          $tab['colDoze'] = $this->resultBd[14];
                          if ($tab['colDoze'] == $valor[0] or $tab['colDoze'] == $valor[1] or $tab['colDoze'] == $valor[2] or $tab['colDoze'] == $valor[3] or $tab['colDoze'] == $valor[4] or $tab['colDoze'] == $valor[5] or $tab['colDoze'] == $valor[6] or $tab['colDoze'] == $valor[7] or $tab['colDoze'] ==  $tab['colOite'] or $tab['colDoze'] == $tab['colNove'] or $tab['colDoze'] == $tab['colDez'] or $tab['colDoze'] == $tab['colOnze']) {
                            $tab['colDoze'] = $this->resultBd[0];
                            if ($tab['colDoze'] == $valor[0] or $tab['colDoze'] == $valor[1] or $tab['colDoze'] == $valor[2] or $tab['colDoze'] == $valor[3] or $tab['colDoze'] == $valor[4] or $tab['colDoze'] == $valor[5] or $tab['colDoze'] == $valor[6] or $tab['colDoze'] == $valor[7] or $tab['colDoze'] ==  $tab['colOite'] or $tab['colDoze'] == $tab['colNove'] or $tab['colDoze'] == $tab['colDez'] or $tab['colDoze'] == $tab['colOnze']) {
                              $tab['colDoze'] = $this->resultBd[1];
                              if ($tab['colDoze'] == $valor[0] or $tab['colDoze'] == $valor[1] or $tab['colDoze'] == $valor[2] or $tab['colDoze'] == $valor[3] or $tab['colDoze'] == $valor[4] or $tab['colDoze'] == $valor[5] or $tab['colDoze'] == $valor[6] or $tab['colDoze'] == $valor[7] or $tab['colDoze'] ==  $tab['colOite'] or $tab['colDoze'] == $tab['colNove'] or $tab['colDoze'] == $tab['colDez'] or $tab['colDoze'] == $tab['colOnze']) {
                                $tab['colDoze'] = $this->resultBd[2];
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }

    $tab['colTrez'] = $this->resultBd[4];
    if ($tab['colTrez'] == $valor[0] or $tab['colTrez'] == $valor[1] or $tab['colTrez'] == $valor[2] or $tab['colTrez'] == $valor[3] or $tab['colTrez'] == $valor[4] or $tab['colTrez'] == $valor[5] or $tab['colTrez'] == $valor[6] or $tab['colTrez'] == $valor[7] or $tab['colTrez'] ==  $tab['colOite'] or $tab['colTrez'] == $tab['colNove'] or  $tab['colTrez'] == $tab['colDez']  or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
      $tab['colTrez'] = $this->resultBd[5];
      if ($tab['colTrez'] == $valor[0] or $tab['colTrez'] == $valor[1] or $tab['colTrez'] == $valor[2] or $tab['colTrez'] == $valor[3] or $tab['colTrez'] == $valor[4] or $tab['colTrez'] == $valor[5] or $tab['colTrez'] == $valor[6] or $tab['colTrez'] == $valor[7] or $tab['colTrez'] ==  $tab['colOite'] or $tab['colTrez'] == $tab['colNove'] or  $tab['colTrez'] == $tab['colDez']  or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
        $tab['colTrez'] = $this->resultBd[6];
        if ($tab['colTrez'] == $valor[0] or $tab['colTrez'] == $valor[1] or $tab['colTrez'] == $valor[2] or $tab['colTrez'] == $valor[3] or $tab['colTrez'] == $valor[4] or $tab['colTrez'] == $valor[5] or $tab['colTrez'] == $valor[6] or $tab['colTrez'] == $valor[7] or $tab['colTrez'] ==  $tab['colOite'] or $tab['colTrez'] == $tab['colNove'] or  $tab['colTrez'] == $tab['colDez']  or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
          $tab['colTrez'] = $this->resultBd[7];
          if ($tab['colTrez'] == $valor[0] or $tab['colTrez'] == $valor[1] or $tab['colTrez'] == $valor[2] or $tab['colTrez'] == $valor[3] or $tab['colTrez'] == $valor[4] or $tab['colTrez'] == $valor[5] or $tab['colTrez'] == $valor[6] or $tab['colTrez'] == $valor[7] or $tab['colTrez'] ==  $tab['colOite'] or $tab['colTrez'] == $tab['colNove'] or  $tab['colTrez'] == $tab['colDez']  or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
            $tab['colTrez'] = $this->resultBd[8];
            if ($tab['colTrez'] == $valor[0] or $tab['colTrez'] == $valor[1] or $tab['colTrez'] == $valor[2] or $tab['colTrez'] == $valor[3] or $tab['colTrez'] == $valor[4] or $tab['colTrez'] == $valor[5] or $tab['colTrez'] == $valor[6] or $tab['colTrez'] == $valor[7] or $tab['colTrez'] ==  $tab['colOite'] or $tab['colTrez'] == $tab['colNove'] or  $tab['colTrez'] == $tab['colDez']  or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
              $tab['colTrez'] = $this->resultBd[9];
              if ($tab['colTrez'] == $valor[0] or $tab['colTrez'] == $valor[1] or $tab['colTrez'] == $valor[2] or $tab['colTrez'] == $valor[3] or $tab['colTrez'] == $valor[4] or $tab['colTrez'] == $valor[5] or $tab['colTrez'] == $valor[6] or $tab['colTrez'] == $valor[7] or $tab['colTrez'] ==  $tab['colOite'] or $tab['colTrez'] == $tab['colNove'] or  $tab['colTrez'] == $tab['colDez']  or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                $tab['colTrez'] = $this->resultBd[10];
                if ($tab['colTrez'] == $valor[0] or $tab['colTrez'] == $valor[1] or $tab['colTrez'] == $valor[2] or $tab['colTrez'] == $valor[3] or $tab['colTrez'] == $valor[4] or $tab['colTrez'] == $valor[5] or $tab['colTrez'] == $valor[6] or $tab['colTrez'] == $valor[7] or $tab['colTrez'] ==  $tab['colOite'] or $tab['colTrez'] == $tab['colNove'] or  $tab['colTrez'] == $tab['colDez']  or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                  $tab['colTrez'] = $this->resultBd[11];
                  if ($tab['colTrez'] == $valor[0] or $tab['colTrez'] == $valor[1] or $tab['colTrez'] == $valor[2] or $tab['colTrez'] == $valor[3] or $tab['colTrez'] == $valor[4] or $tab['colTrez'] == $valor[5] or $tab['colTrez'] == $valor[6] or $tab['colTrez'] == $valor[7] or $tab['colTrez'] ==  $tab['colOite'] or $tab['colTrez'] == $tab['colNove'] or  $tab['colTrez'] == $tab['colDez']  or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                    $tab['colTrez'] = $this->resultBd[12];
                    if ($tab['colTrez'] == $valor[0] or $tab['colTrez'] == $valor[1] or $tab['colTrez'] == $valor[2] or $tab['colTrez'] == $valor[3] or $tab['colTrez'] == $valor[4] or $tab['colTrez'] == $valor[5] or $tab['colTrez'] == $valor[6] or $tab['colTrez'] == $valor[7] or $tab['colTrez'] ==  $tab['colOite'] or $tab['colTrez'] == $tab['colNove'] or  $tab['colTrez'] == $tab['colDez']  or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                      $tab['colTrez'] = $this->resultBd[13];
                      if ($tab['colTrez'] == $valor[0] or $tab['colTrez'] == $valor[1] or $tab['colTrez'] == $valor[2] or $tab['colTrez'] == $valor[3] or $tab['colTrez'] == $valor[4] or $tab['colTrez'] == $valor[5] or $tab['colTrez'] == $valor[6] or $tab['colTrez'] == $valor[7] or $tab['colTrez'] ==  $tab['colOite'] or $tab['colTrez'] == $tab['colNove'] or  $tab['colTrez'] == $tab['colDez']  or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                        $tab['colTrez'] = $this->resultBd[14];
                        if ($tab['colTrez'] == $valor[0] or $tab['colTrez'] == $valor[1] or $tab['colTrez'] == $valor[2] or $tab['colTrez'] == $valor[3] or $tab['colTrez'] == $valor[4] or $tab['colTrez'] == $valor[5] or $tab['colTrez'] == $valor[6] or $tab['colTrez'] == $valor[7] or $tab['colTrez'] ==  $tab['colOite'] or $tab['colTrez'] == $tab['colNove'] or  $tab['colTrez'] == $tab['colDez']  or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                          $tab['colTrez'] = $this->resultBd[0];
                          if ($tab['colTrez'] == $valor[0] or $tab['colTrez'] == $valor[1] or $tab['colTrez'] == $valor[2] or $tab['colTrez'] == $valor[3] or $tab['colTrez'] == $valor[4] or $tab['colTrez'] == $valor[5] or $tab['colTrez'] == $valor[6] or $tab['colTrez'] == $valor[7] or $tab['colTrez'] ==  $tab['colOite'] or $tab['colTrez'] == $tab['colNove'] or  $tab['colTrez'] == $tab['colDez']  or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                            $tab['colTrez'] = $this->resultBd[1];
                            if ($tab['colTrez'] == $valor[0] or $tab['colTrez'] == $valor[1] or $tab['colTrez'] == $valor[2] or $tab['colTrez'] == $valor[3] or $tab['colTrez'] == $valor[4] or $tab['colTrez'] == $valor[5] or $tab['colTrez'] == $valor[6] or $tab['colTrez'] == $valor[7] or $tab['colTrez'] ==  $tab['colOite'] or $tab['colTrez'] == $tab['colNove'] or  $tab['colTrez'] == $tab['colDez']  or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                              $tab['colTrez'] = $this->resultBd[2];
                              if ($tab['colTrez'] == $valor[0] or $tab['colTrez'] == $valor[1] or $tab['colTrez'] == $valor[2] or $tab['colTrez'] == $valor[3] or $tab['colTrez'] == $valor[4] or $tab['colTrez'] == $valor[5] or $tab['colTrez'] == $valor[6] or $tab['colTrez'] == $valor[7] or $tab['colTrez'] ==  $tab['colOite'] or $tab['colTrez'] == $tab['colNove'] or  $tab['colTrez'] == $tab['colDez']  or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                                $tab['colTrez'] = $this->resultBd[3];
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }

    $tab['colQuatz'] = $this->resultBd[5];
    if ($tab['colQuatz'] == $valor[0] or $tab['colQuatz'] == $valor[1] or $tab['colQuatz'] == $valor[2] or $tab['colQuatz'] == $valor[3] or $tab['colQuatz'] == $valor[4] or $tab['colQuatz'] == $valor[5] or $tab['colQuatz'] == $valor[6] or $tab['colQuatz'] == $valor[7] or $tab['colQuatz'] ==  $tab['colOite'] or $tab['colQuatz'] == $tab['colNove']  or $tab['colQuatz'] == $tab['colDez'] or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
      $tab['colQuatz'] = $this->resultBd[6];
      if ($tab['colQuatz'] == $valor[0] or $tab['colQuatz'] == $valor[1] or $tab['colQuatz'] == $valor[2] or $tab['colQuatz'] == $valor[3] or $tab['colQuatz'] == $valor[4] or $tab['colQuatz'] == $valor[5] or $tab['colQuatz'] == $valor[6] or $tab['colQuatz'] == $valor[7] or $tab['colQuatz'] ==  $tab['colOite'] or $tab['colQuatz'] == $tab['colNove']    or $tab['colQuatz'] == $tab['colDez'] or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
        $tab['colQuatz'] = $this->resultBd[7];
        if ($tab['colQuatz'] == $valor[0] or $tab['colQuatz'] == $valor[1] or $tab['colQuatz'] == $valor[2] or $tab['colQuatz'] == $valor[3] or $tab['colQuatz'] == $valor[4] or $tab['colQuatz'] == $valor[5] or $tab['colQuatz'] == $valor[6] or $tab['colQuatz'] == $valor[7] or $tab['colQuatz'] ==  $tab['colOite'] or $tab['colQuatz'] == $tab['colNove']   or $tab['colQuatz'] == $tab['colDez'] or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
          $tab['colQuatz'] = $this->resultBd[8];
          if ($tab['colQuatz'] == $valor[0] or $tab['colQuatz'] == $valor[1] or $tab['colQuatz'] == $valor[2] or $tab['colQuatz'] == $valor[3] or $tab['colQuatz'] == $valor[4] or $tab['colQuatz'] == $valor[5] or $tab['colQuatz'] == $valor[6] or $tab['colQuatz'] == $valor[7] or $tab['colQuatz'] ==  $tab['colOite']  or $tab['colQuatz'] == $tab['colNove']  or $tab['colQuatz'] == $tab['colDez'] or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
            $tab['colQuatz'] = $this->resultBd[9];
            if ($tab['colQuatz'] == $valor[0] or $tab['colQuatz'] == $valor[1] or $tab['colQuatz'] == $valor[2] or $tab['colQuatz'] == $valor[3] or $tab['colQuatz'] == $valor[4] or $tab['colQuatz'] == $valor[5] or $tab['colQuatz'] == $valor[6] or $tab['colQuatz'] == $valor[7] or $tab['colQuatz'] ==  $tab['colOite']  or $tab['colQuatz'] == $tab['colNove']  or $tab['colQuatz'] == $tab['colDez'] or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
              $tab['colQuatz'] = $this->resultBd[10];
              if ($tab['colQuatz'] == $valor[0] or $tab['colQuatz'] == $valor[1] or $tab['colQuatz'] == $valor[2] or $tab['colQuatz'] == $valor[3] or $tab['colQuatz'] == $valor[4] or $tab['colQuatz'] == $valor[5] or $tab['colQuatz'] == $valor[6] or $tab['colQuatz'] == $valor[7] or $tab['colQuatz'] ==  $tab['colOite'] or $tab['colQuatz'] == $tab['colNove']   or $tab['colQuatz'] == $tab['colDez'] or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                $tab['colQuatz'] = $this->resultBd[11];
                if ($tab['colQuatz'] == $valor[0] or $tab['colQuatz'] == $valor[1] or $tab['colQuatz'] == $valor[2] or $tab['colQuatz'] == $valor[3] or $tab['colQuatz'] == $valor[4] or $tab['colQuatz'] == $valor[5] or $tab['colQuatz'] == $valor[6] or $tab['colQuatz'] == $valor[7] or $tab['colQuatz'] ==  $tab['colOite']  or $tab['colQuatz'] == $tab['colNove']  or $tab['colQuatz'] == $tab['colDez'] or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                  $tab['colQuatz'] = $this->resultBd[12];
                  if ($tab['colQuatz'] == $valor[0] or $tab['colQuatz'] == $valor[1] or $tab['colQuatz'] == $valor[2] or $tab['colQuatz'] == $valor[3] or $tab['colQuatz'] == $valor[4] or $tab['colQuatz'] == $valor[5] or $tab['colQuatz'] == $valor[6] or $tab['colQuatz'] == $valor[7] or $tab['colQuatz'] ==  $tab['colOite'] or $tab['colQuatz'] == $tab['colNove']   or $tab['colQuatz'] == $tab['colDez'] or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                    $tab['colQuatz'] = $this->resultBd[13];
                    if ($tab['colQuatz'] == $valor[0] or $tab['colQuatz'] == $valor[1] or $tab['colQuatz'] == $valor[2] or $tab['colQuatz'] == $valor[3] or $tab['colQuatz'] == $valor[4] or $tab['colQuatz'] == $valor[5] or $tab['colQuatz'] == $valor[6] or $tab['colQuatz'] == $valor[7] or $tab['colQuatz'] ==  $tab['colOite'] or $tab['colQuatz'] == $tab['colNove']   or $tab['colQuatz'] == $tab['colDez'] or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                      $tab['colQuatz'] = $this->resultBd[14];
                      if ($tab['colQuatz'] == $valor[0] or $tab['colQuatz'] == $valor[1] or $tab['colQuatz'] == $valor[2] or $tab['colQuatz'] == $valor[3] or $tab['colQuatz'] == $valor[4] or $tab['colQuatz'] == $valor[5] or $tab['colQuatz'] == $valor[6] or $tab['colQuatz'] == $valor[7] or $tab['colQuatz'] ==  $tab['colOite']  or $tab['colQuatz'] == $tab['colNove']  or $tab['colQuatz'] == $tab['colDez'] or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                        $tab['colQuatz'] = $this->resultBd[0];
                        if ($tab['colQuatz'] == $valor[0] or $tab['colQuatz'] == $valor[1] or $tab['colQuatz'] == $valor[2] or $tab['colQuatz'] == $valor[3] or $tab['colQuatz'] == $valor[4] or $tab['colQuatz'] == $valor[5] or $tab['colQuatz'] == $valor[6] or $tab['colQuatz'] == $valor[7] or $tab['colQuatz'] ==  $tab['colOite'] or $tab['colQuatz'] == $tab['colNove']   or $tab['colQuatz'] == $tab['colDez'] or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                          $tab['colQuatz'] = $this->resultBd[1];
                          if ($tab['colQuatz'] == $valor[0] or $tab['colQuatz'] == $valor[1] or $tab['colQuatz'] == $valor[2] or $tab['colQuatz'] == $valor[3] or $tab['colQuatz'] == $valor[4] or $tab['colQuatz'] == $valor[5] or $tab['colQuatz'] == $valor[6] or $tab['colQuatz'] == $valor[7] or $tab['colQuatz'] ==  $tab['colOite'] or $tab['colQuatz'] == $tab['colNove']   or $tab['colQuatz'] == $tab['colDez'] or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                            $tab['colQuatz'] = $this->resultBd[2];
                            if ($tab['colQuatz'] == $valor[0] or $tab['colQuatz'] == $valor[1] or $tab['colQuatz'] == $valor[2] or $tab['colQuatz'] == $valor[3] or $tab['colQuatz'] == $valor[4] or $tab['colQuatz'] == $valor[5] or $tab['colQuatz'] == $valor[6] or $tab['colQuatz'] == $valor[7] or $tab['colQuatz'] ==  $tab['colOite'] or $tab['colQuatz'] == $tab['colNove']   or $tab['colQuatz'] == $tab['colDez'] or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                              $tab['colQuatz'] = $this->resultBd[3];
                              if ($tab['colQuatz'] == $valor[0] or $tab['colQuatz'] == $valor[1] or $tab['colQuatz'] == $valor[2] or $tab['colQuatz'] == $valor[3] or $tab['colQuatz'] == $valor[4] or $tab['colQuatz'] == $valor[5] or $tab['colQuatz'] == $valor[6] or $tab['colQuatz'] == $valor[7] or $tab['colQuatz'] ==  $tab['colOite'] or $tab['colQuatz'] == $tab['colNove']   or $tab['colQuatz'] == $tab['colDez'] or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                                $tab['colQuatz'] = $this->resultBd[4];
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }

    $tab['colQuinz'] = $this->resultBd[6];
    if ($tab['colQuinz'] == $valor[0] or $tab['colQuinz'] == $valor[1] or $tab['colQuinz'] == $valor[2] or $tab['colQuinz'] == $valor[3] or $tab['colQuinz'] == $valor[4] or $tab['colQuinz'] == $valor[5] or $tab['colQuinz'] == $valor[6] or $tab['colQuinz'] == $valor[7] or $tab['colQuinz'] ==  $tab['colOite'] or $tab['colQuinz'] == $tab['colNove']   or $tab['colQuinz'] == $tab['colDez'] or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
      $tab['colQuinz'] = $this->resultBd[7];
      if ($tab['colQuinz'] == $valor[0] or $tab['colQuinz'] == $valor[1] or $tab['colQuinz'] == $valor[2] or $tab['colQuinz'] == $valor[3] or $tab['colQuinz'] == $valor[4] or $tab['colQuinz'] == $valor[5] or $tab['colQuinz'] == $valor[6] or $tab['colQuinz'] == $valor[7] or $tab['colQuinz'] ==  $tab['colOite'] or $tab['colQuinz'] == $tab['colNove'] or $tab['colQuinz'] == $tab['colDez'] or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
        $tab['colQuinz'] = $this->resultBd[8];
        if ($tab['colQuinz'] == $valor[0] or $tab['colQuinz'] == $valor[1] or $tab['colQuinz'] == $valor[2] or $tab['colQuinz'] == $valor[3] or $tab['colQuinz'] == $valor[4] or $tab['colQuinz'] == $valor[5] or $tab['colQuinz'] == $valor[6] or $tab['colQuinz'] == $valor[7] or $tab['colQuinz'] ==  $tab['colOite'] or $tab['colQuinz'] == $tab['colNove'] or $tab['colQuinz'] == $tab['colDez'] or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
          $tab['colQuinz'] = $this->resultBd[9];
          if ($tab['colQuinz'] == $valor[0] or $tab['colQuinz'] == $valor[1] or $tab['colQuinz'] == $valor[2] or $tab['colQuinz'] == $valor[3] or $tab['colQuinz'] == $valor[4] or $tab['colQuinz'] == $valor[5] or $tab['colQuinz'] == $valor[6] or $tab['colQuinz'] == $valor[7] or $tab['colQuinz'] ==  $tab['colOite'] or $tab['colQuinz'] == $tab['colNove'] or $tab['colQuinz'] == $tab['colDez'] or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
            $tab['colQuinz'] = $this->resultBd[10];
            if ($tab['colQuinz'] == $valor[0] or $tab['colQuinz'] == $valor[1] or $tab['colQuinz'] == $valor[2] or $tab['colQuinz'] == $valor[3] or $tab['colQuinz'] == $valor[4] or $tab['colQuinz'] == $valor[5] or $tab['colQuinz'] == $valor[6] or $tab['colQuinz'] == $valor[7] or $tab['colQuinz'] ==  $tab['colOite'] or $tab['colQuinz'] == $tab['colNove'] or $tab['colQuinz'] == $tab['colDez'] or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
              $tab['colQuinz'] = $this->resultBd[11];
              if ($tab['colQuinz'] == $valor[0] or $tab['colQuinz'] == $valor[1] or $tab['colQuinz'] == $valor[2] or $tab['colQuinz'] == $valor[3] or $tab['colQuinz'] == $valor[4] or $tab['colQuinz'] == $valor[5] or $tab['colQuinz'] == $valor[6] or $tab['colQuinz'] == $valor[7] or $tab['colQuinz'] ==  $tab['colOite'] or $tab['colQuinz'] == $tab['colNove'] or $tab['colQuinz'] == $tab['colDez'] or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                $tab['colQuinz'] = $this->resultBd[12];
                if ($tab['colQuinz'] == $valor[0] or $tab['colQuinz'] == $valor[1] or $tab['colQuinz'] == $valor[2] or $tab['colQuinz'] == $valor[3] or $tab['colQuinz'] == $valor[4] or $tab['colQuinz'] == $valor[5] or $tab['colQuinz'] == $valor[6] or $tab['colQuinz'] == $valor[7] or $tab['colQuinz'] ==  $tab['colOite'] or $tab['colQuinz'] == $tab['colNove'] or $tab['colQuinz'] == $tab['colDez'] or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                  $tab['colQuinz'] = $this->resultBd[13];
                  if ($tab['colQuinz'] == $valor[0] or $tab['colQuinz'] == $valor[1] or $tab['colQuinz'] == $valor[2] or $tab['colQuinz'] == $valor[3] or $tab['colQuinz'] == $valor[4] or $tab['colQuinz'] == $valor[5] or $tab['colQuinz'] == $valor[6] or $tab['colQuinz'] == $valor[7] or $tab['colQuinz'] ==  $tab['colOite'] or $tab['colQuinz'] == $tab['colNove'] or $tab['colQuinz'] == $tab['colDez'] or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                    $tab['colQuinz'] = $this->resultBd[14];
                    if ($tab['colQuinz'] == $valor[0] or $tab['colQuinz'] == $valor[1] or $tab['colQuinz'] == $valor[2] or $tab['colQuinz'] == $valor[3] or $tab['colQuinz'] == $valor[4] or $tab['colQuinz'] == $valor[5] or $tab['colQuinz'] == $valor[6] or $tab['colQuinz'] == $valor[7] or $tab['colQuinz'] ==  $tab['colOite'] or $tab['colQuinz'] == $tab['colNove'] or $tab['colQuinz'] == $tab['colDez'] or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                      $tab['colQuinz'] = $this->resultBd[0];
                      if ($tab['colQuinz'] == $valor[0] or $tab['colQuinz'] == $valor[1] or $tab['colQuinz'] == $valor[2] or $tab['colQuinz'] == $valor[3] or $tab['colQuinz'] == $valor[4] or $tab['colQuinz'] == $valor[5] or $tab['colQuinz'] == $valor[6] or $tab['colQuinz'] == $valor[7] or $tab['colQuinz'] ==  $tab['colOite'] or $tab['colQuinz'] == $tab['colNove'] or $tab['colQuinz'] == $tab['colDez'] or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                        $tab['colQuinz'] = $this->resultBd[1];
                        if ($tab['colQuinz'] == $valor[0] or $tab['colQuinz'] == $valor[1] or $tab['colQuinz'] == $valor[2] or $tab['colQuinz'] == $valor[3] or $tab['colQuinz'] == $valor[4] or $tab['colQuinz'] == $valor[5] or $tab['colQuinz'] == $valor[6] or $tab['colQuinz'] == $valor[7] or $tab['colQuinz'] ==  $tab['colOite'] or $tab['colQuinz'] == $tab['colNove'] or $tab['colQuinz'] == $tab['colDez'] or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                          $tab['colQuinz'] = $this->resultBd[2];
                          if ($tab['colQuinz'] == $valor[0] or $tab['colQuinz'] == $valor[1] or $tab['colQuinz'] == $valor[2] or $tab['colQuinz'] == $valor[3] or $tab['colQuinz'] == $valor[4] or $tab['colQuinz'] == $valor[5] or $tab['colQuinz'] == $valor[6] or $tab['colQuinz'] == $valor[7] or $tab['colQuinz'] ==  $tab['colOite'] or $tab['colQuinz'] == $tab['colNove'] or $tab['colQuinz'] == $tab['colDez'] or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                            $tab['colQuinz'] = $this->resultBd[3];
                            if ($tab['colQuinz'] == $valor[0] or $tab['colQuinz'] == $valor[1] or $tab['colQuinz'] == $valor[2] or $tab['colQuinz'] == $valor[3] or $tab['colQuinz'] == $valor[4] or $tab['colQuinz'] == $valor[5] or $tab['colQuinz'] == $valor[6] or $tab['colQuinz'] == $valor[7] or $tab['colQuinz'] ==  $tab['colOite'] or $tab['colQuinz'] == $tab['colNove'] or $tab['colQuinz'] == $tab['colDez'] or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                              $tab['colQuinz'] = $this->resultBd[4];
                              if ($tab['colQuinz'] == $valor[0] or $tab['colQuinz'] == $valor[1] or $tab['colQuinz'] == $valor[2] or $tab['colQuinz'] == $valor[3] or $tab['colQuinz'] == $valor[4] or $tab['colQuinz'] == $valor[5] or $tab['colQuinz'] == $valor[6] or $tab['colQuinz'] == $valor[7] or $tab['colQuinz'] ==  $tab['colOite'] or $tab['colQuinz'] == $tab['colNove'] or $tab['colQuinz'] == $tab['colDez'] or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                                $tab['colQuinz'] = $this->resultBd[5];
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    $this->data = $tab;
    // var_dump($this->data);

  }

  public function compilar10(array $data): void
  {
    rsort($this->resultBd);
    //aleatorio
    //  shuffle($this->resultBd);
    //  var_dump($this->resultBd);
    $valor = $data;
    //var_dump($valor);
    extract($valor);
    $tab['colUm'] = $colUm;
    $tab['colDois'] = $colDois;
    $tab['colTres'] = $colTres;
    $tab['colQuatro'] = $colQuatro;
    $tab['colCinco'] = $colCinco;
    $tab['colSeis'] = $colSeis;
    $tab['colSete'] = $colSete;
    $tab['colOite'] = $colOite;
    $tab['colNove'] = $colNove;
    $tab['colDez'] = $colDez;


    $tab['colOnze'] = $this->resultBd[0];
    if ($tab['colOnze'] == $colUm or $tab['colOnze'] == $colDois or $tab['colOnze'] == $colTres or $tab['colOnze'] == $colQuatro or $tab['colOnze'] == $colCinco or $tab['colOnze'] == $colSeis or $tab['colOnze'] == $colSete or $tab['colOnze'] == $colOite or $tab['colOnze'] == $colNove or $tab['colOnze'] == $tab['colDez']) {
      $tab['colOnze'] = $this->resultBd[1];
      if ($tab['colOnze'] == $colUm or $tab['colOnze'] == $colDois or $tab['colOnze'] == $colTres or $tab['colOnze'] == $colQuatro or $tab['colOnze'] == $colCinco or $tab['colOnze'] == $colSeis or $tab['colOnze'] == $colSete or $tab['colOnze'] == $colOite or $tab['colOnze'] == $colNove or $tab['colOnze'] == $tab['colDez']) {
        $tab['colOnze'] = $this->resultBd[2];
        if ($tab['colOnze'] == $colUm or $tab['colOnze'] == $colDois or $tab['colOnze'] == $colTres or $tab['colOnze'] == $colQuatro or $tab['colOnze'] == $colCinco or $tab['colOnze'] == $colSeis or $tab['colOnze'] == $colSete or $tab['colOnze'] == $colOite or $tab['colOnze'] == $colNove or $tab['colOnze'] == $tab['colDez']) {
          $tab['colOnze'] = $this->resultBd[3];
          if ($tab['colOnze'] == $colUm or $tab['colOnze'] == $colDois or $tab['colOnze'] == $colTres or $tab['colOnze'] == $colQuatro or $tab['colOnze'] == $colCinco or $tab['colOnze'] == $colSeis or $tab['colOnze'] == $colSete or $tab['colOnze'] == $colOite or $tab['colOnze'] == $colNove or $tab['colOnze'] == $tab['colDez']) {
            $tab['colOnze'] = $this->resultBd[4];
            if ($tab['colOnze'] == $colUm or $tab['colOnze'] == $colDois or $tab['colOnze'] == $colTres or $tab['colOnze'] == $colQuatro or $tab['colOnze'] == $colCinco or $tab['colOnze'] == $colSeis or $tab['colOnze'] == $colSete or $tab['colOnze'] == $colOite or $tab['colOnze'] == $colNove or $tab['colOnze'] == $tab['colDez']) {
              $tab['colOnze'] = $this->resultBd[5];
              if ($tab['colOnze'] == $colUm or $tab['colOnze'] == $colDois or $tab['colOnze'] == $colTres or $tab['colOnze'] == $colQuatro or $tab['colOnze'] == $colCinco or $tab['colOnze'] == $colSeis or $tab['colOnze'] == $colSete or $tab['colOnze'] == $colOite or $tab['colOnze'] == $colNove or $tab['colOnze'] == $tab['colDez']) {
                $tab['colOnze'] = $this->resultBd[6];
                if ($tab['colOnze'] == $colUm or $tab['colOnze'] == $colDois or $tab['colOnze'] == $colTres or $tab['colOnze'] == $colQuatro or $tab['colOnze'] == $colCinco or $tab['colOnze'] == $colSeis or $tab['colOnze'] == $colSete or $tab['colOnze'] == $colOite or $tab['colOnze'] == $colNove or $tab['colOnze'] == $tab['colDez']) {
                  $tab['colOnze'] = $this->resultBd[7];
                  if ($tab['colOnze'] == $colUm or $tab['colOnze'] == $colDois or $tab['colOnze'] == $colTres or $tab['colOnze'] == $colQuatro or $tab['colOnze'] == $colCinco or $tab['colOnze'] == $colSeis or $tab['colOnze'] == $colSete or $tab['colOnze'] == $colOite or $tab['colOnze'] == $colNove or $tab['colOnze'] == $tab['colDez']) {
                    $tab['colOnze'] = $this->resultBd[8];
                    if ($tab['colOnze'] == $colUm or $tab['colOnze'] == $colDois or $tab['colOnze'] == $colTres or $tab['colOnze'] == $colQuatro or $tab['colOnze'] == $colCinco or $tab['colOnze'] == $colSeis or $tab['colOnze'] == $colSete or $tab['colOnze'] == $colOite or $tab['colOnze'] == $colNove or $tab['colOnze'] == $tab['colDez']) {
                      $tab['colOnze'] = $this->resultBd[9];
                      if ($tab['colOnze'] == $colUm or $tab['colOnze'] == $colDois or $tab['colOnze'] == $colTres or $tab['colOnze'] == $colQuatro or $tab['colOnze'] == $colCinco or $tab['colOnze'] == $colSeis or $tab['colOnze'] == $colSete or $tab['colOnze'] == $colOite or $tab['colOnze'] == $colNove or $tab['colOnze'] == $tab['colDez']) {
                        $tab['colOnze'] = $this->resultBd[10];
                        if ($tab['colOnze'] == $colUm or $tab['colOnze'] == $colDois or $tab['colOnze'] == $colTres or $tab['colOnze'] == $colQuatro or $tab['colOnze'] == $colCinco or $tab['colOnze'] == $colSeis or $tab['colOnze'] == $colSete or $tab['colOnze'] == $colOite or $tab['colOnze'] == $colNove or $tab['colOnze'] == $tab['colDez']) {
                          $tab['colOnze'] = $this->resultBd[11];
                          if ($tab['colOnze'] == $colUm or $tab['colOnze'] == $colDois or $tab['colOnze'] == $colTres or $tab['colOnze'] == $colQuatro or $tab['colOnze'] == $colCinco or $tab['colOnze'] == $colSeis or $tab['colOnze'] == $colSete or $tab['colOnze'] == $colOite or $tab['colOnze'] == $colNove or $tab['colOnze'] == $tab['colDez']) {
                            $tab['colOnze'] = $this->resultBd[12];
                            if ($tab['colOnze'] == $colUm or $tab['colOnze'] == $colDois or $tab['colOnze'] == $colTres or $tab['colOnze'] == $colQuatro or $tab['colOnze'] == $colCinco or $tab['colOnze'] == $colSeis or $tab['colOnze'] == $colSete or $tab['colOnze'] == $colOite or $tab['colOnze'] == $colNove or $tab['colOnze'] == $tab['colDez']) {
                              $tab['colOnze'] = $this->resultBd[13];
                              if ($tab['colOnze'] == $colUm or $tab['colOnze'] == $colDois or $tab['colOnze'] == $colTres or $tab['colOnze'] == $colQuatro or $tab['colOnze'] == $colCinco or $tab['colOnze'] == $colSeis or $tab['colOnze'] == $colSete or $tab['colOnze'] == $colOite or $tab['colOnze'] == $colNove or $tab['colOnze'] == $tab['colDez']) {
                                $tab['colOnze'] = $this->resultBd[14];
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    $tab['colDoze'] = $this->resultBd[1];
    if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $tab['colOnze']) {
      $tab['colDoze'] = $this->resultBd[2];
      if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $tab['colOnze']) {
        $tab['colDoze'] = $this->resultBd[3];
        if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $tab['colOnze']) {
          $tab['colDoze'] = $this->resultBd[4];
          if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $tab['colOnze']) {
            $tab['colDoze'] = $this->resultBd[5];
            if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $tab['colOnze']) {
              $tab['colDoze'] = $this->resultBd[6];
              if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $tab['colOnze']) {
                $tab['colDoze'] = $this->resultBd[7];
                if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $tab['colOnze']) {
                  $tab['colDoze'] = $this->resultBd[8];
                  if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $tab['colOnze']) {
                    $tab['colDoze'] = $this->resultBd[9];
                    if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $tab['colOnze']) {
                      $tab['colDoze'] = $this->resultBd[10];
                      if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $tab['colOnze']) {
                        $tab['colDoze'] = $this->resultBd[11];
                        if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $tab['colOnze']) {
                          $tab['colDoze'] = $this->resultBd[12];
                          if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $tab['colOnze']) {
                            $tab['colDoze'] = $this->resultBd[13];
                            if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $tab['colOnze']) {
                              $tab['colDoze'] = $this->resultBd[14];
                              if ($tab['colDoze'] == $colUm or $tab['colDoze'] == $colDois or $tab['colDoze'] == $colTres or $tab['colDoze'] == $colQuatro or $tab['colDoze'] == $colCinco or $tab['colDoze'] == $colSeis or $tab['colDoze'] == $colSete or $tab['colDoze'] == $colOite or $tab['colDoze'] == $colNove or $tab['colDoze'] == $colDez or $tab['colDoze'] == $tab['colOnze']) {
                                $tab['colDoze'] = $this->resultBd[0];
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }

    $tab['colTrez'] = $this->resultBd[2];
    if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
      $tab['colTrez'] = $this->resultBd[3];
      if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
        $tab['colTrez'] = $this->resultBd[4];
        if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
          $tab['colTrez'] = $this->resultBd[5];
          if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
            $tab['colTrez'] = $this->resultBd[6];
            if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
              $tab['colTrez'] = $this->resultBd[7];
              if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                $tab['colTrez'] = $this->resultBd[8];
                if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                  $tab['colTrez'] = $this->resultBd[9];
                  if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                    $tab['colTrez'] = $this->resultBd[10];
                    if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                      $tab['colTrez'] = $this->resultBd[11];
                      if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                        $tab['colTrez'] = $this->resultBd[12];
                        if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                          $tab['colTrez'] = $this->resultBd[13];
                          if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                            $tab['colTrez'] = $this->resultBd[14];
                            if ($tab['colTrez'] == $colUm or $tab['colTrez'] == $colDois or $tab['colTrez'] == $colTres or $tab['colTrez'] == $colQuatro or $tab['colTrez'] == $colCinco or $tab['colTrez'] == $colSeis or $tab['colTrez'] == $colSete or $tab['colTrez'] == $colOite or $tab['colTrez'] == $colNove or $tab['colTrez'] == $colDez or $tab['colTrez'] == $tab['colOnze'] or $tab['colTrez'] == $tab['colDoze']) {
                              $tab['colTrez'] = $this->resultBd[1];
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }

    $tab['colQuatz'] = $this->resultBd[3];
    if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
      $tab['colQuatz'] = $this->resultBd[4];
      if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
        $tab['colQuatz'] = $this->resultBd[5];
        if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
          $tab['colQuatz'] = $this->resultBd[6];
          if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
            $tab['colQuatz'] = $this->resultBd[7];
            if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
              $tab['colQuatz'] = $this->resultBd[8];
              if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                $tab['colQuatz'] = $this->resultBd[9];
                if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                  $tab['colQuatz'] = $this->resultBd[10];
                  if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                    $tab['colQuatz'] = $this->resultBd[11];
                    if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                      $tab['colQuatz'] = $this->resultBd[12];
                      if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                        $tab['colQuatz'] = $this->resultBd[13];
                        if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                          $tab['colQuatz'] = $this->resultBd[14];
                          if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                            $tab['colQuatz'] = $this->resultBd[0];
                            if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                              $tab['colQuatz'] = $this->resultBd[1];
                              if ($tab['colQuatz'] == $colUm or $tab['colQuatz'] == $colDois or $tab['colQuatz'] == $colTres or $tab['colQuatz'] == $colQuatro or $tab['colQuatz'] == $colCinco or $tab['colQuatz'] == $colSeis or $tab['colQuatz'] == $colSete or $tab['colQuatz'] == $colOite or $tab['colQuatz'] == $colNove or $tab['colQuatz'] == $colDez or $tab['colQuatz'] == $tab['colOnze'] or $tab['colQuatz'] == $tab['colDoze'] or $tab['colQuatz'] == $tab['colTrez']) {
                                $tab['colQuatz'] = $this->resultBd[2];
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    $tab['colQuinz'] = $this->resultBd[4];
    if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
      $tab['colQuinz'] = $this->resultBd[5];
      if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
        $tab['colQuinz'] = $this->resultBd[6];
        if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
          $tab['colQuinz'] = $this->resultBd[7];
          if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
            $tab['colQuinz'] = $this->resultBd[8];
            if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
              $tab['colQuinz'] = $this->resultBd[9];
              if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                $tab['colQuinz'] = $this->resultBd[10];
                if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                  $tab['colQuinz'] = $this->resultBd[11];
                  if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                    $tab['colQuinz'] = $this->resultBd[12];
                    if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                      $tab['colQuinz'] = $this->resultBd[13];
                      if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                        $tab['colQuinz'] = $this->resultBd[14];
                        if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                          $tab['colQuinz'] = $this->resultBd[0];
                          if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                            $tab['colQuinz'] = $this->resultBd[1];
                            if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                              $tab['colQuinz'] = $this->resultBd[2];
                              if ($tab['colQuinz'] == $colUm or $tab['colQuinz'] == $colDois or $tab['colQuinz'] == $colTres or $tab['colQuinz'] == $colQuatro or $tab['colQuinz'] == $colCinco or $tab['colQuinz'] == $colSeis or $tab['colQuinz'] == $colSete or $tab['colQuinz'] == $colOite or $tab['colQuinz'] == $colNove or $tab['colQuinz'] == $colDez or $tab['colQuinz'] == $tab['colOnze'] or $tab['colQuinz'] == $tab['colDoze'] or $tab['colQuinz'] == $tab['colTrez'] or $tab['colQuinz'] == $tab['colQuatz']) {
                                $tab['colQuinz'] = $this->resultBd[3];
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    $this->data = $tab;
    //  var_dump( $this->data);
  }
}
