<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Components Carousel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="../assets/libraries/font-awesome/css/font-awesome.min.css" />
        <!-- Start BOOTSTRAP -->
        <link rel="stylesheet" href="../assets/libraries/tether/dist/css/tether.min.css" />
        <link rel="stylesheet" href="../assets/libraries/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/bootstrap-select.min.css" />
        <link rel="stylesheet" href="../assets/libraries/bootstrap-colorpicker-master/dist/css/bootstrap-colorpicker.min.css" />
        <!-- End Bootstrap -->
        <!-- Start Template files -->
        <link rel="stylesheet" href="../assets/css/winter-flat.css" />
        <link rel="stylesheet" href="../assets/css/custom.css" />
        <!-- End  Template files -->
        <!-- Start owl-carousel -->
        <link rel="stylesheet" href="../assets/libraries/owl.carousel/assets/owl.carousel.css" />
        <!-- End owl-carousel -->
        <!-- Start blueimp  -->
        <link rel="stylesheet" href="../assets/css/blueimp-gallery.min.css" />
        <!-- End blueimp  -->
        <script src="../assets/js/modernizr.custom.js"></script>
        <!-- Start custom template style  -->
        <link rel="stylesheet" href="../assets/css/custom_template_style.css" />
        <!-- End custom template style   -->
        <!-- Start codemirror  -->
        <link rel="stylesheet" href="../assets/libraries/codemirror/lib/codemirror.css" />
        <!-- End codemirror  -->
    </head>
    <body class="">
        <div class="container container-wrapper">
            <header class="header">
                <?php include 'templates/head/_head.php' ?>
            </header><!-- /.header--> 
            <main class="main section-color-primary">
                <div class="container">
                    <section class="top-title">
                        <ul class="breadcrumb">
                            <li class="item"><a href="/"> Home </a></li>
                            <li class="item"><a href="#"> Components </a></li>
                            <li class="item"> Carousels Bootstrap </li>
                        </ul>
                        <h1 class="h-side-title page-title page-title-big text-color-primary">Carousels Bootstrap</h1> 
                    </section> <!-- /. content-header --> 
                    <div class="row">
                        <div class="col-md-9 components-examples">
                            <section class="widget widget-box  box-container">
                                <div class="box-container-title">
                                    <h2 class="title widget-header">Examples</h2> 
                                </div>
                                <div class="bd-example">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item">
                                                <img data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="900x500" style="width: 900px; height: 500px;" src="../assets/img/placeholders/1600x550.png" data-holder-rendered="true" />
                                            </div>
                                            <div class="item">
                                                <img data-src="holder.js/900x500/auto/#666:#444/text:Second slide" alt="900x500" src="../assets/img/placeholders/1600x550.png" data-holder-rendered="true" style="width: 900px; height: 500px;" />
                                            </div>
                                            <div class="item active">
                                                <img data-src="holder.js/900x500/auto/#555:#333/text:Third slide" alt="900x500" src="../assets/img/placeholders/1600x550.png" data-holder-rendered="true" style="width: 900px; height: 500px;" />
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="icon-prev" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="icon-next" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <textarea name="input" class="file_content" cols="30" rows="10">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img data-src="..." alt="First slide" src="assets/img/placeholders/1600x550.png" />
                                            </div>
                                            <div class="item">
                                                <img data-src="..." alt="Second slide" src="assets/img/placeholders/1600x550.png" />
                                            </div>
                                            <div class="item">
                                                <img data-src="..." alt="Third slide" src="assets/img/placeholders/1600x550.png" />
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="icon-prev" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="icon-next" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </textarea>
                            </section>
                        </div>
                        <!-- /.right side bar -->
                        <div class="col-md-3">
                            <div class="widget widget-box box-container widget-list-menu">
                                <div class="widget-header text-uppercase">
                                    Components
                                </div>
                                <div class="">
                                    <ul class="categories list-menu">
                                        <li><a class="dropdown-item" href="component_accordions.php">Accordion</a></li>
                                        <li><a class="dropdown-item" href="component_alerts.php">Alerts</a></li>
                                        <li><a class="dropdown-item" href="#">Blocks</a>
                                            <ul>
                                                <li><a href="components_blocks_property.php">Blocks Property</a></li>
                                                <li><a href="components_blocks_propertylist.php">Blocks Property List</a></li>
                                                <li><a href="components_blocks_shop.php">Blocks Shop</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="component_breadcrumb.php">Breadcrumb</a></li>
                                        <li><a class="dropdown-item" href="component_buttons.php">Buttons</a></li>
                                        <li><a class="dropdown-item" href="component_card.php">Card</a></li>
                                        <li><a class="dropdown-item active" href="#">Carousels</a>
                                            <ul>
                                                <li><a href="component_carousel_bootstrap.html">Carousels Bootstrap</a></li>
                                                <li><a href="component_carousel_owl.php">Carousels owl</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="component_listgroup.php">List Group</a></li>
                                        <li><a class="dropdown-item" href="component_pagination.php">Pagination</a></li>
                                        <li><a class="dropdown-item" href="component_progress.php">Progress Bars</a></li>
                                        <li><a class="dropdown-item" href="component_stars.php">Rating Stars</a></li>
                                        <li><a class="dropdown-item" href="components_typography.php">Typography</a></li>
                                    </ul>     
                                </div>
                                <!--energy --> 
                            </div><!-- /. widget -->  
                        </div><!-- /.center-content -->
                    </div>
                </div>
            </main><!-- /.main-part--> 
            <footer class="footer">
                <?php include 'templates/footer/_footer.php' ?>
            </footer>
            <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a>
        </div>
        <!-- Start Jquery -->
        <script src="../assets/js/jquery-2.2.1.min.js"></script>
        <script src="../assets/libraries/jquery.mobile/jquery.mobile.custom.min.js"></script>
        <!-- End Jquery -->
        <!-- Start BOOTSTRAP -->
        <script src="../assets/libraries/tether/dist/js/tether.min.js"></script>
        <script src="../assets/libraries/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../assets/js/bootstrap-select.min.js"></script>
        <script src="../assets/libraries/bootstrap-colorpicker-master/dist/js/bootstrap-colorpicker.min.js"></script>
        <!-- End Bootstrap -->
        <!-- Start Template files -->
        <script src="../assets/js/winter-flat.js"></script>
        <!-- End  Template files -->
        <!-- Start owl-carousel -->
        <script src="../assets/libraries/owl.carousel/owl.carousel.min.js"></script>
        <!-- End owl-carousel -->
        <!-- Start blueimp  -->
        <script src="../assets/js/blueimp-gallery.min.js" type="text/javascript"></script>
        <!-- End blueimp  -->
        <!-- Start custom template style  -->
        <script src="../assets/js/custom_template_style.js" type="text/javascript"></script>
        <!-- End custom template style   -->
        <!-- Start codemirror  -->
        <script src="../assets/libraries/codemirror/lib/codemirror.js"></script>
        <script src="../assets/libraries/codemirror/mode/javascript/javascript.js"></script>
        <script src="../assets/libraries/codemirror/addon/edit/matchbrackets.js"></script>
        <script src="../assets/libraries/codemirror/mode/htmlmixed/htmlmixed.js"></script>
        <script src="../assets/libraries/codemirror/mode/xml/xml.js"></script>
        <script src="../assets/libraries/codemirror/mode/css/css.js"></script>
        <script src="../assets/libraries/codemirror/mode/clike/clike.js"></script>
        <script src="../assets/libraries/codemirror/mode/php/php.js"></script>
        <script src="../assets/js/codemirror_init.js"></script>
        <!-- End codemirror  -->
    </body>
</html>