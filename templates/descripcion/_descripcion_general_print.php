<?php

use base\conexion;
use config\generales;
use gamboamartin\errores\errores;
use models\wt_hogar;


$conf_database = new stdClass();

$paths_conf = new stdClass();
$paths_conf->generales = '/var/www/html/web_tique/config/generales.php';
$paths_conf->database = '/var/www/html/web_tique/config/database.php';
$paths_conf->views = '/var/www/html/web_tique/config/views.php';

$cnx = new conexion(paths_conf: $paths_conf);
$generales = new generales();

$wt_hogar_modelo = new wt_hogar(conexion::$link);

$landing_url = get_landing_url();
$landing_url_limpia = limpia_url_landing(url_landing: $landing_url);
$landing_url_sin_ext = quitar_php(url_landing_limpia: $landing_url_limpia);

$wt_hogar = $wt_hogar_modelo->obtener_registro_wt_hogar($landing_url_sin_ext);
$img_hogar = '';
$descripcion_hogar = '';

if($wt_hogar > 0){
    $img_hogar = $wt_hogar['wt_hogar_img_descripcion'];
    $descripcion_hogar = $wt_hogar['wt_hogar_observaciones'];
}
?>
<div class="widget-body">
    <div class="widget-header widget-title text-uppercase">
        <h2>Descripción</h2>
    </div>
    <div class="widget-content wide-p">
        <?php echo $descripcion_hogar; ?>
    </div>
</div>
