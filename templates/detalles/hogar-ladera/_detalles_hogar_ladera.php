<?php
use config\generales;
$generales = new generales();
?>
<div class="widget widget-box box-container widget-overview">
    <div class="widget-header text-uppercase">
        <h2>Detalles</h2>
    </div>
    <ul class="list-overview">
        <?php include $generales->path_base.'templates/detalles/hogar-ladera/_links_detalles.php' ?>
    </ul>
</div><!-- /. widget-OVERVIEW -->
