<?php
if (!defined('RSR1937NA')) {
    //   header("Location: /");
    die("Erro: pagina nao encontrada");
}
if (isset($this->data['form'])) {
    $valorForm = $this->data['form'];
}
?>

<!-- Inicio do conteudo do administrativo -->
<div class="container">
    <div class="wrapper">
    <div class=" wrapper-msg">
      <?php
      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
      ?>
    </div>
        <div class="row">
            <div class="top-list">
                <span class="title-content">Listar Usuários</span>
                <div class="top-list-right ">
                    <?php
                    echo "<a href='" . URLADM . "add-users/index' class='btn btn-primary'>Cadastrar</a>";
                    ?>
                </div>
            </div>

            <div class="">
                <form method="POST" action="">
                    <div >
                        <?php
                        $search_name = "";
                        if (isset($valorForm['search_name'])) {
                            $search_name = $valorForm['search_name'];
                        }
                        ?>
                        <div class="mb-1">
                            <label class="title-input-search" class="form-label">Nome: </label>
                            <input type="text" name="search_name" id="search_name" class="form-control" placeholder="Pesquisar pelo nome..." value="<?php echo $search_name; ?>">
                        </div>

                        <?php
                        $search_email = "";
                        if (isset($valorForm['search_email'])) {
                            $search_email = $valorForm['search_email'];
                        }
                        ?>
                        <div class="mb-1">
                            <label class="form-label">E-mail: </label>
                            <input type="text" name="search_email" id="search_email" class="form-control" placeholder="Pesquisar pelo e-mail..." value="<?php echo $search_email; ?>">
                        </div>

                        <div class="column margin-top-search">
                            <button type="submit" name="SendSearchUser" class="btn" value="Pesquisar">Pesquisar</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="content-adm-alert">
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
            </div>
            <table class="table-list">
                <thead class="list-head">
                    <tr>
                        <th class="list-head-content">ID</th>
                        <th class="list-head-content">Nome</th>
                        <th class="list-head-content table-sm-none">E-mail</th>
                        <th class="list-head-content table-md-none">Situação</th>
                        <th class="list-head-content table-md-none">Nivel de Acesso</th>
                        <th class="list-head-content">Ações</th>
                    </tr>
                </thead>
                <tbody class="list-body">
                    <?php
                    foreach ($this->data['listUsers'] as $user) {
                        extract($user);
                    ?>
                        <tr>
                            <td class="list-body-content"><?php echo $id; ?></td>
                            <td class="list-body-content"><?php echo $name_usr; ?></td>
                            <td class="list-body-content table-sm-none"><?php echo $email; ?></td>
                            <td class="list-body-content table-md-none">
                                <?php echo "<span style='color: $color'>$name_sit</span>"; ?>
                            </td>
                            <td class="list-body-content table-sm-none"><?php echo $nivel_acess; ?></td>
                            <td class="list-body-content">
                                <div class="dropdown-action">
                                    <button onclick="actionDropdown(<?php echo $id; ?>)" class="dropdown-btn-action">Ações</button>
                                    <div id="actionDropdown<?php echo $id; ?>" class="dropdown-action-item">
                                        <?php
                                        echo "<a href='" . URLADM . "view-user/index/$id'>Visualizar</a>";
                                        echo "<a href='" . URLADM . "edite-user/index/$id'>Editar</a>";
                                        echo "<a href='" . URLADM . "delete-user/index/$id' onclick='return confirm(\"Tem certeza que deseja excluir este registro?\")'>Apagar</a>";
                                        ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

            <?php echo $this->data['pagination']; ?>
        </div>
    </div>
</div>