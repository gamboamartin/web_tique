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

$wt_hogar = $wt_hogar_modelo->registro(registro_id: 1);
if(errores::$error){
    $error = (new errores())->error(mensaje: 'Error al obtener hogar',data:  $wt_hogar);
    print_r($error);
    die('Error');
}

?>
<div class="widget-body">
    <div class="widget-header widget-title text-uppercase">
        <h2>Descripción</h2>
    </div>
    <div class="widget-content wide-p">
        <img src="<?php echo $generales->url_base.$wt_hogar['wt_hogar_img_descripcion']; ?>"  class="pull-right-img" alt="" />
        <?php echo $wt_hogar['wt_hogar_observaciones']; ?>
    </div>
</div>
