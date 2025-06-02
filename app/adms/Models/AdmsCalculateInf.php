<?php

namespace App\adms\Models;

if (!defined('RSR1937NA')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}
// buscar os dados da tabela e executa os calculo e envia os resultados

class AdmsCalculateInf
{
    private int|array $data;

    // private $tots; // recebe a quantidade de registro da tabela
    private int|array $resultNove; //receber os noves que mais saui

    private bool $result; //$result Recebe true quando executar o processo com sucesso e false quando houver erro 
    private array|null $resultBd; // $resultBd os valores do calculo da classe
    //private int|string|array|null $data;//$id Recebe o id do registro 
    function getResult(): bool
    {
        return $this->result;
    }
    function getResultBd(): array|null
    {
        return $this->resultBd;
    }

    public function geraSelect()
    {

        $exeJogo = new \App\adms\Models\helper\AdmsRead();
        $exeJogo->fullRead("SELECT id  FROM  sequencia order by id desc limit 1");
        $ultimaId = $exeJogo->getResult()[0];
        $ultimaId = (int) $ultimaId['id'];
        $ultimaId =  $ultimaId - 1;

        for ($n = 1; $n <= $ultimaId; $n++) {
            $exeJogo = new \App\adms\Models\helper\AdmsRead();
            $exeJogo->fullRead("SELECT colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz
                  FROM  sequencia where id =:id", "id={$ultimaId}");
            if ($exeJogo->getResult()) {
                $valor = $exeJogo->getResult()[0];
                sort($valor);
                for ($i = 1; $i <= 25; $i++) {
                    switch ($i) {
                        case $valor[0]:
                            switch ($i) {
                                case 1:
                                    $data['um'][$valor[0]][]  = $valor[0];
                                    break;
                                case 2:
                                    $data['um'][$valor[0]][]  = $valor[0];
                                    break;
                                case 3:
                                    $data['um'][$valor[0]][]  = $valor[0];
                                    break;
                                case 4:
                                    $data['um'][$valor[0]][]  = $valor[0];
                                    break;
                                case 5:
                                    $data['um'][$valor[0]][]  = $valor[0];
                                    break;
                                case 6:
                                    $data['um'][$valor[0]][]  = $valor[0];
                                    break;
                                case 7:
                                    $data['um'][$valor[0]][]  = $valor[0];
                                default;
                            }
                            break;
                        case $valor[1]:
                            switch ($i) {
                                case 2:
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                    break;
                                case 3:
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                    break;
                                case 4:
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                    break;
                                case 5:
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                    break;
                                case 6:
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                    break;
                                case 7:
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                    break;
                                case 8:
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                default;
                            }
                            break;
                        case $valor[2]:
                            switch ($i) {
                                case 3:
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                    break;
                                case 4:
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                    break;
                                case 5:
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                    break;
                                case 6:
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                    break;
                                case 7:
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                    break;
                                case 8:
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                    break;
                                case 9:
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                default;
                            }
                            break;
                        case $valor[3]:
                            switch ($i) {
                                case 4:
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                    break;
                                case 5:
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                    break;
                                case 6:
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                    break;
                                case 7:
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                    break;
                                case 8:
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                    break;
                                case 9:
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                    break;
                                case 10:
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                default;
                            }
                            break;
                        case $valor[4]:
                            switch ($i) {
                                case 5:
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                    break;
                                case 6:
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                    break;
                                case 7:
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                    break;
                                case 8:
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                    break;
                                case 9:
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                    break;
                                case 10:
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                    break;
                                case 11:
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                default;
                            }
                            break;
                        case $valor[5]:
                            switch ($i) {
                                case 6:
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 7:
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 8:
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 9:
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 10:
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 11:
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 12:
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 13:
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                default;
                            }
                            break;
                        case $valor[6]:
                            switch ($i) {
                                case 7:
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 8:
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 9:
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 10:
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 11:
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 12:
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 13:
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 14:
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 15:
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                default;
                            }
                            break;
                        case $valor[7]:
                            switch ($i) {
                                case 8:
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 9:
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 10:
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 11:
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 12:
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 13:
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 14:
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 15:
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 16:
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 17:
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                default;
                            }
                            break;
                        case $valor[8]:
                            switch ($i) {
                                case 9:
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 10:
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 11:
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 12:
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 13:
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 14:
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 15:
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 16:
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 17:
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 18:
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 19:
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                default;
                            }
                            break;
                        case $valor[9]:
                            switch ($i) {
                                case 10:
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 11:
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 12:
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 13:
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 14:
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 15:
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 16:
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 17:
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 18:
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 19:
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 20:
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                default;
                            }
                            break;
                        case $valor[10]:
                            switch ($i) {
                                case 11:
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 12:
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 13:
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 14:
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 15:
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 16:
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 17:
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 18:
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 19:
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 20:
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 21:
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                default;
                            }
                            break;
                        case $valor[11]:
                            switch ($i) {
                                case 12:
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 13:
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 14:
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 15:
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 16:
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 17:
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 18:
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 19:
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 20:
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 21:
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 22:
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                            }
                            break;
                        case $valor[12]:
                            switch ($i) {
                                case 13:
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 14:
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 15:
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 16:
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 17:
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 18:
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 19:
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 20:
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 21:
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 22:
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 23:
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                            }
                            break;
                        case $valor[13]:
                            switch ($i) {
                                case 14:
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 15:
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 16:
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 17:
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 18:
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 19:
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 20:
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 22:
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 23:
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 24:
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 25:
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                default;
                            }
                            break;
                        case $valor[14]:
                            switch ($i) {
                                case 15:
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 16:
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 17:
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 18:
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 19:
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 20:
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 22:
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 23:
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 24:
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 25:
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                default;
                            }
                            break;
                            //var_dump($i);*/
                        default;
                    }
                }
                $ultimaId = $ultimaId - 1;
            } else {
                $ultimaId = $ultimaId - 1;
            }
        }
        rsort($data['um']);
        rsort($data['dois']);
        rsort($data['tres']);
        rsort($data['quatro']);
        rsort($data['cinco']);
        rsort($data['seis']);
        rsort($data['sete']);
        rsort($data['oite']);
        rsort($data['nove']);
        rsort($data['dez']);
        rsort($data['onze']);
        rsort($data['doze']);
        rsort($data['trez']);
        rsort($data['quatz']);
        rsort($data['quinz']);

        sort($data);
        //  var_dump($data);
        foreach ($data as $valor) {
            $jogo["um"][] = $valor[0][0];
        }
        // var_dump($jogo["jogo1"]);

        foreach ($data as $valor) {
            $jogo["dois"][] = $valor[1][0];
        }
        foreach ($data as $valor) {
            $jogo["tres"][] = $valor[2][0];
        }
        sort($jogo["um"]);
        sort($jogo["dois"]);
        sort($jogo["tres"]);
        var_dump($jogo);
    }

    
    public function editJogo()
    {
        $deleteUser = new \App\adms\Models\AdmsClearTable;
        $deleteUser->clearTable("calculo");

        $idsColuns = new \App\adms\Models\AdmsExeInfo();
        $idsColuns->exeInfoColuns();
        $this->data = $idsColuns->getResultBd();

        // var_dump( $this->data);
        foreach ($this->data as $value) {
           //  var_dump( $value);
            $n01[] = $value[0][1];
            $n02[] = $value[1][1];
            $n03[] = $value[2][1];
            $n04[] = $value[3][1];
            $n05[] = $value[4][1];
            $n06[] = $value[5][1];
            $n07[] = $value[6][1];
            $n08[] = $value[7][1];
            $n09[] = $value[8][1];
            $n10[] = $value[9][1];
            $n11[] = $value[10][1];
        }

        $num = [$n01, $n02, $n03, $n04, $n05, $n06, $n07, $n08, $n09, $n10, $n11];
      //  var_dump($num);
        foreach ($num as $key) {
            $this->tabCalculo($key);
        }
    }

    public function calculoColuns(): void
    {
        //LIMPAR TABELA CALCULO PARA REALIZAR O CADASTO
        $deleteUser = new \App\adms\Models\AdmsClearTable;
        $deleteUser->clearTable("calculo");

        $idsColuns = new \App\adms\Models\AdmsExeInfo();
        $idsColuns->exeInfoColuns();
        $this->data = $idsColuns->getResultBd();
        //  var_dump( $this->data);


        //PRIMEIRA SEQUENCIA Q MAIS SAIU

        $um1 = $this->data['um'][0][1];
        $dois1 = $this->data['dois'][0][1];
        if ($dois1 == $um1) {
            $dois1 = $this->data['dois'][1][1];
        }

        $tres1 =  $this->data['tres'][0][1];
        if ($tres1 == $dois1 or $tres1 == $um1) {
            $tres1 = $this->data['tres'][1][1];
            if ($tres1 == $dois1 or $tres1 == $um1) {
                $tres1 = $this->data['tres'][2][1];
            }
        }

        $quatro1 =  $this->data['quatro'][0][1];
        if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
            $quatro1 =  $this->data['quatro'][1][1];
            if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                $quatro1 =  $this->data['quatro'][2][1];
                if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                    $quatro1 =  $this->data['quatro'][3][1];
                }
            }
        }
        $cinco1 =  $this->data['cinco'][0][1];
        if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
            $cinco1 =  $this->data['cinco'][1][1];
            if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                $cinco1 =  $this->data['cinco'][2][1];
                if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                    $cinco1 =  $this->data['cinco'][3][1];
                    if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                        $cinco1 =  $this->data['cinco'][4][1];
                    }
                }
            }
        }
        $seis1 = $this->data['seis'][0][1];
        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
            $seis1 = $this->data['seis'][1][1];
            if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                $seis1 = $this->data['seis'][2][1];
                if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                    $seis1 = $this->data['seis'][3][1];
                    if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                        $seis1 = $this->data['seis'][4][1];
                        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                            $seis1 = $this->data['seis'][5][1];
                        }
                    }
                }
            }
        }
        $sete1 = $this->data['sete'][0][1];
        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
            $sete1 = $this->data['sete'][1][1];
            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                $sete1 = $this->data['sete'][2][1];
                if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                    $sete1 = $this->data['sete'][3][1];
                    if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                        $sete1 = $this->data['sete'][4][1];
                        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                            $sete1 = $this->data['sete'][5][1];
                            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                                $sete1 = $this->data['sete'][6][1];
                            }
                        }
                    }
                }
            }
        }

        $oite1 = $this->data['oite'][0][1];
        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
            $oite1 = $this->data['oite'][1][1];
            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                $oite1 = $this->data['oite'][2][1];
                if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                    $oite1 = $this->data['oite'][3][1];
                    if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                        $oite1 = $this->data['oite'][4][1];
                        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                            $oite1 = $this->data['oite'][5][1];
                            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                                $oite1 = $this->data['oite'][6][1];
                                if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                                    $oite1 = $this->data['oite'][7][1];
                                }
                            }
                        }
                    }
                }
            }
        }

        $nove1 = $this->data['nove'][0][1];
        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
            $nove1 = $this->data['nove'][1][1];
            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                $nove1 = $this->data['nove'][2][1];
                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                    $nove1 = $this->data['nove'][3][1];
                    if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                        $nove1 = $this->data['nove'][4][1];
                        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                            $nove1  = $this->data['nove'][5][1];
                            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                $nove1 = $this->data['nove'][6][1];
                                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                    $nove1 = $this->data['nove'][7][1];
                                    if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                        $nove1 = $this->data['nove'][8][1];
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        $dez1  = $this->data['dez'][0][1];
        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
            $dez1  = $this->data['dez'][1][1];
            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                $dez1  = $this->data['dez'][2][1];
                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                    $dez1  = $this->data['dez'][3][1];
                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                        $dez1  = $this->data['dez'][4][1];
                        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                            $dez1  = $this->data['dez'][5][1];
                            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                $dez1  = $this->data['dez'][6][1];
                                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                    $dez1  = $this->data['dez'][7][1];
                                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                        $dez1  = $this->data['dez'][8][1];
                                        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                            $dez1  = $this->data['dez'][9][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $onze1 = $this->data['onze'][0][1];
        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
            $onze1 = $this->data['onze'][1][1];
            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                $onze1 = $this->data['onze'][2][1];
                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                    $onze1 = $this->data['onze'][3][1];
                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                        $onze1 = $this->data['onze'][4][1];
                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                            $onze1 = $this->data['onze'][5][1];
                            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                $onze1 = $this->data['onze'][6][1];
                                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                    $onze1 = $this->data['onze'][7][1];
                                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                        $onze1 = $this->data['onze'][8][1];
                                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                            $onze1 = $this->data['onze'][9][1];
                                            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                                $onze1 = $this->data['onze'][10][1];
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
        $doze1 = $this->data['doze'][0][1];
        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
            $doze1 = $this->data['doze'][1][1];
            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                $doze1 = $this->data['doze'][2][1];
                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                    $doze1 = $this->data['doze'][3][1];
                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                        $doze1 = $this->data['doze'][4][1];
                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                            $doze1 = $this->data['doze'][5][1];
                            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                $doze1 = $this->data['doze'][6][1];
                                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                    $doze1 = $this->data['doze'][7][1];
                                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                        $doze1 = $this->data['doze'][8][1];
                                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                            $doze1 = $this->data['doze'][9][1];
                                            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                                $doze1 = $this->data['doze'][10][1];
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
        $trez1 = $this->data['trez'][0][1];
        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
            $trez1 = $this->data['trez'][1][1];
            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                $trez1 = $this->data['trez'][2][1];
                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                    $trez1 = $this->data['trez'][3][1];
                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                        $trez1 = $this->data['trez'][4][1];
                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                            $trez1 = $this->data['trez'][5][1];
                            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                $trez1 = $this->data['trez'][6][1];
                                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                    $trez1 = $this->data['trez'][7][1];
                                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                        $trez1 = $this->data['trez'][8][1];
                                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                            $trez1 = $this->data['trez'][9][1];
                                            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                                $trez1 = $this->data['trez'][10][1];
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
        $quatz1 = $this->data['quatz'][0][1];
        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
            $quatz1 = $this->data['quatz'][1][1];
            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                $quatz1 = $this->data['quatz'][2][1];
                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                    $quatz1 = $this->data['quatz'][3][1];
                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                        $quatz1 = $this->data['quatz'][4][1];
                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                            $quatz1 = $this->data['quatz'][5][1];
                            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                $quatz1 = $this->data['quatz'][6][1];
                                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                    $quatz1 = $this->data['quatz'][7][1];
                                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                        $quatz1 = $this->data['quatz'][8][1];
                                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                            $quatz1 = $this->data['quatz'][9][1];
                                            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                                $quatz1 = $this->data['quatz'][10][1];
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
        $quinz1 = $this->data['quinz'][0][1];
        if ($quinz1 == $quatz1 or  $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
            $quinz1 = $this->data['quinz'][1][1];
            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                $quinz1 = $this->data['quinz'][2][1];
                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                    $quinz1 = $this->data['quinz'][3][1];
                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                        $quinz1 = $this->data['quinz'][4][1];
                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                            $quinz1 = $this->data['quinz'][5][1];
                            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                $quinz1 = $this->data['quinz'][6][1];
                                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                    $quinz1 = $this->data['quinz'][7][1];
                                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                        $quinz1 = $this->data['quinz'][8][1];
                                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                            $quinz1 = $this->data['quinz'][9][1];
                                            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                                $quinz1 = $this->data['quatz'][10][1];
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
        $calculo1 = [$um1, $dois1, $tres1, $quatro1, $cinco1, $seis1, $sete1, $oite1, $nove1, $dez1, $onze1, $doze1, $trez1, $quatz1, $quinz1];
        sort($calculo1);

        //SEGUNDA SEQUENCIA Q MAIS SAIU
        $um1 = $this->data['um'][1][1];
        $dois1 = $this->data['dois'][1][1];
        if ($dois1 == $um1) {
            $dois1 = $this->data['dois'][2][1];
        }

        $tres1 =  $this->data['tres'][1][1];
        if ($tres1 == $dois1 or $tres1 == $um1) {
            $tres1 = $this->data['tres'][2][1];
            if ($tres1 == $dois1 or $tres1 == $um1) {
                $tres1 = $this->data['tres'][3][1];
            }
        }

        $quatro1 =  $this->data['quatro'][1][1];
        if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
            $quatro1 =  $this->data['quatro'][2][1];
            if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                $quatro1 =  $this->data['quatro'][3][1];
                if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                    $quatro1 =  $this->data['quatro'][4][1];
                }
            }
        }
        $cinco1 =  $this->data['cinco'][1][1];
        if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
            $cinco1 =  $this->data['cinco'][2][1];
            if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                $cinco1 =  $this->data['cinco'][3][1];
                if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                    $cinco1 =  $this->data['cinco'][4][1];
                    if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                        $cinco1 =  $this->data['cinco'][5][1];
                    }
                }
            }
        }
        $seis1 = $this->data['seis'][1][1];
        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
            $seis1 = $this->data['seis'][2][1];
            if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                $seis1 = $this->data['seis'][3][1];
                if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                    $seis1 = $this->data['seis'][4][1];
                    if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                        $seis1 = $this->data['seis'][5][1];
                        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                            $seis1 = $this->data['seis'][6][1];
                        }
                    }
                }
            }
        }
        $sete1 = $this->data['sete'][1][1];
        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
            $sete1 = $this->data['sete'][2][1];
            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                $sete1 = $this->data['sete'][3][1];
                if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                    $sete1 = $this->data['sete'][4][1];
                    if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                        $sete1 = $this->data['sete'][5][1];
                        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                            $sete1 = $this->data['sete'][6][1];
                            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                                $sete1 = $this->data['sete'][7][1];
                            }
                        }
                    }
                }
            }
        }

        $oite1 = $this->data['oite'][1][1];
        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
            $oite1 = $this->data['oite'][2][1];
            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                $oite1 = $this->data['oite'][3][1];
                if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                    $oite1 = $this->data['oite'][4][1];
                    if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                        $oite1 = $this->data['oite'][5][1];
                        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                            $oite1 = $this->data['oite'][6][1];
                            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                                $oite1 = $this->data['oite'][7][1];
                                if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                                    $oite1 = $this->data['oite'][8][1];
                                }
                            }
                        }
                    }
                }
            }
        }

        $nove1 = $this->data['nove'][1][1];
        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
            $nove1 = $this->data['nove'][2][1];
            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                $nove1 = $this->data['nove'][3][1];
                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                    $nove1 = $this->data['nove'][4][1];
                    if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                        $nove1 = $this->data['nove'][5][1];
                        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                            $nove1  = $this->data['nove'][6][1];
                            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                $nove1 = $this->data['nove'][7][1];
                                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                    $nove1 = $this->data['nove'][8][1];
                                    if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                        $nove1 = $this->data['nove'][9][1];
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        $dez1  = $this->data['dez'][1][1];
        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
            $dez1  = $this->data['dez'][2][1];
            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                $dez1  = $this->data['dez'][3][1];
                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                    $dez1  = $this->data['dez'][4][1];
                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                        $dez1  = $this->data['dez'][5][1];
                        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                            $dez1  = $this->data['dez'][6][1];
                            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                $dez1  = $this->data['dez'][7][1];
                                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                    $dez1  = $this->data['dez'][8][1];
                                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                        $dez1  = $this->data['dez'][9][1];
                                        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                            $dez1  = $this->data['dez'][10][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $onze1 = $this->data['onze'][1][1];
        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
            $onze1 = $this->data['onze'][2][1];
            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                $onze1 = $this->data['onze'][3][1];
                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                    $onze1 = $this->data['onze'][4][1];
                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                        $onze1 = $this->data['onze'][5][1];
                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                            $onze1 = $this->data['onze'][6][1];
                            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                $onze1 = $this->data['onze'][7][1];
                                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                    $onze1 = $this->data['onze'][8][1];
                                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                        $onze1 = $this->data['onze'][9][1];
                                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                            $onze1 = $this->data['onze'][10][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $doze1 = $this->data['doze'][1][1];
        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
            $doze1 = $this->data['doze'][2][1];
            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                $doze1 = $this->data['doze'][3][1];
                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                    $doze1 = $this->data['doze'][4][1];
                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                        $doze1 = $this->data['doze'][5][1];
                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                            $doze1 = $this->data['doze'][6][1];
                            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                $doze1 = $this->data['doze'][7][1];
                                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                    $doze1 = $this->data['doze'][8][1];
                                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                        $doze1 = $this->data['doze'][9][1];
                                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                            $doze1 = $this->data['doze'][10][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $trez1 = $this->data['trez'][1][1];
        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
            $trez1 = $this->data['trez'][2][1];
            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                $trez1 = $this->data['trez'][3][1];
                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                    $trez1 = $this->data['trez'][4][1];
                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                        $trez1 = $this->data['trez'][5][1];
                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                            $trez1 = $this->data['trez'][6][1];
                            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                $trez1 = $this->data['trez'][7][1];
                                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                    $trez1 = $this->data['trez'][8][1];
                                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                        $trez1 = $this->data['trez'][9][1];
                                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                            $trez1 = $this->data['trez'][10][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quatz1 = $this->data['quatz'][1][1];
        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
            $quatz1 = $this->data['quatz'][2][1];
            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                $quatz1 = $this->data['quatz'][3][1];
                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                    $quatz1 = $this->data['quatz'][4][1];
                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                        $quatz1 = $this->data['quatz'][5][1];
                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                            $quatz1 = $this->data['quatz'][6][1];
                            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                $quatz1 = $this->data['quatz'][7][1];
                                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                    $quatz1 = $this->data['quatz'][8][1];
                                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                        $quatz1 = $this->data['quatz'][9][1];
                                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                            $quatz1 = $this->data['quatz'][10][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quinz1 = $this->data['quinz'][1][1];
        if ($quinz1 == $quatz1 or  $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
            $quinz1 = $this->data['quinz'][2][1];
            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                $quinz1 = $this->data['quinz'][3][1];
                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                    $quinz1 = $this->data['quinz'][4][1];
                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                        $quinz1 = $this->data['quinz'][5][1];
                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                            $quinz1 = $this->data['quinz'][6][1];
                            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                $quinz1 = $this->data['quinz'][7][1];
                                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                    $quinz1 = $this->data['quinz'][8][1];
                                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                        $quinz1 = $this->data['quinz'][9][1];
                                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                            $quinz1 = $this->data['quinz'][10][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $calculo2 = [$um1, $dois1, $tres1, $quatro1, $cinco1, $seis1, $sete1, $oite1, $nove1, $dez1, $onze1, $doze1, $trez1, $quatz1, $quinz1];
        sort($calculo2);

        //TERCEIRA SEQUENCIA Q MAIS SAIU
        $um1 = $this->data['um'][2][1];
        $dois1 = $this->data['dois'][2][1];
        if ($dois1 == $um1) {
            $dois1 = $this->data['dois'][3][1];
        }

        $tres1 =  $this->data['tres'][2][1];
        if ($tres1 == $dois1 or $tres1 == $um1) {
            $tres1 = $this->data['tres'][3][1];
            if ($tres1 == $dois1 or $tres1 == $um1) {
                $tres1 = $this->data['tres'][4][1];
            }
        }

        $quatro1 =  $this->data['quatro'][2][1];
        if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
            $quatro1 =  $this->data['quatro'][3][1];
            if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                $quatro1 =  $this->data['quatro'][4][1];
                if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                    $quatro1 =  $this->data['quatro'][5][1];
                }
            }
        }
        $cinco1 =  $this->data['cinco'][2][1];
        if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
            $cinco1 =  $this->data['cinco'][3][1];
            if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                $cinco1 =  $this->data['cinco'][4][1];
                if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                    $cinco1 =  $this->data['cinco'][5][1];
                    if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                        $cinco1 =  $this->data['cinco'][6][1];
                    }
                }
            }
        }
        $seis1 = $this->data['seis'][2][1];
        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
            $seis1 = $this->data['seis'][3][1];
            if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                $seis1 = $this->data['seis'][4][1];
                if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                    $seis1 = $this->data['seis'][5][1];
                    if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                        $seis1 = $this->data['seis'][6][1];
                        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                            $seis1 = $this->data['seis'][7][1];
                        }
                    }
                }
            }
        }
        $sete1 = $this->data['sete'][2][1];
        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
            $sete1 = $this->data['sete'][3][1];
            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                $sete1 = $this->data['sete'][4][1];
                if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                    $sete1 = $this->data['sete'][5][1];
                    if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                        $sete1 = $this->data['sete'][6][1];
                        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                            $sete1 = $this->data['sete'][7][1];
                            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                                $sete1 = $this->data['sete'][8][1];
                            }
                        }
                    }
                }
            }
        }

        $oite1 = $this->data['oite'][2][1];
        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
            $oite1 = $this->data['oite'][3][1];
            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                $oite1 = $this->data['oite'][4][1];
                if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                    $oite1 = $this->data['oite'][5][1];
                    if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                        $oite1 = $this->data['oite'][6][1];
                        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                            $oite1 = $this->data['oite'][7][1];
                            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                                $oite1 = $this->data['oite'][8][1];
                                if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                                    $oite1 = $this->data['oite'][9][1];
                                }
                            }
                        }
                    }
                }
            }
        }

        $nove1 = $this->data['nove'][2][1];
        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
            $nove1 = $this->data['nove'][3][1];
            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                $nove1 = $this->data['nove'][4][1];
                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                    $nove1 = $this->data['nove'][5][1];
                    if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                        $nove1 = $this->data['nove'][6][1];
                        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                            $nove1  = $this->data['nove'][7][1];
                            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                $nove1 = $this->data['nove'][8][1];
                                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                    $nove1 = $this->data['nove'][9][1];
                                    if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                        $nove1 = $this->data['nove'][10][1];
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        $dez1  = $this->data['dez'][2][1];
        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
            $dez1  = $this->data['dez'][3][1];
            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                $dez1  = $this->data['dez'][4][1];
                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                    $dez1  = $this->data['dez'][5][1];
                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                        $dez1  = $this->data['dez'][6][1];
                        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                            $dez1  = $this->data['dez'][7][1];
                            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                $dez1  = $this->data['dez'][8][1];
                                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                    $dez1  = $this->data['dez'][9][1];
                                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                        $dez1  = $this->data['dez'][10][1];
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $onze1 = $this->data['onze'][2][1];
        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
            $onze1 = $this->data['onze'][3][1];
            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                $onze1 = $this->data['onze'][4][1];
                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                    $onze1 = $this->data['onze'][5][1];
                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                        $onze1 = $this->data['onze'][6][1];
                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                            $onze1 = $this->data['onze'][7][1];
                            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                $onze1 = $this->data['onze'][8][1];
                                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                    $onze1 = $this->data['onze'][9][1];
                                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                        $onze1 = $this->data['onze'][10][1];
                                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                            $onze1 = $this->data['onze'][1][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $doze1 = $this->data['doze'][2][1];
        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
            $doze1 = $this->data['doze'][3][1];
            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                $doze1 = $this->data['doze'][4][1];
                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                    $doze1 = $this->data['doze'][5][1];
                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                        $doze1 = $this->data['doze'][6][1];
                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                            $doze1 = $this->data['doze'][7][1];
                            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                $doze1 = $this->data['doze'][8][1];
                                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                    $doze1 = $this->data['doze'][9][1];
                                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                        $doze1 = $this->data['doze'][10][1];
                                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                            $doze1 = $this->data['doze'][1][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $trez1 = $this->data['trez'][2][1];
        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
            $trez1 = $this->data['trez'][3][1];
            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                $trez1 = $this->data['trez'][4][1];
                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                    $trez1 = $this->data['trez'][5][1];
                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                        $trez1 = $this->data['trez'][6][1];
                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                            $trez1 = $this->data['trez'][7][1];
                            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                $trez1 = $this->data['trez'][8][1];
                                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                    $trez1 = $this->data['trez'][9][1];
                                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                        $trez1 = $this->data['trez'][10][1];
                                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                            $trez1 = $this->data['trez'][1][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quatz1 = $this->data['quatz'][2][1];
        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
            $quatz1 = $this->data['quatz'][3][1];
            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                $quatz1 = $this->data['quatz'][4][1];
                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                    $quatz1 = $this->data['quatz'][5][1];
                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                        $quatz1 = $this->data['quatz'][6][1];
                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                            $quatz1 = $this->data['quatz'][7][1];
                            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                $quatz1 = $this->data['quatz'][8][1];
                                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                    $quatz1 = $this->data['quatz'][9][1];
                                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                        $quatz1 = $this->data['quatz'][10][1];
                                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                            $quatz1 = $this->data['quatz'][1][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quinz1 = $this->data['quinz'][2][1];
        if ($quinz1 == $quatz1 or  $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
            $quinz1 = $this->data['quinz'][3][1];
            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                $quinz1 = $this->data['quinz'][4][1];
                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                    $quinz1 = $this->data['quinz'][5][1];
                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                        $quinz1 = $this->data['quinz'][6][1];
                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                            $quinz1 = $this->data['quinz'][7][1];
                            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                $quinz1 = $this->data['quinz'][8][1];
                                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                    $quinz1 = $this->data['quinz'][9][1];
                                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                        $quinz1 = $this->data['quinz'][10][1];
                                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                            $quinz1 = $this->data['quatz'][1][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $calculo3 = [$um1, $dois1, $tres1, $quatro1, $cinco1, $seis1, $sete1, $oite1, $nove1, $dez1, $onze1, $doze1, $trez1, $quatz1, $quinz1];
        sort($calculo3);

        //QUARTA SEQUENCIA Q MAIS SAIU
        $um1 = $this->data['um'][3][1];
        $dois1 = $this->data['dois'][3][1];
        if ($dois1 == $um1) {
            $dois1 = $this->data['dois'][4][1];
        }

        $tres1 =  $this->data['tres'][3][1];
        if ($tres1 == $dois1 or $tres1 == $um1) {
            $tres1 = $this->data['tres'][4][1];
            if ($tres1 == $dois1 or $tres1 == $um1) {
                $tres1 = $this->data['tres'][5][1];
            }
        }

        $quatro1 =  $this->data['quatro'][3][1];
        if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
            $quatro1 =  $this->data['quatro'][4][1];
            if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                $quatro1 =  $this->data['quatro'][5][1];
                if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                    $quatro1 =  $this->data['quatro'][6][1];
                }
            }
        }
        $cinco1 =  $this->data['cinco'][3][1];
        if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
            $cinco1 =  $this->data['cinco'][4][1];
            if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                $cinco1 =  $this->data['cinco'][5][1];
                if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                    $cinco1 =  $this->data['cinco'][6][1];
                    if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                        $cinco1 =  $this->data['cinco'][7][1];
                    }
                }
            }
        }
        $seis1 = $this->data['seis'][3][1];
        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
            $seis1 = $this->data['seis'][4][1];
            if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                $seis1 = $this->data['seis'][5][1];
                if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                    $seis1 = $this->data['seis'][6][1];
                    if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                        $seis1 = $this->data['seis'][7][1];
                        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                            $seis1 = $this->data['seis'][8][1];
                        }
                    }
                }
            }
        }
        $sete1 = $this->data['sete'][3][1];
        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
            $sete1 = $this->data['sete'][4][1];
            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                $sete1 = $this->data['sete'][5][1];
                if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                    $sete1 = $this->data['sete'][6][1];
                    if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                        $sete1 = $this->data['sete'][7][1];
                        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                            $sete1 = $this->data['sete'][8][1];
                            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                                $sete1 = $this->data['sete'][9][1];
                            }
                        }
                    }
                }
            }
        }

        $oite1 = $this->data['oite'][3][1];
        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
            $oite1 = $this->data['oite'][4][1];
            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                $oite1 = $this->data['oite'][5][1];
                if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                    $oite1 = $this->data['oite'][6][1];
                    if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                        $oite1 = $this->data['oite'][7][1];
                        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                            $oite1 = $this->data['oite'][8][1];
                            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                                $oite1 = $this->data['oite'][9][1];
                                if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                                    $oite1 = $this->data['oite'][10][1];
                                }
                            }
                        }
                    }
                }
            }
        }

        $nove1 = $this->data['nove'][3][1];
        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
            $nove1 = $this->data['nove'][4][1];
            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                $nove1 = $this->data['nove'][5][1];
                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                    $nove1 = $this->data['nove'][6][1];
                    if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                        $nove1 = $this->data['nove'][7][1];
                        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                            $nove1  = $this->data['nove'][8][1];
                            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                $nove1 = $this->data['nove'][9][1];
                                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                    $nove1 = $this->data['nove'][10][1];
                                }
                            }
                        }
                    }
                }
            }
        }

        $dez1  = $this->data['dez'][3][1];
        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
            $dez1  = $this->data['dez'][4][1];
            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                $dez1  = $this->data['dez'][5][1];
                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                    $dez1  = $this->data['dez'][6][1];
                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                        $dez1  = $this->data['dez'][7][1];
                        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                            $dez1  = $this->data['dez'][8][1];
                            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                $dez1  = $this->data['dez'][9][1];
                                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                    $dez1  = $this->data['dez'][10][1];
                                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                        $dez1  = $this->data['dez'][1][1];
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $onze1 = $this->data['onze'][3][1];
        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
            $onze1 = $this->data['onze'][4][1];
            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                $onze1 = $this->data['onze'][5][1];
                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                    $onze1 = $this->data['onze'][6][1];
                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                        $onze1 = $this->data['onze'][7][1];
                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                            $onze1 = $this->data['onze'][8][1];
                            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                $onze1 = $this->data['onze'][9][1];
                                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                    $onze1 = $this->data['onze'][10][1];
                                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                        $onze1 = $this->data['onze'][1][1];
                                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                            $onze1 = $this->data['onze'][2][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $doze1 = $this->data['doze'][3][1];
        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
            $doze1 = $this->data['doze'][4][1];
            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                $doze1 = $this->data['doze'][5][1];
                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                    $doze1 = $this->data['doze'][6][1];
                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                        $doze1 = $this->data['doze'][7][1];
                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                            $doze1 = $this->data['doze'][8][1];
                            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                $doze1 = $this->data['doze'][9][1];
                                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                    $doze1 = $this->data['doze'][10][1];
                                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                        $doze1 = $this->data['doze'][1][1];
                                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                            $doze1 = $this->data['doze'][2][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $trez1 = $this->data['trez'][3][1];
        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
            $trez1 = $this->data['trez'][4][1];
            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                $trez1 = $this->data['trez'][5][1];
                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                    $trez1 = $this->data['trez'][6][1];
                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                        $trez1 = $this->data['trez'][7][1];
                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                            $trez1 = $this->data['trez'][8][1];
                            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                $trez1 = $this->data['trez'][9][1];
                                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                    $trez1 = $this->data['trez'][10][1];
                                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                        $trez1 = $this->data['trez'][1][1];
                                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                            $trez1 = $this->data['trez'][2][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quatz1 = $this->data['quatz'][3][1];
        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
            $quatz1 = $this->data['quatz'][4][1];
            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                $quatz1 = $this->data['quatz'][5][1];
                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                    $quatz1 = $this->data['quatz'][6][1];
                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                        $quatz1 = $this->data['quatz'][7][1];
                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                            $quatz1 = $this->data['quatz'][8][1];
                            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                $quatz1 = $this->data['quatz'][9][1];
                                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                    $quatz1 = $this->data['quatz'][10][1];
                                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                        $quatz1 = $this->data['quatz'][1][1];
                                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                            $quatz1 = $this->data['quatz'][2][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quinz1 = $this->data['quinz'][3][1];
        if ($quinz1 == $quatz1 or  $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
            $quinz1 = $this->data['quinz'][4][1];
            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                $quinz1 = $this->data['quinz'][5][1];
                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                    $quinz1 = $this->data['quinz'][6][1];
                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                        $quinz1 = $this->data['quinz'][7][1];
                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                            $quinz1 = $this->data['quinz'][8][1];
                            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                $quinz1 = $this->data['quinz'][9][1];
                                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                    $quinz1 = $this->data['quinz'][10][1];
                                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                        $quinz1 = $this->data['quinz'][1][1];
                                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                            $quinz1 = $this->data['quatz'][2][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $calculo4 = [$um1, $dois1, $tres1, $quatro1, $cinco1, $seis1, $sete1, $oite1, $nove1, $dez1, $onze1, $doze1, $trez1, $quatz1, $quinz1];
        sort($calculo4);

        //QUINTA SEQUENCIA Q MAIS SAIU
        $um1 = $this->data['um'][4][1];
        $dois1 = $this->data['dois'][4][1];
        if ($dois1 == $um1) {
            $dois1 = $this->data['dois'][5][1];
        }

        $tres1 =  $this->data['tres'][4][1];
        if ($tres1 == $dois1 or $tres1 == $um1) {
            $tres1 = $this->data['tres'][5][1];
            if ($tres1 == $dois1 or $tres1 == $um1) {
                $tres1 = $this->data['tres'][6][1];
            }
        }

        $quatro1 =  $this->data['quatro'][4][1];
        if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
            $quatro1 =  $this->data['quatro'][5][1];
            if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                $quatro1 =  $this->data['quatro'][6][1];
                if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                    $quatro1 =  $this->data['quatro'][7][1];
                }
            }
        }
        $cinco1 =  $this->data['cinco'][4][1];
        if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
            $cinco1 =  $this->data['cinco'][5][1];
            if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                $cinco1 =  $this->data['cinco'][6][1];
                if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                    $cinco1 =  $this->data['cinco'][7][1];
                    if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                        $cinco1 =  $this->data['cinco'][8][1];
                    }
                }
            }
        }
        $seis1 = $this->data['seis'][4][1];
        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
            $seis1 = $this->data['seis'][5][1];
            if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                $seis1 = $this->data['seis'][6][1];
                if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                    $seis1 = $this->data['seis'][7][1];
                    if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                        $seis1 = $this->data['seis'][8][1];
                        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                            $seis1 = $this->data['seis'][9][1];
                        }
                    }
                }
            }
        }
        $sete1 = $this->data['sete'][4][1];
        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
            $sete1 = $this->data['sete'][5][1];
            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                $sete1 = $this->data['sete'][6][1];
                if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                    $sete1 = $this->data['sete'][7][1];
                    if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                        $sete1 = $this->data['sete'][8][1];
                        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                            $sete1 = $this->data['sete'][9][1];
                            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                                $sete1 = $this->data['sete'][10][1];
                            }
                        }
                    }
                }
            }
        }

        $oite1 = $this->data['oite'][4][1];
        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
            $oite1 = $this->data['oite'][5][1];
            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                $oite1 = $this->data['oite'][6][1];
                if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                    $oite1 = $this->data['oite'][7][1];
                    if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                        $oite1 = $this->data['oite'][8][1];
                        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                            $oite1 = $this->data['oite'][9][1];
                            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                                $oite1 = $this->data['oite'][10][1];
                            }
                        }
                    }
                }
            }
        }

        $nove1 = $this->data['nove'][4][1];
        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
            $nove1 = $this->data['nove'][5][1];
            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                $nove1 = $this->data['nove'][6][1];
                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                    $nove1 = $this->data['nove'][7][1];
                    if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                        $nove1 = $this->data['nove'][8][1];
                        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                            $nove1  = $this->data['nove'][9][1];
                            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                $nove1 = $this->data['nove'][10][1];
                                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                    $nove1 = $this->data['nove'][1][1];
                                }
                            }
                        }
                    }
                }
            }
        }

        $dez1  = $this->data['dez'][4][1];
        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
            $dez1  = $this->data['dez'][5][1];
            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                $dez1  = $this->data['dez'][6][1];
                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                    $dez1  = $this->data['dez'][7][1];
                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                        $dez1  = $this->data['dez'][8][1];
                        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                            $dez1  = $this->data['dez'][9][1];
                            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                $dez1  = $this->data['dez'][10][1];
                                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                    $dez1  = $this->data['dez'][1][1];
                                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                        $dez1  = $this->data['dez'][2][1];
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $onze1 = $this->data['onze'][4][1];
        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
            $onze1 = $this->data['onze'][5][1];
            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                $onze1 = $this->data['onze'][6][1];
                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                    $onze1 = $this->data['onze'][7][1];
                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                        $onze1 = $this->data['onze'][8][1];
                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                            $onze1 = $this->data['onze'][9][1];
                            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                $onze1 = $this->data['onze'][10][1];
                                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                    $onze1 = $this->data['onze'][1][1];
                                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                        $onze1 = $this->data['onze'][2][1];
                                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                            $onze1 = $this->data['onze'][3][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $doze1 = $this->data['doze'][4][1];
        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
            $doze1 = $this->data['doze'][5][1];
            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                $doze1 = $this->data['doze'][6][1];
                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                    $doze1 = $this->data['doze'][7][1];
                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                        $doze1 = $this->data['doze'][8][1];
                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                            $doze1 = $this->data['doze'][9][1];
                            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                $doze1 = $this->data['doze'][10][1];
                                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                    $doze1 = $this->data['doze'][1][1];
                                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                        $doze1 = $this->data['doze'][2][1];
                                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                            $doze1 = $this->data['doze'][3][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $trez1 = $this->data['trez'][4][1];
        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
            $trez1 = $this->data['trez'][5][1];
            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                $trez1 = $this->data['trez'][6][1];
                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                    $trez1 = $this->data['trez'][7][1];
                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                        $trez1 = $this->data['trez'][8][1];
                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                            $trez1 = $this->data['trez'][9][1];
                            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                $trez1 = $this->data['trez'][10][1];
                                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                    $trez1 = $this->data['trez'][1][1];
                                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                        $trez1 = $this->data['trez'][2][1];
                                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                            $trez1 = $this->data['trez'][3][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quatz1 = $this->data['quatz'][4][1];
        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
            $quatz1 = $this->data['quatz'][5][1];
            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                $quatz1 = $this->data['quatz'][6][1];
                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                    $quatz1 = $this->data['quatz'][7][1];
                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                        $quatz1 = $this->data['quatz'][8][1];
                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                            $quatz1 = $this->data['quatz'][9][1];
                            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                $quatz1 = $this->data['quatz'][10][1];
                                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                    $quatz1 = $this->data['quatz'][1][1];
                                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                        $quatz1 = $this->data['quatz'][2][1];
                                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                            $quatz1 = $this->data['quatz'][3][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quinz1 = $this->data['quinz'][4][1];
        if ($quinz1 == $quatz1 or  $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
            $quinz1 = $this->data['quinz'][5][1];
            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                $quinz1 = $this->data['quinz'][6][1];
                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                    $quinz1 = $this->data['quinz'][7][1];
                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                        $quinz1 = $this->data['quinz'][8][1];
                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                            $quinz1 = $this->data['quinz'][9][1];
                            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                $quinz1 = $this->data['quinz'][10][1];
                                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                    $quinz1 = $this->data['quinz'][1][1];
                                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                        $quinz1 = $this->data['quinz'][2][1];
                                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                            $quinz1 = $this->data['quatz'][3][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $calculo5 = [$um1, $dois1, $tres1, $quatro1, $cinco1, $seis1, $sete1, $oite1, $nove1, $dez1, $onze1, $doze1, $trez1, $quatz1, $quinz1];
        sort($calculo5);

        //SEXTA SEQUENCIA Q MAIS SAIU
        $um1 = $this->data['um'][5][1];
        $dois1 = $this->data['dois'][5][1];
        if ($dois1 == $um1) {
            $dois1 = $this->data['dois'][5][1];
        }

        $tres1 =  $this->data['tres'][5][1];
        if ($tres1 == $dois1 or $tres1 == $um1) {
            $tres1 = $this->data['tres'][6][1];
            if ($tres1 == $dois1 or $tres1 == $um1) {
                $tres1 = $this->data['tres'][7][1];
            }
        }

        $quatro1 =  $this->data['quatro'][5][1];
        if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
            $quatro1 =  $this->data['quatro'][6][1];
            if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                $quatro1 =  $this->data['quatro'][7][1];
                if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                    $quatro1 =  $this->data['quatro'][8][1];
                }
            }
        }
        $cinco1 =  $this->data['cinco'][5][1];
        if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
            $cinco1 =  $this->data['cinco'][6][1];
            if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                $cinco1 =  $this->data['cinco'][7][1];
                if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                    $cinco1 =  $this->data['cinco'][8][1];
                    if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                        $cinco1 =  $this->data['cinco'][9][1];
                    }
                }
            }
        }
        $seis1 = $this->data['seis'][5][1];
        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
            $seis1 = $this->data['seis'][6][1];
            if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                $seis1 = $this->data['seis'][7][1];
                if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                    $seis1 = $this->data['seis'][8][1];
                    if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                        $seis1 = $this->data['seis'][9][1];
                        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                            $seis1 = $this->data['seis'][10][1];
                        }
                    }
                }
            }
        }
        $sete1 = $this->data['sete'][5][1];
        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
            $sete1 = $this->data['sete'][6][1];
            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                $sete1 = $this->data['sete'][7][1];
                if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                    $sete1 = $this->data['sete'][8][1];
                    if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                        $sete1 = $this->data['sete'][9][1];
                        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                            $sete1 = $this->data['sete'][10][1];
                        }
                    }
                }
            }
        }

        $oite1 = $this->data['oite'][5][1];
        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
            $oite1 = $this->data['oite'][6][1];
            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                $oite1 = $this->data['oite'][7][1];
                if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                    $oite1 = $this->data['oite'][8][1];
                    if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                        $oite1 = $this->data['oite'][9][1];
                        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                            $oite1 = $this->data['oite'][10][1];
                            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                                $oite1 = $this->data['oite'][1][1];
                            }
                        }
                    }
                }
            }
        }

        $nove1 = $this->data['nove'][5][1];
        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
            $nove1 = $this->data['nove'][6][1];
            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                $nove1 = $this->data['nove'][7][1];
                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                    $nove1 = $this->data['nove'][8][1];
                    if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                        $nove1 = $this->data['nove'][9][1];
                        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                            $nove1  = $this->data['nove'][10][1];
                            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                $nove1 = $this->data['nove'][1][1];
                                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                    $nove1 = $this->data['nove'][2][1];
                                }
                            }
                        }
                    }
                }
            }
        }

        $dez1  = $this->data['dez'][5][1];
        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
            $dez1  = $this->data['dez'][6][1];
            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                $dez1  = $this->data['dez'][7][1];
                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                    $dez1  = $this->data['dez'][8][1];
                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                        $dez1  = $this->data['dez'][9][1];
                        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                            $dez1  = $this->data['dez'][10][1];
                            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                $dez1  = $this->data['dez'][1][1];
                                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                    $dez1  = $this->data['dez'][2][1];
                                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                        $dez1  = $this->data['dez'][3][1];
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $onze1 = $this->data['onze'][5][1];
        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
            $onze1 = $this->data['onze'][6][1];
            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                $onze1 = $this->data['onze'][7][1];
                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                    $onze1 = $this->data['onze'][8][1];
                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                        $onze1 = $this->data['onze'][9][1];
                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                            $onze1 = $this->data['onze'][10][1];
                            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                $onze1 = $this->data['onze'][1][1];
                                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                    $onze1 = $this->data['onze'][2][1];
                                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                        $onze1 = $this->data['onze'][3][1];
                                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                            $onze1 = $this->data['onze'][4][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $doze1 = $this->data['doze'][5][1];
        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
            $doze1 = $this->data['doze'][6][1];
            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                $doze1 = $this->data['doze'][7][1];
                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                    $doze1 = $this->data['doze'][8][1];
                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                        $doze1 = $this->data['doze'][9][1];
                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                            $doze1 = $this->data['doze'][10][1];
                            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                $doze1 = $this->data['doze'][1][1];
                                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                    $doze1 = $this->data['doze'][2][1];
                                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                        $doze1 = $this->data['doze'][3][1];
                                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                            $doze1 = $this->data['doze'][4][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $trez1 = $this->data['trez'][5][1];
        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
            $trez1 = $this->data['trez'][6][1];
            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                $trez1 = $this->data['trez'][7][1];
                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                    $trez1 = $this->data['trez'][8][1];
                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                        $trez1 = $this->data['trez'][9][1];
                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                            $trez1 = $this->data['trez'][10][1];
                            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                $trez1 = $this->data['trez'][1][1];
                                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                    $trez1 = $this->data['trez'][2][1];
                                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                        $trez1 = $this->data['trez'][3][1];
                                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                            $trez1 = $this->data['trez'][4][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quatz1 = $this->data['quatz'][5][1];
        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
            $quatz1 = $this->data['quatz'][6][1];
            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                $quatz1 = $this->data['quatz'][7][1];
                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                    $quatz1 = $this->data['quatz'][8][1];
                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                        $quatz1 = $this->data['quatz'][9][1];
                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                            $quatz1 = $this->data['quatz'][10][1];
                            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                $quatz1 = $this->data['quatz'][1][1];
                                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                    $quatz1 = $this->data['quatz'][2][1];
                                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                        $quatz1 = $this->data['quatz'][3][1];
                                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                            $quatz1 = $this->data['quatz'][4][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quinz1 = $this->data['quinz'][5][1];
        if ($quinz1 == $quatz1 or  $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
            $quinz1 = $this->data['quinz'][6][1];
            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                $quinz1 = $this->data['quinz'][7][1];
                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                    $quinz1 = $this->data['quinz'][8][1];
                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                        $quinz1 = $this->data['quinz'][9][1];
                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                            $quinz1 = $this->data['quinz'][10][1];
                            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                $quinz1 = $this->data['quinz'][1][1];
                                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                    $quinz1 = $this->data['quinz'][2][1];
                                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                        $quinz1 = $this->data['quinz'][3][1];
                                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                            $quinz1 = $this->data['quatz'][4][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $calculo6 = [$um1, $dois1, $tres1, $quatro1, $cinco1, $seis1, $sete1, $oite1, $nove1, $dez1, $onze1, $doze1, $trez1, $quatz1, $quinz1];
        sort($calculo6);

        //SETIMA SEQUENCIA Q MAIS SAIU
        $um1 = $this->data['um'][6][1];
        $dois1 = $this->data['dois'][6][1];
        if ($dois1 == $um1) {
            $dois1 = $this->data['dois'][7][1];
        }

        $tres1 =  $this->data['tres'][6][1];
        if ($tres1 == $dois1 or $tres1 == $um1) {
            $tres1 = $this->data['tres'][7][1];
            if ($tres1 == $dois1 or $tres1 == $um1) {
                $tres1 = $this->data['tres'][8][1];
            }
        }

        $quatro1 =  $this->data['quatro'][6][1];
        if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
            $quatro1 =  $this->data['quatro'][7][1];
            if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                $quatro1 =  $this->data['quatro'][8][1];
                if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                    $quatro1 =  $this->data['quatro'][9][1];
                }
            }
        }
        $cinco1 =  $this->data['cinco'][6][1];
        if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
            $cinco1 =  $this->data['cinco'][7][1];
            if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                $cinco1 =  $this->data['cinco'][8][1];
                if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                    $cinco1 =  $this->data['cinco'][9][1];
                    if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                        $cinco1 =  $this->data['cinco'][10][1];
                    }
                }
            }
        }
        $seis1 = $this->data['seis'][6][1];
        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
            $seis1 = $this->data['seis'][7][1];
            if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                $seis1 = $this->data['seis'][8][1];
                if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                    $seis1 = $this->data['seis'][9][1];
                    if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                        $seis1 = $this->data['seis'][10][1];
                    }
                }
            }
        }
        $sete1 = $this->data['sete'][6][1];
        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
            $sete1 = $this->data['sete'][7][1];
            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                $sete1 = $this->data['sete'][8][1];
                if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                    $sete1 = $this->data['sete'][9][1];
                    if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                        $sete1 = $this->data['sete'][10][1];
                        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                            $sete1 = $this->data['sete'][1][1];
                        }
                    }
                }
            }
        }

        $oite1 = $this->data['oite'][6][1];
        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
            $oite1 = $this->data['oite'][7][1];
            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                $oite1 = $this->data['oite'][8][1];
                if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                    $oite1 = $this->data['oite'][9][1];
                    if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                        $oite1 = $this->data['oite'][10][1];
                        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                            $oite1 = $this->data['oite'][1][1];
                            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                                $oite1 = $this->data['oite'][2][1];
                            }
                        }
                    }
                }
            }
        }

        $nove1 = $this->data['nove'][6][1];
        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
            $nove1 = $this->data['nove'][7][1];
            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                $nove1 = $this->data['nove'][8][1];
                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                    $nove1 = $this->data['nove'][9][1];
                    if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                        $nove1 = $this->data['nove'][10][1];
                        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                            $nove1 = $this->data['nove'][1][1];
                            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                $nove1 = $this->data['nove'][2][1];
                                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                    $nove1 = $this->data['nove'][3][1];
                                }
                            }
                        }
                    }
                }
            }
        }

        $dez1  = $this->data['dez'][6][1];
        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
            $dez1  = $this->data['dez'][7][1];
            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                $dez1  = $this->data['dez'][8][1];
                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                    $dez1  = $this->data['dez'][9][1];
                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                        $dez1  = $this->data['dez'][10][1];
                        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                            $dez1  = $this->data['dez'][1][1];
                            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                $dez1  = $this->data['dez'][2][1];
                                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                    $dez1  = $this->data['dez'][3][1];
                                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                        $dez1  = $this->data['dez'][4][1];
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $onze1 = $this->data['onze'][6][1];
        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
            $onze1 = $this->data['onze'][7][1];
            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                $onze1 = $this->data['onze'][8][1];
                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                    $onze1 = $this->data['onze'][9][1];
                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                        $onze1 = $this->data['onze'][10][1];
                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                            $onze1 = $this->data['onze'][1][1];
                            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                $onze1 = $this->data['onze'][2][1];
                                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                    $onze1 = $this->data['onze'][3][1];
                                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                        $onze1 = $this->data['onze'][4][1];
                                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                            $onze1 = $this->data['onze'][5][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $doze1 = $this->data['doze'][6][1];
        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
            $doze1 = $this->data['doze'][7][1];
            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                $doze1 = $this->data['doze'][8][1];
                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                    $doze1 = $this->data['doze'][9][1];
                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                        $doze1 = $this->data['doze'][10][1];
                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                            $doze1 = $this->data['doze'][1][1];
                            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                $doze1 = $this->data['doze'][2][1];
                                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                    $doze1 = $this->data['doze'][3][1];
                                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                        $doze1 = $this->data['doze'][4][1];
                                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                            $doze1 = $this->data['doze'][5][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $trez1 = $this->data['trez'][6][1];
        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
            $trez1 = $this->data['trez'][7][1];
            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                $trez1 = $this->data['trez'][8][1];
                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                    $trez1 = $this->data['trez'][9][1];
                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                        $trez1 = $this->data['trez'][10][1];
                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                            $trez1 = $this->data['trez'][1][1];
                            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                $trez1 = $this->data['trez'][2][1];
                                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                    $trez1 = $this->data['trez'][3][1];
                                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                        $trez1 = $this->data['trez'][4][1];
                                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                            $trez1 = $this->data['trez'][5][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quatz1 = $this->data['quatz'][6][1];
        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
            $quatz1 = $this->data['quatz'][7][1];
            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                $quatz1 = $this->data['quatz'][8][1];
                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                    $quatz1 = $this->data['quatz'][9][1];
                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                        $quatz1 = $this->data['quatz'][10][1];
                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                            $quatz1 = $this->data['quatz'][1][1];
                            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                $quatz1 = $this->data['quatz'][2][1];
                                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                    $quatz1 = $this->data['quatz'][3][1];
                                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                        $quatz1 = $this->data['quatz'][4][1];
                                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                            $quatz1 = $this->data['quatz'][5][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quinz1 = $this->data['quinz'][6][1];
        if ($quinz1 == $quatz1 or  $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
            $quinz1 = $this->data['quinz'][7][1];
            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                $quinz1 = $this->data['quinz'][8][1];
                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                    $quinz1 = $this->data['quinz'][9][1];
                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                        $quinz1 = $this->data['quinz'][10][1];
                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                            $quinz1 = $this->data['quinz'][1][1];
                            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                $quinz1 = $this->data['quinz'][2][1];
                                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                    $quinz1 = $this->data['quinz'][3][1];
                                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                        $quinz1 = $this->data['quinz'][4][1];
                                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                            $quinz1 = $this->data['quatz'][5][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $calculo7 = [$um1, $dois1, $tres1, $quatro1, $cinco1, $seis1, $sete1, $oite1, $nove1, $dez1, $onze1, $doze1, $trez1, $quatz1, $quinz1];
        sort($calculo7);

        //OITAVA SEQUENCIA Q MAIS SAIU
        $um1 = $this->data['um'][7][1];
        $dois1 = $this->data['dois'][7][1];
        if ($dois1 == $um1) {
            $dois1 = $this->data['dois'][8][1];
        }

        $tres1 =  $this->data['tres'][7][1];
        if ($tres1 == $dois1 or $tres1 == $um1) {
            $tres1 = $this->data['tres'][8][1];
            if ($tres1 == $dois1 or $tres1 == $um1) {
                $tres1 = $this->data['tres'][9][1];
            }
        }

        $quatro1 =  $this->data['quatro'][7][1];
        if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
            $quatro1 =  $this->data['quatro'][8][1];
            if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                $quatro1 =  $this->data['quatro'][9][1];
                if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                    $quatro1 =  $this->data['quatro'][10][1];
                }
            }
        }
        $cinco1 =  $this->data['cinco'][7][1];
        if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
            $cinco1 =  $this->data['cinco'][8][1];
            if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                $cinco1 =  $this->data['cinco'][9][1];
                if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                    $cinco1 =  $this->data['cinco'][10][1];
                }
            }
        }
        $seis1 = $this->data['seis'][7][1];
        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
            $seis1 = $this->data['seis'][8][1];
            if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                $seis1 = $this->data['seis'][9][1];
                if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                    $seis1 = $this->data['seis'][10][1];

                    if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                        $seis1 = $this->data['seis'][1][1];
                    }
                }
            }
        }
        $sete1 = $this->data['sete'][7][1];
        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
            $sete1 = $this->data['sete'][8][1];
            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                $sete1 = $this->data['sete'][9][1];
                if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                    $sete1 = $this->data['sete'][10][1];
                    if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                        $sete1 = $this->data['sete'][1][1];
                        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                            $sete1 = $this->data['sete'][2][1];
                        }
                    }
                }
            }
        }

        $oite1 = $this->data['oite'][7][1];
        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
            $oite1 = $this->data['oite'][8][1];
            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                $oite1 = $this->data['oite'][9][1];
                if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                    $oite1 = $this->data['oite'][10][1];
                    if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                        $oite1 = $this->data['oite'][1][1];
                        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                            $oite1 = $this->data['oite'][2][1];
                            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                                $oite1 = $this->data['oite'][3][1];
                            }
                        }
                    }
                }
            }
        }

        $nove1 = $this->data['nove'][7][1];
        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
            $nove1 = $this->data['nove'][8][1];
            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                $nove1 = $this->data['nove'][9][1];
                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                    $nove1 = $this->data['nove'][10][1];
                    if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                        $nove1  = $this->data['nove'][1][1];
                        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                            $nove1 = $this->data['nove'][2][1];
                            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                $nove1 = $this->data['nove'][3][1];
                                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                    $nove1 = $this->data['nove'][4][1];
                                }
                            }
                        }
                    }
                }
            }
        }

        $dez1  = $this->data['dez'][7][1];
        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
            $dez1  = $this->data['dez'][8][1];
            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                $dez1  = $this->data['dez'][9][1];
                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                    $dez1  = $this->data['dez'][10][1];
                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                        $dez1  = $this->data['dez'][1][1];
                        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                            $dez1  = $this->data['dez'][2][1];
                            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                $dez1  = $this->data['dez'][3][1];
                                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                    $dez1  = $this->data['dez'][4][1];
                                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                        $dez1  = $this->data['dez'][5][1];
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $onze1 = $this->data['onze'][7][1];
        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
            $onze1 = $this->data['onze'][8][1];
            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                $onze1 = $this->data['onze'][9][1];
                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                    $onze1 = $this->data['onze'][10][1];
                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                        $onze1 = $this->data['onze'][1][1];
                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                            $onze1 = $this->data['onze'][2][1];
                            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                $onze1 = $this->data['onze'][3][1];
                                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                    $onze1 = $this->data['onze'][4][1];
                                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                        $onze1 = $this->data['onze'][5][1];
                                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                            $onze1 = $this->data['onze'][6][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $doze1 = $this->data['doze'][7][1];
        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
            $doze1 = $this->data['doze'][8][1];
            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                $doze1 = $this->data['doze'][9][1];
                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                    $doze1 = $this->data['doze'][10][1];
                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                        $doze1 = $this->data['doze'][1][1];
                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                            $doze1 = $this->data['doze'][2][1];
                            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                $doze1 = $this->data['doze'][3][1];
                                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                    $doze1 = $this->data['doze'][4][1];
                                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                        $doze1 = $this->data['doze'][5][1];
                                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                            $doze1 = $this->data['doze'][6][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $trez1 = $this->data['trez'][7][1];
        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
            $trez1 = $this->data['trez'][8][1];
            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                $trez1 = $this->data['trez'][9][1];
                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                    $trez1 = $this->data['trez'][10][1];
                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                        $trez1 = $this->data['trez'][1][1];
                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                            $trez1 = $this->data['trez'][2][1];
                            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                $trez1 = $this->data['trez'][3][1];
                                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                    $trez1 = $this->data['trez'][4][1];
                                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                        $trez1 = $this->data['trez'][5][1];
                                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                            $trez1 = $this->data['trez'][6][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quatz1 = $this->data['quatz'][7][1];
        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
            $quatz1 = $this->data['quatz'][8][1];
            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                $quatz1 = $this->data['quatz'][9][1];
                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                    $quatz1 = $this->data['quatz'][10][1];
                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                        $quatz1 = $this->data['quatz'][1][1];
                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                            $quatz1 = $this->data['quatz'][2][1];
                            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                $quatz1 = $this->data['quatz'][3][1];
                                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                    $quatz1 = $this->data['quatz'][4][1];
                                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                        $quatz1 = $this->data['quatz'][5][1];
                                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                            $quatz1 = $this->data['quatz'][6][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quinz1 = $this->data['quinz'][7][1];
        if ($quinz1 == $quatz1 or  $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
            $quinz1 = $this->data['quinz'][8][1];
            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                $quinz1 = $this->data['quinz'][9][1];
                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                    $quinz1 = $this->data['quinz'][10][1];
                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                        $quinz1 = $this->data['quinz'][1][1];
                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                            $quinz1 = $this->data['quinz'][2][1];
                            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                $quinz1 = $this->data['quinz'][3][1];
                                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                    $quinz1 = $this->data['quinz'][4][1];
                                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                        $quinz1 = $this->data['quinz'][5][1];
                                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                            $quinz1 = $this->data['quatz'][6][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $calculo8 = [$um1, $dois1, $tres1, $quatro1, $cinco1, $seis1, $sete1, $oite1, $nove1, $dez1, $onze1, $doze1, $trez1, $quatz1, $quinz1];
        sort($calculo8);

        //NONA SEQUENCIA Q MAIS SAIU
        $um1 = $this->data['um'][8][1];
        $dois1 = $this->data['dois'][8][1];
        if ($dois1 == $um1) {
            $dois1 = $this->data['dois'][9][1];
        }

        $tres1 =  $this->data['tres'][8][1];
        if ($tres1 == $dois1 or $tres1 == $um1) {
            $tres1 = $this->data['tres'][9][1];
            if ($tres1 == $dois1 or $tres1 == $um1) {
                $tres1 = $this->data['tres'][10][1];
            }
        }

        $quatro1 =  $this->data['quatro'][8][1];
        if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
            $quatro1 =  $this->data['quatro'][9][1];
            if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                $quatro1 =  $this->data['quatro'][10][1];
            }
        }
        $cinco1 =  $this->data['cinco'][8][1];
        if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
            $cinco1 =  $this->data['cinco'][9][1];
            if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                $cinco1 =  $this->data['cinco'][10][1];
                if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                    $cinco1 =  $this->data['cinco'][1][1];
                }
            }
        }
        $seis1 = $this->data['seis'][8][1];
        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
            $seis1 = $this->data['seis'][9][1];
            if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                $seis1 = $this->data['seis'][10][1];
                if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                    $seis1 = $this->data['seis'][1][1];
                    if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                        $seis1 = $this->data['seis'][2][1];
                    }
                }
            }
        }
        $sete1 = $this->data['sete'][8][1];
        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
            $sete1 = $this->data['sete'][9][1];
            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                $sete1 = $this->data['sete'][10][1];
                if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                    $sete1 = $this->data['sete'][1][1];
                    if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                        $sete1 = $this->data['sete'][2][1];
                        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                            $sete1 = $this->data['sete'][3][1];
                        }
                    }
                }
            }
        }

        $oite1 = $this->data['oite'][8][1];
        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
            $oite1 = $this->data['oite'][9][1];
            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                $oite1 = $this->data['oite'][10][1];
                if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                    $oite1 = $this->data['oite'][1][1];
                    if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                        $oite1 = $this->data['oite'][2][1];
                        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                            $oite1 = $this->data['oite'][3][1];
                            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                                $oite1 = $this->data['oite'][4][1];
                            }
                        }
                    }
                }
            }
        }

        $nove1 = $this->data['nove'][8][1];
        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
            $nove1 = $this->data['nove'][9][1];
            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                $nove1 = $this->data['nove'][10][1];
                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                    $nove1 = $this->data['nove'][1][1];
                    if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                        $nove1  = $this->data['nove'][2][1];
                        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                            $nove1 = $this->data['nove'][3][1];
                            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                $nove1 = $this->data['nove'][4][1];
                                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                    $nove1 = $this->data['nove'][5][1];
                                }
                            }
                        }
                    }
                }
            }
        }

        $dez1  = $this->data['dez'][8][1];
        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
            $dez1  = $this->data['dez'][9][1];
            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                $dez1  = $this->data['dez'][10][1];
                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                    $dez1  = $this->data['dez'][1][1];
                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                        $dez1  = $this->data['dez'][2][1];
                        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                            $dez1  = $this->data['dez'][3][1];
                            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                $dez1  = $this->data['dez'][4][1];
                                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                    $dez1  = $this->data['dez'][5][1];
                                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                        $dez1  = $this->data['dez'][6][1];
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $onze1 = $this->data['onze'][8][1];
        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
            $onze1 = $this->data['onze'][9][1];
            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                $onze1 = $this->data['onze'][10][1];
                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                    $onze1 = $this->data['onze'][1][1];
                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                        $onze1 = $this->data['onze'][2][1];
                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                            $onze1 = $this->data['onze'][3][1];
                            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                $onze1 = $this->data['onze'][4][1];
                                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                    $onze1 = $this->data['onze'][5][1];
                                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                        $onze1 = $this->data['onze'][6][1];
                                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                            $onze1 = $this->data['onze'][7][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $doze1 = $this->data['doze'][8][1];
        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
            $doze1 = $this->data['doze'][9][1];
            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                $doze1 = $this->data['doze'][10][1];
                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                    $doze1 = $this->data['doze'][1][1];
                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                        $doze1 = $this->data['doze'][2][1];
                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                            $doze1 = $this->data['doze'][3][1];
                            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                $doze1 = $this->data['doze'][4][1];
                                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                    $doze1 = $this->data['doze'][5][1];
                                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                        $doze1 = $this->data['doze'][6][1];
                                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                            $doze1 = $this->data['doze'][7][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $trez1 = $this->data['trez'][8][1];
        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
            $trez1 = $this->data['trez'][9][1];
            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                $trez1 = $this->data['trez'][10][1];
                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                    $trez1 = $this->data['trez'][1][1];
                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                        $trez1 = $this->data['trez'][2][1];
                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                            $trez1 = $this->data['trez'][3][1];
                            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                $trez1 = $this->data['trez'][4][1];
                                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                    $trez1 = $this->data['trez'][5][1];
                                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                        $trez1 = $this->data['trez'][6][1];
                                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                            $trez1 = $this->data['trez'][7][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quatz1 = $this->data['quatz'][8][1];
        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
            $quatz1 = $this->data['quatz'][9][1];
            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                $quatz1 = $this->data['quatz'][10][1];
                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                    $quatz1 = $this->data['quatz'][1][1];
                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                        $quatz1 = $this->data['quatz'][2][1];
                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                            $quatz1 = $this->data['quatz'][3][1];
                            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                $quatz1 = $this->data['quatz'][4][1];
                                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                    $quatz1 = $this->data['quatz'][5][1];
                                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                        $quatz1 = $this->data['quatz'][6][1];
                                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                            $quatz1 = $this->data['quatz'][7][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quinz1 = $this->data['quinz'][8][1];
        if ($quinz1 == $quatz1 or  $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
            $quinz1 = $this->data['quinz'][9][1];
            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                $quinz1 = $this->data['quinz'][10][1];
                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                    $quinz1 = $this->data['quinz'][1][1];
                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                        $quinz1 = $this->data['quinz'][2][1];
                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                            $quinz1 = $this->data['quinz'][3][1];
                            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                $quinz1 = $this->data['quinz'][4][1];
                                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                    $quinz1 = $this->data['quinz'][5][1];
                                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                        $quinz1 = $this->data['quinz'][6][1];
                                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                            $quinz1 = $this->data['quatz'][7][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $calculo9 = [$um1, $dois1, $tres1, $quatro1, $cinco1, $seis1, $sete1, $oite1, $nove1, $dez1, $onze1, $doze1, $trez1, $quatz1, $quinz1];
        sort($calculo9);

        //DESIMA SEQUENCIA Q MAIS SAIU
        $um1 = $this->data['um'][9][1];
        $dois1 = $this->data['dois'][9][1];
        if ($dois1 == $um1) {
            $dois1 = $this->data['dois'][10][1];
        }

        $tres1 =  $this->data['tres'][9][1];
        if ($tres1 == $dois1 or $tres1 == $um1) {
            $tres1 = $this->data['tres'][10][1];
        }

        $quatro1 =  $this->data['quatro'][9][1];
        if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
            $quatro1 =  $this->data['quatro'][10][1];
            if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                $quatro1 =  $this->data['quatro'][1][1];
            }
        }
        $cinco1 =  $this->data['cinco'][9][1];
        if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
            $cinco1 =  $this->data['cinco'][10][1];
            if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                $cinco1 =  $this->data['cinco'][1][1];
                if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                    $cinco1 =  $this->data['cinco'][2][1];
                }
            }
        }
        $seis1 = $this->data['seis'][9][1];
        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
            $seis1 = $this->data['seis'][10][1];
            if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                $seis1 = $this->data['seis'][1][1];
                if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                    $seis1 = $this->data['seis'][2][1];
                    if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                        $seis1 = $this->data['seis'][3][1];
                    }
                }
            }
        }
        $sete1 = $this->data['sete'][9][1];
        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
            $sete1 = $this->data['sete'][10][1];
            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                $sete1 = $this->data['sete'][1][1];
                if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                    $sete1 = $this->data['sete'][2][1];
                    if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                        $sete1 = $this->data['sete'][3][1];
                        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                            $sete1 = $this->data['sete'][4][1];
                        }
                    }
                }
            }
        }

        $oite1 = $this->data['oite'][9][1];
        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
            $oite1 = $this->data['oite'][10][1];
            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                $oite1 = $this->data['oite'][1][1];
                if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                    $oite1 = $this->data['oite'][2][1];
                    if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                        $oite1 = $this->data['oite'][3][1];
                        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                            $oite1 = $this->data['oite'][4][1];
                            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                                $oite1 = $this->data['oite'][5][1];
                            }
                        }
                    }
                }
            }
        }

        $nove1 = $this->data['nove'][9][1];
        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
            $nove1 = $this->data['nove'][10][1];
            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                $nove1 = $this->data['nove'][1][1];
                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                    $nove1 = $this->data['nove'][2][1];
                    if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                        $nove1  = $this->data['nove'][3][1];
                        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                            $nove1 = $this->data['nove'][4][1];
                            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                $nove1 = $this->data['nove'][5][1];
                                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                    $nove1 = $this->data['nove'][6][1];
                                }
                            }
                        }
                    }
                }
            }
        }

        $dez1  = $this->data['dez'][9][1];
        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
            $dez1  = $this->data['dez'][10][1];
            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                $dez1  = $this->data['dez'][1][1];
                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                    $dez1  = $this->data['dez'][2][1];
                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                        $dez1  = $this->data['dez'][3][1];
                        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                            $dez1  = $this->data['dez'][4][1];
                            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                $dez1  = $this->data['dez'][5][1];
                                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                    $dez1  = $this->data['dez'][6][1];
                                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                        $dez1  = $this->data['dez'][7][1];
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $onze1 = $this->data['onze'][9][1];
        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
            $onze1 = $this->data['onze'][10][1];
            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                $onze1 = $this->data['onze'][1][1];
                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                    $onze1 = $this->data['onze'][2][1];
                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                        $onze1 = $this->data['onze'][3][1];
                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                            $onze1 = $this->data['onze'][4][1];
                            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                $onze1 = $this->data['onze'][5][1];
                                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                    $onze1 = $this->data['onze'][6][1];
                                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                        $onze1 = $this->data['onze'][7][1];
                                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                            $onze1 = $this->data['onze'][8][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $doze1 = $this->data['doze'][9][1];
        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
            $doze1 = $this->data['doze'][10][1];
            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                $doze1 = $this->data['doze'][1][1];
                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                    $doze1 = $this->data['doze'][2][1];
                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                        $doze1 = $this->data['doze'][3][1];
                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                            $doze1 = $this->data['doze'][4][1];
                            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                $doze1 = $this->data['doze'][5][1];
                                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                    $doze1 = $this->data['doze'][6][1];
                                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                        $doze1 = $this->data['doze'][7][1];
                                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                            $doze1 = $this->data['doze'][8][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $trez1 = $this->data['trez'][9][1];
        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
            $trez1 = $this->data['trez'][10][1];
            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                $trez1 = $this->data['trez'][1][1];
                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                    $trez1 = $this->data['trez'][2][1];
                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                        $trez1 = $this->data['trez'][3][1];
                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                            $trez1 = $this->data['trez'][4][1];
                            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                $trez1 = $this->data['trez'][5][1];
                                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                    $trez1 = $this->data['trez'][6][1];
                                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                        $trez1 = $this->data['trez'][7][1];
                                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                            $trez1 = $this->data['trez'][8][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quatz1 = $this->data['quatz'][9][1];
        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
            $quatz1 = $this->data['quatz'][10][1];
            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                $quatz1 = $this->data['quatz'][1][1];
                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                    $quatz1 = $this->data['quatz'][2][1];
                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                        $quatz1 = $this->data['quatz'][3][1];
                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                            $quatz1 = $this->data['quatz'][4][1];
                            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                $quatz1 = $this->data['quatz'][5][1];
                                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                    $quatz1 = $this->data['quatz'][6][1];
                                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                        $quatz1 = $this->data['quatz'][7][1];
                                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                            $quatz1 = $this->data['quatz'][8][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quinz1 = $this->data['quinz'][9][1];
        if ($quinz1 == $quatz1 or  $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
            $quinz1 = $this->data['quinz'][10][1];
            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                $quinz1 = $this->data['quinz'][1][1];
                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                    $quinz1 = $this->data['quinz'][2][1];
                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                        $quinz1 = $this->data['quinz'][3][1];
                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                            $quinz1 = $this->data['quinz'][4][1];
                            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                $quinz1 = $this->data['quinz'][5][1];
                                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                    $quinz1 = $this->data['quinz'][6][1];
                                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                        $quinz1 = $this->data['quinz'][7][1];
                                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                            $quinz1 = $this->data['quatz'][8][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $calculo10 = [$um1, $dois1, $tres1, $quatro1, $cinco1, $seis1, $sete1, $oite1, $nove1, $dez1, $onze1, $doze1, $trez1, $quatz1, $quinz1];
        sort($calculo10);

        //DESIMA PRIMEIRA SEQUENCIA Q MAIS SAIU
        $um1 = $this->data['um'][10][1];
        $dois1 = $this->data['dois'][10][1];
        if ($dois1 == $um1) {
            $dois1 = $this->data['dois'][1][1];
        }

        $tres1 =  $this->data['tres'][10][1];
        if ($tres1 == $dois1 or $tres1 == $um1) {
            $tres1 = $this->data['tres'][1][1];
            if ($tres1 == $dois1 or $tres1 == $um1) {
                $tres1 = $this->data['tres'][2][1];
            }
        }

        $quatro1 =  $this->data['quatro'][10][1];
        if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
            $quatro1 =  $this->data['quatro'][1][1];
            if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                $quatro1 =  $this->data['quatro'][2][1];
                if ($quatro1 == $tres1 or $quatro1 == $dois1 or $quatro1 == $um1) {
                    $quatro1 =  $this->data['quatro'][3][1];
                }
            }
        }
        $cinco1 =  $this->data['cinco'][10][1];
        if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
            $cinco1 =  $this->data['cinco'][1][1];
            if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                $cinco1 =  $this->data['cinco'][2][1];
                if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                    $cinco1 =  $this->data['cinco'][3][1];
                    if ($cinco1 == $quatro1 or $cinco1 == $tres1 or $cinco1 == $dois1 or $cinco1 == $um1) {
                        $cinco1 =  $this->data['cinco'][4][1];
                    }
                }
            }
        }
        $seis1 = $this->data['seis'][10][1];
        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
            $seis1 = $this->data['seis'][1][1];
            if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                $seis1 = $this->data['seis'][2][1];
                if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                    $seis1 = $this->data['seis'][3][1];
                    if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                        $seis1 = $this->data['seis'][4][1];
                        if ($seis1 == $cinco1 or $seis1 == $quatro1 or $seis1 == $tres1 or $seis1 == $dois1 or $seis1 == $um1) {
                            $seis1 = $this->data['seis'][5][1];
                        }
                    }
                }
            }
        }
        $sete1 = $this->data['sete'][10][1];
        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
            $sete1 = $this->data['sete'][1][1];
            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                $sete1 = $this->data['sete'][2][1];
                if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                    $sete1 = $this->data['sete'][3][1];
                    if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                        $sete1 = $this->data['sete'][4][1];
                        if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                            $sete1 = $this->data['sete'][5][1];
                            if ($sete1 == $seis1 or $sete1 == $cinco1 or $sete1 == $quatro1 or $sete1 == $tres1 or $sete1 == $dois1 or $sete1 == $um1) {
                                $sete1 = $this->data['sete'][6][1];
                            }
                        }
                    }
                }
            }
        }

        $oite1 = $this->data['oite'][10][1];
        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
            $oite1 = $this->data['oite'][1][1];
            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                $oite1 = $this->data['oite'][2][1];
                if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                    $oite1 = $this->data['oite'][3][1];
                    if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                        $oite1 = $this->data['oite'][4][1];
                        if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                            $oite1 = $this->data['oite'][5][1];
                            if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                                $oite1 = $this->data['oite'][6][1];
                                if ($oite1 == $sete1 or $oite1 == $seis1 or $oite1 == $cinco1 or $oite1 == $quatro1 or $oite1 == $tres1 or $oite1 == $dois1 or $oite1 == $um1) {
                                    $oite1 = $this->data['oite'][7][1];
                                }
                            }
                        }
                    }
                }
            }
        }

        $nove1 = $this->data['nove'][10][1];
        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
            $nove1 = $this->data['nove'][1][1];
            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                $nove1 = $this->data['nove'][2][1];
                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                    $nove1 = $this->data['nove'][3][1];
                    if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                        $nove1 = $this->data['nove'][4][1];
                        if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                            $nove1  = $this->data['nove'][5][1];
                            if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                $nove1 = $this->data['nove'][6][1];
                                if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                    $nove1 = $this->data['nove'][7][1];
                                    if ($nove1 == $oite1 or $nove1 == $sete1 or $nove1 == $seis1 or $nove1 == $cinco1 or $nove1 == $quatro1 or $nove1 == $tres1 or $nove1 == $dois1 or $nove1 == $um1) {
                                        $nove1 = $this->data['nove'][8][1];
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        $dez1  = $this->data['dez'][10][1];
        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
            $dez1  = $this->data['dez'][1][1];
            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                $dez1  = $this->data['dez'][2][1];
                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                    $dez1  = $this->data['dez'][3][1];
                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                        $dez1  = $this->data['dez'][4][1];
                        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                            $dez1  = $this->data['dez'][5][1];
                            if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                $dez1  = $this->data['dez'][6][1];
                                if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                    $dez1  = $this->data['dez'][7][1];
                                    if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                        $dez1  = $this->data['dez'][8][1];
                                        if ($dez1 == $nove1 or $dez1 == $oite1 or $dez1 == $sete1 or $dez1 == $seis1 or $dez1 == $cinco1 or $dez1 == $quatro1 or $dez1 == $tres1 or $dez1 == $dois1 or $dez1 == $um1) {
                                            $dez1  = $this->data['dez'][9][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $onze1 = $this->data['onze'][10][1];
        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
            $onze1 = $this->data['onze'][1][1];
            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                $onze1 = $this->data['onze'][2][1];
                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                    $onze1 = $this->data['onze'][3][1];
                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                        $onze1 = $this->data['onze'][4][1];
                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                            $onze1 = $this->data['onze'][5][1];
                            if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                $onze1 = $this->data['onze'][6][1];
                                if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                    $onze1 = $this->data['onze'][7][1];
                                    if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                        $onze1 = $this->data['onze'][8][1];
                                        if ($onze1 == $dez1 or $onze1 == $nove1 or $onze1 == $oite1 or $onze1 == $sete1 or $onze1 == $seis1 or $onze1 == $cinco1 or $onze1 == $quatro1 or $onze1 == $tres1 or $onze1 == $dois1 or $onze1 == $um1) {
                                            $onze1 = $this->data['onze'][9][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $doze1 = $this->data['doze'][10][1];
        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
            $doze1 = $this->data['doze'][1][1];
            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                $doze1 = $this->data['doze'][2][1];
                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                    $doze1 = $this->data['doze'][3][1];
                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                        $doze1 = $this->data['doze'][4][1];
                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                            $doze1 = $this->data['doze'][5][1];
                            if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                $doze1 = $this->data['doze'][6][1];
                                if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                    $doze1 = $this->data['doze'][7][1];
                                    if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                        $doze1 = $this->data['doze'][8][1];
                                        if ($doze1 == $onze1 or $doze1 == $dez1 or $doze1 == $nove1 or $doze1 == $oite1 or $doze1 == $sete1 or $doze1 == $seis1 or $doze1 == $cinco1 or $doze1 == $quatro1 or $doze1 == $tres1 or $doze1 == $dois1 or $doze1 == $um1) {
                                            $doze1 = $this->data['doze'][9][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $trez1 = $this->data['trez'][10][1];
        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
            $trez1 = $this->data['trez'][1][1];
            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                $trez1 = $this->data['trez'][2][1];
                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                    $trez1 = $this->data['trez'][3][1];
                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                        $trez1 = $this->data['trez'][4][1];
                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                            $trez1 = $this->data['trez'][5][1];
                            if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                $trez1 = $this->data['trez'][6][1];
                                if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                    $trez1 = $this->data['trez'][7][1];
                                    if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                        $trez1 = $this->data['trez'][8][1];
                                        if ($trez1 == $doze1 or $trez1 == $onze1 or $trez1 == $dez1 or $trez1 == $nove1 or $trez1 == $oite1 or $trez1 == $sete1 or $trez1 == $seis1 or $trez1 == $cinco1 or $trez1 == $quatro1 or $trez1 == $tres1 or $trez1 == $dois1 or $trez1 == $um1) {
                                            $trez1 = $this->data['trez'][9][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quatz1 = $this->data['quatz'][10][1];
        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
            $quatz1 = $this->data['quatz'][1][1];
            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                $quatz1 = $this->data['quatz'][2][1];
                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                    $quatz1 = $this->data['quatz'][3][1];
                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                        $quatz1 = $this->data['quatz'][4][1];
                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                            $quatz1 = $this->data['quatz'][5][1];
                            if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                $quatz1 = $this->data['quatz'][6][1];
                                if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                    $quatz1 = $this->data['quatz'][7][1];
                                    if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                        $quatz1 = $this->data['quatz'][8][1];
                                        if ($quatz1 == $trez1 or $quatz1 == $doze1 or $quatz1 == $onze1 or $quatz1 == $dez1 or $quatz1 == $nove1 or $quatz1 == $oite1 or $quatz1 == $sete1 or $quatz1 == $seis1 or $quatz1 == $cinco1 or $quatz1 == $quatro1 or $quatz1 == $tres1 or $quatz1 == $dois1 or $quatz1 == $um1) {
                                            $quatz1 = $this->data['quatz'][9][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $quinz1 = $this->data['quinz'][10][1];
        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
            $quinz1 = $this->data['quinz'][1][1];
            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                $quinz1 = $this->data['quinz'][2][1];
                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                    $quinz1 = $this->data['quinz'][3][1];
                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                        $quinz1 = $this->data['quinz'][4][1];
                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                            $quinz1 = $this->data['quinz'][5][1];
                            if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                $quinz1 = $this->data['quinz'][6][1];
                                if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                    $quinz1 = $this->data['quinz'][7][1];
                                    if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                        $quinz1 = $this->data['quinz'][8][1];
                                        if ($quinz1 == $quatz1 or $quinz1 == $trez1 or $quinz1 == $doze1 or $quinz1 == $onze1 or $quinz1 == $dez1 or $quinz1 == $nove1 or $quinz1 == $oite1 or $quinz1 == $sete1 or $quinz1 == $seis1 or $quinz1 == $cinco1 or $quinz1 == $quatro1 or $quinz1 == $tres1 or $quinz1 == $dois1 or $quinz1 == $um1) {
                                            $quinz1 = $this->data['quatz'][9][1];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $calculo11 = [$um1, $dois1, $tres1, $quatro1, $cinco1, $seis1, $sete1, $oite1, $nove1, $dez1, $onze1, $doze1, $trez1, $quatz1, $quinz1];
        sort($calculo11);

        $calculo = [$calculo1, $calculo2, $calculo3, $calculo4, $calculo5, $calculo6, $calculo7, $calculo8, $calculo9, $calculo10, $calculo11];

        foreach ($calculo as $value) {
            $this->tabCalculo($value);
            //  var_dump($value);
        }
    }
    public function tabCalculo(array $num15)
    {
        $data['colUm'] = $num15[0];
        $data['colDois'] = $num15[1];
        $data['colTres'] = $num15[2];
        $data['colQuatro'] = $num15[3];
        $data['colCinco'] = $num15[4];
        $data['colSeis'] = $num15[5];
        $data['colSete'] = $num15[6];
        $data['colOite'] = $num15[7];
        $data['colNove'] = $num15[8];
        $data['colDez'] = $num15[9];
        $data['colOnze'] = $num15[10];
        $data['colDoze'] = $num15[11];
        $data['colTrez'] = $num15[12];
        $data['colQuatz'] = $num15[13];
        $data['colQuinz'] = $num15[14];
        $data['creatdat'] = date("Y-m-d H:i:s");

        $addTable = new \App\adms\Models\helper\AdmsCreate();
        $addTable->exeCreate("calculo", $data);

        if ($addTable->getResult()) {
            $this->resultBd = $data;
            $this->result = true;
            $_SESSION['msg'] = "<p style='color:#0f0;'>Sequencia Incerida na Base, Calculo Gerada Corretamente!</p>";
        } else {
            $this->result = false;
            $_SESSION['msg'] = "<p style='color:#f00;'> Base de Calculo NÃO Gerada Corretamente!</p>";
        }
    }
}
