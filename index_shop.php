<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Basic shop</title>
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
            </header><!-- /.header-->
            <main class="main section-color-primary">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="h-side top-pad h-side-slim clearfix">
                                <div class="properties-filter">
                                    <div class="form-group">
                                        <select class="form-control selectpicker select-small" name="filter" id="search">
                                            <option value="0">Order By</option>
                                            <option value="1">Asc</option>
                                            <option value="2">Desc</option>
                                        </select>
                                    </div>
                                    <div class="grid-type pull-right">
                                        <a href="index_shop.html" class="grid active"><i class="fa fa-th"></i></a>
                                        <a href="#" class="list"><i class="fa fa-list"></i></a>
                                    </div>
                                </div>
                            </div> <!-- /. content-header --> 
                            <div class="properties">
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="property-card card shop-card">
                                            <div class="property-card-header image-box">
                                                <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                    <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                            <div class="property-card-tags">
                                                <span class="label label-default label-tag-warning">special</span>
                                            </div>
                                            <div class="property-card-box card-box card-block">
                                                <h3 class="property-card-title"><a href="listing.html">Camera</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-right">
                                                        <a href="page_cart.php" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                            <span>Add to cart</span>
                                                        </a>
                                                    </div>
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>60 000
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="property-card card shop-card">
                                            <div class="property-card-header image-box">
                                                <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                    <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                            <div class="property-card-tags">
                                                <span class="label label-default label-tag-primary">new</span>
                                            </div>
                                            <div class="property-card-box card-box card-block">
                                                <h3 class="property-card-title"><a href="listing.html">Horse</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-right">
                                                        <a href="page_cart.php" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                            <span>Add to cart</span>
                                                        </a>
                                                    </div>
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>60 000
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="property-card card shop-card">
                                            <div class="property-card-header image-box">
                                                <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                    <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                            <div class="property-card-tags">
                                                <span class="label label-default label-tag-warning">special</span>
                                            </div>
                                            <div class="property-card-box card-box card-block">
                                                <h3 class="property-card-title"><a href="listing.html">Smartphone</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-right">
                                                        <a href="page_cart.php" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                            <span>Add to cart</span>
                                                        </a>
                                                    </div>
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>60 000
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="property-card card shop-card">
                                            <div class="property-card-header image-box">
                                                <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                    <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                            <div class="property-card-tags">
                                                <span class="label label-default label-tag-primary">new</span>
                                            </div>
                                            <div class="property-card-box card-box card-block">
                                                <h3 class="property-card-title"><a href="listing.html">Keyboard</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-right">
                                                        <a href="page_cart.php" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                            <span>Add to cart</span>
                                                        </a>
                                                    </div>
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>60 000
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="property-card card shop-card">
                                            <div class="property-card-header image-box">
                                                <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                    <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                            <div class="property-card-tags">
                                                <span class="label label-default label-tag-primary">new</span>
                                            </div>
                                            <div class="property-card-box card-box card-block">
                                                <h3 class="property-card-title"><a href="listing.html">Microphone</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-right">
                                                        <a href="page_cart.php" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                            <span>Add to cart</span>
                                                        </a>
                                                    </div>
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>60 000
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="property-card card shop-card">
                                            <div class="property-card-header image-box">
                                                <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                    <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                            <div class="property-card-tags">
                                                <span class="label label-default label-tag-warning">special</span>
                                            </div>
                                            <div class="property-card-box card-box card-block">
                                                <h3 class="property-card-title"><a href="listing.html">Flowers</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-right">
                                                        <a href="page_cart.php" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                            <span>Add to cart</span>
                                                        </a>
                                                    </div>
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>60 000
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="property-card card shop-card">
                                            <div class="property-card-header image-box">
                                                <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                    <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                            <div class="property-card-tags">
                                                <span class="label label-default label-tag-primary">new</span>
                                            </div>
                                            <div class="property-card-box card-box card-block">
                                                <h3 class="property-card-title"><a href="listing.html">Luxury suit</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-right">
                                                        <a href="page_cart.php" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                            <span>Add to cart</span>
                                                        </a>
                                                    </div>
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>60 000
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="property-card card shop-card">
                                            <div class="property-card-header image-box">
                                                <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                    <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                            <div class="property-card-tags">
                                                <span class="label label-default label-tag-primary">new</span>
                                            </div>
                                            <div class="property-card-box card-box card-block">
                                                <h3 class="property-card-title"><a href="listing.html">Yacht</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-right">
                                                        <a href="page_cart.php" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                            <span>Add to cart</span>
                                                        </a>
                                                    </div>
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>60 000
                                                        </span>
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
                        </div><!-- /.center-content -->
                    </div>
                </div>
            </main><!-- /.main-part--> 
            <section class="section section-ads section-parallax">
                <h3 class="hidden">Ads</h3>
                <div class="container">
                    <img src="assets/img/placeholders/730x90.png" alt="" class="center-block" />
                </div>
            </section><!-- /. horizontal-ads--> 
            <section class="section agents property-corousel section-color-secondary">
                <div class="container">
                    <div class="section-title text-center"><span>Featured Products</span></div>
                    <div class="row-fluid clearfix">
                        <div class="col-md-12 col-md-offset-0  owl-corousel-box agents-corousel" id='property-corousel'>
                            <div class="owl-carousel">
                                <div class="item shop-corousel-item">
                                    <div class="property-card card shop-card">
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
                                            <span class="label label-default label-tag-warning">special</span>
                                        </div>
                                        <div class="property-card-box card-box card-block">
                                            <h3 class="property-card-title"><a href="listing.html">Case for phone</a></h3>
                                            <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                            <div class="property-preview-footer  clearfix">
                                                <div class="property-preview-f-right">
                                                    <a href="page_cart.php" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                                <div class="property-preview-f-left text-color-primary">
                                                    <span class="property-card-value">
                                                        <i class="fa fa-eur"></i>60 000
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item shop-corousel-item">
                                    <div class="property-card card shop-card">
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
                                            <span class="label label-default label-tag-warning">special</span>
                                        </div>
                                        <div class="property-card-box card-box card-block">
                                            <h3 class="property-card-title"><a href="listing.html">Action camera</a></h3>
                                            <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                            <div class="property-preview-footer  clearfix">
                                                <div class="property-preview-f-right">
                                                    <a href="page_cart.php" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                                <div class="property-preview-f-left text-color-primary">
                                                    <span class="property-card-value">
                                                        <i class="fa fa-eur"></i>60 000
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item shop-corousel-item">
                                    <div class="property-card card shop-card">
                                        <div class="property-card-header image-box">
                                            <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                            <a href="listing.html" class="property-card-hover">
                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                            </a>
                                        </div>
                                        <div class="property-card-tags">
                                            <span class="label label-default label-tag-warning">special</span>
                                        </div>
                                        <div class="property-card-box card-box card-block">
                                            <h3 class="property-card-title"><a href="listing.html">Football table</a></h3>
                                            <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                            <div class="property-preview-footer  clearfix">
                                                <div class="property-preview-f-right">
                                                    <a href="page_cart.php" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                                <div class="property-preview-f-left text-color-primary">
                                                    <span class="property-card-value">
                                                        <i class="fa fa-eur"></i>60 000
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item shop-corousel-item">
                                    <div class="property-card card shop-card">
                                        <div class="property-card-header image-box">
                                            <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                            <a href="listing.html" class="property-card-hover">
                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                            </a>
                                        </div>
                                        <div class="property-card-tags">
                                            <span class="label label-default label-tag-warning">special</span>
                                        </div>
                                        <div class="property-card-box card-box card-block">
                                            <h3 class="property-card-title"><a href="listing.html">Zoom camera</a></h3>
                                            <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                            <div class="property-preview-footer  clearfix">
                                                <div class="property-preview-f-right">
                                                    <a href="page_cart.php" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                                <div class="property-preview-f-left text-color-primary">
                                                    <span class="property-card-value">
                                                        <i class="fa fa-eur"></i>60 000
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item shop-corousel-item">
                                    <div class="property-card card shop-card">
                                        <div class="property-card-header image-box">
                                            <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                            <a href="listing.html" class="property-card-hover">
                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                            </a>
                                        </div>

                                        <div class="property-card-tags">
                                            <span class="label label-default label-tag-warning">special</span>
                                        </div>
                                        <div class="property-card-box card-box card-block">
                                            <h3 class="property-card-title"><a href="listing.html">Arabian horse</a></h3>
                                            <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                            <div class="property-preview-footer  clearfix">
                                                <div class="property-preview-f-right">
                                                    <a href="page_cart.php" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                                <div class="property-preview-f-left text-color-primary">
                                                    <span class="property-card-value">
                                                        <i class="fa fa-eur"></i>60 000
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item shop-corousel-item">
                                    <div class="property-card card shop-card">
                                        <div class="property-card-header image-box">
                                            <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                            <a href="listing.html" class="property-card-hover">
                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                            </a>
                                        </div>

                                        <div class="property-card-tags">
                                            <span class="label label-default label-tag-warning">special</span>
                                        </div>
                                        <div class="property-card-box card-box card-block">
                                            <h3 class="property-card-title"><a href="listing.html">American Quarter Horse</a></h3>
                                            <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                            <div class="property-preview-footer  clearfix">
                                                <div class="property-preview-f-right">
                                                    <a href="page_cart.php" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                                <div class="property-preview-f-left text-color-primary">
                                                    <span class="property-card-value">
                                                        <i class="fa fa-eur"></i>60 000
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item shop-corousel-item">
                                    <div class="property-card card shop-card">
                                        <div class="property-card-header image-box">
                                            <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                            <a href="listing.html" class="property-card-hover">
                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                            </a>
                                        </div>

                                        <div class="property-card-tags">
                                            <span class="label label-default label-tag-warning">special</span>
                                        </div>
                                        <div class="property-card-box card-box card-block">
                                            <h3 class="property-card-title"><a href="listing.html">Rings</a></h3>
                                            <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                            <div class="property-preview-footer  clearfix">
                                                <div class="property-preview-f-right">
                                                    <a href="page_cart.php" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                                <div class="property-preview-f-left text-color-primary">
                                                    <span class="property-card-value">
                                                        <i class="fa fa-eur"></i>60 000
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item shop-corousel-item">
                                    <div class="property-card card shop-card">
                                        <div class="property-card-header image-box">
                                            <img src="assets/img/placeholders/395x250.png" alt="" class="" />
                                            <a href="listing.html" class="property-card-hover">
                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                            </a>
                                        </div>

                                        <div class="property-card-tags">
                                            <span class="label label-default label-tag-warning">special</span>
                                        </div>
                                        <div class="property-card-box card-box card-block">
                                            <h3 class="property-card-title"><a href="listing.html">Camera Lens</a></h3>
                                            <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                            <div class="property-preview-footer  clearfix">
                                                <div class="property-preview-f-right">
                                                    <a href="page_cart.php" class="btn btn-sm btn-base btn-icon btn-cart pull-right">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                                <div class="property-preview-f-left text-color-primary">
                                                    <span class="property-card-value">
                                                        <i class="fa fa-eur"></i>60 000
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
            <section class="section agencies">
                <div class="container">
                    <h2 class="section-title text-center"><span>Agencies</span></h2>
                    <div class="row-fluid">
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
            <section class="section agents section-color-primary">
                <div class="container">
                    <h2 class="section-title text-center"><span>Agents</span></h2>
                    <div class="row-fluid">
                        <div class="col-md-12 col-md-offset-0  owl-corousel-box agents-corousel" id='agents-corousel'>
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
        <!-- Start blueimp  -->
        <script src="assets/js/blueimp-gallery.min.js" type="text/javascript"></script>
        <!-- End blueimp  -->
        <!-- Start custom template style  -->
        <script src="assets/js/custom_template_style.js" type="text/javascript"></script>
        <!-- End custom template style   -->
    </body>
</html>