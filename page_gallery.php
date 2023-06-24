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
        <title>Basic with Gallery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <?php include $generales->path_base.'templates/css.php'; ?>
    </head>
    <body class="">
        <div class="container container-wrapper">
            <header class="header">
                <?php include 'templates/head/_head.php'?>
                <section class="top-title-widget color-primary">
                    <div class="container">
                        <ul class="breadcrumb top-title-breadcrumb">
                            <li class="item"><a href="/"> Home </a></li>
                            <li class="item"> Basic with Gallery </li>
                        </ul>
                        <h1 class="top-title-t">Basic with Gallery</h1>
                    </div>
                </section><!-- /.top-title-->
            </header><!-- /.header--> 
            <main class="main main-container section-color-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <section class="widget widget-overflow wide-p">
                                <div class="box-overflow-container box-container">
                                    <div class="box-container-title">
                                        <h2 class="title">Basic with Gallery</h2> 
                                    </div> <!-- /. content-header --> 
                                    <div class="">
                                         <p>
                                           <img src="assets/img/placeholders/450x300.png" alt="" class="pull-right-img" />  
                                            This is simply dummy text of the printing and typesetting industry. That has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                        </p>
                                        <p><img src="assets/img/placeholders/450x300.png" alt=""  class="pull-left-img" />
                                            <strong>
                                            This is simply dummy text of the printing and typesetting industry. That has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronicю
                                            </strong>
                                        </p>
                                        <p><img src="assets/img/placeholders/450x300.png" alt="" class="pull-right-img" />
                                            This is simply dummy text of the printing and typesetting industry. That has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout. 
                                        </p>
                                    </div>
                                </div>
                            </section>
                            <div class="widget widget-section widget-box box-container">
                                <div class="widget-header text-uppercase">
                                    <h2>Image gallery</h2>
                                </div>
                                <div class="">
                                    <ul data-target="#modal-gallery" data-toggle="modal-gallery" class="images-gallery clearfix">  
                                    <li class="col-md-4 col-sm-6">
                                        <a data-gallery="gallery" href="assets/img/placeholders/1600x1080.png" title="" download="assets/img/placeholders/1600x1080.png" class="preview show-icon">
                                            <img src="assets/img/preview-icon.png" class="" alt=""/>
                                        </a>
                                        <div class="preview-img"><img src="assets/img/placeholders/360x210.png" data-src="assets/img/placeholders/1600x1080.png" alt="" class="" /></div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <a data-gallery="gallery" href="assets/img/placeholders/1600x1080.png" title="" download="assets/img/placeholders/1600x1080.png" class="preview show-icon">
                                            <img src="assets/img/preview-icon.png" class="" alt=""/>
                                        </a>
                                        <div class="preview-img"><img src="assets/img/placeholders/360x210.png" data-src="assets/img/placeholders/1600x1080.png" alt="" class="" /></div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <a data-gallery="gallery" href="assets/img/placeholders/1600x1080.png" title="" download="assets/img/placeholders/1600x1080.png" class="preview show-icon">
                                            <img src="assets/img/preview-icon.png" class="" alt=""/>
                                        </a>
                                        <div class="preview-img"><img src="assets/img/placeholders/360x210.png" data-src="assets/img/placeholders/1600x1080.png" alt="" class="" /></div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <a data-gallery="gallery" href="assets/img/placeholders/1600x1080.png" title="" download="assets/img/placeholders/1600x1080.png" class="preview show-icon">
                                            <img src="assets/img/preview-icon.png" class="" alt=""/>
                                        </a>
                                        <div class="preview-img"><img src="assets/img/placeholders/360x210.png" data-src="assets/img/placeholders/1600x1080.png" alt="" class="" /></div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <a data-gallery="gallery" href="assets/img/placeholders/1600x1080.png" title="" download="assets/img/placeholders/1600x1080.png" class="preview show-icon">
                                            <img src="assets/img/preview-icon.png" class="" alt=""/>
                                        </a>
                                        <div class="preview-img"><img src="assets/img/placeholders/360x210.png" data-src="assets/img/placeholders/1600x1080.png" alt="" class="" /></div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <a data-gallery="gallery" href="assets/img/placeholders/1600x1080.png" title="" download="assets/img/placeholders/1600x1080.png" class="preview show-icon">
                                            <img src="assets/img/preview-icon.png" class="" alt=""/>
                                        </a>
                                        <div class="preview-img"><img src="assets/img/placeholders/360x210.png" data-src="assets/img/placeholders/1600x1080.png" alt="" class="" /></div>
                                    </li>
                                </ul>
                                </div>
                            </div><!-- /. widget-gallery -->     
                        </div><!-- /.center-content -->
                        <div class="col-md-3">
                            <div class="widget widget-box box-container widget-properties">
                                <div class="widget-header text-uppercaser">
                                    <h2>Latest Listings</h2>
                                </div>
                                <div class="properties">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="property-card card">
                                                <div class="property-card-header image-box">
                                                    <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                                    <div class="budget"><i class="fa fa-star"></i></div>
                                                    <a href="listing.html" class="property-card-hover">
                                                        <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                        <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                        <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                    </a>
                                                </div>
                                                <div class="property-card-tags">
                                                    <span class="label label-default label-tag-warning">rent</span>
                                                </div>
                                                <div class="property-card-box card-box card-block">
                                                    <h3 class="property-card-title"><a href="listing.html">Tropical villa</a></h3>
                                                    <div class="clearfix options">
                                                        <span class="property-card-title address">Remetinec 23, Novi Marof, Croatia</span>
                                                        <span class="property-card-title price">$500 000.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="property-card card">
                                                <div class="property-card-header image-box">
                                                    <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                                    <a href="listing.html" class="property-card-hover">
                                                        <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                        <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                        <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                    </a>
                                                </div>
                                                <div class="property-card-tags">
                                                    <span class="label label-default label-tag-primary">sale</span>
                                                </div>
                                                <div class="property-card-box card-box card-block">
                                                    <h3 class="property-card-title"><a href="listing.html">House</a></h3>
                                                    <div class="clearfix options">
                                                        <span class="property-card-title address">Vatikanska 11, Zagreb, Croatia</span>
                                                        <span class="property-card-title price">$125 500.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="property-card card">
                                                <div class="property-card-header image-box">
                                                    <img src="assets/img/placeholders/395x250.png"  alt="" class="" />
                                                    <a href="listing.html" class="property-card-hover">
                                                        <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                        <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                        <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                    </a>
                                                </div>
                                                <div class="property-card-tags">
                                                    <span class="label label-default label-tag-primary">sale</span>
                                                </div>
                                                <div class="property-card-box card-box card-block">
                                                    <h3 class="property-card-title"><a href="listing.html">Modern bed room</a></h3>
                                                    <div class="clearfix options">
                                                        <span class="property-card-title address">Zeleni Put 21, Croatia</span>
                                                        <span class="property-card-title price">$75 000.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.widget-form--> 
                        </div>
                    </div>
                </div>
            </main><!-- /.main-part--> 
            <footer class="footer">
                <?php include 'templates/footer/_footer.php' ?>
            </footer>
            <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a>
        </div>
        <!-- Start Jquery -->
        <script src="assets/js/jquery-2.2.1.min.js"></script>
        <script src="assets/libraries/jquery.mobile/jquery.mobile.custom.min.js"></script>
        <!-- End Jquery -->
        <!-- Start BOOTSTRAP -->
        <script src="assets/libraries/tether/dist/js/tether.min.js"></script>
        <script src="assets/libraries/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/libraries/bootstrap-colorpicker-master/dist/js/bootstrap-colorpicker.min.js"></script>
        <!-- End Bootstrap -->
        <!-- Start Template files -->
        <script src="assets/js/winter-flat.js"></script>
        <!-- End  Template files -->
        <!-- Start owl-carousel -->
        <script src="assets/libraries/owl.carousel/owl.carousel.min.js"></script>
        <!-- End owl-carousel -->
        <!-- Start blueimp  -->
        <script src="assets/js/blueimp-gallery.min.js" type="text/javascript"></script>
        <!-- End blueimp  -->
        <!-- Start custom template style  -->
        <script src="assets/js/custom_template_style.js" type="text/javascript"></script>
        <!-- End custom template style   -->
    </body>
</html>