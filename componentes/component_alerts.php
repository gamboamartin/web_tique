<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Components Alert</title>
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
        <!-- Start custom template style  -->
        <link rel="stylesheet" href="../assets/css/custom_template_style.css" />
        <!-- End custom template style   -->
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
                            <li class="item"> Alerts </li>
                        </ul>
                        <h1 class="h-side-title page-title page-title-big text-color-primary">Alerts</h1> 
                    </section> <!-- /. content-header --> 
                    <div class="row">
                        <div class="col-md-9 components-examples">
                            <section class="widget widget-box box-container">
                                <div class="box-container-title">
                                    <h2 class="title widget-header">Examples</h2> 
                                    <span class="sub-title">Alerts are available for any length of text, as well as an optional dismiss button. For proper styling, use one of the four required contextual classes (e.g., .alert-success).</span>
                                </div>
                                <div class="bd-example">
                                    <div class="alert alert-success" role="alert">
                                        <strong>Well done!</strong> You successfully read this important alert message.
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                    </div>
                                </div>
                                <textarea name="input" class="file_content" cols="30" rows="10">
                                    <div class="alert alert-success" role="alert" >
                                        <strong>Well done!</strong> You successfully read this important alert message.
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                    </div>
                                </textarea>
                            </section>
                            <section class="widget widget-box  box-container">
                                <div class="box-container-title">
                                    <h2 class="title widget-header">Link color</h2> 
                                    <span class="sub-title">Use the .alert-link utility class to quickly provide matching colored links within any alert.</span>
                                </div>
                                <div class="bd-example">
                                    <div class="alert alert-success" role="alert">
                                        <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                                    </div>
                                </div>
                                <textarea name="input" class="file_content" cols="30" rows="10">
                                    <div class="alert alert-success" role="alert">
                                        <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                         <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                                    </div>
                                </textarea>                        
                            </section>

                            <section class="widget widget-box  box-container">
                                <div class="box-container-title">
                                    <h2 class="title widget-header">Dismissing</h2> 
                                    <span class="sub-title">Using the alert JavaScript plugin, it's possible to dismiss any alert inline. Here's how:</span>
                                </div>
                                <ul>
                                    <li>Be sure you've loaded the alert plugin, or the compiled Bootstrap JavaScript.</li>
                                    <li>Add a dismiss button and the <code class="highlighter-rouge">.alert-dismissible</code> class, which adds extra padding to the right of the alert and positions the <code class="highlighter-rouge">.close</code> button.</li>
                                    <li>On the dismiss button, add the <code class="highlighter-rouge">data-dismiss="alert"</code> attribute, which triggers the JavaScript functionality. Be sure to use the <code class="highlighter-rouge">&lt;button&gt;</code> element with it for proper behavior across all devices.</li>
                                    <li>To animate alerts when dismissing them, be sure to add the <code class="highlighter-rouge">.fade</code> and <code class="highlighter-rouge">.in</code> classes.</li>
                                </ul>
                                <div class="bd-example">
                                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                    </div>
                                </div>
                                <textarea name="input" class="file_content" cols="30" rows="10">
                                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
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
                                        <li><a class="dropdown-item active" href="component_alerts.html">Alerts</a></li>
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
                                        <li><a class="dropdown-item" href="#">Carousels</a>
                                            <ul>
                                                <li><a href="component_carousel_bootstrap.php">Carousels Bootstrap</a></li>
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