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
if(isset($this->data['active']['img'])){
    $_SESSION['img'] = "active";
  }else{
    $_SESSION['img'] = "";
  }
//REDIRECIONAMENTE PARA A PAGINA PERFIL

?>
<div class="container">
    <div class="wrapper">
        <div class="row">
            <div class="top-list">
                <span class="title-content">Edite Foto do Perfil</span>
                <div class="top-list-right ">
                    <?php
                    echo "<a href='" . URLADM . "view-profile/index/{$_SESSION['user_id']}' class='btn btn-primary'>Perfil</a>";
                    ?>
                </div>
            </div>
            <form method="POST" action="" id="formEditProfileimg" enctype="multipart/form-data">
                <div>
                    <label>Imagem:<span style="color: #f00;">*</span> </label>
                    <input type="file" name="new_image" id="new_image" onchange="inputFileImg()" required><br>
                    <?php
                    if ((!empty($valorForm['image'])) and (file_exists("app/adms/assets/img/users/" . $_SESSION['user_id'] . "/" . $valorForm['image']))) {
                        $old_image = URLADM . "app/adms/assets/img/users/" . $_SESSION['user_id'] . "/" . $valorForm['image'];
                    } else {
                        $old_image = URLADM . "app/adms/assets/img/users/avatar.jpg";
                    }
                    ?>
                    <div id="imgHelp" class="form-text">Selecione uma imagem jpg ou phg. <span style="color:#f00;">* Campos obrigatórios</span></div>
                </div>
                <span id="preview-img">
                    <img src="<?php echo " $old_image"; ?>" alt="Imagem" style="width:100px; height:100px;">
                </span>
                <div>
                    <button type="submit" class="btn btn-primary" name="SendEditProfimg" value="Salvar">Salvar</button>
                </div>

            </form>
        </div>
    </div>
</div>