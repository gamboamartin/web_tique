<?php
use config\generales;
$generales = new generales();
?>

<div class="carousel-caption">

    <h3 class="carousel-caption-title"><span> Hogar Paraíso</span><i class="line-bottom color-primary"></i></h3>
    <!--<div class="s-description"><p>Ubicada en Zapopan</p></div>-->
    <a href="<?php echo $generales->url_base;?>hogares/hogar-paraiso.php" class="btn btn-primary color-primary"><span>Ver mi nuevo hogar</span></a>
    <div class="contenedor_centrado">

        <?php  include $generales->path_base.'templates/etiquetas_hogar/oferta.php' ?>

        <?php //include $generales->path_base.'templates/etiquetas_hogar/en_renovacion.php' ?>
    </div>
</div>