<?php /** @var controllers\controlador_org_empresa $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->forms_inputs_modifica; ?>
<?php echo $controlador->inputs->select->fc_csd_id; ?>
<?php echo $controlador->inputs->select->im_clase_riesgo_id; ?>
<?php include (new views())->ruta_templates.'botons/submit/modifica_bd.php';?>
