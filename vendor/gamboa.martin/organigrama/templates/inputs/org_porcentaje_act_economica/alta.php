<?php /** @var controllers\controlador_org_porcentaje_act_economica $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->inputs->select->org_empresa_id; ?>
<?php echo $controlador->inputs->select->cat_sat_actividad_economica_id; ?>
<?php echo $controlador->inputs->porcentaje; ?>

<?php include (new views())->ruta_templates.'botons/submit/alta_bd_otro.php';?>
