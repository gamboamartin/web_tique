<?php
use config\generales;
$generales = new generales();
?>
<div class="col-md-4 col-sm-6">
    <div class="property-card card">
        <div class="property-card-header image-box">
            <img src="assets/img/venta_casas/casa_01/casa_01_foto_01.jpeg" alt="" class="" />
            <?php include 'templates/lista_casas/links/_marca_destacada.php' ?>
            <a href="listing.php" class="property-card-hover">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d466.789584322024!2d-103.2040744!3d20.6159451!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b511995a9d93%3A0xec8d65eb7218fc14!2sColina%20Vieja%20136%2C%2045422%20Colinas%20de%20Tonal%C3%A1%2C%20Jal.!5e0!3m2!1ses!2smx!4v1654128694147!5m2!1ses!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </a>
        </div>

        <?php include 'templates/lista_casas/links/_marca_renta.php' ?>
        <?php include 'templates/lista_casas/_carta_casa_detalles.php' ?>
    </div>
</div>