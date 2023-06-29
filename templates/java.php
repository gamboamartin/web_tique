<?php
use config\generales;
$generales = new generales();


?>
<!-- Start Jquery -->
<script src="<?php echo $generales->url_base; ?>assets/js/landing.js"></script>
<script src="<?php echo $generales->url_base; ?>assets/js/jquery-2.2.1.min.js"></script>
<script src="<?php echo $generales->url_base; ?>assets/libraries/jquery.mobile/jquery.mobile.custom.min.js"></script>
<!-- End Jquery -->
<!-- Start BOOTSTRAP -->
<script src="<?php echo $generales->url_base; ?>assets/libraries/tether/dist/js/tether.min.js"></script>
<script src="<?php echo $generales->url_base; ?>assets/libraries/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo $generales->url_base; ?>assets/js/bootstrap-select.min.js"></script>
<script src="<?php echo $generales->url_base; ?>assets/libraries/bootstrap-colorpicker-master/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- End Bootstrap -->
<!-- Start Template files -->
<script src="<?php echo $generales->url_base; ?>assets/js/winter-flat.js"></script>
<!-- End  Template files -->
<!-- Start owl-carousel -->
<script src="<?php echo $generales->url_base; ?>assets/libraries/owl.carousel/owl.carousel.min.js"></script>
<!-- End owl-carousel -->
<!-- Start JS MAP  -->
<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxUfpyW26rchsSt7NxC2SrcWZDoCgBARw&libraries=weather,geometry,visualization,places,drawing" type="text/javascript">
</script>
<script type="text/javascript" src="<?php echo $generales->url_base; ?>assets/js/map_infobox.js"></script>
<script type="text/javascript" src="<?php echo $generales->url_base; ?>assets/js/markerclusterer.js"></script>
<script src="<?php echo $generales->url_base; ?>assets/js/map.js" type="text/javascript"></script>
<!-- End JS MAP  -->
<!-- Start blueimp  -->
<script src="<?php echo $generales->url_base; ?>assets/js/blueimp-gallery.min.js" type="text/javascript"></script>
<!-- End blueimp  -->
<script src="<?php echo $generales->url_base; ?>assets/js/modernizr.custom.js"></script>
<!-- Start custom template style  -->
<script src="<?php echo $generales->url_base; ?>assets/js/custom_template_style.js" type="text/javascript"></script>
<!-- End custom template style   -->
<script src="<?php echo $generales->url_base; ?>assets/js/dpejes/dpe.js"></script>
<script src="<?php echo $generales->url_base; ?>assets/js/dpejes_custom.js"></script>
<script src="<?php echo $generales->url_base; ?>assets/js/facebook.js" type="text/javascript"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-232768223-1">
</script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-232768223-1');
</script>