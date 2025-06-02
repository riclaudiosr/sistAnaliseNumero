<?php
if (!defined('RSR1937NA')) {
    //   header("Location: /");
    die("Erro: pagina nao encontrada");
}
//var_dump($this->data);
if (isset($this->data['form'])) {
    //  var_dump($this->data['form']);
    $valorForm = $this->data['form'];
}
?>

<!-- Inicio do conteudo do administrativo -->
<div class="container">
    <div class="wrapper">
        <div>
            <div class="row">
                <div class="top-list">
                    <span class="title-content">Dados da Tabela Sequencia </span>
                    <div class="top-list-right ">
                        <?php
                        echo "<a href='" . URLADM . "listar-jogos/index' class='btn btn-primary'>MEUS JOGOS</a>";
                        ?>
                    </div>
                    <div class="top-list-right ">
                        <?php
                        echo "<a href='" . URLADM . "add-jogos/index&key=jogos' class='btn btn-primary'>Gerar Jogos</a>";
                        ?>
                    </div>
                    <div class="top-list-right ">
                        <?php
                        echo "<a href='" . URLADM . "result-sequencia/index' class='btn btn-primary'>Conferir</a>";
                        ?>
                    </div>
                    <div class="top-list-right ">
                        <?php
                        echo "<a href='" . URLADM . "dashboard/index' class='btn btn-primary'>Home</a>";
                        ?>
                    </div>
                    <div class="top-list-right ">
                        <?php
                        echo "<a href='" . URLADM . "list-datas2/index' class='btn btn-primary'>Repetição</a>";
                        ?>
                    </div>
                </div>
                <form method="POST" action="">
                    <div>
                        <?php

                        $date_in = "";
                        if (isset($valorForm['date_in'])) {
                            $date_in = $valorForm['date_in'];
                        }
                        ?>
                        <div class="mb-1">
                            <label class="title-input-search" class="form-label">Inicio: </label>
                            <input type="date" name="date_in" id="date_in" class="form-control" placeholder="00/00/0000" value="<?php echo $date_in; ?>">
                        </div>

                        <?php

                        $date_fn = "";
                        if (isset($valorForm['date_fn'])) {
                            $date_fn = $valorForm['date_fn'];
                        }
                        ?>
                        <div class="mb-1">
                            <label class="form-label">Fim: </label>
                            <input type="date" name="date_fn" id="date_fn" class="form-control" placeholder="00/00/0000" value="<?php echo $date_fn; ?>">
                        </div>

                        <div class="column margin-top-search">
                            <button type="submit" name="SendData" class="btn" value="Pesquisar">Pesquisar</button>
                        </div>
                    </div>
                </form>

                <span id="msg"></span>
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
                            <th class="list-head-content">1°</th>
                            <th class="list-head-content table-sm-none">2°</th>
                            <th class="list-head-content table-md-none">3°</th>
                            <th class="list-head-content table-md-none">4°</th>
                            <th class="list-head-content table-md-none">5°</th>
                            <th class="list-head-content table-md-none">6°</th>
                            <th class="list-head-content table-md-none">7°</th>
                            <th class="list-head-content table-md-none">8°</th>
                            <th class="list-head-content table-md-none">9°</th>
                            <th class="list-head-content table-md-none">10°</th>
                            <th class="list-head-content table-md-none">11°</th>
                            <th class="list-head-content table-md-none">12°</th>
                            <th class="list-head-content table-md-none">13°</th>
                            <th class="list-head-content table-md-none">14°</th>
                            <th class="list-head-content table-md-none">15°</th>
                            <th class="list-head-content table-md-none">pontos</th>

                            <th class="list-head-content">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="list-body">
                        <?php
                        foreach ($this->data['listdata'] as $user) {
                            extract($user);
                        ?>
                            <tr>
                                <td class="list-body-content"><?php echo $id; ?></td>
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
                                <td class="list-body-content table-sm-none"><?php echo $acertos; ?></td>


                                <td class="list-body-content">
                                    <div class="dropdown-action">
                                        <button onclick="actionDropdown(<?php echo $id; ?>)" class="dropdown-btn-action">Ações</button>
                                        <div id="actionDropdown<?php echo $id; ?>" class="dropdown-action-item">
                                            <?php
                                            // echo "<a href='" . URLADM . "view-user/index/$id'>Visualizar</a>";
                                            //   echo "<a href='" . URLADM . "edite-user/index/$id'>Editar</a>";
                                            echo "<a href='" . URLADM . "delete-regis/index/$id' onclick='return confirm(\"Tem certeza que deseja excluir este registro?\")'>Apagar</a>";
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
</div>