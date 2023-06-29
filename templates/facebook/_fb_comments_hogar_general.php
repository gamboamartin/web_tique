<?php
    $url_landing = get_landing_url();
    $url_landing_limpia = limpia_url_landing(url_landing: $url_landing);
?>


<div class="widget widget-box box-container">
    <div class="widget-header text-uppercase">
        <h2>Comentarios</h2>
    </div>
    <div class="fb-comments" data-href="https://inmobiliariatique.com/hogares/<?php echo $url_landing_limpia?>" data-width="" data-numposts="5"></div>
</div><!-- /. widget-facebook -->
