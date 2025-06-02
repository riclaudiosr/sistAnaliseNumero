<?php
if (!defined('RSR1937NA')) {
  //   header("Location: /");
  die("Erro: pagina nao encontrada");
}

?>
<?php
if (!empty($this->data['viewProfile'])) {
  if (isset($this->data['sidebarActive'])) {
    $_SESSION['perfil'] = $this->data['sidebarActive'];
  } else {
    $_SESSION['perfil'] = "nao-active";
  }
  //  $_SESSION['active'] = $this->data['sidebarActive'];
  extract($this->data['viewProfile'][0]);

  if ((!empty($image)) and (file_exists("app/adms/assets/img/users/" . $_SESSION['user_id'] . "/$image"))) {
    $imagem = "<img src='" . URLADM . "app/adms/assets/img/users/" . $_SESSION['user_id'] . "/$image' width='100' height='100'<br><br>";
  } else {
    $imagem = "<img src='" . URLADM . "app/adms/assets/img/users/avatarChildrin' width='100' height='100'<br><br>";
  }
}
?>
<div class="wrapper">

  <div class="container-perfil">
    <div class="container-usuario">
      <div>

        <span>Nome: </span><?php echo $name;  ?>
      </div>

      <div>
        <span>Email: </span><?php echo $email;  ?>
      </div>
      <div>
        <span>Usuário: </span><?php echo $user;  ?>
      </div>
    </div>
  </div>
  <div class="container-pagina">
    <div class="container-jogo">
      <div class="wrapper">
        <div class="row">
          <div class="top-list">
            <span class="title-content">Listar</span>
            <div class="top-list-right">
              <a href="form.html"><button class="btn-success">Cadrastrar</button></a>
              <!--<button type="button" class="btn-success"><i class="fa-solid fa-square-plus"></i></button>-->
            </div>
          </div>
          <table class="table-list">
            <thead class="list-head">
              <tr>
                <th class="list-head-content">ID</th>
                <th class="list-head-content">1°</th>
                <th class="list-head-content table-sm-none">2°</th>
                <th class="list-head-content table-md-none">3°</th>
                <th class="list-head-content table-md-none tm-g">4°</th>
                <th class="list-head-content table-md-none tm-g">5°</th>
                <th class="list-head-content table-md-none tm-g">6°</th>
                <th class="list-head-content table-md-none tm-g">7°</th>
                <th class="list-head-content ">8°</th>
                <th class="list-head-content table-md-none">9°</th>
                <th class="list-head-content table-md-none tm-g">10°</th>
                <th class="list-head-content table-md-none tm-g">11°</th>
                <th class="list-head-content table-md-none tm-g">12°</th>
                <th class="list-head-content table-md-none">13°</th>
                <th class="list-head-content table-md-none">14°</th>
                <th class="list-head-content table-md-none">15°</th>
                <th class="list-head-content table-md-none">Acertos</th>
                <th class="list-head-content">Ações</th>
              </tr>
            </thead>
            <!--
            <tbody class="list-body">
              <?php
              foreach ($this->data['listdata'] as $user) {
                extract($user);
              ?>
                <tr>
                  <td class="list-body-content id"><?php echo $id; ?></td>
                  <td class="list-body-content"><?php echo $colUm; ?></td>
                  <td class="list-body-content table-sm-none"><?php echo $colDois; ?></td>
                  <td class="list-body-content"><?php echo $colTres; ?></td>
                  <td class="list-body-content"><?php echo $colQuatro; ?></td>
                  <td class="list-body-content table-sm-none"><?php echo $colCinco; ?></td>
                  <td class="list-body-content"><?php echo $colSeis; ?></td>
                  <td class="list-body-content"><?php echo $colSete; ?></td>
                  <td class="list-body-content table-sm-none"><?php echo $colOite; ?></td>
                  <td class="list-body-content"><?php echo $colNove; ?></td>
                  <td class="list-body-content"><?php echo $colDez; ?></td>
                  <td class="list-body-content table-sm-none"><?php echo $colOnze; ?></td>

                  <td class="list-body-content"><?php echo $colDoze; ?></td>
                  <td class="list-body-content"><?php echo $colTrez; ?></td>
                  <td class="list-body-content"><?php echo $colQuatz; ?></td>
                  <td class="list-body-content table-sm-none"><?php echo $colQuinz; ?></td>
                  <td class="list-body-content table-sm-none"><?php echo $pontos; ?></td>-->
                  <td class="list-body-content">

                    <a href="#"><button type="button" class="btn-danger"><i class="fa-solid fa-trash-can"></i></button></a>
                  </td>

                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>


          </tr>
          </tbody>
          </table>

          <div class="content-pagination">
            <div class="pagination">
              <a href="#">&laquo;</a>
              <a href="#">1</a>
              <a href="#">2</a>
              <a href="#" class="active">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#">&raquo;</a>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" containeer-result">

    </div>

  </div>

</div>