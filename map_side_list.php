<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Side version list</title>
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
        <!-- Start JS MAP  -->
        <link rel="stylesheet" href="assets/css/map.css" />
        <!-- End JS MAP  -->
        <!-- Start blueimp  -->
        <link rel="stylesheet" href="assets/css/blueimp-gallery.min.css" />
        <!-- End blueimp  -->
        <script src="assets/js/modernizr.custom.js"></script>
        <!-- Start custom template style  -->
        <link rel="stylesheet" href="assets/css/custom_template_style.css" /> 
        <!-- End custom template style   -->
    </head>
    <body class="full-width">
        <div id="fb-root"></div>
        <div class="container container-wrapper container-side-version">
            <header class="header">
                <?php include 'templates/head/_head.php'?>
            </header><!-- /.header-->
            <main class="main section-color-primary">
                <div class="container">
                    <div class="row content-flex">
                        <div class="col-md-6 content-left"  id="main-map">
                        </div>
                        <div class="col-md-6 content-right">
                            <section class="search-form color-primary">
                                <div class="">
                                    <h2 class="search-title">Search</h2>
                                    <form action="#" class="form-horisontal form-primary">
                                        <div class="row-fluid clearfix">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control selectpicker color-secondary" name="input" >
                                                        <option value="0">Purpose</option>
                                                        <option value="1">Sale</option>
                                                        <option value="2">Rent</option>
                                                        <option value="3">Sale and Rent</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control color-secondary" placeholder="Country, State, County, City, Neighborhood, Zip, Title, Address, ID..."  />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control selectpicker color-secondary" name="input" >
                                                        <option value="0">Type</option>
                                                        <option value="1">House</option>
                                                        <option value="2">Flat</option>
                                                        <option value="3">Apartment</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-search focus-color"><i class="fa fa-search icon-white"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </section><!-- /.header-search-->
                            <div class="h-side clearfix">
                                <div class="pull-left">
                                    <h2 class="h-side-title page-title text-color-primary">Results</h2> <span class='h-side-additional'>2213</span>
                                </div>
                                <div class="pull-right">
                                    <div class="properties-filter">
                                        <div class="form-group">
                                            <select class="form-control selectpicker select-small" name="filter" id="search">
                                                <option value="0">Order By</option>
                                                <option value="1">Asc</option>
                                                <option value="2">Desc</option>
                                            </select>
                                        </div>
                                        <div class="grid-type">
                                            <a href="map_side.php" class="grid"><i class="fa fa-th"></i></a>
                                            <a href="map_side_list.html" class="list active"><i class="fa fa-list"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /. content-header --> 
                            <div class="properties">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="property-card card  property-card-list row-fluid clearfix">
                                            <div class="property-card-header image-box col-sm-4">
                                                <img src="assets/img/placeholders/420x245.png" alt="" class="" />
                                                <div class="budget"><i class="fa fa-star"></i></div>
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                    <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="property-card-tags">
                                                    <span class="label label-default label-tag-warning">rent</span>
                                                </div>
                                                <div class="property-card-box card-box card-block">
                                                    <h3 class="property-card-title"><a href="listing.html">Modern hotel</a></h3>
                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                    <div class="property-preview-footer  clearfix">
                                                        <div class="property-preview-f-right">
                                                            <a href="listing.html" class="btn btn-details text-uppercase">view details</a>
                                                        </div>
                                                        <div class="property-preview-f-left text-color-primary">
                                                            <span class="property-card-value">
                                                                <i class="fa fa-home"></i>House
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-tint"></i>1
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-square-o"></i>200m
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-eur"></i>60 000
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="property-card card  property-card-list row-fluid clearfix">
                                            <div class="property-card-header image-box col-sm-4">
                                                <img src="assets/img/placeholders/420x245.png" alt="" class="" />
                                                <div class="budget"><i class="fa fa-star"></i></div>
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                    <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="property-card-tags">
                                                    <span class="label label-default label-tag-warning">rent</span>
                                                </div>
                                                <div class="property-card-box card-box card-block">
                                                    <h3 class="property-card-title"><a href="listing.html">Swimming pool</a></h3>
                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                    <div class="property-preview-footer  clearfix">
                                                        <div class="property-preview-f-right">
                                                            <a href="listing.html" class="btn btn-details text-uppercase">view details</a>
                                                        </div>
                                                        <div class="property-preview-f-left text-color-primary">
                                                            <span class="property-card-value">
                                                                <i class="fa fa-home"></i>House
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-tint"></i>1
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-square-o"></i>200m
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-eur"></i>60 000
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="property-card card  property-card-list row-fluid clearfix">
                                            <div class="property-card-header image-box col-sm-4">
                                                <img src="assets/img/placeholders/420x245.png" alt="" class="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                    <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="property-card-tags">
                                                    <span class="label label-default label-tag-warning">rent</span>
                                                </div>
                                                <div class="property-card-box card-box card-block">
                                                    <h3 class="property-card-title"><a href="listing.html">Restaurant</a></h3>
                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                    <div class="property-preview-footer  clearfix">
                                                        <div class="property-preview-f-right">
                                                            <a href="listing.html" class="btn btn-details text-uppercase">view details</a>
                                                        </div>
                                                        <div class="property-preview-f-left text-color-primary">
                                                            <span class="property-card-value">
                                                                <i class="fa fa-home"></i>House
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-tint"></i>1
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-square-o"></i>200m
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-eur"></i>60 000
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.properties -->
                                <nav class="text-center">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    </ul>
                                </nav>
                            </div> <!-- /.properties--> 
                            <section class="section section-slim section-ads">
                                <h3 class="hidden">Ads</h3>
                                <img src="assets/img/placeholders/730x90.png" alt="" class="center-block" />
                            </section><!-- /. horizontal-ads--> 
                        </div><!-- /.center-content -->
                    </div>
                </div>
            </main><!-- /.main-part--> 
            <section class="section section-slim agencies">
                <div class="container">
                    <h2 class="section-title text-center"><span>Agencies</span></h2>
                    <div class="row-fluid clearfix">
                        <div class="col-md-12 col-md-offset-0 owl-corousel-box agencies-corousel">
                            <div class="owl-carousel">
                                <div class="item">
                                    <a href="profile.php"><img src="assets/img/placeholders/300x60.png" alt="" /></a>
                                </div>
                                <div class="item">
                                    <a href="profile.php"><img src="assets/img/placeholders/300x60.png" alt="" /></a>
                                </div>
                                <div class="item">
                                    <a href="profile.php"><img src="assets/img/placeholders/300x60.png" alt="" /></a>
                                </div>
                                <div class="item">
                                    <a href="profile.php"><img src="assets/img/placeholders/300x60.png" alt="" /></a>
                                </div>
                                <div class="item">
                                    <a href="profile.php"><img src="assets/img/placeholders/300x60.png" alt="" /></a>
                                </div>
                                <div class="item">
                                    <a href="profile.php"><img src="assets/img/placeholders/300x60.png" alt="" /></a>
                                </div>
                            </div>
                            <a href="#" class="owl-btn customPrevBtn"></a>
                            <a href="#" class="owl-btn customNextBtn"></a>
                        </div>     
                    </div>
                </div>
            </section><!-- /.agencies -->  
            <section class="section page-body section-color-primary">
                <div class="container">
                    <h2 class="section-title text-center"><span>Example Features</span></h2>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-md-3 content-image"><img src="assets/img/placeholders/110x100.png" alt="" /></div>
                                <div class="col-md-9">
                                    <h4 class="text-color-primary">Native Multilangual</h4> Natively multilingual, no need to install any addon. Every element can be translated and you can add as many languages as you want.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-md-3 content-image"><img src="assets/img/placeholders/110x100.png" alt="" /></div>
                                <div class="col-md-9">
                                    <h4 class="text-color-primary">Easy to customize</h4> Template is based on Bootstrap 3, if you are familiar with Bootstrap you can easily customize this template.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-md-3 content-image"><img src="assets/img/placeholders/110x100.png" alt="" /></div>
                                <div class="col-md-9">
                                    <h4 class="text-color-primary">Bootstrap ready</h4> Based on Bootstrap 3 and are easy to customize.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-md-3 content-image"><img src="assets/img/placeholders/110x100.png" alt="" /></div>
                                <div class="col-md-9">
                                    <h4 class="text-color-primary">User friendly</h4> Website structure is logical. Managing elements such as pages, estates or images is easily done...
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-md-3 content-image"><img src="assets/img/placeholders/110x100.png" alt="" /></div>
                                <div class="col-md-9">
                                    <h4 class="text-color-primary">Template System</h4> This is simply dummy text of the printing and typesetting industry.elit...
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-md-3 content-image"><img src="assets/img/placeholders/110x100.png" alt="" /></div>
                                <div class="col-md-9">
                                    <h4 class="text-color-primary">Robust</h4> Build as easy to use and robust Flat style user interface.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /.page-body --> 
            <section class="section section-slim agents section-color-secondary">
                <div class="container">
                    <h2 class="section-title text-center"><span>Agents</span></h2>
                    <div class="row-fluid clearfix">
                        <div class="col-md-12 col-md-offset-0  owl-corousel-box agents-corousel agents-corousel-big" id="agents-corousel-big">
                            <div class="owl-carousel">
                                <div class="item agents-corousel-item">
                                    <div class="box-container media">
                                        <div class="agent-logo media-left media-top">
                                            <a href="profile.php" class='img-circle-cover'>
                                                <img src="assets/img/placeholders/90x90.png" alt="" class="img-circle" />
                                            </a>
                                        </div>
                                        <div class="agent-details media-right media-top">
                                            <a href="profile.php" class="agent-name text-color-primary">Grace Aitken </a>
                                            <span class="phone">+385 (0)92 12 3 321</span>
                                            <a href="mailto:grace@estatepoint.com" class="mail">grace@estatepoint.com</a>
                                        </div>
                                    </div><!-- /.agent-card--> 
                                </div>
                                <div class="item agents-corousel-item">
                                    <div class="box-container media">
                                        <div class="agent-logo media-left media-top">
                                            <a href="profile.php" class='img-circle-cover'>
                                                <img src="assets/img/placeholders/90x90.png" alt="" class="img-circle" />
                                            </a>
                                        </div>
                                        <div class="agent-details media-right media-top">
                                            <a href="profile.php" class="agent-name text-color-primary">Sophia Beckett</a>
                                            <span class="phone">+385 (0)92 12 3 321</span>
                                            <a href="mailto:sophia@estatepoint.com" class="mail">sophia@estatepoint.com</a>
                                        </div>
                                    </div><!-- /.agent-card--> 
                                </div>
                                <div class="item agents-corousel-item">
                                    <div class="box-container media">
                                        <div class="agent-logo media-left media-top">
                                            <a href="profile.php" class='img-circle-cover'>
                                                <img src="assets/img/placeholders/90x90.png" alt="" class="img-circle" />
                                            </a>
                                        </div>
                                        <div class="agent-details media-right media-top">
                                            <a href="profile.php" class="agent-name text-color-primary">Lazo Bikup</a>
                                            <span class="phone">+385 (0)92 12 3 321</span>
                                            <a href="mailto:lazo@estatepoint.com" class="mail">lazo@estatepoint.com</a>
                                        </div>
                                    </div><!-- /.agent-card--> 
                                </div>
                                <div class="item agents-corousel-item">
                                    <div class="box-container media">
                                        <div class="agent-logo media-left media-top">
                                            <a href="profile.php" class='img-circle-cover'>
                                                <img src="assets/img/placeholders/90x90.png" alt="" class="img-circle" />
                                            </a>
                                        </div>
                                        <div class="agent-details media-right media-top">
                                            <a href="profile.php" class="agent-name text-color-primary">Pero Petric</a>
                                            <span class="phone">+385 (0)92 12 3 321</span>
                                            <a href="mailto:pero@estatepoint.com" class="mail">pero@estatepoint.com</a>
                                        </div>
                                    </div><!-- /.agent-card--> 
                                </div>
                                <div class="item agents-corousel-item">
                                    <div class="box-container media">
                                        <div class="agent-logo media-left media-top">
                                            <a href="profile.php" class='img-circle-cover'>
                                                <img src="assets/img/placeholders/90x90.png" alt="" class="img-circle" />
                                            </a>
                                        </div>
                                        <div class="agent-details media-right media-top">
                                            <a href="profile.php" class="agent-name text-color-primary">Alicia Bell</a>
                                            <span class="phone">+385 (0)92 12 3 321</span>
                                            <a href="mailto:alicia@estatepoint.com" class="mail">alicia@estatepoint.com</a>
                                        </div>
                                    </div><!-- /.agent-card--> 
                                </div>
                                <div class="item agents-corousel-item">
                                    <div class="box-container media">
                                        <div class="agent-logo media-left media-top">
                                            <a href="profile.php" class='img-circle-cover'>
                                                <img src="assets/img/placeholders/90x90.png" alt="" class="img-circle" />
                                            </a>
                                        </div>
                                        <div class="agent-details media-right media-top">
                                            <a href="profile.php" class="agent-name text-color-primary">Holly Crouch</a>
                                            <span class="phone">+385 (0)92 12 3 321</span>
                                            <a href="mailto:holly@estatepoint.com" class="mail">holly@estatepoint.com</a>
                                        </div>
                                    </div><!-- /.agent-card--> 
                                </div>
                                <div class="item agents-corousel-item">
                                    <div class="box-container media">
                                        <div class="agent-logo media-left media-top">
                                            <a href="profile.php" class='img-circle-cover'>
                                                <img src="assets/img/placeholders/90x90.png" alt="" class="img-circle" />
                                            </a>
                                        </div>
                                        <div class="agent-details media-right media-top">
                                            <a href="#" class="agent-name text-color-primary">Isabel Lea</a>
                                            <span class="phone">+385 (0)92 12 3 321</span>
                                            <a href="mailto:isabel@estatepoint.com" class="mail">isabel@estatepoint.com</a>
                                        </div>
                                    </div><!-- /.agent-card--> 
                                </div>
                                <div class="item agents-corousel-item">
                                    <div class="box-container media">
                                        <div class="agent-logo media-left media-top">
                                            <a href="profile.php" class='img-circle-cover'>
                                                <img src="assets/img/placeholders/90x90.png" alt="" class="img-circle" />
                                            </a>
                                        </div>
                                        <div class="agent-details media-right media-top">
                                            <a href="profile.php" class="agent-name text-color-primary">Kety York</a>
                                            <span class="phone">+385 (0)92 12 3 321</span>
                                            <a href="mailto:kety@estatepoint.com" class="mail">kety@estatepoint.com</a>
                                        </div>
                                    </div><!-- /.agent-card--> 
                                </div>
                                <div class="item agents-corousel-item">
                                    <div class="box-container media">
                                        <div class="agent-logo media-left media-top">
                                            <a href="profile.php" class='img-circle-cover'>
                                                <img src="assets/img/placeholders/90x90.png" alt="" class="img-circle" />
                                            </a>
                                        </div>
                                        <div class="agent-details media-right media-top">
                                            <a href="profile.php" class="agent-name text-color-primary">Sara Perry</a>
                                            <span class="phone">+385 (0)92 12 3 321</span>
                                            <a href="mailto:sara@estatepoint.com" class="mail">sara@estatepoint.com</a>
                                        </div>
                                    </div><!-- /.agent-card--> 
                                </div>
                            </div>
                            <a href="#" class="owl-btn customPrevBtn"></a>
                            <a href="#" class="owl-btn customNextBtn"></a>
                        </div>     
                    </div>
                </div>
            </section><!-- /.agencies -->
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
        <!-- Start JS MAP  -->
        <script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&amp;&key=AIzaSyArqScnm2PDzRvEIAGXpULA4AOvVe8LtCY&amp;&scale=2" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/map_infobox.js"></script>
        <script type="text/javascript" src="assets/js/markerclusterer.js"></script>
        <script src="assets/js/map.js" type="text/javascript"></script>
        <!-- End JS MAP  -->
        <!-- Start blueimp  -->
        <script src="assets/js/blueimp-gallery.min.js" type="text/javascript"></script>
        <!-- End blueimp  -->
        <script src="assets/js/modernizr.custom.js"></script>
        <!-- Start custom template style  -->
        <script src="assets/js/custom_template_style.js" type="text/javascript"></script>
        <!-- End custom template style   -->
        <script src="assets/js/facebook.js" type="text/javascript"></script>
    </body>
</html>