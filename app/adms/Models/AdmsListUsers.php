<?php

namespace App\adms\Models;

if (!defined('RSR1937NA')) {
  //   header("Location: /");
  die("Erro: pagina nao encontrada");
}

//ARQUIVO para lista usuários do banco
class AdmsListUsers
{
    private bool $result;// $result Recebe true quando executar o processo com sucesso e false quando houver erro 
    private array|null $resultBd;//$resultBd Recebe os registros do banco de dados
    private int $page;//$page Recebe o número página 
    private int $limitResult = 25;// $page Recebe a quantidade de registros que deve retornar do banco de dados 
    private string|null $resultPg;// $page Recebe a páginação 
    private string|null $searchName; // $searchName Recebe o nome do usuario 
    private string|null $searchEmail; //$searchEmail Recebe o email do usuario  
    private string|null $searchNameValue;// $searchNameValue Recebe o nome do usuario 
    private string|null $searchEmailValue; // $searchEmailValue Recebe o e-mail do usuario 


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
    
    public function listUsers(int $page = null): void
    {
        $this->page = (int) $page ? $page : 1;

        $pagination = new \App\adms\Models\helper\AdmsPagination(URLADM . 'list-users/index');
        $pagination->condition($this->page, $this->limitResult);
        $pagination->pagination("SELECT COUNT(usr.id) AS num_result FROM adms_users usr");
        $this->resultPg = $pagination->getResult();

        $listUsers = new \App\adms\Models\helper\AdmsRead();
        $listUsers->fullRead("SELECT usr.id, usr.name AS name_usr, usr.email, usr.adms_sits_user_id, usr.adms_access_levels_id,
                    sit.name AS name_sit,levels.name AS nivel_acess, col.color
                    FROM adms_users AS usr
                    INNER JOIN adms_sits_users AS sit ON sit.id=usr.adms_sits_user_id
                    INNER JOIN adms_colors AS col ON col.id=sit.adms_color_id
                    INNER JOIN adms_access_levels AS levels ON levels.id=usr.adms_access_levels_id
                    ORDER BY usr.id DESC
                    LIMIT :limit OFFSET :offset", "limit={$this->limitResult}&offset={$pagination->getOffset()}");

        $this->resultBd = $listUsers->getResult();
        if ($this->resultBd) {
            $this->result = true;
        } else {
            $_SESSION['msg'] = "<p style='color: #f00'>Erro: Nenhum usuário encontrado!</p>";
            $this->result = false;
        }
    }

 
    public function listSearchUsers(int $page = null, string|null $search_name, string|null $search_email): void
    {
     
        $this->page = (int) $page ? $page : 1;
        $this->searchName = trim($search_name);
        $this->searchEmail = trim($search_email);

        $this->searchNameValue = "%" . $this->searchName . "%";
        $this->searchEmailValue = "%" . $this->searchEmail . "%";

        if ((!empty($this->searchName)) and (!empty($this->searchEmail))) {
            $this->searchUserNameEmail();
        } elseif ((!empty($this->searchName)) and (empty($this->searchEmail))) {
            $this->searchUserName();
        } elseif ((empty($this->searchName)) and (!empty($this->searchEmail))) {
           $this->searchUserEmail();
        } else {
            $this->searchUserNameEmail();
        }
    }

    
    public function searchUserName(): void
    {
        $pagination = new \App\adms\Models\helper\AdmsPagination(URLADM . 'list-users/index', "?search_name={$this->searchName}&search_email={$this->searchEmail}");
        $pagination->condition($this->page, $this->limitResult);
        $pagination->pagination("SELECT COUNT(usr.id) AS num_result 
                            FROM adms_users usr
                            WHERE name LIKE :search_name", "search_name={$this->searchNameValue}");
        $this->resultPg = $pagination->getResult();

        $listUsers = new \App\adms\Models\helper\AdmsRead();
        $listUsers->fullRead("SELECT usr.id, usr.name AS name_usr, usr.email, usr.adms_sits_user_id,
                    sit.name AS name_sit,
                    col.color
                    FROM adms_users AS usr
                    INNER JOIN adms_sits_users AS sit ON sit.id=usr.adms_sits_user_id
                    INNER JOIN adms_colors AS col ON col.id=sit.adms_color_id
                    WHERE usr.name LIKE :search_name 
                    ORDER BY usr.id DESC
                    LIMIT :limit OFFSET :offset", "search_name={$this->searchNameValue}&limit={$this->limitResult}&offset={$pagination->getOffset()}");

        $this->resultBd = $listUsers->getResult();
        if ($this->resultBd) {
            $this->result = true;
        } else {
            $_SESSION['msg'] = "<p style='color: #f00'>Erro: Nenhum usuário encontrado!</p>";
            $this->result = false;
        }
    }
    
    public function searchUserEmail(): void
    {
        $pagination = new \App\adms\Models\helper\AdmsPagination(URLADM . 'list-users/index', "?search_name={$this->searchName}&search_email={$this->searchEmail}");
        $pagination->condition($this->page, $this->limitResult);
        $pagination->pagination("SELECT COUNT(usr.id) AS num_result 
                            FROM adms_users usr
                            WHERE email LIKE :search_email", "search_email={$this->searchEmailValue}");
        $this->resultPg = $pagination->getResult();

        $listUsers = new \App\adms\Models\helper\AdmsRead();
        $listUsers->fullRead("SELECT usr.id, usr.name AS name_usr, usr.email, usr.adms_sits_user_id,
                    sit.name AS name_sit,
                    col.color
                    FROM adms_users AS usr
                    INNER JOIN adms_sits_users AS sit ON sit.id=usr.adms_sits_user_id
                    INNER JOIN adms_colors AS col ON col.id=sit.adms_color_id
                    WHERE usr.email LIKE :search_email
                    ORDER BY usr.id DESC
                    LIMIT :limit OFFSET :offset", "search_email={$this->searchEmailValue}&limit={$this->limitResult}&offset={$pagination->getOffset()}");

        $this->resultBd = $listUsers->getResult();
        if ($this->resultBd) {
            $this->result = true;
        } else {
            $_SESSION['msg'] = "<p style='color: #f00'>Erro: Nenhum usuário encontrado!</p>";
            $this->result = false;
        }
    }

   
    public function searchUserNameEmail(): void
    { 
        $pagination = new \App\adms\Models\helper\AdmsPagination(URLADM . 'list-users/index', "?search_name={$this->searchName}&search_email={$this->searchEmail}");
        $pagination->condition($this->page, $this->limitResult);
        $pagination->pagination("SELECT COUNT(usr.id) AS num_result 
                            FROM adms_users usr
                            WHERE name LIKE :search_name 
                            OR email LIKE :search_email", "search_name={$this->searchNameValue}&search_email={$this->searchEmailValue}");
        $this->resultPg = $pagination->getResult();

        $listUsers = new \App\adms\Models\helper\AdmsRead();
        $listUsers->fullRead("SELECT usr.id, usr.name AS name_usr, usr.email, usr.adms_sits_user_id,
                    sit.name AS name_sit,
                    col.color
                    FROM adms_users AS usr
                    INNER JOIN adms_sits_users AS sit ON sit.id=usr.adms_sits_user_id
                    INNER JOIN adms_colors AS col ON col.id=sit.adms_color_id
                    WHERE usr.name LIKE :search_name 
                    OR usr.email LIKE :search_email
                    ORDER BY usr.id DESC
                    LIMIT :limit OFFSET :offset", "search_name={$this->searchNameValue}&search_email={$this->searchEmailValue}&limit={$this->limitResult}&offset={$pagination->getOffset()}");

        $this->resultBd = $listUsers->getResult();
        if ($this->resultBd) {
            $this->result = true;
        } else {
            $_SESSION['msg'] = "<p style='color: #f00'>Erro: Nenhum usuário encontrado!</p>";
            $this->result = false;
        }
    }
 
}
