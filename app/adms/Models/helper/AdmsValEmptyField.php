<?php

namespace App\adms\Models\helper;

if (!defined('RSR1937NA')) {
  //   header("Location: /");
  die("Erro: pagina nao encontrada");
}

//ARQUIVO RELPE DE VALIDAÇÃO DE FORMULARIO EM PHP
class AdmsValEmptyField
{
  private int|array|null $data; // RECEBE OS DADOS PARA VERIFICAÇÃO
  private bool $result = false; // RECEBE O RESULTADO DA CLASSE
  public function getResult()
  {
    return $this->result;
  }

  public function valField(array $data = null)
  {
    $this->data = $data;
    if ((isset($this->data['nickname'])) and ($this->data['nickname'] === "")) {
      unset($this->data['nickname']);
    }
    if (!empty($this->data['new_image'])) {
      unset($this->data['new_image']);
    }
    // var_dump($this->data);
    //verificar e existe alguma teg, se houver retirar
    $this->data = array_map('strip_tags', $this->data);
    // verivicar se existe espasso em branco.
    $this->data = array_map('trim', $this->data);
    //verificar se o array de dados esta vazio
    if (in_array('', $this->data)) {
      //se o array estiver vazio
      $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Necessário Preencher todos os Campos!</p>";
      $this->result = false;
    } else {
      //se o array conter dados
      $this->result = true;
    }
  }
  public function verifique(int|null $data): void
  {
    $this->data = $data;
    if ($this->data != 15) {
      $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Necessário Selecionar 15 Numeros!</p>";
      $this->result = false;
    } else {
      $this->result = true;
    }
  }
  public function emptyCamp(int|array $data): void
  {
    $this->data = $data;
    $senha1 = $this->data['password-1'];
    $senha2 = $this->data['password'];
    if ($senha1 === $senha2) {
      unset($this->data['password-1']);
      unset($this->data['sendEditProfilePass']);
      $this->valField($this->data);
    } else {
      $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Senhas Digitadas Diferentes !</p>";
      $this->result = false;
    }
  }
}
