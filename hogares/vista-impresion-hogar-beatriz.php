<?php
use config\generales;
include "../init.php";
require '../vendor/autoload.php';
$generales = new generales();
require ($generales->path_base.'src/landing.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Hogar Beatriz</title>
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
                                <?php include $generales->path_base.'templates/sliders/hogar-beatriz/_slider_hogar_beatriz.php' ?>
                                <?php include $generales->path_base.'templates/descripcion/hogar-beatriz/_descripcion_hogar_beatriz_print.php' ?>
                            </div> <!-- /. widget-body -->
                            <?php include $generales->path_base.'templates/ubicaciones/hogar-beatriz/_ubicacion_hogar_beatriz.php' ?>
                            <?php include $generales->path_base.'templates/galeria/hogar-beatriz/_galeria_hogar_beatriz.php' ?>
                        </div><!-- /.center-content -->
                        <div class="col-md-3">
                            <?php include $generales->path_base.'templates/detalles/hogar-beatriz/_detalles_hogar_beatriz.php' ?>
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