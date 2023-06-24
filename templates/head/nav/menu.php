<?php
use config\generales;
$generales = new generales();
?>
<div class="pull-left menu">
    <?php include $generales->path_base.'templates/head/nav/_menu_responsive.php'?>

    <nav class="navbar text-color-primary">
        <?php include $generales->path_base.'templates/head/nav/_sombra_menu.php'?>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="main-menu">
            <ul class="nav navbar-nav clearfix">
                <?php include $generales->path_base.'templates/head/nav/links/_compramos_tu_casa.php'?>
                <?php include $generales->path_base.'templates/head/nav/links/_elige_tu_hogar.php' ?>
                <?php include $generales->path_base.'templates/head/nav/links/_aviso_privacidad.php'?>
            </ul>
        </div>
    </nav>

</div>
