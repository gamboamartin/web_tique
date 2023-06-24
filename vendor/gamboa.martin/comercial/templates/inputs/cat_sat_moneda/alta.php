<?php /** @var controllers\controlador_cat_sat_moneda $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->forms_inputs_alta; ?>
<?php echo $controlador->inputs->select->dp_pais_id; ?>
<?php include (new views())->ruta_templates.'botons/submit/alta_bd_otro.php';?>

<div class="control-group btn-alta col-12">
    <div class="controls">
        <?php include 'templates/botons/dp_pais_alta.php';?>
    </div>
</div>
