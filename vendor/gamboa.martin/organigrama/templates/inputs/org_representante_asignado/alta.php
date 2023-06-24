<?php /** @var controllers\controlador_org_empresa $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->inputs->select->org_representante_legal_id; ?>
<?php echo $controlador->inputs->select->org_empresa_id; ?>
<?php echo $controlador->inputs->fecha_inicio; ?>
<?php echo $controlador->inputs->fecha_fin; ?>

<?php include (new views())->ruta_templates.'botons/submit/alta_bd_otro.php';?>
