<?php

namespace App\adms\Models;

if (!defined('RSR1937NA')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

// Cadastrar configuração de email no banco de dados
class AdmsValores
{
    private int $saldo; // RECEBE O SALDO DA CLASS
    private int $id; // RECEBE OS IDS
    private array|null $data; //$data Recebe as informações do formulário 
    private bool $result; //$result Recebe o resultado da class
    private array|int $resultBd; //$result Recebe o resultado da busca no banco
    private  $credito;
    private  $debito;
    private int $valor = 0; //$result Recebe o resultado da busca de acertos

    function getResult(): bool
    {
        return $this->result;
    }
    function getResultBd(): array|int
    {
        return $this->resultBd;
    }

    public function viewValor(array $data = null): void
    {
        //ler os pontos da tabela jogos, e executa o metodo de verifivar valor
        $viewAdmsRead = new \App\adms\Models\helper\AdmsRead();
        $viewAdmsRead->fullRead("SELECT pontos FROM jogos WHERE pontos > 10");
        if (!empty($viewAdmsRead->getResult())) {
            $this->resultBd = $viewAdmsRead->getResult();
            $this->credito($this->resultBd);
        } else {
            $this->resultBd = [];
            $this->credito($this->resultBd);
        }
        //ler o id da tabela jogos, e executa o metodo de contagem
        $viewAdmsRead = new \App\adms\Models\helper\AdmsRead();
        $viewAdmsRead->fullRead("SELECT count(id) AS cont_id FROM jogos");
        if (!empty($viewAdmsRead->getResult())) {
            $this->resultBd = $viewAdmsRead->getResult();
            $this->debito($this->resultBd[0]);
        } else {
            $this->result = false;
        }
    }
    public function Credito(array $data = null)
    {

        $acertos = $data;
        foreach ($acertos as $key) {
            $this->listValor($key);
        }
        $this->credito = $this->valor;
    }

    private function listValor(array $value): void
    {

        $jogo = $value['pontos'];
        if ($jogo == 11) {
            $this->valor += 5;
        } elseif ($jogo == 12) {
            $this->valor += 10;
        } elseif ($jogo == 13) {
            $this->valor += 20;
        } elseif ($jogo == 14) {
            $this->valor += 1000;
        } elseif ($jogo == 15) {
            $this->valor += 1000000;
        } else {
            $this->valor = 0;
        }
    }
    public function debito(array $value): void
    {
        $this->id = $value['cont_id'];
        $valor = $this->id * 2.5;
        $this->debito = $valor;
        $this->saldo = $this->credito - $this->debito;
        $this->addValue();
    }
    public function addValue(): void
    {
        $viewAdmsRead = new \App\adms\Models\helper\AdmsRead();
        $viewAdmsRead->fullRead("SELECT id FROM valores ORDER BY id DESC LIMIT 1");
        $ids =  $viewAdmsRead->getResult();
        if (!empty($ids)) {
            $data['id'] = $ids[0]['id'] + 1;
        } else {
            $data['id'] = 1;
        }
        $data['valorPos'] = $this->credito;
        $data['valorNeg'] = $this->debito;
        $data['num_jogos'] = $this->id;
        $data['saldo'] = $this->saldo;
        $data['creatdat'] = date("Y-m-d H:i:s");

        $viewAdmsCreat = new \App\adms\Models\helper\AdmsCreate();
        $viewAdmsCreat->exeCreate("valores", $data);
        if ($viewAdmsCreat->getResult()) {
            $this->result = true;
            $this->readValue();
        } else {
            $this->result = true;
        }
    }
    public function readValue(): void
    {
        $viewAdmsRead = new \App\adms\Models\helper\AdmsRead();
        $viewAdmsRead->fullRead("SELECT id,valorPos,valorNeg,num_jogos,saldo,creatdat FROM valores");
        $valores =  $viewAdmsRead->getResult();
        if (!empty($valores)) {
            $totValor = 0;
            foreach ($valores as $key) {
                $totValor += $key['saldo'];
            }
            $this->resultBd = [$valores, $totValor];
            $this->result = true;
        }else{
            $this->result = false;
        }
    }
    /*

        //ler o id da tabela jogos, e executa o metodo de contagem
        $viewAdmsRead = new \App\adms\Models\helper\AdmsRead();
        $viewAdmsRead->fullRead("SELECT count(id) AS cont_id FROM jogos");
        if ($viewAdmsRead->getResult()) {
            $this->resultBd = $viewAdmsRead->getResult();
            $this->countId($this->resultBd[0]);
        } else {
            $_SESSION['msg'] = "<p style='color: #f00;'> ERRO: Não Tem Nenhum jogo Cadastrado </p>";
            $this->result = false;
        }
        //ler os pontos da tabela jogos, e executa o metodo de verifivar valor
        $viewAdmsRead = new \App\adms\Models\helper\AdmsRead();
        $viewAdmsRead->fullRead("SELECT pontos FROM jogos WHERE pontos > 10");
        if ($viewAdmsRead->getResult()) {
            $this->resultBd = $viewAdmsRead->getResult();
            $this->VerificValor($this->resultBd);
        } else {
            $_SESSION['msg'] = "<p style='color: #f00;'>  ERRO: Nenhum Acertos Registrado Nesta Sequencia </p>";
            $this->result = false;
        }
        $this->viewTotsValor();

        //ler o o resultados final  da tabela valores, e envia o resultado para o result
        $viewAdmsRead = new \App\adms\Models\helper\AdmsRead();
        $viewAdmsRead->fullRead("SELECT valorPos,valorNeg,num_jogos,saldo  FROM valores ");
        if ($viewAdmsRead->getResult()) {
            $this->resultBd = $viewAdmsRead->getResult();
        }
    }

    private function viewTotsValor(): void
    {

        //  $saldo =  $this->credito - $this->debito;

        $viewAdmsRead = new \App\adms\Models\helper\AdmsRead();
        $viewAdmsRead->fullRead("SELECT saldo FROM valores");
        if ($viewAdmsRead->getResult()) {
            $data = $viewAdmsRead->getResult();

            $data[0]['saldo'] = $data[0]['saldo'] + $this->credito;
            $data[0]['saldo'] = $data[0]['saldo'] - $this->debito;
        }

        $upAdmsUpdate = new \App\adms\Models\helper\AdmsUpdate();
        $upAdmsUpdate->exeUpdate("valores", $data[0]);
        if ($upAdmsUpdate->getResult()) {
            $this->result = true;
        } else {
            $this->result = false;
        }

        $viewAdmsRead = new \App\adms\Models\helper\AdmsRead();
        $viewAdmsRead->fullRead("SELECT valorPos,valorNeg,num_jogos,saldo  FROM valores ");
        if ($viewAdmsRead->getResult()) {
            $this->resultBd = $viewAdmsRead->getResult();
            $_SESSION['msg'] = "<p style='color:green;'>Execusão de Busca Realizada com Sucesso!<p>";
        } else {
            $_SESSION['msg'] = "<p style='color: #f00;'>  ERRO: Nenhum Valor Registrado Nesta Tabela </p>";
            $this->result = false;
        }
    }
    private function countId(array $data): void
    {
        $jogo = $data['cont_id'];
        $valor = (int) $data['cont_id'];
        $saldo = $valor * 2.5;
        $viewAdmsRead = new \App\adms\Models\helper\AdmsRead();
        $viewAdmsRead->fullRead("SELECT valorNeg FROM valores");
        if ($viewAdmsRead->getResult()) {

            $data = $viewAdmsRead->getResult();
            $data[0]['valorNeg'] =  $data[0]['valorNeg'] + $saldo;
        } else {
            $data[0]['valorNeg'] = $saldo;
        }
        $this->debito = $data[0]['valorNeg'];
        $upAdmsUpdate = new \App\adms\Models\helper\AdmsUpdate();
        $upAdmsUpdate->exeUpdate("valores", $data[0]);
        if ($upAdmsUpdate->getResult()) {
            $this->result = true;
        } else {
            $this->result = false;
        }

        $viewAdmsRead = new \App\adms\Models\helper\AdmsRead();
        $viewAdmsRead->fullRead("SELECT num_jogos  FROM valores");

        if ($viewAdmsRead->getResult()) {
            $num_jogos = $viewAdmsRead->getResult();
            $num_jogos[0]['num_jogos'] =  $num_jogos[0]['num_jogos'] + $jogo;
        } else {
            $num_jogos[0]['num_jogos'] = $jogo;
        }
        $upAdmsUpdate = new \App\adms\Models\helper\AdmsUpdate();
        $upAdmsUpdate->exeUpdate("valores", $num_jogos[0]);
        if ($upAdmsUpdate->getResult()) {
            $this->result = true;
        } else {
            $this->result = false;
        }
    }

    private function VerificValor(array $data): void
    {

        $acertos = $data;
        foreach ($acertos as $key) {

            $this->listValor($key);
            $this->addValor($key);
        }
    }
    private function listValor(array $value): void
    {

        $jogo = $value['pontos'];
        if ($jogo == 11) {
            $this->valor = 5;
        } elseif ($jogo == 12) {
            $this->valor = 10;
        } elseif ($jogo == 13) {
            $this->valor = 20;
        } elseif ($jogo == 14) {
            $this->valor = 1000;
        } elseif ($jogo == 12) {
            $this->valor = 1000000;
        }
    }
    private function addValor(): void
    {
        $viewAdmsRead = new \App\adms\Models\helper\AdmsRead();
        $viewAdmsRead->fullRead("SELECT valorPos FROM valores");
        if ($viewAdmsRead->getResult()) {
            $data = $viewAdmsRead->getResult();
            $data[0]['valorPos'] +=  $this->valor;
        } else {
            $data[0]['valorPos'] = $this->valor;
        }
        $this->credito = $data[0]['valorPos'];
        $upAdmsUpdate = new \App\adms\Models\helper\AdmsUpdate();
        $upAdmsUpdate->exeUpdate("valores", $data[0]);
        if ($upAdmsUpdate->getResult()) {
            $this->result = true;
        } else {
            $this->result = false;
            $_SESSION['msg'] = "<p style='color:#f00;'> Err: Valor Não Cadastrado Com Sucesso!<p>";
        }
    }
}
*/
}
