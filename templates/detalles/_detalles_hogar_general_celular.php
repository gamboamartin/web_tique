<?php
use base\conexion;
use config\generales;
use gamboamartin\errores\errores;
use models\wt_hogar;
use models\wt_tipo_inmueble;


$conf_database = new stdClass();

$paths_conf = new stdClass();
$paths_conf->generales = '/var/www/html/web_tique/config/generales.php';
$paths_conf->database = '/var/www/html/web_tique/config/database.php';
$paths_conf->views = '/var/www/html/web_tique/config/views.php';

$cnx = new conexion(paths_conf: $paths_conf);
$generales = new generales();

$wt_hogar_modelo = new wt_hogar(conexion::$link);
$wt_tipo_inmueble_modelo = new wt_tipo_inmueble(conexion::$link);

$landing_url = get_landing_url();
$landing_url_limpia = limpia_url_landing(url_landing: $landing_url);
$landing_url_sin_ext = quitar_php(url_landing_limpia: $landing_url_limpia);

$wt_hogar = $wt_hogar_modelo->obtener_registro_wt_hogar($landing_url_sin_ext);
$img_hogar = '';
$descripcion_hogar = '';
$terreno_hogar = '';
$construccion_hogar = '';
$niveles_hogar = '';
$banio_hogar = '';
$recamara_hogar = '';
$patio_hogar = '';
$estacionamiento_hogar = '';

if($wt_hogar > 0){
    $direccion_hogar = $wt_hogar['wt_hogar_ubicacion'];
    $proposito_hogar_id = $wt_hogar['wt_hogar_wt_proposito_id'];
    $tipo_hogar_id = $wt_hogar['wt_hogar_wt_tipo_inmueble_id'];
    $terreno_hogar = $wt_hogar['wt_hogar_terreno'];
    $construccion_hogar = $wt_hogar['wt_hogar_construccion'];
    $niveles_hogar = $wt_hogar['wt_hogar_niveles'];
    $banio_hogar = $wt_hogar['wt_hogar_banio'];
    $recamara_hogar = $wt_hogar['wt_hogar_recamara'];
    $patio_hogar = $wt_hogar['wt_hogar_patio'];
    $estacionamiento_hogar = $wt_hogar['wt_hogar_estacionamiento'];

}

$tipo_proposito = array('venta.php', 'vendido.php', 'apartado.php');
$url_proposito = 'templates/detalles/links/proposito/';

$niveles_label = 'Niveles: ';

if($tipo_hogar_id == 2){
    $niveles_label = 'Nivel: ';
}
$wt_tipo_inmueble = $wt_tipo_inmueble_modelo->registro(registro_id: $tipo_hogar_id);



$tipo_hogar = '';
if($wt_tipo_inmueble > 0){
    $tipo_hogar = $wt_tipo_inmueble['wt_tipo_inmueble_descripcion'];
}


?>


<div class="widget widget-box box-container widget-overview visible-sm visible-xs">
    <div class="widget-header text-uppercase">
        <h2>Detalles</h2>
    </div>
    <ul class="list-overview">
        <li>
            <span class="list-overview-option">Dirección</span>
            <span class="list-overview-value"><?php echo $direccion_hogar;?></span>
        </li>
        <li>
            <span class="list-overview-option">Propósito: </span>
            <?php include $generales->path_base.$url_proposito.$tipo_proposito[$proposito_hogar_id-1];?>
        </li>
        <li>
            <span class="list-overview-option">Tipo: </span>
            <span class="list-overview-value"><?php echo $tipo_hogar; ?></span>
        </li>
        <li>
            <span class="list-overview-option">Terreno: </span>
            <span class="list-overview-value"> <?php echo $terreno_hogar; ?></span>
        </li>
        <?php if($tipo_hogar_id != 3){ ?>
        <li>
            <span class="list-overview-option">Construcción:    </span>
            <span class="list-overview-value"> <?php echo $construccion_hogar; ?></span>
        </li>
        <li>
            <span class="list-overview-option"><?php echo $niveles_label; ?></span>
            <span class="list-overview-value"><?php echo $niveles_hogar; ?></span>
        </li>
        <li>
            <span class="list-overview-option">Baños:   </span>
            <span class="list-overview-value"><?php echo $banio_hogar; ?></span>
        </li>
        <li>
            <span class="list-overview-option">Recámaras: </span>
            <span class="list-overview-value"><?php echo $recamara_hogar; ?></span>
        </li>
        <li>
            <span class="list-overview-option">Patio: </span>
            <span class="list-overview-value"><?php echo $patio_hogar; ?></span>
        </li>
        <li>
            <span class="list-overview-option">Estacionamiento: </span>
            <span class="list-overview-value"><?php echo $estacionamiento_hogar; ?></span>
        </li>
        <?php } ?>
        <?php if($tipo_hogar_id == 3){ ?>
            <li>
                <span class="list-overview-option">Dimensiones:    </span>
                <span class="list-overview-value"> <?php echo $construccion_hogar; ?></span>
            </li>
        <?php } ?>
    </ul>
</div><!-- /. widget-OVERVIEW -->
