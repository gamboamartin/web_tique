<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Components Accordions</title>
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
                            <li class="item"> Accordion </li>
                        </ul>
                        <h1 class="h-side-title page-title page-title-big text-color-primary">Accordion</h1> 
                    </section> <!-- /. content-header --> 
                    <div class="row">
                        <div class="col-md-9 components-examples">
                            <section class="widget widget-box  box-container">
                                <div class="box-container-title">
                                    <h2 class="title widget-header">Example #1</h2> 
                                    <span class="sub-title">Extend the default collapse behavior to create an accordion.</span>
                                </div>
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Collapsible Group Item #1
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  Collapsible Group Item #2
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  Collapsible Group Item #3
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <textarea name="input" class="file_content" cols="30" rows="10">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Collapsible Group Item #1
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                      Collapsible Group Item #2
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                      Collapsible Group Item #3
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </textarea>                        
                            </section>
                            <section class="widget widget-box  box-container">
                                <div class="box-container-title">
                                    <h2 class="title widget-header">Example #2</h2> 
                                    <span class="sub-title">Extend the default collapse behavior to create an accordion.</span>
                                </div>
                                <div class="bd-example">
                                    <div class="panel-group panel-content property_content_position" id="accordionThree">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse30" aria-expanded="false" class="collapsed">
                                                        How do I change my password?                                       </a>
                                                </h4>
                                            </div>
                                            <div id="collapse30" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    Layout dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non a ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et. Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit iste delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem! Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa nam soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem atque quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse31" class="collapsed" aria-expanded="false">
                                                        Can I remove a post?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse31" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    This is simply dummy text of the printing and typesetting industry.elit. Sed vulputate nec neque gravida rhoncus. Donec sit amet blandit mauris, sed bibendum risus.                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse32" class="collapsed" aria-expanded="false">
                                                        How do reviews work? </a>
                                                </h4>
                                            </div>
                                            <div id="collapse32" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    This is simply dummy text of the printing and typesetting industry.elit. Sed vulputate nec neque gravida rhoncus. Donec sit amet blandit mauris, sed bibendum risus.                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse34" class="collapsed" aria-expanded="false">
                                                        How do I change my account settings? </a>
                                                </h4>
                                            </div>
                                            <div id="collapse34" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body">
                                                    This is simply dummy text of the printing and typesetting industry.elit. Sed vulputate nec neque gravida rhoncus. Donec sit amet blandit mauris, sed bibendum risus.                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <textarea name="input" class="file_content" cols="30" rows="10">
                                    <div class="panel-group" id="accordionThree">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3a">
                                                    Layout dolor sit amet
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse3a" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                                    <img src="images/prv/wk-big-img-5.jpg" alt="" class="img-responsive" />
                                                        </div>
                                                        <div class="col-md-8">
                                                            <p>
                                                                Layout dolor sit amet, consectetur adipisicing elit...
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3b">
                                                    Consectetur adipisicing elit
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse3b" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                Layout dolor sit amet, consectetur adipisicing elit...
                                                <br /><br />
                                                Layout dolor sit amet, consectetur adipisicing elit...
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3c">
                                                    Excepteur sint occaecat cupidatat non proident
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse3c" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                Layout dolor sit amet, consectetur adipisicing elit...
                                                </div>
                                            </div>
                                        </div>
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
                                        <li><a class="dropdown-item active" href="component_accordions.html">Accordion</a></li>
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