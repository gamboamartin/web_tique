<?php
use config\generales;
$generales = new generales();

?>
<div class="col-md-12 col-md-offset-0  owl-corousel-box agents-corousel" id='agents-corousel'>
    <div class="left-owl-carousel">


        <?php include $generales->path_base.'templates/agentes/index/_ficha_agente.php' ?>

    </div>
    <?php include $generales->path_base.'templates/agentes/index/links/_boton_atras.php' ?>
    <?php include $generales->path_base.'templates/agentes/index/links/_boton_adelante.php' ?>


</div>
