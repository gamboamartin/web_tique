<?php /** @var controllers\controlador_org_empresa $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->inputs->codigo; ?>
<?php echo $controlador->inputs->codigo_bis; ?>
<?php echo $controlador->inputs->descripcion; ?>
<?php echo $controlador->inputs->select->org_empresa_id; ?>
<?php echo $controlador->inputs->select->org_tipo_empresa_id; ?>


<?php include (new views())->ruta_templates.'botons/submit/alta_bd_otro.php';?>
