<?php /** @var controllers\controlador_org_empresa $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->inputs->nombre; ?>
<?php echo $controlador->inputs->rfc; ?>
<?php echo $controlador->inputs->a_paterno; ?>
<?php echo $controlador->inputs->a_materno; ?>


<?php include (new views())->ruta_templates.'botons/submit/alta_bd_otro.php';?>
