<?php
use config\generales;
include "./init.php";
require './vendor/autoload.php';
$generales = new generales();
?>

<section class="search-form color-primary parallax">
    <h3 class="hidden">Search</h3>
    <div class="container">
        <form action="<?php echo $generales->url_base; ?>" method="post" >
            <div class="row">
                <?php include 'templates/busqueda/index/links/_proposito_busqueda.php' ?>
                <?php include 'templates/busqueda/index/links/_ubicacion_busqueda.php' ?>
                <?php include 'templates/busqueda/index/links/_boton_buscar.php' ?>
            </div>
        </form>
    </div>
</section><!-- /.header-search-->
