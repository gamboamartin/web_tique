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
$nombre_hogar = '';

if($wt_hogar > 0){
    $nombre_hogar = $wt_hogar['wt_hogar_descripcion'];
}
?>

<div class="widget widget-form" id="form">
    <form action="<?php echo $generales->url_base; ?>pedir-informes.php" method="post" >
        <div class="box-container widget-body">
            <div class="widget-header text-uppercaser"><h2>Quiero información</h2></div>
            <div class="form-additional">
                <div class="form-group">
                    <input type="text" name='name' class="form-control" placeholder="Nombre completo" required/>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" class="form-control" placeholder="Teléfono" required pattern="[0-9]{10}"
                           title="Ingresa 10 digitos. Ejemplo: 3316052732" />
                </div>
                <div class="form-group">
                    <input type="email" name="mail" class="form-control" placeholder="Email" pattern="[a-z0-9!#$%&\'*+=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&\'*+=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?"
                           title="Agregar alguna extencion valida. Ejemplo: nombre@ejemplo.algo" />
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Mensaje"  rows='3' required></textarea>
                </div>
                <div class="form-group" hidden>
                    <input type="text" name="hogar" class="form-control" placeholder="Hogar" value=" <?php echo $nombre_hogar;?>" />
                </div>
                <div class="form-group" hidden>
                    <input type="text" name="url_redireccion" class="form-control" placeholder="Hogar" value="<?php echo $landing_url_limpia;?>" />
                </div>
                <div class="form-group form-group-submit">
                    <input type="submit" name='submit' class="btn btn-primary btn-wide color-primary btn-property" value="Enviar"  />
                </div>
            </div>
        </div>
    </form>
</div><!-- /.widget-form-->