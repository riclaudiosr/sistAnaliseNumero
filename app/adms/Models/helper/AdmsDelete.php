<?php

namespace App\adms\Models\helper;
if(!defined('RSR1937NA')){
    //   header("Location: /");
    die("Erro: pagina nao encontrada");
   }

use PDOException;

//ARQUIVO RELPE PARA APAGAR DADOS EM BANCO
class AdmsDelete extends AdmsConn
{
  private string $table;
  private string|null $terms;
  private array $value = [];
  private string|null|bool $result;
  private object $delete;
  private string $query;
  private object $conn;

  public function getResult(): string|null|bool
  {
    return $this->result;
  }
  public function exeDelete(string $table, string|null $terms = null, string|null $parseString = null): void
  {
        $this->table = $table;
        $this->terms = $terms;
//coverte o valor que esta no parametro $parseString em um array 
        parse_str($parseString, $this->value);

        $this->query = "DELETE FROM {$this->table} {$this->terms}";

        $this->exeInstruction();
    }
    private function exeInstruction(): void
    {
        $this->connection();
        try {
            $this->delete->execute($this->value);
            $this->result = true;
        } catch (PDOException $err) {
            $this->result = false;
        }
    }

    /**
     * Obtem a conexão com o banco de dados da classe pai "Conn".
     * Prepara uma instrução para execução e retorna um objeto de instrução.
     * 
     * @return void
     */
    private function connection(): void
    {
        $this->conn = $this->connectDb();
        $this->delete = $this->conn->prepare($this->query);
    }
}