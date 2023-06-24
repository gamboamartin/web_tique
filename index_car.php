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
        <title>Car Dealer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <?php include $generales->path_base.'templates/css.php'; ?>
    </head>
    <body class="">
        <div id="fb-root"></div>
        <div class="container container-wrapper">
            <header class="header">
                <?php include 'templates/head/_head.php'?>
                <div class="container">
                    <section class="header-slider">
                        <!-- Carousel container -->
                        <div id="header-slider" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#header-slider" data-slide-to="0" class="active"></li>
                                <li data-target="#header-slider" data-slide-to="1"></li>
                                <li data-target="#header-slider" data-slide-to="2"></li>
                            </ol>
                            <!-- Content -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Slide 1 -->
                                <div class="item active">
                                    <img src="assets/img/placeholders/1600x550.png" alt="Sunset over beach" />
                                    <div class="carousel-caption">
                                        <h3 class="carousel-caption-title"><span>Single Car from Car Dealer</span><i class="line-bottom color-primary"></i></h3>
                                        <div class="s-description"><p>This is simply dummy text of the printing and the typesetting industry. That has been the industry standard dummy text ever since the 1500s ...</p></div>
                                        <a href="listing.html" class="btn btn-primary color-primary"><span>Click to show</span></a>
                                    </div>
                                </div>
                                <!-- Slide 2 -->
                                <div class="item">
                                    <img src="assets/img/placeholders/1600x550.png" alt="Rob Roy Glacier" />
                                    <div class="carousel-caption">
                                        <h3 class="carousel-caption-title"><span>Single Car from Car Dealer</span><i class="line-bottom color-primary"></i></h3>
                                        <div class="s-description"><p>This is simply dummy text of the printing and the typesetting industry. That has been the industry standard dummy text ever since the 1500s ...</p></div>
                                        <a href="listing.html" class="btn btn-primary color-primary"><span>Click to show</span></a>
                                    </div>
                                </div>
                                <!-- Slide 3 -->
                                <div class="item">
                                    <img src="assets/img/placeholders/1600x550.png" alt="Longtail boats at Phi Phi" />
                                    <div class="carousel-caption">
                                        <h3 class="carousel-caption-title">Single Car from Car Dealer <i class="line-bottom color-primary"></i></h3>
                                        <div class="s-description"><p>This is simply dummy text of the printing and the typesetting industry. That has been the industry standard dummy text ever since the 1500s ...</p></div>
                                        <a href="listing.html" class="btn btn-primary color-primary"><span>Click to show</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Previous/Next controls -->
                            <a class="left carousel-control" href="#header-slider" role="button" data-slide="prev">
                                <span class="icon-prev" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#header-slider" role="button" data-slide="next">
                                <span class="icon-next" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                        <!-- Carousel container -->
                    </section><!-- /.header-slider-->
                    <section class="search-form color-primary parallax">
                        <h3 class="hidden">Search</h3>
                        <div class="container">
                            <form action="#" class="form-horisontal">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <select class="form-control selectpicker color-secondary" name="input" >
                                                <option value="0">Purpose</option>
                                                <option value="1">Sale</option>
                                                <option value="2">Rent</option>
                                                <option value="3">Sale and Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control color-secondary" placeholder="Country, State, County, City, Neighborhood, Zip, Title, Address, ID..."  />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <select class="form-control selectpicker color-secondary" name="input" >
                                                <option value="0">Type</option>
                                                <option value="1">Small</option>
                                                <option value="2">Medium</option>
                                                <option value="3">Large</option>
                                                <option value="3">Van</option>
                                                <option value="3">Convertible</option>
                                                <option value="3">Sports</option>
                                                <option value="3">4x4</option>
                                                <option value="3">Hybrid</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <select class="form-control selectpicker color-secondary" name="input" >
                                                <option value="0">Fuel</option>
                                                <option value="1">Diesel</option>
                                                <option value="2">Petrol</option>
                                                <option value="3">Gas/Petrol</option>
                                                <option value="4">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <button type="submit" class="btn btn-search focus-color"><i class="fa fa-search icon-white"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section><!-- /.header-search-->
                </div>
            </header><!-- /.header--> 
            <main class="main section-color-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
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
                                        <a href="index_car.html" class="grid active"><i class="fa fa-th"></i></a>
                                        <a href="#" class="list"><i class="fa fa-list"></i></a>
                                    </div>
                                </div>
                            </div> <!-- /. content-header --> 
                            <div class="properties">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
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
                                                <h3 class="property-card-title"><a href="listing.html">Infinity red</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-car"></i>Sport
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-tint"></i>Diesel
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>60 000
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
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
                                                <h3 class="property-card-title"><a href="listing.html">Fast car</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-car"></i>Sport
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-tint"></i>Petrol
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>60 000
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
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
                                                <h3 class="property-card-title"><a href="listing.html">Blue car</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-car"></i>Sport
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-tint"></i>Diesel
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>60 000
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
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
                                                <span class="label label-default label-tag-warning">rent</span>
                                            </div>
                                            <div class="property-card-box card-box card-block">
                                                <h3 class="property-card-title"><a href="listing.html">Camper</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-car"></i>Sport
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-tint"></i>Petrol
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>60 000
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
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
                                                <h3 class="property-card-title"><a href="listing.html">Red sedan</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-car"></i>Sport
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-tint"></i>Diesel
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>60 000
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
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
                                                <h3 class="property-card-title"><a href="listing.html">Datia</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-car"></i>Sport
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-tint"></i>Diesel
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>60 000
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
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
                                                <span class="label label-default label-tag-warning">rent</span>
                                            </div>
                                            <div class="property-card-box card-box card-block">
                                                <h3 class="property-card-title"><a href="listing.html">Hybrid car</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-car"></i>Sport
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-tint"></i>Petrol
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>60 000
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
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
                                                <h3 class="property-card-title"><a href="listing.html">Classic sedan</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-car"></i>Sport
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-tint"></i>Diesel
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>60 000
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
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
                                                <h3 class="property-card-title"><a href="listing.html">Modern car</a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-car"></i>Sport
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-tint"></i>Diesel
                                                        </span>
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
                        <div class="col-md-3 sidebar-right">
                            <div class="widget text-center">
                                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
                            </div><!-- /.widget-facebook -->
                            <div class="widget widget-box  box-container">
                                <div class="widget-header text-uppercaser">
                                    <h2>Filter</h2>
                                </div>
                                <div class="form-additional npad">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Manufacturer"  />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control selectpicker select-secondary" name="input" >
                                            <option value="0">Gears</option>
                                            <option value="1">3 SPEED</option>
                                            <option value="2">2 SPEED</option>
                                            <option value="3">3 SPEED</option>
                                            <option value="4">4 SPEED</option>
                                            <option value="5">5 SPEED</option>
                                            <option value="6">6 SPEED</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Min Price"  />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Max Price"  />
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-wide color-primary" type='submit'>Refresh results</button>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-box box-container">
                                <div class="widget-header text-uppercaser">
                                    <h3>Recommendations</h3>
                                </div>
                                <ul class="widget-list text-uppercase text-center npad">
                                    <li><a href="#" class="widget-item">CAR IN SPLIT</a></li>
                                    <li><a href="#" class="widget-item">BIKE IN VARAZDIN</a></li>
                                    <li><a href="#" class="widget-item">CAMPER IN ZAGORJE</a></li>
                                </ul>
                            </div><!-- /.widget-filter--> 
                            <div class="widget widget-ads-right">
                                <img src="assets/img/placeholders/265x220.png" alt="" class="center-block" />
                            </div><!-- /.widget-ads--> 
                        </div>
                        <!-- /.right side bar -->
                    </div>
                </div>
            </main><!-- /.main-part--> 
            <section class="section section-ads section-parallax">
                <h3 class="hidden">Ads</h3>
                <div class="container">
                    <img src="assets/img/placeholders/730x90.png" alt="" class="center-block" />
                </div>
            </section><!-- /. horizontal-ads--> 
            <section class="section news section-color-secondary">
                <div class="container">
                    <div class="section-title">
                        <h2 class="section-title text-center"><span>News</span></h2>
                    </div>
                    <div class="news-slide">
                        <div id="news-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <h3 class="title"><a href="page_gallery.php">Find your happy family house</a></h3>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="news-thumbnail hover-default">
                                                            <img src="assets/img/placeholders/700x350.png" alt="" />
                                                            <a href="listing.html" class="property-card-hover">
                                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 description">
                                                        This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <h3 class="title"><a href="page_gallery.php">Healthy body important for success in business</a></h3>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="news-thumbnail hover-default">
                                                            <img src="assets/img/placeholders/700x350.png" alt="" />
                                                            <a href="listing.html" class="property-card-hover">
                                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 description">
                                                        This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <h3 class="title"><a href="page_gallery.php">Sell your house easily with nice grass</a></h3>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="news-thumbnail hover-default">
                                                            <img src="assets/img/placeholders/700x350.png" alt="" />
                                                            <a href="listing.html" class="property-card-hover">
                                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 description">
                                                        This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <h3 class="title"><a href="page_gallery.php">Education and over-thinking</a></h3>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="news-thumbnail hover-default">
                                                            <img src="assets/img/placeholders/700x350.png" alt="" />
                                                            <a href="listing.html" class="property-card-hover">
                                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 description">
                                                        This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <h3 class="title"><a href="page_gallery.php">New modern house designs</a></h3>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="news-thumbnail hover-default">
                                                            <img src="assets/img/placeholders/700x350.png" alt="" />
                                                            <a href="listing.html" class="property-card-hover">
                                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 description">
                                                        This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <h3 class="title"><a href="page_gallery.php">Better portal for large City</a></h3>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="news-thumbnail hover-default">
                                                            <img src="assets/img/placeholders/700x350.png" alt="" />
                                                            <a href="listing.html" class="property-card-hover">
                                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 description">
                                                        This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <h3 class="title"><a href="page_gallery.php">Clean environment importance for healthy life</a></h3>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="news-thumbnail hover-default">
                                                            <img src="assets/img/placeholders/700x350.png" alt="" />
                                                            <a href="listing.html" class="property-card-hover">
                                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 description">
                                                        This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <h3 class="title"><a href="page_gallery.php">Become successfully speaker</a></h3>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="news-thumbnail hover-default">
                                                            <img src="assets/img/placeholders/700x350.png" alt="" />
                                                            <a href="listing.html" class="property-card-hover">
                                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 description">
                                                        This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <h3 class="title"><a href="page_gallery.php">Yacht prices again changing</a></h3>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="news-thumbnail hover-default">
                                                            <img src="assets/img/placeholders/700x350.png" alt="" />
                                                            <a href="listing.html" class="property-card-hover">
                                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 description">
                                                        This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <h3 class="title"><a href="page_gallery.php">Women successfully ratio</a></h3>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="news-thumbnail hover-default">
                                                            <img src="assets/img/placeholders/700x350.png" alt="" />
                                                            <a href="listing.html" class="property-card-hover">
                                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 description">
                                                        This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <h3 class="title"><a href="page_gallery.php">Toys affect children's nature</a></h3>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="news-thumbnail hover-default">
                                                            <img src="assets/img/placeholders/700x350.png" alt="" />
                                                            <a href="listing.html" class="property-card-hover">
                                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 description">
                                                        This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <h3 class="title"><a href="page_gallery.php">Become a better guest</a></h3>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="news-thumbnail hover-default">
                                                            <img src="assets/img/placeholders/700x350.png" alt="" />
                                                            <a href="listing.html" class="property-card-hover">
                                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 description">
                                                        This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="carousel-indicators pagination-carousel">
                                <li data-target="#news-carousel" data-slide-to="0" class="active" ><a class="" href="#"> 1 </a></li>
                                <li  data-target="#news-carousel" data-slide-to="1" ><a class="" href="#">2</a></li>
                                <li  data-target="#news-carousel" data-slide-to="2" ><a class="" href="#">3</a></li>
                            </ul>
                        </div>
                    </div><!-- /.news-slider--> 
                </div>
            </section><!-- /.news --> 
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
        <script src="assets/js/facebook.js" type="text/javascript"></script>
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