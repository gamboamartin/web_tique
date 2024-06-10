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

$number = 0;

$cnx = new conexion(paths_conf: $paths_conf);
$generales = new generales();

$wt_hogar_modelo = new wt_hogar(conexion::$link);
$hogares = array();

foreach ($wt_hogar_modelo->obten_registros_activos()->registros as $registro){
    $hogar = array();
    $hogar[]=$registro['wt_hogar_georeferencia'];
    $hogar[]='assets/img/icons/Icono-TIQUE-pin.png';
    $hogar[]=$registro['wt_hogar_img_descripcion'];
    $hogar[]=$registro['wt_hogar_descripcion'];
    $hogar[]=$registro['wt_hogar_url'];
    $hogar[]=$registro['wt_hogar_ubicacion'];
    $hogar[]=$registro['wt_hogar_wt_tipo_inmueble_id'];
    $hogar[]=$registro['wt_hogar_terreno'];
    $costo= number_format($number, 2, );
    $a = explode(",", $costo);
    if(count($a)>2) {
        $b = explode(",", $costo,2);
        $costo=$b[0]."'".$b[1];
    }

    $hogar[]=$costo;
    //$i++;
    /*$hogar['wt_hogar_georeferencia'] = $registro['wt_hogar_georeferencia'];
    $hogar['wt_hogar_logo'] = 'assets/img/icons/Icono-TIQUE-pin.png';
    $hogar['wt_hogar_img_descripcion'] = $registro['wt_hogar_img_descripcion'];
    $hogar['wt_hogar_descripcion'] = $registro['wt_hogar_descripcion'];*/

    //$hogar['wt_hogar_ubicacion'] = $registro['wt_hogar_ubicacion'];

    $hogares[] = $hogar;
}



?>

<script type="text/javascript">
    var valor = <?php echo json_encode($hogares); ?>;


</script>>

<section class="header-slider header-map">
    <h2 class="hidden">Map</h2>
    <div class="main-map" id="main-map" style='height:500px'></div>
</section><!-- /.header-video-->
