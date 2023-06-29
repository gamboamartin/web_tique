<?php
use config\generales;
$generales = new generales();
$numero=2120000;
$costo= number_format($numero, 2);
$a = explode(",", $costo);
if(count($a)>2) {
    $b = explode(",", $costo,2);
    $costo=$b[0]."'".$b[1];
}
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

<div class="property-card-box card-box card-block" style="height: 170px !important;">
    <h3 class="property-card-title"><a href="<?php echo $generales->url_base; ?>hogares/hogar-xadani.php">Hogar Teva</a></h3>
    <div class="property-card-descr">
        Campo Virrey #121, Campo Real, 45134,Zapopan, Jal.
    </div>
    <br>
    <div class="property-preview-footer  clearfix">
        <div class="property-preview-f-left text-color-primary">
            <span class="property-card-value">
                <i > $ <?php echo $costo ?></i>
            </span>
        </div>
    </div>
</div>
