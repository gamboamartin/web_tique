<?php /** @var controllers\controlador_dp_estado $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->forms_inputs_alta; ?>
<?php echo $controlador->inputs->select->cat_sat_moneda_id; ?>

<?php include (new views())->ruta_templates.'botons/submit/alta_bd_otro.php';?>

<div class="control-group btn-alta col-12">
    <div class="controls">
        <?php include 'templates/botons/cat_sat_moneda_alta.php';?>
    </div>
</div>