<?php /** @var controllers\controlador_dp_estado $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->forms_inputs_modifica; ?>
<?php echo $controlador->inputs->select->dp_calle_id; ?>
<?php echo $controlador->inputs->select->dp_colonia_postal_id; ?>
<?php include (new views())->ruta_templates.'botons/submit/modifica_bd.php';?>