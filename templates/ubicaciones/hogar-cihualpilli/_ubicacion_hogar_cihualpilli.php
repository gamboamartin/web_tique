<?php
require '../vendor/autoload.php';

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


$wt_hogar_url_buscado['url'] = $landing_url_sin_ext;

$r_wt_hogar = $wt_hogar_modelo->filtro_and(filtro: $wt_hogar_url_buscado, tipo_filtro: 'textos');
if(errores::$error){
    $error = (new errores())->error(mensaje: 'Error al obtener registro hogar con url busca',data:  $r_wt_hogar);
    print_r($error);
    die('Error');
}

$wt_hogar_id = $r_wt_hogar->registros_obj[0]->wt_hogar_id;
if(errores::$error){
    $error = (new errores())->error(mensaje: 'Error al obtener id hogar',data:  $wt_hogar_id);
    print_r($error);
    die('Error');
}

$wt_hogar = $wt_hogar_modelo->registro(registro_id: $wt_hogar_id);
if(errores::$error){
    $error = (new errores())->error(mensaje: 'Error al obtener hogar',data:  $wt_hogar);
    print_r($error);
    die('Error');
}
?>

<div class="widget widget-box box-container widget-property-map">
    <input name="georeferencia" id="georeferencia" value="<?php echo $wt_hogar['wt_hogar_georeferencia']; ?>" hidden>
    <div class="widget-header text-uppercase">
        <h2>Ubicación</h2>
    </div>
    <div class="property-map" id='property-map-general' style='height: 385px;'></div>
    <div class="route_suggestion form-additional">
        <input id="route_from" class="inputtext w360 form-control" type="text" value="" placeholder="Escribe tu dirección" name="route_from" />
        <a id="route_from_button" href="#" class="btn-second">Ruta sugerida</a>
    </div>
</div>  <!-- /. widget-map and walkscore -->