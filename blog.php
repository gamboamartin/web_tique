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
        <title>Blog List</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="assets/libraries/font-awesome/css/font-awesome.min.css" />
        <!-- Start BOOTSTRAP -->
        <link rel="stylesheet" href="assets/libraries/tether/dist/css/tether.min.css" />
        <link rel="stylesheet" href="assets/libraries/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
        <link rel="stylesheet" href="assets/libraries/bootstrap-colorpicker-master/dist/css/bootstrap-colorpicker.min.css" />
        <!-- End Bootstrap -->
        <!-- Start Template files -->
        <link rel="stylesheet" href="assets/css/winter-flat.css" />
        <link rel="stylesheet" href="assets/css/custom.css" />
        <!-- End  Template files -->
        <!-- Start owl-carousel -->
        <link rel="stylesheet" href="assets/libraries/owl.carousel/assets/owl.carousel.css" />
        <!-- End owl-carousel -->
        <!-- Start blueimp  -->
        <link rel="stylesheet" href="assets/css/blueimp-gallery.min.css" />
        <!-- End blueimp  -->
        <script src="assets/js/modernizr.custom.js"></script>
        <!-- Start custom template style  -->
        <link rel="stylesheet" href="assets/css/custom_template_style.css" /> 
        <!-- End custom template style   -->
    </head>
    <body class="">
        <div class="container container-wrapper">
            <header class="header">
                <?php include 'templates/head/_head.php'?>
                <section class="top-title-widget color-primary">
                    <div class="container">
                        <ul class="breadcrumb top-title-breadcrumb">
                            <li class="item"><a href="/"> Home </a></li>
                            <li class="item"> Blog </li>
                        </ul>
                        <h1 class="top-title-t">Blog</h1> 
                    </div>
                </section><!-- /.top-title-->
            </header><!-- /.header--> 
            <main class="main main-container section-color-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <section class="widget-blog-listing">
                                <div class="properties">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="property-card news-card card">
                                                <div class="property-card-header image-box">
                                                    <img src="assets/img/placeholders/450x300.png" alt="" class="" />
                                                    <a href="page_gallery.php" class="property-card-hover">
                                                        <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                        <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                        <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                    </a>
                                                </div>
                                                <div class="property-card-tasm">
                                                    <div class="pull-left item-t">
                                                        <a href="profile.php" class='img-circle-cover'>
                                                            <img src="assets/img/placeholders/30x30.png" alt="" class="img-circle" />
                                                        </a>
                                                        <span class="name">by <a href="profile.php" class="text-color-primary">Grace Aitken</a></span>
                                                        <span class="date">
                                                            <i class="fa fa-calendar"></i>
                                                            February 6, 2016
                                                        </span>
                                                    </div>
                                                    <div class="item-tag pull-right text-color-primary">
                                                        Run
                                                    </div>
                                                </div>
                                                <div class="property-card-box card-box card-block">
                                                    <h3 class="property-card-title"><a href="page_gallery.php">Healthy body important for success in business</a></h3>
                                                    <div class="property-card-descr"> This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="property-card news-card card">
                                                <div class="property-card-header image-box">
                                                    <img src="assets/img/placeholders/450x300.png" alt="" class="" />
                                                    <a href="page_gallery.php" class="property-card-hover">
                                                        <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                        <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                        <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                    </a>
                                                </div>
                                                <div class="property-card-tasm">
                                                    <div class="pull-left item-t">
                                                        <a href="profile.php" class='img-circle-cover'>
                                                            <img src="assets/img/placeholders/30x30.png" alt="" class="img-circle" />
                                                        </a>
                                                        <span class="name">by <a href="profile.php" class="text-color-primary">Lazo Bikup</a></span>
                                                        <span class="date">
                                                            <i class="fa fa-calendar"></i>
                                                            June 9, 2017
                                                        </span>
                                                    </div>
                                                    <div class="item-tag pull-right text-color-primary">
                                                        House
                                                    </div>
                                                </div>
                                                <div class="property-card-box card-box card-block">
                                                    <h3 class="property-card-title"><a href="page_gallery.php">New modern house designs</a></h3>
                                                    <div class="property-card-descr"> This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="property-card news-card card">
                                                <div class="property-card-header image-box">
                                                    <img src="assets/img/placeholders/450x300.png" alt="" class="" />
                                                    <a href="page_gallery.php" class="property-card-hover">
                                                        <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                        <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                        <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                    </a>
                                                </div>
                                                <div class="property-card-tasm">
                                                    <div class="pull-left item-t">
                                                        <a href="profile.php" class='img-circle-cover'>
                                                            <img src="assets/img/placeholders/30x30.png" alt="" class="img-circle" />
                                                        </a>
                                                        <span class="name">by <a href="profile.php" class="text-color-primary">Pero Petric</a></span>
                                                        <span class="date">
                                                            <i class="fa fa-calendar"></i>
                                                            February 21, 2017
                                                        </span>
                                                    </div>
                                                    <div class="item-tag pull-right text-color-primary">
                                                        City
                                                    </div>
                                                </div>
                                                <div class="property-card-box card-box card-block">
                                                    <h3 class="property-card-title"><a href="page_gallery.php">Better portal for large City</a></h3>
                                                    <div class="property-card-descr"> This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="property-card news-card card">
                                                <div class="property-card-header image-box">
                                                    <img src="assets/img/placeholders/450x300.png" alt="" class="" />
                                                    <a href="page_gallery.php" class="property-card-hover">
                                                        <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                        <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                        <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                    </a>
                                                </div>
                                                <div class="property-card-tasm">
                                                    <div class="pull-left item-t">
                                                        <a href="profile.php" class='img-circle-cover'>
                                                            <img src="assets/img/placeholders/30x30.png" alt="" class="img-circle" />
                                                        </a>
                                                        <span class="name">by <a href="profile.php" class="text-color-primary">Holly Crouch</a></span>
                                                        <span class="date">
                                                            <i class="fa fa-calendar"></i>
                                                            May 1, 2017
                                                        </span>
                                                    </div>
                                                    <div class="item-tag pull-right text-color-primary">
                                                        Speaker
                                                    </div>
                                                </div>
                                                <div class="property-card-box card-box card-block">
                                                    <h3 class="property-card-title"><a href="page_gallery.php">Become successfully speaker</a></h3>
                                                    <div class="property-card-descr"> This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <nav class="text-center">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </section>
                        </div><!-- /.center-content -->
                        <div class="col-md-3">
                            <div class="widget widget-search">
                                <form action="#">
                                    <div class="input-group input-with-search color-primary clearfix">
                                        <input type="text" value="" class="form-control" placeholder="SEARCH"/>
                                        <button type="submit" class="input-group-addon"><i class='fa fa-search icon-white'></i></button>
                                    </div>
                                </form>
                            </div><!-- /.widget-search--> 
                            <div class="widget widget-menu-right">
                                <div id="menu-right">
                                    <div class="list-group panel text-color-primary border-color-primary">
                                        <a href="#home" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#menu-right">Slider</a>
                                        <div class="collapse" id="home">
                                            <a class="list-group-item" href="slider_standard.php">Standard</a>
                                            <a class="list-group-item" href="index_headervideo.php">Video</a>
                                            <a class="list-group-item" href="index_fullscreenslider.php">Full Screen</a>
                                        </div>
                                        <a href="#home-map" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#menu-right">Map</a>
                                        <div class="collapse" id="home-map">
                                            <a class="list-group-item" href="map.php">Grid results</a>
                                            <a class="list-group-item" href="map_list.php">List result</a>
                                            <a class="list-group-item" href="map_side.php">Side version</a>
                                            <a class="list-group-item" href="map_side_list.php">Side version list</a>
                                            <a class="list-group-item" href="map_geo.php?geolocation=paris">Geo regions</a>
                                        </div>
                                        <a href="#about" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#menu-right">Categories</a>
                                        <div class="collapse" id="about">
                                            <a class="list-group-item" href="map_side2.php">Real Estate</a>
                                            <a class="list-group-item" href="index_yacht.php">Yacht Market</a>
                                            <a class="list-group-item" href="index.html">Car Dealer</a>
                                            <a class="list-group-item" href="index_job.php">Job Finder</a>
                                            <a class="list-group-item" href="map_business.php">Business Directory</a>
                                            <a class="list-group-item" href="index_classfied.php">Classified Portal</a>
                                            <a class="list-group-item" href="index_shop.php">Basic shop</a>
                                        </div>
                                        <a href="#pages" class="list-group-item list-group-item-success active" data-toggle="collapse" data-parent="#menu-right">Pages</a>
                                        <div class="collapse" id="pages">
                                            <a class="list-group-item" href="page_gallery.php">Basic with Gallery</a>
                                            <a class="list-group-item" href="login.php">Login</a>
                                            <a class="list-group-item" href="mylistings.php">My Listings</a>
                                            <a class="list-group-item" href="listing.html">Listing Preview</a>
                                            <a class="list-group-item" href="ask_expert.html">FAQ</a>
                                            <a class="list-group-item" href="agents.html">Agents</a>
                                            <a class="list-group-item" href="profile.php">Agent Profile</a>
                                            <a class="list-group-item active" href="blog.html">Blog List</a>
                                            <a class="list-group-item" href="page_cart.php">Cart</a>
                                            <a class="list-group-item" href="componentes/component_alerts.php">Components</a>
                                            <a class="list-group-item" href="page_invoice.php">Invoice</a>
                                            <a class="list-group-item" href="contact.html">Contact</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.widget-search--> 
                            <div class="widget widget-ads-right">
                                <img src="assets/img/placeholders/265x220.png" alt="" class="center-block" />
                            </div><!-- /.widget-ads--> 
                        </div>
                        <!-- /.right side bar -->
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