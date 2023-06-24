<?php
    $a = $generales->url_base."assets/img/venta_casas/hogar_beatriz/1Fachada/1.jpg";
    $b = $generales->url_base."assets/img/venta_casas/hogar_beatriz/3Cocina/8.jpg";
    $c = $generales->url_base."assets/img/venta_casas/hogar_beatriz/4Recamara1/15.jpg";
?>


<div class="widget widget-box box-container">
    <div class="widget-header text-uppercase">
        <h2>Imágenes</h2>
    </div>
    <ul data-target="#modal-gallery" data-toggle="modal-gallery" class="images-gallery clearfix">


        <li class="col-xs-4">
            <a data-gallery="gallery" href="<?php echo $a ?>" title="" download="<?php echo $a ?>" class="preview show-icon">
                <img src="<?php echo $a ?>" class="" alt=""/>
            </a>
            <div class="preview-img"><img src="<?php echo $a ?>" data-src="<?php echo $a ?>" alt="" class="" width="10px"/></div>
        </li>
        <li class="col-xs-4">
            <a data-gallery="gallery" href="<?php echo $b ?>" title="" download="<<?php echo $b ?>" class="preview show-icon">
                <img src="<?php echo $b ?>" class="" alt=""/>
            </a>
            <div class="preview-img"><img src="<?php echo $b ?>" data-src="<?php echo $b ?>" alt="" class="" /></div>
        </li>
        <li class="col-xs-4">
            <a data-gallery="gallery" href="<?php echo $c ?>" title="" download="<?php echo $c ?>" class="preview show-icon">
                <img src="<?php echo $c ?>" class="" alt=""/>
            </a>
            <div class="preview-img"><img src="<?php echo $c ?>" data-src="<?php echo $c ?>" alt="" class="" /></div>
        </li>

    </ul>
</div><!-- /. widget-gallery -->