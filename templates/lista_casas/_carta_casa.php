<?php
use config\generales;
$generales = new generales();
?>
<div class="col-md-4 col-sm-6">
    <div class="property-card card">
        <div class="property-card-header image-box">
            <img src="<?php echo $generales->url_base; ?>assets/img/venta_casas/casa_01/casa_01_foto_02.jpeg" alt="" class="" />
            <!--Casa destacada en caso de serlo-->
            <!--<div class="budget"><i class="fa fa-star"></i></div>-->
            <a href="<?php echo $generales->url_base; ?>hogares/hogar-cihualpilli.php" class="property-card-hover">
                <img src="<?php echo $generales->url_base; ?>assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                <img src="<?php echo $generales->url_base; ?>assets/img/plus.png" alt="" class="center-icon" />
                <img src="<?php echo $generales->url_base; ?>assets/img/icon-notice.png" alt="" class="right-icon" />
            </a>
        </div>

        <?php include $generales->path_base.'templates/lista_casas/links/_marca_venta.php' ?>
        <?php include $generales->path_base.'templates/lista_casas/_carta_casa_detalles.php' ?>
    </div>
</div>