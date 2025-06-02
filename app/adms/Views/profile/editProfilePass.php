<?php
if (!defined('RSR1937NA')) {
  //   header("Location: /");
  die("Erro: pagina nao encontrada");
}

if (isset($this->data['form'])) {
  $valorForm = $this->data['form'];
}
if (isset($this->data['form'][0])) {
  $valorForm = $this->data['form'][0];
}


//var_dump($valorForm=$this->data['form'][0]);
?>
<div class="container">
  <div class="wrapper">
    <div class="row">
      <div class="top-list">
        <span class="title-content">Edite Senha de Acesso</span>
        <div class="top-list-right ">
          <?php
          echo "<a href='" . URLADM . "view-profile/index/{$_SESSION['user_id']}' class='btn btn-primary'>Perfil</a>";
          ?>
        </div>
      </div>
      <div>
        <form method="POST" id="formeditProfilePass">
          <label for="password" class="form-label">Senha<span style="color:#f00;">*</span></label>
          <?php
          $password = "";
          if (isset($valorForm['password'])) {
            $password = $valorForm['password'];
          }
          ?>
          <input type="password" class="form-control" name="password-1" id="password-1" placeholder="Digite a nova senha" onkeyup="passwordStrength()" autocomplete="on" value="<?php echo $password; ?>" required>
          <div id="password" class="form-text">Digite a Sua Nova Senha.<span style="color:#f00;">* Campos obrigatórios</span>
            <span id="msgViewStrength"></span>
            <input type="password" class="form-control" name="password" id="password-2" placeholder="Digite a nova senha" onkeyup="passwordStrength()" autocomplete="on" value="<?php echo $password; ?>" required>
            <div id="password" class="form-text">Repita Sua Nova Senha.<span style="color:#f00;">* Campos obrigatórios</span>
              <span id="msgViewStrength"></span>
            </div>

            <button type="submit" class="btn btn-primary" name="sendEditProfilePass" value="Salva">Salvar</button><br>
        </form>
      </div>
    </div>
  </div>
</div>