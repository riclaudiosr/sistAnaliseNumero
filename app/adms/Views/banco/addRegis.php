<?php
if (!defined('RSR1937NA')) {
  //   header("Location: /");
  die("Erro: pagina nao encontrada");
}

if (isset($this->data['form'])) {
  $valorForm = $this->data['form'];
}
if (isset($_SESSION['msg'])) {
  echo $_SESSION['msg'];
 
  unset($_SESSION['msg']);
}


?>
<style>
  .selectI span {
    padding: 10px;
    background: wheat;
    margin: 7px;
    border-radius: 40px;
  }

  .selectI {
    margin-bottom: 25px;
  }
</style>
<div class="container">
  <span id="msg"></span>
  <div class="selectI">
    <h2>Cadastrar Numeros</h2>
  </div>


  <div>

    <form action="" method="POST" id="form-addRegis">
      <div class="row-5 divSelect">
        <div class="row-1 selectI">
          <span >
            <input type="checkbox" name="um[]" value="1">01
          </span>
          <span>
            <input type="checkbox" name="um[]" value="2">02
          </span>
          <span>
            <input type="checkbox" name="um[]" value="3">03
          </span>
          <span>
            <input type="checkbox" name="um[]" value="4">04
          </span>
          <span>
            <input type="checkbox" name="um[]" value="5">05
          </span>
        </div>
        <div class="row-1 selectI">
          <span>
            <input type="checkbox" name="um[]" value="6">06
          </span>
          <span>
            <input type="checkbox" name="um[]" value="7">07
          </span>
          <span>
            <input type="checkbox" name="um[]" value="8">08
          </span>
          <span>
            <input type="checkbox" name="um[]" value="9">09
          </span>
          <span>
            <input type="checkbox" name="um[]" value="10">10
          </span>
        </div>
        <div class="row-1 selectI">
          <span>
            <input type="checkbox" name="um[]" value="11">11
          </span>
          <span>
            <input type="checkbox" name="um[]" value="12">12
          </span>
          <span>
            <input type="checkbox" name="um[]" value="13">13
          </span>
          <span>
            <input type="checkbox" name="um[]" value="14">14
          </span>
          <span>
            <input type="checkbox" name="um[]" value="15">15
          </span>
        </div>
        <div class="row-1 selectI">
          <span>
            <input type="checkbox" name="um[]" value="16">16
          </span>
          <span>
            <input type="checkbox" name="um[]" value="17">17
          </span>
          <span>
            <input type="checkbox" name="um[]" value="18">18
          </span>
          <span>
            <input type="checkbox" name="um[]" value="19">19
          </span>
          <span>
            <input type="checkbox" name="um[]" value="20">20
          </span>
        </div>
        <div class="row-1 selectI">
          <span>
            <input type="checkbox" name="um[]" value="21">21
          </span>
          <span>
            <input type="checkbox" name="um[]" value="22">22
          </span>
          <span>
            <input type="checkbox" name="um[]" value="23">23
          </span>
          <span>
            <input type="checkbox" name="um[]" value="24">24
          </span>
          <span>
            <input type="checkbox" name="um[]" value="25">25
          </span>
        </div>
      </div>
      <div class="row-1 divSubmit">
        <input type="submit" class="btn btn-success" name="SendFormRegis" value="Enviar">
      </div>
    </form>


  </div>
</div>