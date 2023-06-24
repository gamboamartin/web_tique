<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Invoice</title>
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
                            <li class="item"> Page Invoice </li>
                        </ul>
                        <h1 class="top-title-t">Page Invoice</h1> 
                    </div>
                </section><!-- /.top-title-->
            </header><!-- /.header--> 
            <main class="main main-container section-color-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget widget-box box-container widget-invoice">
                                <div class="widget-header text-uppercase">
                                    Invoice
                                </div>
                                <div class="">
                                    <header id="header">
                                        <div class="invoice-intro invoice-logo">
                                            <a href="index.html">
                                                <img src="assets/img/placeholders/300x90.png" alt="" />
                                            </a>
                                        </div>
                                        <dl class="invoice-meta">
                                            <dt class="invoice-number">Invoice Num:</dt>
                                            <dd>123</dd>
                                            <dt class="invoice-date">Date</dt>
                                            <dd>25-11-2016</dd>
                                            <dt class="invoice-due">Due Date</dt>
                                            <dd>25-12-2016</dd>
                                            <dt class="invoice-due">Status</dt>
                                            <dd>Not paid</dd>
                                        </dl>
                                    </header>
                                    <section id="parties" class=''>
                                        <div class="invoice-from">
                                            <h2 class="text-color-primary">From:</h2>
                                            <div id="hcard-Admiral-Valdore" class="vcard">
                                                <a class="url fn" href="/">Classified Place</a>
                                                <a class="email" href="mailto:info@my-website.com">info@my-website.com</a>
                                                <div class="adr">
                                                    <div class="street-address">Ilica 345</div>
                                                    <span class="locality">HR-10000 Zagreb</span>
                                                    <span class="country-name">Croatia</span>
                                                </div>
                                                <div class="tel">+385 (0)1 123 321</div>
                                            </div>
                                        </div>
                                        <div class="invoice-to">
                                            <h2 class="text-color-primary">To:</h2>
                                            <div id="hcard-Hiram-Roth" class="vcard">
                                                <a class="url fn" href="#">Pero Petric</a>
                                                <div class="org">Netherland</div>
                                                <a class="email" href="mailto:pero@demo.com">pero@demo.com</a>

                                                <div class="adr">
                                                    <div class="street-address">2134 On Street</div>
                                                </div>
                                                <div class="tel">+123456789</div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="invoice-financials">
                                        <h4 class="hidden">Table Items list</h4>
                                        <div class="invoice-items">
                                            <table>
                                                <caption>Items list</caption>
                                                <thead>
                                                    <tr  class='text-right'>
                                                        <th>Item</th>
                                                        <th class="text-right">Quantity</th>
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Smartphone</th>
                                                        <td>2</td>
                                                        <td>100,00 $</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Camera</th>
                                                        <td>3</td>
                                                        <td>200,00 $</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Keyboard</th>
                                                        <td>4</td>
                                                        <td>300,00 $</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Luxury suit</th>
                                                        <td>5</td>
                                                        <td>400,00 $</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="3">Amounts in USD without tax</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="invoice-totals">
                                            <div class="clearfix">
                                                <table>
                                                    <caption>Totals:</caption>
                                                    <tbody>
                                                        <tr>
                                                            <th>Subtotal:</th>
                                                            <td></td>
                                                            <td>1000,00 $</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tax:</th>
                                                            <td>25%</td>
                                                            <td>250,00 $</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Total:</th>
                                                            <td></td>
                                                            <td class="text-color-primary">1250,00 $</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="invoice-pay text-right">
                                                <form action="https://www.paypal.com/" method="post" target="_top">
                                                    <input type="hidden" name="cmd" value="_xclick" />
                                                    <input type="hidden" name="business" value="info@my-website.com" />
                                                    <input type="hidden" name="lc" value="BM" />
                                                    <input type="hidden" name="item_name" value="Test" />
                                                    <input type="hidden" name="item_number" value="1" />
                                                    <input type="hidden" name="amount" value="1250.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="button_subtype" value="services" />
                                                    <input type="hidden" name="no_note" value="0" />
                                                    <input type="hidden" name="tax_rate" value="0.000" />
                                                    <input type="hidden" name="shipping" value="0.00" />
                                                    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest" />
                                                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!" />
                                                    <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" />
                                                </form>
                                            </div>
                                        </div>
                                        <div class="invoice-notes">
                                            <p>
                                                * This  is simply dummy text of the printing and typesetting industry.
                                            </p>
                                        </div>
                                    </section>
                                </div>
                            </div><!-- /. widget-gallery -->       
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
    </body>
</html>