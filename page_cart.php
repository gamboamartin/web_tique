<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Cart</title>
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
                            <li class="item"> Page Cart </li>
                        </ul>
                        <h1 class="top-title-t">Page Cart</h1>
                    </div>
                </section><!-- /.top-title-->
            </header><!-- /.header--> 
            <main class="main main-container section-color-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <section class="widget widget-overflow">
                                <div class="box-overflow-container box-container">
                                    <div class="box-container-title">
                                        <h2 class="title">Items list in your basket</h2> 
                                        <span class="sub-title">This is simply dummy text of the printing and typesetting industry</span>
                                    </div> <!-- /. content-header --> 
                                    <div class="">
                                        <table class="table table-cart table-responsive table-bordered">
                                            <thead>
                                                <tr>
                                                    <td></td>
                                                    <td>Listing</td>
                                                    <td>Quantity</td>
                                                    <td>Price</td>
                                                    <td>Remove</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="assets/img/placeholders/90x60.png" class="img-center" alt="" /></td>
                                                    <td><a href="">Camera</a></td>
                                                    <td>
                                                        <input type="number" name="cant" value="3" style="width:60px; text-align:center; margin-right:5px; height:34px;" />
                                                    </td>
                                                    <td> 100 $</td>
                                                    <td class="remove-cell text-center"><a href="" class="cart-remove" title="Remove item"><i class="fa fa-times-circle fa-2x"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/img/placeholders/90x60.png" class="img-center" alt="" /></td>
                                                    <td><a href="">Smartphone</a></td>
                                                    <td>
                                                        <input type="number" name="cant" value="1" style="width:60px; text-align:center; margin-right:5px; height:34px;" />
                                                    </td>
                                                    <td>200 $</td>
                                                    <td class="remove-cell text-center"><a href="" class="cart-remove" title="Remove item"><i class="fa fa-times-circle fa-2x"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/img/placeholders/90x60.png" class="img-center" alt="" /></td>
                                                    <td><a href="">Keyboard</a></td>
                                                    <td>
                                                        <input type="number" name="cant" value="2" style="width:60px; text-align:center; margin-right:5px; height:34px;" />
                                                    </td>
                                                    <td>300 $</td>
                                                    <td class="remove-cell text-center"><a href="" class="cart-remove" title="Remove item"><i class="fa fa-times-circle fa-2x"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div><!-- /.center-content -->
                        <div class="col-md-4">
                            <div class="widget widget-form widget-form-cart" id="form">
                                <form action="#" method="post">
                                    <div class="box-container widget-body">
                                        <div class="widget-header text-uppercaser">Summary</div>
                                        <div class="form-additional">
                                            <div class="form-group">
                                                <label>Enter your promo code here</label>
                                                <div class="input-group input-group-double">
                                                    <input type="text" class="form-control" placeholder="" />
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button">Apply</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-container widget-body">
                                        <div class="form-additional">
                                            <ul class="list-overview">
                                                <li>
                                                    <span class="list-overview-option">Subtotal</span>
                                                    <span class="list-overview-value">600 $</span>
                                                </li>
                                                <li>
                                                    <span class="list-overview-option">Shipping and Packing </span>
                                                    <span class="list-overview-value">0 $</span>
                                                </li>
                                                <li>
                                                    <select class="form-control select-default">
                                                        <option>FREE Up to 30 days for delivery</option>
                                                        <option>35 $ Up to 15 days for delivery</option>
                                                        <option>70 $ Up to 5 days for delivery</option>
                                                    </select>
                                                </li>
                                                <li>
                                                    <span class="list-overview-option">Taxes   </span>
                                                    <span class="list-overview-value"> 0 $</span>
                                                </li>
                                                <li>
                                                    <span class="list-overview-option">Total </span>
                                                    <span class="list-overview-value">600 $</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>   
                                    <div class="box-container widget-body">
                                        <div class="form-additional form-additional-l">  
                                            <h5>Notice</h5>
                                            <p>
                                                Your custom notice for shipping or other promotions
                                            </p>
                                            <div class="form-group form-group-submit">
                                                <a href="page_invoice.php" class="btn btn-primary btn-wide color-primary btn-property">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /.widget-form--> 
                        </div>
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