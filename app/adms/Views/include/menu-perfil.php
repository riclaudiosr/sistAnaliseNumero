<?php
if (!defined('RSR1937NA')) {
    //   header("Location: /");
    die("Erro: pagina nao encontrada");
}

?>
<header>
    <nav class="navbar">
        <div class="navbar-content">
            <div class="bars">
                <i class="fa-solid fa-bars"></i>
            </div>
            <img src="http://localhost/bancoDeDados/mvcAdm/app/adms/assets/img/logo" alt="logo" class="logo" width="30">
        </div>
        <div class="navbar-content">

            <div class="notificacao">
                <i class="fa-solid fa-bell"></i>
                <span class="number">7</span>
                <div class="dropdow-menu">
                    <div class="dropdown-content">
                        <li>
                            <img src="img/homem.png" alt="avatar-usuário-1" width="60">
                            <div class="text">
                                5Lorem ipsum dolor officia molestiae explicabo eligendi cum suscipit.
                            </div>
                        </li>
                        <li>
                            <img src="img/homem.png" alt="avatar-usuário" width="60">
                            <div class="text">
                                8 Lorem ipsum dolor officia molestiae explicabo eligendi cum suscipit.
                            </div>
                        </li>
                    </div>
                </div>
            </div>

            <div class="avatar">
                <img src="http://localhost/bancoDeDados/projeto_jogo/app/adms/assets/img/users/<?php echo $_SESSION['user_id'] . "/" . $_SESSION['user_image']; ?>" alt="imagem-usuario-jpj" class="" width="50">
                <div class="dropdow-menu setting ">
                    <div class="item">
                        <span class="fa-solid fa-user "><a href="<?php echo URLADM ?>view-profile/index"><?php echo  $_SESSION['user_name']; ?></a></i></span>
                    </div>
                    <div class="item">
                        <span id="config" class="icon fa-solid fa-house-user"><a href="<?php echo URLADM ?>view-profile/index">Menu-perfil</a></span>
                    </div>
                    <div class="item">
                        <span class="fa-solid fa-arrow-right-from-bracket"></i><a href="<?php echo URLADM ?>logaut/index">Sair</a></span>
                    </div>
                </div>
            </div>
        </div>

    </nav>
</header>

<article class="content">
    <div class="sidebar">

        <div class="">
            <a href="index.html" class="sidebar-nav ">
                <i class="icon fa-solid fa-house-user"></i><span>Menu</span></a>
        </div>

        <button class="dropdown-btn  <?php //if(isset($_SESSION['perfil'])){echo $_SESSION['perfil']; } ?>">
            <i class="icon fa-solid fa-globe"></i><span>Perfil Usuário</span><i class="fa-solid fa-sort-down"></i>
        </button>
        <div class="dropdown-contener">
            <a href="<?php echo URLADM; ?>edit-profile/index/ <?php echo  $_SESSION['user_id']?>" class="sidebar-nav ">
                <i class="icon fa-solid fa-car"></i><span>Editar perfil</span></a>
            <a href="<?php echo URLADM; ?>edit-Profile-img/index/<?php echo  $_SESSION['user_id']?>" class="sidebar-nav ">
                <i class="icon fa-solid fa-bus"></i><span>Editar Foto</span></a>
            <a href="<?php echo URLADM; ?>edit-profile-password/index/<?php echo  $_SESSION['user_id']?>" class="sidebar-nav ">
                <i class="icon fa-solid fa-plane"></i><span>Editar Senha</span></a>
           
        </div>\
       
        <button class="dropdown-btn" <?php //if(isset($_SESSION['calculo'])){echo  $_SESSION['calculo'];}  ?>>
            <i class="icon fa-solid fa-globe"></i><span>Calculos</span><i class="fa-solid fa-sort-down"></i>
        </button>
        <div class="dropdown-contener">
            <a href="<?php echo URLADM; ?>information-data/index" class="sidebar-nav  ">
                <i class="icon fa-solid fa-car"></i><span>Listar Combinações</span></a>
            <a href="<?php echo URLADM; ?>listar-jogos/index" class="sidebar-nav  <?php // if (isset($_SESSION['active'])) { echo  $_SESSION['active']; }  ?>">
                <i class="icon fa-solid fa-bus"></i><span>Meus Jogos</span></a>
        </div>


        <a href="#" class="sidebar-nav  <?php //if (isset($_SESSION['active'])) { echo  $_SESSION['active'];}  ?>">
            <i class="icon fa-solid fa-bus"></i><span>Meus Resultados</span></a>
        <a href="<?php echo URLADM ?>logaut/index" class="sidebar-nav ">
            <i class="icon fa-solid fa-bus"></i><span>Sair</span></a>
        <a href=" <?php echo URLADM ?> delete-user/index/<?php echo  $_SESSION['user_id'] ?>" onclick="return confirm(\'deseja Excluir Este Perfil')" class="sidebar-nav">
            <i class="icon fa-solid fa-plane"></i><span>Apagar Perfil</span></a>
    </div>