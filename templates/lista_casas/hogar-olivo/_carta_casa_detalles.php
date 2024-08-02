<?php
use config\generales;
$generales = new generales();
$numero=780000;
$costo= number_format($numero, 2);
$a = explode(",", $costo);
if(count($a)>2) {
    $b = explode(",", $costo,2);
    $costo=$b[0]."'".$b[1];
}
?>
<div class="property-card-box card-box card-block" style="height: 170px !important;">
    <h3 class="property-card-title"><a href="<?php echo $generales->url_base; ?>hogares/hogar-olivo.php">Hogar Olivo</a></h3>
    <div class="property-card-descr">C. Valle De Los Guamuchiles 53, Fracc. Hacienda Los Eucaliptos, Tlajomulco De Zuñiga, Jal.</div>
    <div class="property-preview-footer  clearfix">
        <div class="property-preview-f-left text-color-primary">
            <span class="property-card-value">
                <i > $ <?php echo $costo ?></i>
            </span>
        </div>
    </div>
</div>

