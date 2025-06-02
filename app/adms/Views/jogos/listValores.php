<?php
if (!defined('RSR1937NA')) {
    //   header("Location: /");
    die("Erro: pagina nao encontrada");
}
//var_dump($this->data['listdata']);

?>
<div class="container">
    <div class="wrapper">
        <div class=" wrapper-msg">
            <?php
            /*
      if(!empty($this->data)){
        $this->data[] = $this->data;
       // extract($this->data);
      }*/
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
        </div>
        <div class="row">
            <div class="">

            </div>
            <div class="top-list">
                <span class="title-content">Tabela de Valores</span>
                <div class="top-list-right ">
                    <?php
                    echo "<a href='" . URLADM . "list-datas/index' class='btn btn-primary'>LISTAR SEQUENCIA</a>";
                    ?>
                </div>
                <div class="top-list-right ">
                    <?php
                    echo "<a href='" . URLADM . "listar-jogos/index' class='btn btn-primary'>Meus Jogos</a>";
                    ?>
                </div>
                <div class="top-list-right ">
                    <?php
                    //    echo "<a href='" . URLADM . "valores/index' class='btn btn-primary'>Valores</a>";
                    ?>
                </div>
                <div class="top-list-right ">
                    <?php
                    echo "<a href='" . URLADM . "dashboard/index' class='btn btn-primary'>HOME</a>";
                    ?>
                </div>
                <div class="top-list-right ">
                    <?php
                    echo "<a href='" . URLADM . "view-profile/index/{$_SESSION['user_id']}' class='btn btn-primary'>Perfil Usuário</a>";
                    ?>
                </div>
            </div>

            <div class="">
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
            </div>
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
                        <th class="list-head-content">Credido</th>
                        <th class="list-head-content table-sm-none">Debito</th>
                        <th class="list-head-content table-md-none">N° de Jogos</th>
                        <th class="list-head-content table-md-none">Saldo Dia</th>
                        <th class="list-head-content table-md-none">Saldo Total<?php if(isset($this->data[1])) {echo " {$this->data[1]}";}  ?> </th>
                    </tr>
                </thead>
                <tbody class="list-body">
                    <?php
                    //   extract($this->data);

                    foreach ($this->data[0] as $user) {
                        extract($user);
                    ?>
                        <tr>
                            <td class="list-body-content id"><?php echo $id; ?></td>
                            <td class="list-body-content"><?php echo $valorPos; ?></td>
                            <td class="list-body-content table-sm-none"><?php echo $valorNeg; ?></td>
                            <td class="list-body-content"><?php echo $num_jogos; ?></td>
                            <td class="list-body-content"><?php echo $saldo; ?></td>
                            <td class="list-body-content table-sm-none"><?php echo $creatdat; ?></td>

                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>