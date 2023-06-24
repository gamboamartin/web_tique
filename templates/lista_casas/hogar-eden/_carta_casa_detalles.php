<?php
use config\generales;
$generales = new generales();
$numero=1380000;
$costo= number_format($numero, 2);
$a = explode(",", $costo);
if(count($a)>2) {
    $b = explode(",", $costo,2);
    $costo=$b[0]."'".$b[1];
}
?>
<div class="property-card-box card-box card-block" style="height: 170px !important;">
    <h3 class="property-card-title"><a href="<?php echo $generales->url_base; ?>hogares/hogar-eden.php">Hogar Eden</a></h3>
    <div class="property-card-descr"> Av. Paraíso Poniente No. 267, Cond. Toledo Int. 17, Fracc. Campo Real, Zapopan, Jal</div><br>
    <div class="property-preview-footer  clearfix">
        <div class="property-preview-f-left text-color-primary">
            <span class="property-card-value">
                <i > $ <?php echo $costo ?></i>
            </span>
        </div>
    </div>
</div>
