<?php
if (!defined('RSR1937NA')) {
    //   header("Location: /");
    die("Erro: pagina nao encontrada");
}

if(isset($this->data['calculoActive'])){
    $_SESSION['calculo'] = $this->data['calculoActive'];
  }else{
    $_SESSION['calculo'] = "nao-active";
  }

//echo "<a href='" . URLADM . "list-users/index'>Usuários </a><br>";

?>

<div class="container">
    <div class="content">
        <div class="wrapper">
            <div class="content-adm-alert">
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
            </div>
            <div class="row">
                <div class="top-list">
                    <span class="title-content">Jogos e Estatisticas </span>
                    <div class="top-list-right ">
                        <?php
                        echo "<a href='" . URLADM . "view-profile/index/{$_SESSION['user_id']}' class='btn btn-primary'>Perfil Usuário</a>";
                        ?>
                    </div>
                    <div class="top-list-right ">
                        <?php
                        echo "<a href='" . URLADM . "listar-jogos/index' class='btn btn-primary'>Meus Jogos</a>";
                        ?>
                    </div>
                </div>
                <div class="content-adm-alert">
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>
                </div>

                <div class="wrapper2">

                    <div class="row2">
                        <div class="box2 box-first2">
                            <div class="divSelect ">
                                <div class=" selectI">
                                    <span>
                                        <?php echo $this->data[0]['num'][0]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[0]['num'][1]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[0]['num'][2]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[0]['num'][3]; ?>

                                    </span>
                                    <span>
                                        <?php echo $this->data[0]['num'][4]; ?>
                                    </span>
                                </div>
                                <div class="selectI">
                                    <span>
                                        <?php echo $this->data[0]['num'][5]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[0]['num'][6]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[0]['num'][7]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[0]['num'][8]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[0]['num'][9]; ?>
                                    </span>
                                </div>
                                <div class="selectI">
                                    <span>
                                        <?php echo $this->data[0]['num'][10]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[0]['num'][11]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[0]['num'][12]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[0]['num'][13]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[0]['num'][14]; ?>
                                    </span>
                                </div>

                            </div>
                            <div class="top-listInfo">
                                <span>Jogo Numero 1</span>
                                <div class="top-list-right ">
                                    <?php
                                    echo "<a href='" . URLADM . "Add-Jogos/index?key=1' class='btn btn-primary'>Jogos</a>";
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="box2 box-second2">
                            <div class="divSelect ">
                                <div class=" selectI">
                                    <span>
                                        <?php echo $this->data[1]['num'][0]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[1]['num'][1]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[1]['num'][2]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[1]['num'][3]; ?>

                                    </span>
                                    <span>
                                        <?php echo $this->data[1]['num'][4]; ?>
                                    </span>
                                </div>
                                <div class="selectI">
                                    <span>
                                        <?php echo $this->data[1]['num'][5]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[1]['num'][6]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[1]['num'][7]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[1]['num'][8]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[1]['num'][9]; ?>
                                    </span>
                                </div>
                                <div class="selectI">
                                    <span>
                                        <?php echo $this->data[1]['num'][10]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[1]['num'][11]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[1]['num'][12]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[1]['num'][13]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[1]['num'][14]; ?>
                                    </span>
                                </div>

                            </div>
                            <div class="top-listInfo">
                                <span>Jogo Numero 2</span>
                                <div class="top-list-right ">
                                    <?php
                                    echo "<a href='" . URLADM . "Add-Jogos/index?key=2' class='btn btn-primary'>Jogos</a>";
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="box2 box-trird2">
                            <div class="divSelect ">
                                <div class=" selectI">
                                    <span>
                                        <?php echo $this->data[2]['num'][0]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[2]['num'][1]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[2]['num'][2]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[2]['num'][3]; ?>

                                    </span>
                                    <span>
                                        <?php echo $this->data[2]['num'][4]; ?>
                                    </span>
                                </div>
                                <div class="selectI">
                                    <span>
                                        <?php echo $this->data[2]['num'][5]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[2]['num'][6]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[2]['num'][7]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[2]['num'][8]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[2]['num'][9]; ?>
                                    </span>
                                </div>
                                <div class="selectI">
                                    <span>
                                        <?php echo $this->data[2]['num'][10]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[2]['num'][11]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[2]['num'][12]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[2]['num'][13]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[2]['num'][14]; ?>
                                    </span>
                                </div>

                            </div>
                            <div class="top-listInfo">
                                <span>Jogo Numero 3</span>
                                <div class="top-list-right ">
                                    <?php
                                    echo "<a href='" . URLADM . "Add-Jogos/index?key=3' class='btn btn-primary'>Jogos</a>";
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="box2 box-fourth2">
                            <div class="divSelect ">
                                <div class=" selectI">
                                    <span>
                                        <?php echo $this->data[3]['num'][0]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[3]['num'][1]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[3]['num'][2]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[3]['num'][3]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[3]['num'][4]; ?>
                                    </span>
                                </div>
                                <div class="selectI">
                                    <span>
                                        <?php echo $this->data[3]['num'][5]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[3]['num'][6]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[3]['num'][7]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[3]['num'][8]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[3]['num'][9]; ?>
                                    </span>
                                </div>
                                <div class="selectI">
                                    <span>
                                        <?php echo $this->data[3]['num'][10]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[3]['num'][11]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[3]['num'][12]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[3]['num'][13]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[3]['num'][14]; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="top-listInfo">
                                <span>Jogo Numero 4</span>
                                <div class="top-list-right ">
                                    <?php
                                    echo "<a href='" . URLADM . "Add-Jogos/index?key=4' class='btn btn-primary'>Jogos</a>";
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="box2 box-fifth2">
                            <div class="divSelect ">
                                <div class=" selectI">
                                    <span>
                                        <?php echo $this->data[4]['num'][0]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[4]['num'][1]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[4]['num'][2]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[4]['num'][3]; ?>

                                    </span>
                                    <span>
                                        <?php echo $this->data[4]['num'][4]; ?>
                                    </span>
                                </div>
                                <div class="selectI">
                                    <span>
                                        <?php echo $this->data[4]['num'][5]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[4]['num'][6]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[4]['num'][7]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[4]['num'][8]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[4]['num'][9]; ?>
                                    </span>
                                </div>
                                <div class="selectI">
                                    <span>
                                        <?php echo $this->data[4]['num'][10]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[4]['num'][11]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[4]['num'][12]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[4]['num'][13]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[4]['num'][14]; ?>
                                    </span>
                                </div>

                            </div>
                            <div class="top-listInfo">
                                <span>Jogo Numero 5</span>
                                <div class="top-list-right ">
                                    <?php
                                    echo "<a href='" . URLADM . "Add-Jogos/index?key=5' class='btn btn-primary'>Jogos</a>";
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="box2 box-sexth2">
                            <div class="divSelect ">
                                <div class=" selectI">
                                    <span>
                                        <?php echo $this->data[5]['num'][0]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[5]['num'][1]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[5]['num'][2]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[5]['num'][3]; ?>

                                    </span>
                                    <span>
                                        <?php echo $this->data[5]['num'][4]; ?>
                                    </span>
                                </div>
                                <div class="selectI">
                                    <span>
                                        <?php echo $this->data[5]['num'][5]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[5]['num'][6]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[5]['num'][7]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[5]['num'][8]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[5]['num'][9]; ?>
                                    </span>
                                </div>
                                <div class="selectI">
                                    <span>
                                        <?php echo $this->data[5]['num'][10]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[5]['num'][11]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[5]['num'][12]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[5]['num'][13]; ?>
                                    </span>
                                    <span>
                                        <?php echo $this->data[5]['num'][14]; ?>
                                    </span>
                                </div>

                            </div>
                            <div class="top-listInfo">
                                <span>Jogo Numero 6</span>
                                <div class="top-list-right ">
                                    <?php
                                    echo "<a href='" . URLADM . "Add-Jogos/index?key=6' class='btn btn-primary'>Jogos</a>";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-3">
                        <div class="box-1">
                            <h3> Valores do Calculo </h3>
                            <div class="box-1-info ">
                                <div>
                                    <h6> Jogo Numero 1 <span><?php echo $this->data[0]['soma']; ?>%</span></h6>
                                </div>
                                <div>
                                    <h6>Jogo Numero 2 <span><?php echo $this->data[1]['soma']; ?>%</span></h6>
                                </div>
                                <div>
                                    <h6>Jogo Numero 3 <span><?php echo $this->data[2]['soma']; ?>%</span></h6>
                                </div>
                                <div>
                                    <h6>Jogo Numero 4 <span><?php echo $this->data[3]['soma']; ?>%</span></h6>
                                </div>
                                <div>
                                    <h6>Jogo Numero 5 <span><?php echo $this->data[4]['soma']; ?>%</span></h6>
                                </div>
                                <div>
                                    <h6>Jogo Numero 6 <span><?php echo $this->data[5]['soma']; ?>%</span></h6>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>





        </div>



        <?php //echo $this->data['pagination']; 
        ?>
    </div>

</div>
</div>