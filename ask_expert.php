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
        <title>Ask Expert</title>
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
                            <li class="item"> FAQ </li>
                        </ul>
                        <h1 class="top-title-t">FAQ</h1> 
                    </div>
                </section><!-- /.top-title-->
            </header><!-- /.header--> 
            <main class="main main-container section-color-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <section class="widget-blog-listing widget-overflow widget-ask">
                                <div class="box-overflow-container box-container">
                                    <div class="box-container-title">
                                        <h2 class="title">FIND YOUR ANSWER</h2> 
                                        <span class="sub-title">Answer listing with search example...</span>
                                    </div> <!-- /. content-header --> 
                                    <div class="panel-group panel-content property_content_position" id="accordionThree">
                                        <div class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse30" aria-expanded="false" class="panel-heading">
                                                <h4 class="panel-title">
                                                    How do I change my password?                                       
                                                </h4>
                                            </a>
                                            <div id="collapse30" class="panel-collapse collapse in" aria-expanded="false" role="definition">
                                                <div class="panel-body">
                                                    <p>
                                                    Layout dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non a ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et. Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit iste delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem! Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa nam soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem atque quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.                                    
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse31" class="panel-heading collapsed" aria-expanded="false">
                                                <h4 class="panel-title">
                                                    Can I remove a post?
                                                </h4>
                                            </a>
                                            <div id="collapse31" class="panel-collapse collapse" aria-expanded="false"  role="definition">
                                                <div class="panel-body">
                                                    <p>
                                                    This is simply dummy text of the printing and typesetting industry.elit. Sed vulputate nec neque gravida rhoncus. Donec sit amet blandit mauris, sed bibendum risus.                                   
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse32" class="panel-heading collapsed" aria-expanded="false">
                                                <h4 class="panel-title">
                                                    How do reviews work? 
                                                </h4>
                                            </a>
                                            <div id="collapse32" class="panel-collapse collapse" aria-expanded="false"  role="definition">
                                                <div class="panel-body">
                                                    <p>
                                                    This is simply dummy text of the printing and typesetting industry.elit. Sed vulputate nec neque gravida rhoncus. Donec sit amet blandit mauris, sed bibendum risus.                                    
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse34" class="panel-heading collapsed" aria-expanded="false">
                                                <h4 class="panel-title">
                                                    How do I change my account settings? 
                                                </h4>
                                            </a>
                                            <div id="collapse34" class="panel-collapse collapse" aria-expanded="false"  role="definition">
                                                <div class="panel-body">
                                                    <p>
                                                    This is simply dummy text of the printing and typesetting industry.elit. Sed vulputate nec neque gravida rhoncus. Donec sit amet blandit mauris, sed bibendum risus.                                    
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                <textarea class="form-control" name="question" placeholder="Question"  rows='2'></textarea>
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