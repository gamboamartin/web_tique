<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Components Buttons</title>
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
                            <li class="item"> Buttons </li>
                        </ul>
                        <h1 class="h-side-title page-title page-title-big text-color-primary">Buttons</h1> 
                    </section> <!-- /. content-header --> 
                    <div class="row">
                        <div class="col-md-9 components-examples">
                            <section class="widget widget-box  box-container">
                                <div class="box-container-title">
                                    <h2 class="title widget-header">Example</h2> 
                                    <span class="sub-title">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</span>
                                </div>
                                <div class="bd-example">
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <!-- Secondary, outline button -->
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <!-- Indicates a successful or positive action -->
                                    <button type="button" class="btn btn-success">Success</button>
                                    <!-- Contextual button for informational alert messages -->
                                    <button type="button" class="btn btn-info">Info</button>
                                    <!-- Indicates caution should be taken with this action -->
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <!-- Indicates a dangerous or potentially negative action -->
                                    <button type="button" class="btn btn-danger">Danger</button>
                                    <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                                    <button type="button" class="btn btn-link">Link</button>
                                </div>
                                <textarea name="input" class="file_content" cols="30" rows="10">
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <!-- Secondary, outline button -->
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <!-- Indicates a successful or positive action -->
                                    <button type="button" class="btn btn-success">Success</button>
                                    <!-- Contextual button for informational alert messages -->
                                    <button type="button" class="btn btn-info">Info</button>
                                    <!-- Indicates caution should be taken with this action -->
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <!-- Indicates a dangerous or potentially negative action -->
                                    <button type="button" class="btn btn-danger">Danger</button>
                                    <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                                    <button type="button" class="btn btn-link">Link</button>
                                </textarea>
                            </section>

                            <section class="widget widget-box  box-container">
                                <div class="box-container-title">
                                    <h2 class="title widget-header">Outline buttons</h2> 
                                    <span class="sub-title">In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the .btn-*-outline ones to remove all background images and colors on any button.</span>
                                </div>
                                <div class="bd-example">
                                    <button type="button" class="btn btn-primary-outline">Primary</button>
                                    <button type="button" class="btn btn-secondary-outline">Secondary</button>
                                    <button type="button" class="btn btn-success-outline">Success</button>
                                    <button type="button" class="btn btn-info-outline">Info</button>
                                    <button type="button" class="btn btn-warning-outline">Warning</button>
                                    <button type="button" class="btn btn-danger-outline">Danger</button>
                                </div>
                                <textarea name="input" class="file_content" cols="30" rows="10">
                                    <button type="button" class="btn btn-primary-outline">Primary</button>
                                    <button type="button" class="btn btn-secondary-outline">Secondary</button>
                                    <button type="button" class="btn btn-success-outline">Success</button>
                                    <button type="button" class="btn btn-info-outline">Info</button>
                                    <button type="button" class="btn btn-warning-outline">Warning</button>
                                    <button type="button" class="btn btn-danger-outline">Danger</button>
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
                                        <li><a class="dropdown-item active" href="component_buttons.html">Buttons</a></li>
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