<?php

use base\conexion;
use config\generales;
use models\wt_hogar;

include "../../init.php";
require '../../vendor/autoload.php';


$conf_database = new stdClass();

$paths_conf = new stdClass();
$paths_conf->generales = '/var/www/html/web_tique/config/generales.php';
$paths_conf->database = '/var/www/html/web_tique/config/database.php';
$paths_conf->views = '/var/www/html/web_tique/config/views.php';

$cnx = new conexion(paths_conf: $paths_conf);
$generales = new generales();

require ($generales->path_base.'src/landing.php');

$wt_hogar_modelo = new wt_hogar(conexion::$link);

$url_landing = get_landing_url();
$url_landing_limpia = limpia_url_landing(url_landing: $url_landing);
$landing_url_sin_ext = quitar_php(url_landing_limpia: $url_landing_limpia);

$wt_hogar = $wt_hogar_modelo->obtener_registro_wt_hogar($landing_url_sin_ext);

$img_hogar = '';
$nombre_hogar = '';

if($wt_hogar > 0){
    $img_hogar = $wt_hogar['wt_hogar_img_descripcion'];
    $nombre_hogar = $wt_hogar['wt_hogar_descripcion'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $nombre_hogar ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <?php include $generales->path_base.'templates/css.php'; ?>
    <!-- End custom template style   -->
    <link rel="stylesheet" href="<?php echo $generales->url_base; ?>assets/css/print.css"  media="print"/>
</head>
<body class="">
<div class="container container-wrapper">
    <main class="main section-color-primary">
        <div class="container">
            <div class="row">
                <img src="<?php echo $generales->url_base?>assets/img/icons/Logotipo-TIQUE.png" width="40%">
                <div class="col-md-9">
                    <div class="widget widget-box box-container widget-property">
                        <?php include $generales->path_base.'templates/sliders/hogar_general/_slider_hogar.php' ?>
                        <?php include $generales->path_base.'templates/descripcion/_descripcion_general_print.php' ?>
                    </div> <!-- /. widget-body -->
                    <?php include $generales->path_base.'templates/ubicaciones/_ubicacion_general.php' ?>
                    <?php include $generales->path_base.'templates/galeria/hogar-cihualpilli/_galeria_hogar_cihualpilli.php' ?>
                </div><!-- /.center-content -->
                <div class="col-md-3">
                    <?php include $generales->path_base.'templates/detalles/_detalles_hogar_general.php' ?>
                    <button class="print_hidden print_btn color-primary btn btn-primary" onclick="print_page()">Imprimir</button>
                </div>
                <!-- /.right side bar -->
                <footer class="footer">
                    <?php include $generales->path_base.'templates/footer/_footer.php' ?>
                </footer>
            </div>
        </div>
    </main><!-- /.main-part-->
</div>
<?php include $generales->path_base.'templates/java.php' ?>
<!-- End custom template style   -->
<script src="../assets/js/dpejes/dpe.js"></script>
<script src="../assets/js/dpejes_custom.js"></script>
</body>
</html>