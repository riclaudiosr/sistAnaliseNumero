<?php

namespace App\adms\Models;

use App\adms\Models\helper\AdmsConn;

if (!defined('RSR1937NA')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

// CLASS PARA LEITURA E COMPARAÇÃO DE DADOS
class AdmsResultJogo
{
    private string|int|null $key; // RECEBE O NOME DA TABELA PASSADO COMO PARAMETRO
    private string|int|null $id; // RECEBE O ID PASSADO COMO PARAMETRO
    private array|int|null $seq_num;
    private array|int|null $resultBd; //$resultBd Recebe os registros do banco de dados
    private array|int|null $resultJogo; //$resultBd Recebe os registros do banco de dados
    private array|null $data; //$data Recebe as informações do formulário 
    private bool|int|array $result = []; //$result Recebe true quando executar o processo com sucesso e false quando houver erro 
    private bool|int|array $igual = true; //$result Recebe true quando executar o processo com sucesso e false quando houver erro 
    private bool|int|array $valor;
    private array $gerador;
    //RECEBE O RESULTADO DA CLASS
    function getResult(): bool|int
    {
        return $this->result;
    }
    function getIgual(): bool|int
    {
        return $this->igual;
    }
    //RECEBE O RESULTADO DO BANCO DE DADOS
    function getResultBd(): array|int|null
    {
        return $this->resultBd;
    }

    //RECEBE O ID CHEVE PARA A BUSCA E CHAMA OS METODO DE CONFERENCIA DOS DADOS NA TABELA SEQUENCIA
    public function confSequencia(): void
    {
        $deleteUser = new \App\adms\Models\AdmsClearTable;
        // $deleteUser->clearTable("seq_gerada");
        // $this->exeCutar($data);
        //  $this->geraSelect();


        //  $this->selectNegativo();
        //  $this->gerarSubSequencia();

      //  $this->selectBuscar();

        $exeJogo = new \App\adms\Models\helper\AdmsRead();
        $exeJogo->fullRead("SELECT id  FROM  sequencia order by id desc limit 1");
        $ultimaId = $exeJogo->getResult()[0];
        $ultimaId = (int) $ultimaId['id'];
        $ultimaId =  $ultimaId - 0;

        for ($i = 0; $i < 27; $i++) {
            $exeJogo = new \App\adms\Models\helper\AdmsRead();
            $exeJogo->fullRead("SELECT id,colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz
                 FROM  sequencia where id =:id", "id={$ultimaId}");
            //order by id ASC limit 1"
            if ($exeJogo->getResult()) {
                $data1 = $exeJogo->getResult()[0];
                $data[] = $data1;
                $ultimaId = $ultimaId - 1;
            } else {
                $ultimaId = $ultimaId - 1;
            }
        }
          $this->addMais($data);

    }

    //BUSCAR UMA ESEQUENCIA COM OS NUMERO Q MAIS SEIU EM UMA DETERMINADA QUANTIDADE DE SEQUENCIA ALGORITIMA DEEP SEEK
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
            //   var_dump( $this->resultBd);

            $this->result = true;
        } else {
            $this->result = false;
        }
    }

    function selectBuscar()
    {
        $exeJogo = new \App\adms\Models\helper\AdmsRead();
        $exeJogo->fullRead("SELECT id  FROM  sequencia order by id desc limit 1");
        $ultimaId = $exeJogo->getResult()[0];
        $ultimaId = (int) $ultimaId['id'];

        $fim =  $ultimaId - 10;
           $inicio =  $ultimaId - 2000;
        //  var_dump($inicio);
        $n1 = 0;
        for ($i = $inicio; $i < $fim; $i++) {
            $exeJogo = new \App\adms\Models\helper\AdmsRead();
            $exeJogo->fullRead("SELECT colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz
                 FROM  sequencia where id =:id", "id={$ultimaId}");
            if ($exeJogo->getResult()) {
                $data1 = $exeJogo->getResult()[0];
                $n1++;
                sort($data1);
                $data[] = $data1;

                $ultimaId = $ultimaId - 1;
            } else {
                $ultimaId = $ultimaId - 1;
            }
        }
        var_dump($n1);

        $deleteUser = new \App\adms\Models\AdmsClearTable;
        $deleteUser->clearTable("seq_gerada");

        $this->resultGpt($data);
        $this->deepSeek($data);
        //  $this->geraSelect();
        $this->duplicar();
    }
    //BUSCAR A SEQUENCIA Q MAIS SAIU EM UMA DETERMINADA QUATIDADE DE SEQUENCIA ALGORITIMA GPT
    function resultGpt(array $data)
    {
        function gerarPalpite1($historico, $quantidadePalpite)
        {
            $frequencia = [];
            foreach ($historico as $historico1) {
                foreach ($historico1 as $sorteio) {
                    foreach ($sorteio as $numero) {
                        if (!isset($frequencia[$numero])) {
                            $frequencia[$numero] = 0;
                        }
                        $frequencia[$numero]++;
                    }
                }
            }
            arsort($frequencia);
            $numerosMaisFrequentes = array_keys($frequencia);
            //  shuffle($numerosMaisFrequentes);
            // var_dump($numerosMaisFrequentes);
            $numerosMaisFrequentes = $numerosMaisFrequentes;

            return array_slice($numerosMaisFrequentes, 0, $quantidadePalpite);
        }
        $historicoSorteios = [$data];
        $palpite = gerarPalpite1($historicoSorteios, 15);
        sort($palpite);

        // var_dump($palpite);
        //   echo "Palpite baseado na frequência: " . implode(", ", $palpite);

        //  var_dump( $palpite );
        $this->addTableSelect($palpite);
    }

    function deepSeek(array $data)
    {
        function gerarSequencias($numeros)
        {
            $sequencias = [];
            $tamanho = count($numeros);
            for ($i = 0; $i <= $tamanho - 15; $i++) {
                $sequencia = array_slice($numeros, $i, 15);
                sort($sequencia); // Ordena a sequência para facilitar a comparação
                $sequencias[] =  implode(',', $sequencia); // Converte a sequência em uma string   
            }
            return $sequencias;
        }
        // Contador de sequências
        $contadorSequencias = [];
        // Processar todos os sorteios
        foreach ($data as $sorteio) {
            $sequencias = gerarSequencias($sorteio);
            foreach ($sequencias as $sequencia) {
                if (!isset($contadorSequencias[$sequencia])) {
                    $contadorSequencias[$sequencia] = 0;
                }
                $contadorSequencias[$sequencia]++;
            }
        }

        // Encontrar a sequência que mais apareceu
        arsort($contadorSequencias); // Ordena o array em ordem decrescente
        $sequenciaMaisComum = array_key_first($contadorSequencias);
        $seq =  explode(',', $sequenciaMaisComum); // Converte a sequência em uma string
        // var_dump($seq);
        $this->addTableSelect($seq);
    }
    function duplicar()
    {
        $calculo = new \App\adms\Models\helper\AdmsRead();
        $calculo->fullRead("SELECT  colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz
                          FROM  seq_gerada");
        $n1 = $calculo->getResult();
        $n2 = [
            $n1[1]['colUm'],
            $n1[1]['colDois'],
            $n1[1]['colTres'],
            $n1[1]['colQuatro'],
            $n1[1]['colCinco'],
            $n1[1]['colSeis'],
            $n1[1]['colSete'],
            $n1[1]['colOite'],
            $n1[0]['colNove'],
            $n1[0]['colDez'],
            $n1[0]['colOnze'],
            $n1[0]['colDoze'],
            $n1[0]['colTrez'],
            $n1[0]['colQuatz'],
            $n1[0]['colQuinz']
        ];

        $this->addTableSelect($n2);
    }



    function add9(array $data)
    {


        //   var_dump($data);
        foreach ($data as $jogo) {
            sort($jogo);
            $seq['colUm'] = (string) $jogo[0];
            $seq['colDois'] = (string) $jogo[1];
            $seq['colTres'] = (string) $jogo[2];
            $seq['colQuatro'] = (string) $jogo[3];
            $seq['colCinco'] = (string) $jogo[4];
            $seq['colSeis'] = (string) $jogo[5];
            $seq['colSete'] = (string) $jogo[6];
            $seq['colOite'] = (string) $jogo[7];
            $seq['colNove'] = (string) $jogo[8];
            if (isset($jogo[9])) {
                $seq['colDez'] = (string) $jogo[9];
                //  var_dump($jogo[9]);
            }
            $seq['creatdat'] = date('Y-m-d H:i:s');

            $addJogo = new \App\adms\Models\helper\AdmsCreate();
            $addJogo->exeCreate("tab_doze",  $seq);
            if ($addJogo->getResult()) {
                $_SESSION['msg'] = "<p style='color:green;'> Jogo Cadastrado com Sucesso! </p>";
                //  var_dump($seq);
                $this->result = true;
            } else {
                $_SESSION['msg'] = "<p style='color:#f00;'> Erro Jogo não Cadastrado com suceso! </p>";
                $this->result = false;
            }
        }
    }

    //METODO DE VERIFICAÇÃO SE JA EXISTE A SEQUENCIA CADASTRADA NA TABELA JOGOS
    public function verificar()
    {
        $verific = new \App\adms\Models\helper\AdmsRead();
        $verific->exeRead("jogos");
        $this->resultBd = $verific->getResult();

        if (!empty($this->resultBd)) {
            foreach ($this->resultBd as $key => $value) {
                extract($value);
                if (($colUm == $this->data['colUm']) and ($colDois == $this->data['colDois']) and ($colTres == $this->data['colTres'])
                    and ($colQuatro == $this->data['colQuatro']) and ($colCinco == $this->data['colCinco']) and ($colSeis == $this->data['colSeis'])
                    and ($colSete == $this->data['colSete']) and ($colOite == $this->data['colOite']) and ($colNove == $this->data['colNove'])
                    and ($colDez == $this->data['colDez']) and ($colOnze == $this->data['colOnze']) and ($colDoze == $this->data['colDoze'])
                    and ($colTrez == $this->data['colTrez']) and ($colQuatz == $this->data['colQuatz']) and ($colQuinz == $this->data['colQuinz'])
                ) {

                    $this->igual = false;
                } else {
                    $this->result = true;
                }
            }
        } else {
            $this->igual = true;
        }
    }
    public function verificarJogo(array $data)
    {
        $this->data = $data;
        $verifique = new \App\adms\Models\helper\AdmsRead();
        $verifique->fullRead("SELECT id,colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz
        FROM tab_doze");
        $this->resultBd = $verifique->getResult();
        if (!empty($this->resultBd)) {

            foreach ($this->resultBd as $value) {
                extract($value);
                if (($colUm == $this->data['colUm']) && ($colDois == $this->data['colDois']) && ($colTres == $this->data['colTres'])
                    && ($colQuatro == $this->data['colQuatro']) && ($colCinco == $this->data['colCinco']) && ($colSeis == $this->data['colSeis'])
                    && ($colSete == $this->data['colSete']) && ($colOite == $this->data['colOite']) && ($colNove == $this->data['colNove'])
                    && ($colDez == $this->data['colDez']) && ($colOnze == $this->data['colOnze']) && ($colDoze == $this->data['colDoze'])
                    && ($colTrez == $this->data['colTrez']) && ($colQuatz == $this->data['colQuatz']) && ($colQuinz == $this->data['colQuinz'])
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
    public function addJogo(array $data): void
    {

        $this->data =  $data;

        //   foreach ($this->data as $this->data) {
        date_default_timezone_set('America/Sao_Paulo');

        $jogo['colUm'] = (string) $this->data[0];
        $jogo['colDois'] = (string) $this->data[1];
        $jogo['colTres'] = (string) $this->data[2];
        $jogo['colQuatro'] = (string) $this->data[3];
        $jogo['colCinco'] = (string) $this->data[4];
        $jogo['colSeis'] = (string) $this->data[5];
        $jogo['colSete'] = (string) $this->data[6];
        $jogo['colOite'] = (string) $this->data[7];
        $jogo['colNove'] = (string) $this->data[8];
        $jogo['colDez'] = (string) $this->data[9];
        $jogo['colOnze'] = (string) $this->data[10];
        $jogo['colDoze'] = (string) $this->data[11];
        /*
       $jogo['colTrez'] = (string)  $this->data[12];
        $jogo['colQuatz'] = (string) $this->data[13];
        $jogo['colQuinz'] = (string) $this->data[14];
        */
        $jogo['creatdat'] = date('Y-m-d H:i:s');
        $this->verificarJogo($jogo);
        //  }

        if ($this->getIgual()) {
            $addJogo = new \App\adms\Models\helper\AdmsCreate();
            $addJogo->exeCreate("tab_doze", $jogo);

            if ($addJogo->getResult()) {
                $_SESSION['msg'] = "<p style='color:green;'> Jogo Cadastrado com Sucesso! </p>";
                $this->result = true;
            } else {
                $_SESSION['msg'] = "<p style='color:#f00;'> Erro Jogo não Cadastrado com suceso! </p>";
                $this->result = false;
            }
        }
    }

    //ADD SELECTE MAIS E MENOS NA TABLE SEQ_GERADA
    function addTableSelect(array $key)
    {
        date_default_timezone_set('America/Sao_Paulo');

        $data['colUm'] = (string) $key[0];
        $data['colDois'] = (string) $key[1];
        $data['colTres'] = (string) $key[2];
        $data['colQuatro'] = (string) $key[3];
        $data['colCinco'] =  (string)$key[4];
        $data['colSeis'] = (string) $key[5];
        $data['colSete'] = (string) $key[6];
        $data['colOite'] = (string) $key[7];
        $data['colNove'] = (string) $key[8];
        $data['colDez'] = (string) $key[9];
        $data['colOnze'] = (string) $key[10];
        $data['colDoze'] = (string) $key[11];
        $data['colTrez'] = (string) $key[12];
        $data['colQuatz'] = (string) $key[13];
        $data['colQuinz'] = (string) $key[14];
        $data['creatdat'] = date('Y-m-d');
        // var_dump($data);

        $addJogo = new \App\adms\Models\helper\AdmsCreate();
        $addJogo->exeCreate("seq_gerada", $data);

        if ($addJogo->getResult()) {
            $_SESSION['msg'] = "<p style='color:green;'> Jogo Cadastrado com Sucesso! </p>";
            //var_dump($data);
            $this->result = true;
        } else {
            $_SESSION['msg'] = "<p style='color:#f00;'> Erro Jogo não Cadastrado com suceso! </p>";
            $this->result = false;
        }
    }

    function geraSelect()
    {

        $exeJogo = new \App\adms\Models\helper\AdmsRead();
        $exeJogo->fullRead("SELECT id  FROM  sequencia order by id desc limit 1");
        $ultimaId = $exeJogo->getResult()[0];
        $ultimaId = (int) $ultimaId['id'];
        $ultimaId =  $ultimaId - 10;

        $n1 = 0;
        $n2 = 0;
        $n3 = 0;
        $n4 = 0;
        $n5 = 0;
        $n6 = 0;
        $n7 = 0;
        $n8 = 0;
        $n9 = 0;
        $n10 = 0;
        $n11 = 0;
        $n12 = 0;
        $n13 = 0;
        $n14 = 0;
        $n15 = 0;
        $n16 = 0;
        $n17 = 0;
        $n18 = 0;
        $n19 = 0;
        $n20 = 0;
        $n21 = 0;
        $n22 = 0;
        $n23 = 0;
        $n24 = 0;
        $n25 = 0;

        for ($n = 0; $n <= $ultimaId; $n++) {
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
                                    $n1++;
                                    $data['um'][$valor[0]][]  = $valor[0];
                                    break;
                                case 2:
                                    $n2++;
                                    $data['um'][$valor[0]][]  = $valor[0];
                                    break;
                                case 3:
                                    $n3++;
                                    $data['um'][$valor[0]][]  = $valor[0];
                                    break;
                                case 4:
                                    $n4++;
                                    $data['um'][$valor[0]][]  = $valor[0];
                                    break;
                                case 5:
                                    $n5++;
                                    $data['um'][$valor[0]][]  = $valor[0];
                                    break;
                                case 6:
                                    $n6++;
                                    $data['um'][$valor[0]][]  = $valor[0];
                                    break;
                                case 7:
                                    $n7++;
                                    $data['um'][$valor[0]][]  = $valor[0];
                                    break;
                                case 8:
                                    $n8++;
                                    $data['um'][$valor[0]][]  = $valor[0];
                                    break;
                                case 9:
                                    $n9++;
                                    $data['um'][$valor[0]][]  = $valor[0];
                                    break;
                                case 10:
                                    $n10++;
                                    $data['um'][$valor[0]][]  = $valor[0];
                                default;
                            }
                            break;
                        case $valor[1]:
                            switch ($i) {
                                case 2:
                                    $n2++;
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                    break;
                                case 3:
                                    $n3++;
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                    break;
                                case 4:
                                    $n4++;
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                    break;
                                case 5:
                                    $n5++;
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                    break;
                                case 6:
                                    $n6++;
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                    break;
                                case 7:
                                    $n7++;
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                    break;
                                case 8:
                                    $n8++;
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                    break;
                                case 9:
                                    $n9++;
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                    break;
                                case 10:
                                    $n10++;
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                    break;
                                case 11:
                                    $n11++;
                                    $data['dois'][$valor[1]][]  = $valor[1];
                                default;
                            }
                            break;
                        case $valor[2]:
                            switch ($i) {
                                case 3:
                                    $n3++;
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                    break;
                                case 4:
                                    $n4++;
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                    break;
                                case 5:
                                    $n5++;
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                    break;
                                case 6:
                                    $n6++;
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                    break;
                                case 7:
                                    $n7++;
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                    break;
                                case 8:
                                    $n8++;
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                    break;
                                case 9:
                                    $n9++;
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                    break;
                                case 10:
                                    $n10++;
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                    break;
                                case 11:
                                    $n11++;
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                    break;
                                case 12:
                                    $n12++;
                                    $data['tres'][$valor[2]][]  = $valor[2];
                                default;
                            }
                            break;
                        case $valor[3]:
                            switch ($i) {
                                case 4:
                                    $n4++;
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                    break;
                                case 5:
                                    $n5++;
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                    break;
                                case 6:
                                    $n6++;
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                    break;
                                case 7:
                                    $n7++;
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                    break;
                                case 8:
                                    $n8++;
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                    break;
                                case 9:
                                    $n9++;
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                    break;
                                case 10:
                                    $n10++;
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                    break;
                                case 11:
                                    $n11++;
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                    break;
                                case 12:
                                    $n12++;
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                    break;
                                case 13:
                                    $n13++;
                                    $data['quatro'][$valor[3]][]  = $valor[3];
                                default;
                            }
                            break;
                        case $valor[4]:
                            switch ($i) {
                                case 5:
                                    $n5++;
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                    break;
                                case 6:
                                    $n6++;
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                    break;
                                case 7:
                                    $n7++;
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                    break;
                                case 8:
                                    $n8++;
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                    break;
                                case 9:
                                    $n9++;
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                    break;
                                case 10:
                                    $n10++;
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                    break;
                                case 11:
                                    $n11++;
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                    break;
                                case 12:
                                    $n12++;
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                    break;
                                case 13:
                                    $n13++;
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                    break;
                                case 14:
                                    $n14++;
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                    break;
                                case 15:
                                    $n15++;
                                    $data['cinco'][$valor[4]][]  = $valor[4];
                                default;
                            }
                            break;
                        case $valor[5]:
                            switch ($i) {
                                case 6:
                                    $n6++;
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 7:
                                    $n7++;
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 8:
                                    $n8++;
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 9:
                                    $n9++;
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 10:
                                    $n10++;
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 11:
                                    $n11++;
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 12:
                                    $n12++;
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 13:
                                    $n13++;
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 14:
                                    $n14++;
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 15:
                                    $n15++;
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                    break;
                                case 16:
                                    $n16++;
                                    $data['seis'][$valor[5]][]  = $valor[5];
                                default;
                            }
                            break;
                        case $valor[6]:
                            switch ($i) {
                                case 7:
                                    $n7++;
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 8:
                                    $n8++;
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 9:
                                    $n9++;
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 10:
                                    $n10++;
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 11:
                                    $n11++;
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 12:
                                    $n12++;
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 13:
                                    $n13++;
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 14:
                                    $n14++;
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 15:
                                    $n15++;
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 16:
                                    $n16++;
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                    break;
                                case 17:
                                    $n17++;
                                    $data['sete'][$valor[6]][]  = $valor[6];
                                default;
                            }
                            break;
                        case $valor[7]:
                            switch ($i) {
                                case 8:
                                    $n8++;
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 9:
                                    $n9++;
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 10:
                                    $n10++;
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 11:
                                    $n11++;
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 12:
                                    $n12++;
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 13:
                                    $n13++;
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 14:
                                    $n14++;
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 15:
                                    $n15++;
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 16:
                                    $n16++;
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 17:
                                    $n17++;
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                    break;
                                case 18:
                                    $n18++;
                                    $data['oite'][$valor[7]][]  = $valor[7];
                                default;
                            }
                            break;
                        case $valor[8]:
                            switch ($i) {
                                case 9:
                                    $n9++;
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 10:
                                    $n10++;
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 11:
                                    $n11++;
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 12:
                                    $n12++;
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 13:
                                    $n13++;
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 14:
                                    $n14++;
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 15:
                                    $n15++;
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 16:
                                    $n16++;
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 17:
                                    $n17++;
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 18:
                                    $n18++;
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                    break;
                                case 19:
                                    $n19++;
                                    $data['nove'][$valor[8]][]  = $valor[8];
                                default;
                            }
                            break;
                        case $valor[9]:
                            switch ($i) {
                                case 10:
                                    $n10++;
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 11:
                                    $n11++;
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 12:
                                    $n12++;
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 13:
                                    $n13++;
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 14:
                                    $n14++;
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 15:
                                    $n15++;
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 16:
                                    $n16++;
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 17:
                                    $n17++;
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 18:
                                    $n18++;
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 19:
                                    $n19++;
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                    break;
                                case 20:
                                    $n20++;
                                    $data['dez'][$valor[9]][]  = $valor[9];
                                default;
                            }
                            break;
                        case $valor[10]:
                            switch ($i) {
                                case 11:
                                    $n11++;
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 12:
                                    $n12++;
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 13:
                                    $n13++;
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 14:
                                    $n14++;
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 15:
                                    $n15++;
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 16:
                                    $n16++;
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 17:
                                    $n17++;
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 18:
                                    $n18++;
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 19:
                                    $n19++;
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 20:
                                    $n20++;
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                    break;
                                case 21:
                                    $n21++;
                                    $data['onze'][$valor[10]][]  = $valor[10];
                                default;
                            }
                            break;
                        case $valor[11]:
                            switch ($i) {
                                case 12:
                                    $n12++;
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 13:
                                    $n13++;
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 14:
                                    $n14++;
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 15:
                                    $n15++;
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 16:
                                    $n16++;
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 17:
                                    $n17++;
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 18:
                                    $n18++;
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 19:
                                    $n19++;
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 20:
                                    $n20++;
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 21:
                                    $n21++;
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                                case 22:
                                    $n22++;
                                    $data['doze'][$valor[11]][]  = $valor[11];
                                    break;
                            }
                            break;
                        case $valor[12]:
                            switch ($i) {
                                case 13:
                                    $n13++;
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 14:
                                    $n14++;
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 15:
                                    $n15++;
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 16:
                                    $n16++;
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 17:
                                    $n17++;
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 18:
                                    $n18++;
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 19:
                                    $n19++;
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 20:
                                    $n20++;
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 21:
                                    $n21++;
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 22:
                                    $n22++;
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                                case 23:
                                    $n23++;
                                    $data['trez'][$valor[12]][]  = $valor[12];
                                    break;
                            }
                            break;
                        case $valor[13]:
                            switch ($i) {
                                case 14:
                                    $n14++;
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 15:
                                    $n15++;
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 16:
                                    $n16++;
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 17:
                                    $n17++;
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 18:
                                    $n18++;
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 19:
                                    $n19++;
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 20:
                                    $n20++;
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 21:
                                    $n21++;
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 22:
                                    $n22++;
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 23:
                                    $n22++;
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 24:
                                    $n24++;
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                    break;
                                case 25:
                                    $n25++;
                                    $data['quatz'][$valor[13]][]  = $valor[13];
                                default;
                            }
                            break;
                        case $valor[14]:
                            switch ($i) {
                                case 15:
                                    $n15++;
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 16:
                                    $n16++;
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 17:
                                    $n17++;
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 18:
                                    $n18++;
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 19:
                                    $n19++;
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 20:
                                    $n20++;
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 21:
                                    $n21++;
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 22:
                                    $n22++;
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 23:
                                    $n23++;
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 24:
                                    $n24++;
                                    $data['quinz'][$valor[14]][]  = $valor[14];
                                    break;
                                case 25:
                                    $n25++;
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
        //  var_dump($data);
        foreach ($data as $key) {

            rsort($key);
            //   var_dump($key[0]);
            $dados[] = sizeof($key[0]);
            //   var_dump($dados);
            $num[] = $key;
        }
        //   var_dump($num);

        foreach ($num as $p1) {
            $d1[] = $p1[0][0];
        }
        $this->addTableSelect($d1);
    }

    public function noRepet(array $valor)
    {

        foreach ($valor as $key) {
            switch ($key[0]) {
                case $key[1];
                    $key[1]++;
                    break;
                case $key[2];
                    $key[2]++;
                    break;
                case $key[3];
                    $key[3]++;
                    break;
                case $key[4];
                    $key[4]++;
                default;
            }
            switch ($key[1]) {
                case $key[2];
                    $key[2]++;
                    break;
                case $key[3];
                    $key[3]++;
                    break;
                case $key[4];
                    $key[4]++;
                    break;
                case $key[5];
                    $key[5]++;
                default;
            }
            switch ($key[2]) {
                case $key[3];
                    $key[3]++;
                    break;
                case $key[4];
                    $key[4]++;
                    break;
                case $key[5];
                    $key[5]++;
                    break;
                case $key[6];
                    $key[6]++;
                default;
            }
            switch ($key[3]) {
                case $key[4];
                    $key[4]++;
                    break;
                case $key[5];
                    $key[5]++;
                    break;
                case $key[6];
                    $key[6]++;
                    break;
                case $key[7];
                    $key[7]++;
                default;
            }
            switch ($key[4]) {
                case $key[5];
                    $key[5]++;
                    break;
                case $key[6];
                    $key[6]++;
                    break;
                case $key[7];
                    $key[7]++;
                    break;
                case $key[8];
                    $key[8]++;
                default;
            }
            switch ($key[5]) {
                case $key[6];
                    $key[6]++;
                    break;
                case $key[7];
                    $key[7]++;
                    break;
                case $key[8];
                    $key[8]++;
                    break;
                case $key[9];
                    $key[9]++;
                default;
            }
            switch ($key[6]) {
                case $key[7];
                    $key[7]++;
                    break;
                case $key[8];
                    $key[8]++;
                    break;
                case $key[9];
                    $key[9]++;
                    break;
                case $key[10];
                    $key[10]++;
                default;
            }
            switch ($key[7]) {
                case $key[8];
                    $key[8]++;
                    break;
                case $key[9];
                    $key[9]++;
                    break;
                case $key[10];
                    $key[10]++;
                    break;
                case $key[11];
                    $key[11]++;
                default;
            }
            switch ($key[8]) {
                case $key[9];
                    $key[9]++;
                    break;
                case $key[10];
                    $key[10]++;
                    break;
                case $key[11];
                    $key[11]++;
                    break;
                case $key[12];
                    $key[12]++;
                default;
            }
            switch ($key[9]) {
                case $key[10];
                    $key[10]++;
                    break;
                case $key[11];
                    $key[11]++;
                    break;
                case $key[12];
                    $key[12]++;
                    break;
                case $key[13];
                    $key[13]++;
                default;
            }
            switch ($key[10]) {
                case $key[11];
                    $key[11]++;
                    break;
                case $key[12];
                    $key[12]++;
                    break;
                case $key[13];
                    $key[13]++;
                    break;
                case $key[14];
                    $key[14]++;
                default;
            }
            switch ($key[11]) {
                case $key[12];
                    $key[12]++;
                    break;
                case $key[13];
                    $key[13]++;
                    break;
                case $key[14];
                    $key[14]++;
                default;
            }
            switch ($key[12]) {
                case $key[13];
                    $key[13]++;
                    break;
                case $key[14];
                    $key[14]++;
                default;
            }
            switch ($key[13]) {
                case $key[14];
                    $key[14]++;
                default;
            }
            $n1[] = $key;

            //  unset($key);
            // var_dump($n1);
        }
        return $n1;
    }

    public function addMais(array $data): void
    {

        $deleteUser = new \App\adms\Models\AdmsClearTable;
        $deleteUser->clearTable("tab_doze");

        foreach ($data as $value) {
            $this->resultJogo = $value;
            $this->conferirSequencia();
            $this->addTab_doze($data);
        }
    }

    public function idCalculo6(int $key): void
    {
        $value = new \App\adms\Models\helper\AdmsRead();
        $value->fullRead("SELECT id From seq_gerada order by id asc limit 1");
        $id = $value->getResult()[0];
        $id = (int) $id['id'];

        $this->id = $id + $key;
        $value = new \App\adms\Models\helper\AdmsRead();
        $value->fullRead("SELECT id, colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz,creatdat
       FROM seq_gerada WHERE id=:id LIMIT :limit", "id={$this->id}&limit=1");
        if ($value->getResult()) {
            $value = $value->getResult();
            $this->resultBd = $value[0];
            $this->result = true;
        } else {
            $this->result = false;
        }
    }

    //CONFERIR AS SEQUENCIA NA TABEL SEQUENCIA
    public function conferirSequencia(): void
    {
        $value = new \App\adms\Models\helper\AdmsRead();
        $value->fullRead("SELECT id  FROM  sequencia ORDER BY id DESC limit 1");
        if ($value->getResult()) {
            $idUltimo = $value->getResult()[0]['id'];

          //  $this->idCalculo6(1);
            //   var_dump( $this->resultBd);
               $this->resultUltimoIdSeq();
            $this->conferirJogo();

            if ($idUltimo != $this->resultJogo['id']) {
                $this->data['id'] = $this->resultJogo['id'];

                $this->data['acertos'] = $this->result;

                $upUser = new \App\adms\Models\helper\AdmsUpdate();
                $upUser->exeUpdate(" sequencia", $this->data, "WHERE id=:id", "id={$this->data['id']}");
                if ($upUser->getResult()) {
                    $this->resultBd = $this->seq_num;

                    $_SESSION['msg'] = "<p style='color:green;'> Jogo Conferido  Com Secesso!</p>";
                    $this->result = true;
                } else {
                    $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Jogo Não Conferido </p>";
                    $this->result = false;
                }
            }
        }
    }

    public function verificar12(array $data)
    {
        $verific = new \App\adms\Models\helper\AdmsRead();
        $verific->exeRead("tab_doze");
        if ($verific->getResult()) {
            $this->resultBd = $verific->getResult();
            foreach ($this->resultBd as $key => $value) {
                extract($value);
                if (($colUm == $data['colUm']) && ($colDois == $data['colDois']) && ($colTres == $data['colTres'])
                    && ($colQuatro == $data['colQuatro']) && ($colCinco == $data['colCinco']) && ($colSeis == $data['colSeis'])
                    && ($colSete == $data['colSete']) && ($colOite == $data['colOite']) /*&& ($colNove == $data['colNove'])
                    && ($colDez == $data['colDez'])/* && ($colOnze == $data['colOnze']) && ($colDoze == $data['colDoze'])/* && ($colDoze == $data['colTrez'])*/
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

    public function addTab_doze(): void
    {
        date_default_timezone_set('America/Sao_Paulo');
        foreach ($this->seq_num as $key => $value) {
            $data[] = $value;
            $valor = sizeof($data);
            if ($valor >= 8) {
                sort($data);
                $tab_doze['colUm'] = $data[0];
                $tab_doze['colDois'] = $data[1];
                $tab_doze['colTres'] = $data[2];
                $tab_doze['colQuatro'] = $data[3];
                $tab_doze['colCinco'] = $data[4];
                $tab_doze['colSeis'] = $data[5];
                $tab_doze['colSete'] = $data[6];
                $tab_doze['colOite'] = $data[7];
                //   $tab_doze['colNove'] = $data[8];
                //   $tab_doze['colDez'] = $data[9];
                // $tab_doze['colOnze'] = $data[10];
                //  $tab_doze['colDoze'] = $data[11];
                //  $tab_doze['colTrez'] = $data[12];

                $tab_doze['creatdat'] = date('Y-m-d H:i:s');
                $this->verificar12($tab_doze);
                if ($this->getIgual()) {
                    // var_dump( $tab_doze);
                    $addJogo = new \App\adms\Models\helper\AdmsCreate();
                    $addJogo->exeCreate("tab_doze",  $tab_doze);
                }
            }
        }
    }

    public function addTab_seis(): void
    {
        // date_default_timezone_set('America/Sao_Paulo');
        $acertos = 6;
        $exeJogo = new \App\adms\Models\helper\AdmsRead();
        $exeJogo->fullRead("SELECT id  FROM  sequencia order by id desc limit 1");
        $ultimaId = $exeJogo->getResult()[0];
        $ultimaId = (int) $ultimaId['id'];
        $ultimaId =  $ultimaId - 1;

        for ($i = 0; $i < 25; $i++) {
            $exeJogo = new \App\adms\Models\helper\AdmsRead();
            $exeJogo->fullRead("SELECT id,colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz,acertos
                 FROM  sequencia where acertos =:acertos && id =:id", "acertos={$acertos}&&id={$ultimaId}");
            //order by id ASC limit 1"
            if ($exeJogo->getResult()) {
                $data1 = $exeJogo->getResult()[0];
                $data[] = $data1;

                $ultimaId = $ultimaId - 1;
            } else {
                $ultimaId = $ultimaId - 1;
            }
        }
        var_dump($data);
    }
    public function addTab_Dez(array $data): void
    {
        $deleteUser = new \App\adms\Models\AdmsClearTable;
        $deleteUser->clearTable("negativos");
        date_default_timezone_set('America/Sao_Paulo');

        $tab_dez['colUm'] = $data[0];
        $tab_dez['colDois'] = $data[1];
        $tab_dez['colTres'] = $data[2];
        $tab_dez['colQuatro'] = $data[3];
        $tab_dez['colCinco'] = $data[4];
        $tab_dez['colSeis'] = $data[5];
        $tab_dez['colSete'] = $data[6];
        $tab_dez['colOite'] = $data[7];
        $tab_dez['colNove'] = $data[8];
        $tab_dez['colDez'] = $data[9];
        $tab_dez['creatdat'] = date('Y-m-d H:i:s');

        $addJogo = new \App\adms\Models\helper\AdmsCreate();
        $addJogo->exeCreate("negativos",  $tab_dez);
    }

    //RECEBE O ID CHEVE PARA A BUSCA E CHAMA OS METODO DE CONFERENCIA DOS DADOS NA TABELA JOGOS
    public function confJogos(): void
    {
        $exeJogo = new \App\adms\Models\helper\AdmsRead();
        $exeJogo->fullRead("SELECT id, colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz,pontos,creatdat
        FROM jogos");

        if (($exeJogo->getResult())/* && ($exeJogo->getResult()[0]['pontos'] == 0)*/) {

            $resultJogo = $exeJogo->getResult();
            foreach ($resultJogo as $value) {
                $this->resultJogo = $value;
                $this->tableJogos();
            }
        } else {
            $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Jogos já conferidos ou não existe jogos para conferir! </p>";
            $this->result = false;
        }
    }

    //buscar sequensia que mais saiu
    public function resultMais(): void
    {
        $value = new \App\adms\Models\helper\AdmsRead();
        $value->fullRead("SELECT id,colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz,creatdat 
        FROM calculo");
        if ($value->getResult()) {
            $value = $value->getResult();
            $this->resultBd = $value[0];
        } else {
            $this->result = false;
        }
    }
    //buscar sequencia que menso saiu
    public function resultMenos(): void
    {
        $value = new \App\adms\Models\helper\AdmsRead();
        $value->fullRead("SELECT id,um,dois,tres,quatro,cinco,seis,sete,oite,nove,dez,onze,doze,trez,quatz,quinz,creatdat FROM negativos");
        if ($value->getResult()) {
            $value = $value->getResult();

            $data = $value[0];

            $this->resultBd['colUm'] = $data['um'];
            $this->resultBd['colDois'] = $data['dois'];
            $this->resultBd['colTres'] = $data['tres'];
            $this->resultBd['colQuatro'] = $data['quatro'];
            $this->resultBd['colCinco'] = $data['cinco'];
            $this->resultBd['colSeis'] = $data['seis'];
            $this->resultBd['colSete'] = $data['sete'];
            $this->resultBd['colOite'] = $data['oite'];
            $this->resultBd['colNove'] = $data['nove'];
            $this->resultBd['colDez'] = $data['dez'];
            $this->resultBd['colOnze'] = $data['onze'];
            $this->resultBd['colDoze'] = $data['doze'];
            $this->resultBd['colTrez'] = $data['trez'];
            $this->resultBd['colQuatz'] = $data['quatz'];
            $this->resultBd['colQuinz'] = $data['quinz'];
        } else {
            $this->result = false;
        }
    }

    //busca a ultima sequencia incerida na tabela sequencia
    public function resultUltimoId(): void
    {
        $value = new \App\adms\Models\helper\AdmsRead();
        $value->fullRead("SELECT id, colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,
        colDoze,colTrez,colQuatz,colQuinz,acertos,creatdat FROM sequencia ORDER BY id DESC LIMIT 1");
        if ($value->getResult()) {
            $value = $value->getResult();
            $this->resultBd = $value[0];
            $this->result = true;
        } else {
            $this->result = false;
        }
    }

    //CONFERIR SEQUENCIA NA TABELA JOGOS 
    public function tableJogos(): void
    {
        $this->resultUltimoIdSeq();

        if ($this->getResult()) {
            $this->conferirJogo();
            $this->data['id'] = $this->resultJogo['id'];
            $this->data['pontos'] = $this->result;

            $upUser = new \App\adms\Models\helper\AdmsUpdate();
            $upUser->exeUpdate("jogos", $this->data, "WHERE id=:id", "id={$this->data['id']}");
            if ($upUser->getResult()) {

                $_SESSION['msg'] = "<p style='color:green;'> Jogo Conferido  Com Secesso!</p>";
                $this->result = true;
            } else {
                $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Jogo Não Conferido </p>";
                $this->result = false;
            }
        } else {
            $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Adcione o Resultado do dia para Conferir </p>";
            $this->result = false;
        }
    }

    //REALIZA A COMPARAÇÃO DOS DADOS RECEBIDO DA CONTROLE COM OS DADOS OBTIDO NACLASS
    public function conferirJogo(): void
    {
        $pont = 0;
        $num = $this->resultJogo;
        $valor = $this->resultBd;

        unset($this->seq_num);
        switch ($num['colUm']) {
            case $valor['colUm']:
                $this->seq_num['colUm'] = $valor['colUm'];
                $pont++;
                break;
            case $valor['colDois']:
                $this->seq_num['colUm'] = $valor['colDois'];
                $pont++;
                break;

            case $valor['colTres']:
                $this->seq_num['colUm'] = $valor['colTres'];
                $pont++;
                break;
            case $valor['colQuatro']:
                $this->seq_num['colUm'] = $valor['colQuatro'];
                $pont++;
                break;
            case $valor['colCinco']:
                $this->seq_num['colUm'] = $valor['colCinco'];
                $pont++;
                break;
            case $valor['colSeis']:
                $this->seq_num['colUm'] = $valor['colSeis'];
                $pont++;
                break;
            case $valor['colSete']:
                $this->seq_num['colUm'] = $valor['colSete'];
                $pont++;
                break;
            case $valor['colOite']:
                $this->seq_num['colUm'] = $valor['colOite'];
                $pont++;
                break;
            case $valor['colNove']:
                $this->seq_num['colUm'] = $valor['colNove'];
                $pont++;
                break;
            case $valor['colDez']:
                $this->seq_num['colUm'] = $valor['colDez'];
                $pont++;

                break;
            case $valor['colOnze']:
                $this->seq_num['colUm'] = $valor['colOnze'];
                $pont++;
                break;
            case $valor['colDoze']:
                $this->seq_num['colUm'] = $valor['colDoze'];
                $pont++;
                break;
            case $valor['colTrez']:
                $this->seq_num['colUm'] = $valor['colTrez'];
                $pont++;
                break;
            case $valor['colQuatz']:
                $this->seq_num['colUm'] = $valor['colQuatz'];
                $pont++;
                break;
            case $valor['colQuinz']:
                $this->seq_num['colUm'] = $valor['colQuinz'];
                $pont++;

            default;
        }
        switch ($num['colDois']) {
            case $valor['colUm']:
                $this->seq_num['colDois'] = $valor['colUm'];
                $pont++;
                break;
            case $valor['colDois']:
                $this->seq_num['colDois'] = $valor['colDois'];
                $pont++;
                break;
            case $valor['colTres']:
                $this->seq_num['colDois'] = $valor['colTres'];
                $pont++;
                break;
            case $valor['colQuatro']:
                $this->seq_num['colDois'] = $valor['colQuatro'];
                $pont++;
                break;
            case $valor['colCinco']:
                $this->seq_num['colDois'] = $valor['colCinco'];
                $pont++;
                break;
            case $valor['colSeis']:
                $this->seq_num['colDois'] = $valor['colSeis'];
                $pont++;
                break;
            case $valor['colSete']:
                $this->seq_num['colDois'] = $valor['colSete'];
                $pont++;
                break;
            case $valor['colOite']:
                $this->seq_num['colDois'] = $valor['colOite'];
                $pont++;
                break;
            case $valor['colNove']:
                $this->seq_num['colDois'] = $valor['colNove'];
                $pont++;
                break;
            case $valor['colDez']:
                $this->seq_num['colDois'] = $valor['colDez'];
                $pont++;

                break;
            case $valor['colOnze']:
                $this->seq_num['colDois'] = $valor['colOnze'];
                $pont++;
                break;
            case $valor['colDoze']:
                $this->seq_num['colDois'] = $valor['colDoze'];
                $pont++;
                break;
            case $valor['colTrez']:
                $this->seq_num['colDois'] = $valor['colTrez'];
                $pont++;
                break;
            case $valor['colQuatz']:
                $this->seq_num['colDois'] = $valor['colQuatz'];
                $pont++;
                break;
            case $valor['colQuinz']:
                $this->seq_num['colDois'] = $valor['colQuinz'];
                $pont++;
            default;
        }
        switch ($num['colTres']) {
            case $valor['colUm']:
                $this->seq_num['colTres'] = $valor['colUm'];
                $pont++;
                break;
            case $valor['colDois']:
                $this->seq_num['colTres'] = $valor['colDois'];
                $pont++;
                break;
            case $valor['colTres']:
                $this->seq_num['colTres'] = $valor['colTres'];
                $pont++;
                break;
            case $valor['colQuatro']:
                $this->seq_num['colTres'] = $valor['colQuatro'];
                $pont++;
                break;
            case $valor['colCinco']:
                $this->seq_num['colTres'] = $valor['colCinco'];
                $pont++;
                break;
            case $valor['colSeis']:
                $this->seq_num['colTres'] = $valor['colSeis'];
                $pont++;
                break;
            case $valor['colSete']:
                $this->seq_num['colTres'] = $valor['colSete'];
                $pont++;
                break;
            case $valor['colOite']:
                $this->seq_num['colTres'] = $valor['colOite'];
                $pont++;
                break;
            case $valor['colNove']:
                $this->seq_num['colTres'] = $valor['colNove'];
                $pont++;
                break;
            case $valor['colDez']:
                $this->seq_num['colTres'] = $valor['colDez'];
                $pont++;

                break;
            case $valor['colOnze']:
                $this->seq_num['colTres'] = $valor['colOnze'];
                $pont++;
                break;
            case $valor['colDoze']:
                $this->seq_num['colTres'] = $valor['colDoze'];
                $pont++;
                break;
            case $valor['colTrez']:
                $this->seq_num['colTres'] = $valor['colTrez'];
                $pont++;
                break;
            case $valor['colQuatz']:
                $this->seq_num['colTres'] = $valor['colQuatz'];
                $pont++;
                break;
            case $valor['colQuinz']:
                $this->seq_num['colTres'] = $valor['colQuinz'];
                $pont++;

            default;
        }
        switch ($num['colQuatro']) {
            case $valor['colUm']:
                $this->seq_num['colQuatro'] = $valor['colUm'];
                $pont++;
                break;
            case $valor['colDois']:
                $this->seq_num['colQuatro'] = $valor['colDois'];
                $pont++;
                break;
            case $valor['colTres']:
                $this->seq_num['colQuatro'] = $valor['colTres'];
                $pont++;
                break;
            case $valor['colQuatro']:
                $this->seq_num['colQuatro'] = $valor['colQuatro'];
                $pont++;
                break;
            case $valor['colCinco']:
                $this->seq_num['colQuatro'] = $valor['colCinco'];
                $pont++;
                break;
            case $valor['colSeis']:
                $this->seq_num['colQuatro'] = $valor['colSeis'];
                $pont++;
                break;
            case $valor['colSete']:
                $this->seq_num['colQuatro'] = $valor['colSete'];
                $pont++;
                break;
            case $valor['colOite']:
                $this->seq_num['colQuatro'] = $valor['colOite'];
                $pont++;
                break;
            case $valor['colNove']:
                $this->seq_num['colQuatro'] = $valor['colNove'];
                $pont++;
                break;
            case $valor['colDez']:
                $this->seq_num['colQuatro'] = $valor['colDez'];
                $pont++;

                break;
            case $valor['colOnze']:
                $this->seq_num['colQuatro'] = $valor['colOnze'];
                $pont++;
                break;
            case $valor['colDoze']:
                $this->seq_num['colQuatro'] = $valor['colDoze'];
                $pont++;
                break;
            case $valor['colTrez']:
                $this->seq_num['colQuatro'] = $valor['colTrez'];
                $pont++;
                break;
            case $valor['colQuatz']:
                $this->seq_num['colQuatro'] = $valor['colQuatz'];
                $pont++;
                break;
            case $valor['colQuinz']:
                $this->seq_num['colQuatro'] = $valor['colQuinz'];
                $pont++;

            default;
        }
        switch ($num['colCinco']) {
            case $valor['colUm']:
                $this->seq_num['colCinco'] = $valor['colUm'];
                $pont++;
                break;
            case $valor['colDois']:
                $this->seq_num['colCinco'] = $valor['colDois'];
                $pont++;
                break;
            case $valor['colTres']:
                $this->seq_num['colCinco'] = $valor['colTres'];
                $pont++;
                break;
            case $valor['colQuatro']:
                $this->seq_num['colCinco'] = $valor['colQuatro'];
                $pont++;
                break;
            case $valor['colCinco']:
                $this->seq_num['colCinco'] = $valor['colCinco'];
                $pont++;
                break;
            case $valor['colSeis']:
                $this->seq_num['colCinco'] = $valor['colSeis'];
                $pont++;
                break;
            case $valor['colSete']:
                $this->seq_num['colCinco'] = $valor['colSete'];
                $pont++;
                break;
            case $valor['colOite']:
                $this->seq_num['colCinco'] = $valor['colOite'];
                $pont++;
                break;
            case $valor['colNove']:
                $this->seq_num['colCinco'] = $valor['colNove'];
                $pont++;
                break;
            case $valor['colDez']:
                $this->seq_num['colCinco'] = $valor['colDez'];
                $pont++;

                break;
            case $valor['colOnze']:
                $this->seq_num['colCinco'] = $valor['colOnze'];
                $pont++;
                break;
            case $valor['colDoze']:
                $this->seq_num['colCinco'] = $valor['colDoze'];
                $pont++;
                break;
            case $valor['colTrez']:
                $this->seq_num['colCinco'] = $valor['colTrez'];
                $pont++;
                break;
            case $valor['colQuatz']:
                $this->seq_num['colCinco'] = $valor['colQuatz'];
                $pont++;
                break;
            case $valor['colQuinz']:
                $this->seq_num['colCinco'] = $valor['colQuinz'];
                $pont++;

            default;
        }
        switch ($num['colSeis']) {
            case $valor['colUm']:
                $this->seq_num['colSeis'] = $valor['colUm'];
                $pont++;
                break;
            case $valor['colDois']:
                $this->seq_num['colSeis'] = $valor['colDois'];
                $pont++;
                break;
            case $valor['colTres']:
                $this->seq_num['colSeis'] = $valor['colTres'];
                $pont++;
                break;
            case $valor['colQuatro']:
                $this->seq_num['colSeis'] = $valor['colQuatro'];
                $pont++;
                break;
            case $valor['colCinco']:
                $this->seq_num['colSeis'] = $valor['colCinco'];
                $pont++;
                break;
            case $valor['colSeis']:
                $this->seq_num['colSeis'] = $valor['colSeis'];
                $pont++;
                break;
            case $valor['colSete']:
                $this->seq_num['colSeis'] = $valor['colSete'];
                $pont++;
                break;
            case $valor['colOite']:
                $this->seq_num['colSeis'] = $valor['colOite'];
                $pont++;
                break;
            case $valor['colNove']:
                $this->seq_num['colSeis'] = $valor['colNove'];
                $pont++;
                break;
            case $valor['colDez']:
                $this->seq_num['colSeis'] = $valor['colDez'];
                $pont++;

                break;
            case $valor['colOnze']:
                $this->seq_num['colSeis'] = $valor['colOnze'];
                $pont++;
                break;
            case $valor['colDoze']:
                $this->seq_num['colSeis'] = $valor['colDoze'];
                $pont++;
                break;
            case $valor['colTrez']:
                $this->seq_num['colSeis'] = $valor['colTrez'];
                $pont++;
                break;
            case $valor['colQuatz']:
                $this->seq_num['colSeis'] = $valor['colQuatz'];
                $pont++;
                break;
            case $valor['colQuinz']:
                $this->seq_num['colSeis'] = $valor['colQuinz'];
                $pont++;

            default;
        }
        switch ($num['colSete']) {
            case $valor['colUm']:
                $this->seq_num['colSete'] = $valor['colUm'];
                $pont++;
                break;
            case $valor['colDois']:
                $this->seq_num['colSete'] = $valor['colDois'];
                $pont++;
                break;
            case $valor['colTres']:
                $this->seq_num['colSete'] = $valor['colTres'];
                $pont++;
                break;
            case $valor['colQuatro']:
                $this->seq_num['colSete'] = $valor['colQuatro'];
                $pont++;
                break;
            case $valor['colCinco']:
                $this->seq_num['colSete'] = $valor['colCinco'];
                $pont++;
                break;
            case $valor['colSeis']:
                $this->seq_num['colSete'] = $valor['colSeis'];
                $pont++;
                break;
            case $valor['colSete']:
                $this->seq_num['colSete'] = $valor['colSete'];
                $pont++;
                break;
            case $valor['colOite']:
                $this->seq_num['colSete'] = $valor['colOite'];
                $pont++;
                break;
            case $valor['colNove']:
                $this->seq_num['colSete'] = $valor['colNove'];
                $pont++;
                break;
            case $valor['colDez']:
                $this->seq_num['colSete'] = $valor['colDez'];
                $pont++;

                break;
            case $valor['colOnze']:
                $this->seq_num['colSete'] = $valor['colOnze'];
                $pont++;
                break;
            case $valor['colDoze']:
                $this->seq_num['colSete'] = $valor['colDoze'];
                $pont++;
                break;
            case $valor['colTrez']:
                $this->seq_num['colSete'] = $valor['colTrez'];
                $pont++;
                break;
            case $valor['colQuatz']:
                $this->seq_num['colSete'] = $valor['colQuatz'];
                $pont++;
                break;
            case $valor['colQuinz']:
                $this->seq_num['colSete'] = $valor['colQuinz'];
                $pont++;

            default;
        }
        switch ($num['colOite']) {
            case $valor['colUm']:
                $this->seq_num['colOite'] = $valor['colUm'];
                $pont++;
                break;
            case $valor['colDois']:
                $this->seq_num['colOite'] = $valor['colDois'];
                $pont++;
                break;
            case $valor['colTres']:
                $this->seq_num['colOite'] = $valor['colTres'];
                $pont++;
                break;
            case $valor['colQuatro']:
                $this->seq_num['colOite'] = $valor['colQuatro'];
                $pont++;
                break;
            case $valor['colCinco']:
                $this->seq_num['colOite'] = $valor['colCinco'];
                $pont++;
                break;
            case $valor['colSeis']:
                $this->seq_num['colOite'] = $valor['colSeis'];
                $pont++;
                break;
            case $valor['colSete']:
                $this->seq_num['colOite'] = $valor['colSete'];
                $pont++;
                break;
            case $valor['colOite']:
                $this->seq_num['colOite'] = $valor['colOite'];
                $pont++;
                break;
            case $valor['colNove']:
                $this->seq_num['colOite'] = $valor['colNove'];
                $pont++;
                break;
            case $valor['colDez']:
                $this->seq_num['colOite'] = $valor['colDez'];
                $pont++;

                break;
            case $valor['colOnze']:
                $this->seq_num['colOite'] = $valor['colOnze'];
                $pont++;
                break;
            case $valor['colDoze']:
                $this->seq_num['colOite'] = $valor['colDoze'];
                $pont++;
                break;
            case $valor['colTrez']:
                $this->seq_num['colOite'] = $valor['colTrez'];
                $pont++;
                break;
            case $valor['colQuatz']:
                $this->seq_num['colOite'] = $valor['colQuatz'];
                $pont++;
                break;
            case $valor['colQuinz']:
                $this->seq_num['colOite'] = $valor['colQuinz'];
                $pont++;

            default;
        }
        switch ($num['colNove']) {
            case $valor['colUm']:
                $this->seq_num['colNove'] = $valor['colUm'];
                $pont++;
                break;
            case $valor['colDois']:
                $this->seq_num['colNove'] = $valor['colDois'];
                $pont++;
                break;
            case $valor['colTres']:
                $this->seq_num['colNove'] = $valor['colTres'];
                $pont++;
                break;
            case $valor['colQuatro']:
                $this->seq_num['colNove'] = $valor['colQuatro'];
                $pont++;
                break;
            case $valor['colCinco']:
                $this->seq_num['colNove'] = $valor['colCinco'];
                $pont++;
                break;
            case $valor['colSeis']:
                $this->seq_num['colNove'] = $valor['colSeis'];
                $pont++;
                break;
            case $valor['colSete']:
                $this->seq_num['colNove'] = $valor['colSete'];
                $pont++;
                break;
            case $valor['colOite']:
                $this->seq_num['colNove'] = $valor['colOite'];
                $pont++;
                break;
            case $valor['colNove']:
                $this->seq_num['colNove'] = $valor['colNove'];
                $pont++;
                break;
            case $valor['colDez']:
                $this->seq_num['colNove'] = $valor['colDez'];
                $pont++;

                break;
            case $valor['colOnze']:
                $this->seq_num['colNove'] = $valor['colOnze'];
                $pont++;
                break;
            case $valor['colDoze']:
                $this->seq_num['colNove'] = $valor['colDoze'];
                $pont++;
                break;
            case $valor['colTrez']:
                $this->seq_num['colNove'] = $valor['colTrez'];
                $pont++;
                break;
            case $valor['colQuatz']:
                $this->seq_num['colNove'] = $valor['colQuatz'];
                $pont++;
                break;
            case $valor['colQuinz']:
                $this->seq_num['colNove'] = $valor['colQuinz'];
                $pont++;

            default;
        }
        switch ($num['colDez']) {
            case $valor['colUm']:
                $this->seq_num['colDez'] = $valor['colUm'];
                $pont++;
                break;
            case $valor['colDois']:
                $this->seq_num['colDez'] = $valor['colDois'];
                $pont++;
                break;
            case $valor['colTres']:
                $this->seq_num['colDez'] = $valor['colTres'];
                $pont++;
                break;
            case $valor['colQuatro']:
                $this->seq_num['colDez'] = $valor['colQuatro'];
                $pont++;
                break;
            case $valor['colCinco']:
                $this->seq_num['colDez'] = $valor['colCinco'];
                $pont++;
                break;
            case $valor['colSeis']:
                $this->seq_num['colDez'] = $valor['colSeis'];
                $pont++;
                break;
            case $valor['colSete']:
                $this->seq_num['colDez'] = $valor['colSete'];
                $pont++;
                break;
            case $valor['colOite']:
                $this->seq_num['colDez'] = $valor['colOite'];
                $pont++;
                break;
            case $valor['colNove']:
                $this->seq_num['colDez'] = $valor['colNove'];
                $pont++;
                break;
            case $valor['colDez']:
                $this->seq_num['colDez'] = $valor['colDez'];
                $pont++;

                break;
            case $valor['colOnze']:
                $this->seq_num['colDez'] = $valor['colOnze'];
                $pont++;
                break;
            case $valor['colDoze']:
                $this->seq_num['colDez'] = $valor['colDoze'];
                $pont++;
                break;
            case $valor['colTrez']:
                $this->seq_num['colDez'] = $valor['colTrez'];
                $pont++;
                break;
            case $valor['colQuatz']:
                $this->seq_num['colDez'] = $valor['colQuatz'];
                $pont++;
                break;
            case $valor['colQuinz']:
                $this->seq_num['colDez'] = $valor['colQuinz'];
                $pont++;

            default;
        }
        switch ($num['colOnze']) {
            case $valor['colUm']:
                $this->seq_num['colOnze'] = $valor['colUm'];
                $pont++;
                break;
            case $valor['colDois']:
                $this->seq_num['colOnze'] = $valor['colDois'];
                $pont++;
                break;
            case $valor['colTres']:
                $this->seq_num['colOnze'] = $valor['colTres'];
                $pont++;
                break;
            case $valor['colQuatro']:
                $this->seq_num['colOnze'] = $valor['colQuatro'];
                $pont++;
                break;
            case $valor['colCinco']:
                $this->seq_num['colOnze'] = $valor['colCinco'];
                $pont++;
                break;
            case $valor['colSeis']:
                $this->seq_num['colOnze'] = $valor['colSeis'];
                $pont++;
                break;
            case $valor['colSete']:
                $this->seq_num['colOnze'] = $valor['colSete'];
                $pont++;
                break;
            case $valor['colOite']:
                $this->seq_num['colOnze'] = $valor['colOite'];
                $pont++;
                break;
            case $valor['colNove']:
                $this->seq_num['colOnze'] = $valor['colNove'];
                $pont++;
                break;
            case $valor['colDez']:
                $this->seq_num['colOnze'] = $valor['colDez'];
                $pont++;

                break;
            case $valor['colOnze']:
                $this->seq_num['colOnze'] = $valor['colOnze'];
                $pont++;
                break;
            case $valor['colDoze']:
                $this->seq_num['colOnze'] = $valor['colDoze'];
                $pont++;
                break;
            case $valor['colTrez']:
                $this->seq_num['colOnze'] = $valor['colTrez'];
                $pont++;
                break;
            case $valor['colQuatz']:
                $this->seq_num['colOnze'] = $valor['colQuatz'];
                $pont++;
                break;
            case $valor['colQuinz']:
                $this->seq_num['colOnze'] = $valor['colQuinz'];
                $pont++;

            default;
        }
        switch ($num['colDoze']) {
            case $valor['colUm']:
                $this->seq_num['colDoze'] = $valor['colUm'];
                $pont++;
                break;
            case $valor['colDois']:
                $this->seq_num['colDoze'] = $valor['colDois'];
                $pont++;
                break;
            case $valor['colTres']:
                $this->seq_num['colDoze'] = $valor['colTres'];
                $pont++;
                break;
            case $valor['colQuatro']:
                $this->seq_num['colDoze'] = $valor['colQuatro'];
                $pont++;
                break;
            case $valor['colCinco']:
                $this->seq_num['colDoze'] = $valor['colCinco'];
                $pont++;
                break;
            case $valor['colSeis']:
                $this->seq_num['colDoze'] = $valor['colSeis'];
                $pont++;
                break;
            case $valor['colSete']:
                $this->seq_num['colDoze'] = $valor['colSete'];
                $pont++;
                break;
            case $valor['colOite']:
                $this->seq_num['colDoze'] = $valor['colOite'];
                $pont++;
                break;
            case $valor['colNove']:
                $this->seq_num['colDoze'] = $valor['colNove'];
                $pont++;
                break;
            case $valor['colDez']:
                $this->seq_num['colDoze'] = $valor['colDez'];
                $pont++;

                break;
            case $valor['colOnze']:
                $this->seq_num['colDoze'] = $valor['colOnze'];
                $pont++;
                break;
            case $valor['colDoze']:
                $this->seq_num['colDoze'] = $valor['colDoze'];
                $pont++;
                break;
            case $valor['colTrez']:
                $this->seq_num['colDoze'] = $valor['colTrez'];
                $pont++;
                break;
            case $valor['colQuatz']:
                $this->seq_num['colDoze'] = $valor['colQuatz'];
                $pont++;
                break;
            case $valor['colQuinz']:
                $this->seq_num['colDoze'] = $valor['colQuinz'];
                $pont++;

            default;
        }
        switch ($num['colTrez']) {
            case $valor['colUm']:
                $this->seq_num['colTrez'] = $valor['colUm'];
                $pont++;
                break;
            case $valor['colDois']:
                $this->seq_num['colTrez'] = $valor['colDois'];
                $pont++;
                break;
            case $valor['colTres']:
                $this->seq_num['colTrez'] = $valor['colTres'];
                $pont++;
                break;
            case $valor['colQuatro']:
                $this->seq_num['colTrez'] = $valor['colQuatro'];
                $pont++;
                break;
            case $valor['colCinco']:
                $this->seq_num['colTrez'] = $valor['colCinco'];
                $pont++;
                break;
            case $valor['colSeis']:
                $this->seq_num['colTrez'] = $valor['colSeis'];
                $pont++;
                break;
            case $valor['colSete']:
                $this->seq_num['colTrez'] = $valor['colSete'];
                $pont++;
                break;
            case $valor['colOite']:
                $this->seq_num['colTrez'] = $valor['colOite'];
                $pont++;
                break;
            case $valor['colNove']:
                $this->seq_num['colTrez'] = $valor['colNove'];
                $pont++;
                break;
            case $valor['colDez']:
                $this->seq_num['colTrez'] = $valor['colDez'];
                $pont++;

                break;
            case $valor['colOnze']:
                $this->seq_num['colTrez'] = $valor['colOnze'];
                $pont++;
                break;
            case $valor['colDoze']:
                $this->seq_num['colTrez'] = $valor['colDoze'];
                $pont++;
                break;
            case $valor['colTrez']:
                $this->seq_num['colTrez'] = $valor['colTrez'];
                $pont++;
                break;
            case $valor['colQuatz']:
                $this->seq_num['colTrez'] = $valor['colQuatz'];
                $pont++;
                break;
            case $valor['colQuinz']:
                $this->seq_num['colTrez'] = $valor['colQuinz'];
                $pont++;

            default;
        }
        switch ($num['colQuatz']) {
            case $valor['colUm']:
                $this->seq_num['colQuatz'] = $valor['colUm'];
                $pont++;
                break;
            case $valor['colDois']:
                $this->seq_num['colQuatz'] = $valor['colDois'];
                $pont++;
                break;
            case $valor['colTres']:
                $this->seq_num['colQuatz'] = $valor['colTres'];
                $pont++;
                break;
            case $valor['colQuatro']:
                $this->seq_num['colQuatz'] = $valor['colQuatro'];
                $pont++;
                break;
            case $valor['colCinco']:
                $this->seq_num['colQuatz'] = $valor['colCinco'];
                $pont++;
                break;
            case $valor['colSeis']:
                $this->seq_num['colQuatz'] = $valor['colSeis'];
                $pont++;
                break;
            case $valor['colSete']:
                $this->seq_num['colQuatz'] = $valor['colSete'];
                $pont++;
                break;
            case $valor['colOite']:
                $this->seq_num['colQuatz'] = $valor['colOite'];
                $pont++;
                break;
            case $valor['colNove']:
                $this->seq_num['colQuatz'] = $valor['colNove'];
                $pont++;
                break;
            case $valor['colDez']:
                $this->seq_num['colQuatz'] = $valor['colDez'];
                $pont++;

                break;
            case $valor['colOnze']:
                $this->seq_num['colQuatz'] = $valor['colOnze'];
                $pont++;
                break;
            case $valor['colDoze']:
                $this->seq_num['colQuatz'] = $valor['colDoze'];
                $pont++;
                break;
            case $valor['colTrez']:
                $this->seq_num['colQuatz'] = $valor['colTrez'];
                $pont++;
                break;
            case $valor['colQuatz']:
                $this->seq_num['colQuatz'] = $valor['colQuatz'];
                $pont++;
                break;
            case $valor['colQuinz']:
                $this->seq_num['colQuatz'] = $valor['colQuinz'];
                $pont++;

            default;
        }
        switch ($num['colQuinz']) {
            case $valor['colUm']:
                $this->seq_num['colQuinz'] = $valor['colUm'];
                $pont++;
                break;
            case $valor['colDois']:
                $this->seq_num['colQuinz'] = $valor['colDois'];
                $pont++;
                break;
            case $valor['colTres']:
                $this->seq_num['colQuinz'] = $valor['colTres'];
                $pont++;
                break;
            case $valor['colQuatro']:
                $this->seq_num['colQuinz'] = $valor['colQuatro'];
                $pont++;
                break;
            case $valor['colCinco']:
                $this->seq_num['colQuinz'] = $valor['colCinco'];
                $pont++;
                break;
            case $valor['colSeis']:
                $this->seq_num['colQuinz'] = $valor['colSeis'];
                $pont++;
                break;
            case $valor['colSete']:
                $this->seq_num['colQuinz'] = $valor['colSete'];
                $pont++;
                break;
            case $valor['colOite']:
                $this->seq_num['colQuinz'] = $valor['colOite'];
                $pont++;
                break;
            case $valor['colNove']:
                $this->seq_num['colQuinz'] = $valor['colNove'];
                $pont++;
                break;
            case $valor['colDez']:
                $this->seq_num['colQuinz'] = $valor['colDez'];
                $pont++;

                break;
            case $valor['colOnze']:
                $this->seq_num['colQuinz'] = $valor['colOnze'];
                $pont++;
                break;
            case $valor['colDoze']:
                $this->seq_num['colQuinz'] = $valor['colDoze'];
                $pont++;
                break;
            case $valor['colTrez']:
                $this->seq_num['colQuinz'] = $valor['colTrez'];
                $pont++;
                break;
            case $valor['colQuatz']:
                $this->seq_num['colQuinz'] = $valor['colQuatz'];
                $pont++;
                break;
            case $valor['colQuinz']:
                $this->seq_num['colQuinz'] = $valor['colQuinz'];
                $pont++;

            default;
        };

        $this->result = $pont;
        //  $this->result['seq'] = $this->seq_num;
    }
}
