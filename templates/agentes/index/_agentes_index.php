<?php
use config\generales;
$generales = new generales();
?>
<section class="section agents section-color-primary">
    <div class="container">
        <h2 class="section-title text-center"><span>Agentes</span></h2>
        <div class="row-fluid">
            <?php include $generales->path_base.'templates/agentes/index/_carrusel_agentes.php' ?>
        </div>
    </div>
</section><!-- /.agencies -->
