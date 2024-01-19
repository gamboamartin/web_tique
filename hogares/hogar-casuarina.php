<?php
use base\conexion;
use config\generales;
use models\wt_hogar;

include "../init.php";
require '../vendor/autoload.php';


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
    $proposito_hogar_id = $wt_hogar['wt_hogar_wt_proposito_id'];
}

$descripcion_twitter = 'Hogar Casuarina bonita casa ubicada al sur del área metropolitana de Guadalajara, dentro del Municipio de Tlajomulco de Zúñiga sobre el Cluster 15 del Fraccionamiento Hacienda Santa Fe.
Esta vivienda se caracteriza por su excelente ubicación dentro del fraccionamiento cercana a todos los servicios necesarios para una calidad de vida, escuelas,  tiendas de autoservicio, farmacias, avenidas principales, centros comerciales.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $nombre_hogar;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta property='twitter:title' content="<?php echo $nombre_hogar;?>"/>
    <meta property='twitter:image' content="<?php echo $generales->url_base; ?>assets/img/venta_casas/hogar_colibri/3Cocina/cocina_1.jpg"/>
    <meta property="og:description" content="Hogar Casuarina bonita casa ubicada al sur del área metropolitana de Guadalajara, dentro del Municipio de Tlajomulco de Zúñiga sobre el Cluster 15 del Fraccionamiento Hacienda Santa Fe.
Esta vivienda se caracteriza por su excelente ubicación dentro del fraccionamiento cercana a todos los servicios necesarios para una calidad de vida, escuelas,  tiendas de autoservicio, farmacias, avenidas principales, centros comerciales." />
    <meta name="twitter:card" content="summary_large_image"/>

    <?php include $generales->path_base.'templates/css.php'; ?>

</head>
<body class="">
<img src="<?php echo $generales->url_base; ?>assets/img/venta_casas/hogar_casuarina/1Fachada/fachada_1.jpg" hidden>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v14.0" nonce="Ug42YVNC"></script>
<div class="container container-wrapper">
    <header class="header">
        <?php include $generales->path_base.'templates/head/_head.php' ?>
    </header><!-- /.header-->
    <main class="main section-color-primary">
        <div class="container">
            <section class="top-title">
                <ul class="breadcrumb">
                    <li class="item"><a href="<?php echo $generales->url_base; ?>index.php"> Inicio </a></li>
                    <li class="item"> <?php echo $nombre_hogar;?> </li>
                </ul>
                <h1 class="h-side-title page-title page-title-big text-color-primary"><?php echo $nombre_hogar;?></h1>
            </section> <!-- /. content-header -->
            <div class="row">
                <div class="col-md-9">
                    <div class="widget widget-box box-container widget-property">
                        <?php include $generales->path_base.'templates/sliders/hogar_casuarina/_slider_hogar_casuarina.php' ?>
                        <?php include $generales->path_base.'templates/descripcion/hogar-casuarina/_descripcion_hogar_casuarina.php' ?>
                    </div> <!-- /. widget-body -->
                    <?php include $generales->path_base.'templates/ubicaciones/_ubicacion_general.php' ?>
                    <?php include $generales->path_base.'templates/galeria/hogar-casuarina/_galeria_hogar.php' ?>


                    <?php include $generales->path_base.'templates/facebook/_fb_comments_hogar_eirene.php'?>
                </div><!-- /.center-content -->
                <div class="col-md-3">
                    <?php include $generales->path_base.'templates/detalles/_detalles_hogar_general.php' ?>
                    <a href='<?php echo $generales->url_base; ?>hogares/vista-impresion/vista-impresion-hogar-casuarina.php' class="btn btn-primary color-primary btn-property btn-print">Vista de impresión</a>
                    <?php include $generales->path_base.'templates/agentes/hogar-cihualpilli/_ficha_agente.php' ?>
                    <?php include $generales->path_base.'templates/informacion/_informacion_hogar_general.php' ?>

                </div>
                <!-- /.right side bar -->
            </div>
        </div>
    </main><!-- /.main-part-->
    <footer class="footer">
        <?php include $generales->path_base.'templates/footer/_footer.php' ?>
    </footer>
    <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a>
</div>
<?php include $generales->path_base.'templates/java.php' ?>
</body>
</html>

