<?php
namespace App\adms\Models\helper;
if(!defined('RSR1937NA')){
    //   header("Location: /");
    die("Erro: pagina nao encontrada");
   }
   
use mysqli;
use PDO;
use PDOException;
//ARQUIVO DE CONECÇÃO COM O BANCO
 abstract class AdmsConn
{
    private string $db = DB;
    private string $host = HOST;
    private string $user = USER;
    private string $pass = PASS;
    private string $dbname = DBNAME;
    private string|int $port = PORT;
    protected object $connect;
    
    protected function connectDb():object
    { 
        try{//com a porta
          $this->connect = new PDO($this->db .':host='.$this->host .';port='.$this->port . ';dbname='.$this->dbname , $this->user, $this->pass );
         //Sem a porta
        //   $this->connect = new PDO($this->db . ':host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->pass);
         //  echo "Conexão realizada com Sucesso! <br>";
           return $this->connect;
        }catch(PDOException $err){
            die('Erro:001, entre em contato com o suporte! '. EMAILADM);
        }
    }

}


