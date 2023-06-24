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
        <title>Profile Agent</title>
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
                            <li class="item"> Profile </li>
                        </ul>
                        <h1 class="top-title-t">Profile</h1> 
                    </div>
                </section><!-- /.top-title-->
            </header><!-- /.header--> 
            <main class="main main-container section-color-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <section class="widget widget-blog-listing widget-overflow widget-ask">
                                <div class="box-overflow-container box-container">
                                    <div class="box-container-title">
                                        <h2 class="title">Grace Aitken</h2> 
                                    </div> <!-- /. content-header --> 
                                    <div class="">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="agent-detail-picture">
                                                    <img src="assets/img/placeholders/180x265.png" alt="" class="img-responsive" />
                                                </div><!-- /.agent-detail-picture -->
                                            </div>
                                            <div class="col-sm-9">
                                                <p>
                                                    This is simply dummy text of the printing and typesetting industry.elit. Donec auctor diam in quam molestie ullamcorper. Praesent a tellus massa. Nulla laoreet tempus congue. Praesent ut ultrices nunc. Etiam at libero sed turpis tempor placerat in eget lectus. Curabitur pretium, ante vel aliquam lacinia, ipsum felis hendrerit leo, ut aliquet neque odio at nisl.                                                
                                                </p>
                                                <div class="agent">
                                                    <div class="phone text-color-primary">+385 (0)91 123 321</div>
                                                    <div class="mail"><a href="mailto:grace@estatepoint.com" class="primary-hover">grace@estatepoint.com</a></div>
                                                </div>
                                                <ul class="clearfix sharing-buttons">
                                                    <li>
                                                        <a class="facebook" href="https://www.facebook.com/share.php?u=http://site.com/&amp;title=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                                            <i class="fa fa-facebook fa-left no-margin"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="google-plus" href="https://plus.google.com/share?url=http://site.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                                            <i class="fa fa-google-plus fa-left no-margin"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="twitter" href="https://twitter.com/home?status=%20http://site.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                                            <i class="fa fa-twitter fa-left no-margin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.row -->
                                    </div>
                                </div>
                            </section>
                            <div class="widget widget-profilelisting">
                                <div class="widget-body">
                                    <div class="widget-header text-uppercase">
                                        <h2>Assigned listings</h2>
                                    </div>
                                </div>
                                <div class="properties">
                                    <div class="row">
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
                                                    <h3 class="property-card-title"><a href="listing.html">Modern bed room</a></h3>
                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                    <div class="property-preview-footer  clearfix">
                                                        <div class="property-preview-f-left text-color-primary">
                                                            <span class="property-card-value">
                                                                <i class="fa fa-home"></i>House
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-tint"></i>2
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-square-o"></i>60m
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-eur"></i>40 000
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
                                                    <h3 class="property-card-title"><a href="listing.html">Modern backyard with pool</a></h3>
                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                    <div class="property-preview-footer  clearfix">
                                                        <div class="property-preview-f-left text-color-primary">
                                                            <span class="property-card-value">
                                                                <i class="fa fa-home"></i>Pool
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-tint"></i>1
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-square-o"></i>115m
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-eur"></i>35 000
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
                                                    <h3 class="property-card-title"><a href="listing.html">Modern lounge room</a></h3>
                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                    <div class="property-preview-footer  clearfix">
                                                        <div class="property-preview-f-left text-color-primary">
                                                            <span class="property-card-value">
                                                                <i class="fa fa-home"></i>House
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-tint"></i>1
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-square-o"></i>40m
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-eur"></i>25 000
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
                                                    <h3 class="property-card-title"><a href="listing.html">Restaurant</a></h3>
                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                    <div class="property-preview-footer  clearfix">
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
                                                    <h3 class="property-card-title"><a href="listing.html">Swimming pool</a></h3>
                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                    <div class="property-preview-footer  clearfix">
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
                                                    <h3 class="property-card-title"><a href="listing.html">Hotel room</a></h3>
                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                    <div class="property-preview-footer  clearfix">
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
                                                    <h3 class="property-card-title"><a href="listing.html">Hotel</a></h3>
                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                    <div class="property-preview-footer  clearfix">
                                                        <div class="property-preview-f-left text-color-primary">
                                                            <span class="property-card-value">
                                                                <i class="fa fa-home"></i>Hotel
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-tint"></i>2
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-square-o"></i>120m
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-eur"></i>30 000
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
                                                    <h3 class="property-card-title"><a href="listing.html" class="">Tropicalm villa</a></h3>
                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                    <div class="property-preview-footer  clearfix">
                                                        <div class="property-preview-f-left text-color-primary">
                                                            <span class="property-card-value">
                                                                <i class="fa fa-home"></i>Villa
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-tint"></i>5
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-square-o"></i>240m
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-eur"></i>160 000
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
                                                    <h3 class="property-card-title"><a href="listing.html">House interior</a></h3>
                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                    <div class="property-preview-footer  clearfix">
                                                        <div class="property-preview-f-left text-color-primary">
                                                            <span class="property-card-value">
                                                                <i class="fa fa-home"></i>House
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-tint"></i>4
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-square-o"></i>230m
                                                            </span>
                                                            <span class="property-card-value">
                                                                <i class="fa fa-eur"></i>170 000
                                                            </span>
                                                        </div>
                                                    </div>
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
                                <!-- /.properties -->
                            </div>  <!-- /. widget-properties -->    
                        </div><!-- /.center-content -->
                        <div class="col-md-3">
                            <div class="widget widget-form" id="form">
                                <form action="#" method="post">
                                    <div class="box-container widget-body">
                                        <div class="widget-header text-uppercaser"><h2>Enquiry form</h2></div>
                                        <div class="form-additional">
                                            <div class="form-group">
                                                <input type="text" name='name' class="form-control" placeholder="Full Name" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="mail" class="form-control" placeholder="Email"  />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control" placeholder="Phone" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="address" class="form-control" placeholder="Address" />
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" placeholder="Message"  rows='2'></textarea>
                                            </div>
                                            <div class="form-group control-group control-group-captcha">
                                                <img src="assets/img/placeholders/120x35.png" width="120" height="35" style="border:0;" alt=" " /> 
                                                <div class="captcha-input-box">
                                                    <input class="form-control captcha" name="captcha" type="text" placeholder="Enter code from image" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group form-group-submit">
                                                <input type="submit" name='address' class="btn btn-primary btn-wide color-primary btn-property" value="Send"  />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /.widget-form--> 
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
                        <!-- /.right side bar -->
                    </div>
                </div>
            </main><!-- /.main-part--> 
            <footer class="footer">
                <?php include 'templates/footer/_footer.php' ?>
            </footer>
            <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a>
        </div>
        <?php include $generales->path_base.'templates/java.php' ?>
    </body>
</html>