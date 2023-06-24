<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>My listings</title>
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
        <!-- Start custom template style  -->
        <link rel="stylesheet" href="assets/css/custom_template_style.css" /> 
        <!-- End custom template style   -->
        <!-- Start footable-jquery -->	
        <link rel="stylesheet" href="assets/libraries/footable-jquery/css/footable.bootstrap.min.css" />
        <!-- End footable-jquery -->
        <script src="assets/js/modernizr.custom.js"></script>
    </head>
    <body class="">
        <div class="container container-wrapper">
            <header class="header">
                <?php include 'templates/head/_head.php'?>
            </header><!-- /.header-->
            <main class="main section-color-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <section class="top-title">
                                <ul class="breadcrumb">
                                    <li class="item"><a href="/"> Home </a></li>
                                    <li class="item"> My listings </li>
                                </ul>
                                <h1 class="h-side-title page-title page-title-big text-color-primary">My listings</h1> 
                            </section> <!-- /. content-header --> 
                            <div class="widget widget-box box-container widget-mylistings">
                                <div class="widget-header text-uppercase">
                                    <h2>My listings</h2>
                                </div>
                                <div class="">
                                    <table class="table table-striped footable-sort" data-sorting="true">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Address</th>
                                                <!-- Dynamic generated -->
                                                <th data-breakpoints="xs sm md"  data-type="html">Listing name</th>
                                                <th data-breakpoints="xs sm md"  data-type="html">Purpose</th>
                                                <th data-breakpoints="xs sm md"  data-type="html">Type</th>
                                                <th data-breakpoints="xs sm md"  data-type="html">City</th>
                                                <!-- End dynamic generated -->
                                                <th data-breakpoints="xs md" ></th>
                                                <th data-hide="phone" class="control"  data-type="html">Edit</th>
                                                <th data-breakpoints="xs md" class="control"  data-type="html">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>29</td>
                                                <td>
                                                    <a href="#">Veliki lovrečan</a>                                                                                
                                                </td>
                                                <!-- Dynamic generated -->
                                                <td>My listing</td>
                                                <td>Sale</td>
                                                <td>Land</td>
                                                <td>Cestica</td>
                                                <!-- End dynamic generated -->
                                                <td>
                                                    <a class="btn btn-primary" href="#">
                                                        <i class="icon-circle-arrow-up"></i> Make featured</a>
                                                </td>
                                                <td><a href="#" class="btn btn-info"><i class="icon-edit"></i> Edit</a></td>
                                                <td><a href="#" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="icon-remove"></i> Delete</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="box-body">
                                        * Listing activation price: 5 USD<br />
                                        * Listing featured price: 10 USD                                 
                                    </div>
                                </div>
                            </div> <!-- /. widget-table-->   
                            <div class="widget widget-box box-container">
                                <div class="widget-header text-uppercase">
                                    <h2>My Package</h2>
                                </div>
                                <div class="">
                                    <table class="table table-striped footable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th data-type="html">Package name</th>
                                                <th data-type="html">Price</th>
                                                <th data-breakpoints="xs sm" data-type="html">Free listing activation</th>
                                                <th  data-breakpoints="xs md" data-type="html">Days limit</th>
                                                <th data-breakpoints="xs md" data-type="html">Listings limit (num)</th>
                                                <th data-breakpoints="xs sm" data-type="html">Free featured limit</th>
                                                <th data-breakpoints="xs sm" data-type="html" class="control" style="width: 120px;">Buy/Extend</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    Free <i class="icon-eye-open"></i> 
                                                    <span class="label label-important">Not activated</span>
                                                </td>
                                                <td>
                                                    0.00 USD                                        
                                                </td>
                                                <td></td>
                                                <td>
                                                    0
                                                </td>
                                                <td>
                                                    1                                        
                                                </td>
                                                <td>
                                                    0                                        
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    Premium <i class="icon-eye-open"></i><span class="label label-success">Activated</span>
                                                </td>
                                                <td>
                                                    20.00 USD                                        
                                                </td>
                                                <td><i class="icon-ok"></i></td>
                                                <td>
                                                    30, 2017-12-14 13:18:25                                        
                                                </td>
                                                <td>
                                                    40                                        
                                                </td>
                                                <td>
                                                    1                                        
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
                                                             Buy/Extend <i class="icon-dropdown-white"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#"><i class="icon-shopping-cart"></i> Buy/Extend with PayPal</a></li>
                                                            <li><a href="#"><i class="icon-shopping-cart"></i> Buy/Extend with bank payment</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- /. widget-table-->   
                            <div class="widget widget-box box-container">
                                <div class="widget-header text-uppercase">
                                    <h3>Bank Payment Details</h3>
                                </div>
                                <div class="widget-content">
                                    IBAN: HR43 2340009 3207462177<br />
                                    SWIFT: PBZGHR2X<br />
                                    Notice: Please enter 'property id #' in Bank transfer notice
                                </div>
                            </div> <!-- /. widget-->   
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
        <!-- Start footable-jquery -->	
        <script src="assets/libraries/footable-jquery/js/footable.js"></script>
        <script src="assets/js/footable_init.js"></script>
        <!-- End footable-jquery -->
    </body>
</html>