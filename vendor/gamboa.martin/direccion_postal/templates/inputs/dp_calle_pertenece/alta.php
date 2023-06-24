<?php /** @var controllers\controlador_dp_estado $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->forms_inputs_alta; ?>
<?php echo $controlador->inputs->select->dp_calle_id; ?>
<?php echo $controlador->inputs->select->dp_colonia_postal_id; ?>
<?php echo $controlador->inputs->georeferencia; ?>
<?php include (new views())->ruta_templates.'botons/submit/alta_bd_otro.php';?>
