<?php
use config\generales;
include "./init.php";
require './vendor/autoload.php';
$generales = new generales();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Contacto</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <?php include $generales->path_base.'templates/css.php'; ?>
    </head>
    <body class="">
        <div class="container container-wrapper">
            <header class="header">
                <?php include $generales->path_base.'templates/head/_head.php'?>
                <section class="top-title-widget color-primary">
                    <div class="container">
                        <ul class="breadcrumb top-title-breadcrumb">
                            <li class="item"><a href="/"> Inicio </a></li>
                            <li class="item"> Contacto </li>
                        </ul>
                        <h1 class="top-title-t">Contacto</h1>
                    </div>
                </section><!-- /.top-title-->
            </header><!-- /.header--> 
            <main class="main main-container section-color-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <section class="widget widget-box widget-section box-container widget-contact-info">
                                <div class="widget-header text-uppercase">
                                    Detalles de la compañia
                                </div>
                                <h4><strong class="text-color-primary">Dirección</strong></h4>INMOBILIARIA Y CONSTRUCCION TIQUE
                                <br />AVENIDA IGNACIO L. VALLARTA #6503, CIUDAD GRANJA, ZAPOPAN, JALISCO
                                <br /> LOCAL H-12 <br />
                                <br />
                                <strong class="text-color-primary">Teléfono:</strong> +52 33 3677 7841<br />
                                <strong class="text-color-primary">Correo:</strong> contactame@inmobiliariatique.com
                            </section>
                            <div class="widget widget-section widget-box box-container">
                                <div class="widget-header text-uppercase">
                                    Localización
                                </div>
                                <div class="property-map" id='contact-map' style='height: 385px;'></div>
                            </div>  <!-- /. widget-map  -->    
                            <div class="widget widget-box widget-section box-container widget-contactform">
                                <div class="widget-header text-uppercase">
                                    Contact form
                                </div>
                                <form class="form-additional">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="input" placeholder="First and last name" />
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="input" placeholder="Email" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="input" placeholder="Phone" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" placeholder="Message"  rows='3'></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="control-group form-group control-group-captcha">
                                                <img src="assets/img/placeholders/120x35.png" width="120" height="35" style="border:0;" alt=" " /> 
                                                <div class="captcha-input-box">
                                                    <input class="form-control captcha" name="captcha" type="text" placeholder="Enter code from image" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group clearfix">
                                                <button class="btn btn-primary color-primary pull-right" type='submit'>Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>  <!-- /. widget-map  -->    

                        </div><!-- /.center-content -->
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