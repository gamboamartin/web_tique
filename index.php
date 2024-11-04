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
        <title>Inmobiliaria Tique</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />

        <?php include $generales->path_base.'templates/css.php'; ?>
    </head>
    <body class="">
        <div id="fb-root"></div>
        <div class="container container-wrapper">
            <header class="header">

                <?php include $generales->path_base.'templates/head/_head.php'?>
                <?php include $generales->path_base.'templates/sliders/index/_slider_index.php' ?>
                <?php include $generales->path_base.'templates/busqueda/index/_busqueda_index.php' ?>

            </header><!-- /.header--> 
            <main class="main section-color-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="h-side top-pad h-side-slim clearfix">

                            </div> <!-- /. content-header -->

                            <?php if(isset($_POST['seccion'])){
                                if($_POST['seccion']==1 and $_POST['ubi']=="") {
                                    include $generales->path_base.'templates/lista_casas/hogar-olivo/_carta_casa.php';
                                    include $generales->path_base.'templates/lista_casas/hogar-ambar/_carta_casa.php';
                                    include $generales->path_base.'templates/lista_casas/lote-itze/_carta_casa.php';
                                    include $generales->path_base.'templates/lista_casas/hogar-margarita/_carta_casa.php';
                                    include $generales->path_base.'templates/lista_casas/hogar-azalea/_carta_casa.php';
                                    include $generales->path_base.'templates/lista_casas/hogar-kian/_carta_casa.php';
                                    include $generales->path_base.'templates/lista_casas/hogar-girasol/_carta_casa.php';
                                    include $generales->path_base.'templates/lista_casas/hogar-ketzaly/_carta_casa.php';
                                    include $generales->path_base.'templates/lista_casas/hogar-ladera/_carta_casa.php';
                                }
                                elseif ( $_POST['ubi']=='Zapopan'){
                                    include $generales->path_base . 'templates/lista_casas/hogar-orquidea/_carta_casa.php';
                                }
                                elseif( $_POST['ubi']=='Tonalá'){
                                    include $generales->path_base . 'templates/lista_casas/hogar-pasitea/_carta_casa.php';

                                }
                                elseif( $_POST['ubi']=='Guadalajara'){
                                    ?> <h1>Lo sentimos en este momento no contamos  con hogares en la ubicación: <?php echo $_POST['ubi'] ?></h1> <?php
                                }
                                else{ ?>
                                        <h1>Lo sentimos en este momento no contamos  con hogares en la ubicación: <?php echo $_POST['ubi'] ?></h1>
                               <?php }

                            }else{

                                include $generales->path_base.'templates/lista_casas/_lista_casas.php';
                            }
                             ?>

                        </div><!-- /.center-content -->

                        <div class="col-md-3">


                        </div>

                        <?php include $generales->path_base.'templates/facebook/_fb_adds.php'?>
                        <!-- /.right side bar -->
                    </div>


                </div>
            </main><!-- /.main-part-->
            <?php /* include $generales->path_base.'templates/noticias/index/_noticias_index.php'*/?>
            <?php include $generales->path_base.'templates/agentes/index/_agentes_index.php' ?>
            <footer class="footer">
                <?php include $generales->path_base.'templates/footer/_footer.php' ?>
            </footer>
            <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a>
        </div>
        <?php include $generales->path_base.'templates/java.php' ?>
    </body>
</html>