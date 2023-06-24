<?php
use config\generales;
$generales = new generales();
?>
<div class="col-md-3 col-sm-6 print_hidden">
    <div class="title">
        <h4>Horarios</h4>
    </div>
    <ul class="list list-hours">
        <li>
            <a href="<?php echo $generales->url_base; ?>index.php" class="title">Lunes-Viernes:</a>
            <span class="description">
                09:00 am - 18.00pm
            </span>
        </li>
        <li>
            <a href="<?php echo $generales->url_base; ?>index.php" class="title">Sabado:</a>
            <span class="description">
                Cerrado
            </span>
        </li>
        <li>
            <a href="<?php echo $generales->url_base; ?>index.php" class="title">Domingo:</a>
            <span class="description">
                Cerrado
            </span>
        </li>
    </ul>
</div>