<?php
use config\generales;
$generales = new generales();
$numero=7234000;
$costo= number_format($numero, 2);
$a = explode(",", $costo);
if(count($a)>2) {
    $b = explode(",", $costo,2);
    $costo=$b[0]."'".$b[1];
}
?>
<div class="property-card-box card-box card-block" style="height: 170px !important;">
    <h3 class="property-card-title"><a href="<?php echo $generales->url_base; ?>hogares/lote-itze.php">Lote Itzé</a></h3>
    <div class="property-card-descr">
        Paseo del Palomar 250, El Palomar, Tlajomulco de Zuñiga, Jalisco
    </div><div style="padding-top: 4px;"></div>
    <div class="property-preview-footer  clearfix">
        <div class="property-preview-f-left text-color-primary">
            <span class="property-card-value">
                <i > $ <?php echo $costo ?></i>
            </span>
        </div>
    </div>
</div>
