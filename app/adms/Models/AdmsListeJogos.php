<?php

namespace App\adms\Models;

if (!defined('RSR1937NA')) {
    //   header("Location: /");
    die("Erro: pagina nao encontrada");
}

//ARQUIVO para lista usuários do banco
class AdmsListeJogos
{
    private bool $result; // $result Recebe true quando executar o processo com sucesso e false quando houver erro 
    private array|null $resultBd; //$resultBd Recebe os registros do banco de dados
    private int $page; //$page Recebe o número página 
    private int $limitResult = 25; // $page Recebe a quantidade de registros que deve retornar do banco de dados 
    private string|null $resultPg; // $page Recebe a páginação 
    private array|string|null $data_in; // $searchName Recebe o nome do usuario 
    private object $conn; //$searchEmail Recebe o email do usuario  


    function getResult(): bool
    {
        return $this->result;
    }

    function getResultBd(): array|null
    {
        return $this->resultBd;
    }

    function getResultPg(): string|null
    {
        return $this->resultPg;
    }

    public function listJogos(int $page = null): void
    {
        $contId = new \App\adms\Models\helper\AdmsRead();
        $contId->fullRead("SELECT COUNT(id) AS ids FROM jogos");
        $contId = $contId->getResult();
        if ($contId[0]['ids'] != 0) {

            $this->page = (int) $page ? $page : 1;

            $pagination = new \App\adms\Models\helper\AdmsPagination(URLADM . 'listar-jogos/index');
            $pagination->condition($this->page, $this->limitResult);
            $pagination->pagination("SELECT COUNT(id) AS num_result FROM jogos");

            if ($pagination->getResult()) {
                $this->resultPg = $pagination->getResult();

                $listUsers = new \App\adms\Models\helper\AdmsRead();
                $listUsers->fullRead("SELECT id,colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz,pontos,creatdat
                    FROM jogos 
                    ORDER BY id DESC
                    LIMIT :limit OFFSET :offset", "limit={$this->limitResult}&offset={$pagination->getOffset()}");

                   $this->resultBd = $listUsers->getResult();
                //    var_dump($this->resultBd);
                if ($this->resultBd) {
                    $this->result = true;
                } else {
                    $_SESSION['msg'] = "<p style='color: #f00'>Erro: Nenhum Jogo Encontrado!</p>";
                    $this->result = false;
                }
            }
        } else {
            $this->result = false;
        }
    }
    public function listSearchDatas(int $page = null, array|string|null $data_in): void
    {

        $this->page = (int) $page ? $page : 1;
        $this->data_in = $data_in;

        if (!empty($this->data_in)) {

            $this->searchData();
        }
    }


    public function searchData(): void
    {

        $pagination = new \App\adms\Models\helper\AdmsPagination(URLADM . 'list-datas/index');
        $pagination->condition($this->page, $this->limitResult);

        $pagination->pagination(
            "SELECT COUNT(id) AS num_result 
                            FROM sequencia 
                            WHERE creatdat BETWEEN :date_in AND :date_fn",
            "date_in={$this->data_in['date_in']}&date_fn={$this->data_in['date_fn']}"
        );
        $this->resultPg = $pagination->getResult();

        $listUsers = new \App\adms\Models\helper\AdmsRead();
        $listUsers->fullRead(
            "SELECT id,colUm,colDois,colTres,colQuatro,colCinco,colSeis,colSete,colOite,colNove,colDez,colOnze,colDoze,colTrez,colQuatz,colQuinz,pontos,creatdat
                    FROM jogos
                    WHERE creatdat BETWEEN  :date_in AND :date_fn
                    ORDER BY id DESC
                    LIMIT :limit OFFSET :offset",

            "date_in={$this->data_in['date_in']}&date_fn={$this->data_in['date_fn']}&limit={$this->limitResult}&offset={$pagination->getOffset()}"
        );


        $this->resultBd = $listUsers->getResult();


        if ($this->resultBd) {
            $_SESSION['msg'] = "<p style='color: green'>Registros Selecionados!</p>";

            // $_SESSION['msg'] = "<p style='color: #f00'>Erro: Nenhum dado encontrado 1!</p>";
            $this->result = true;
        } else {
            $_SESSION['msg'] = "<p style='color: #f00'>Erro: Nenhum dado encontrado 2!</p>";
            $this->result = false;
        }
    }
}
