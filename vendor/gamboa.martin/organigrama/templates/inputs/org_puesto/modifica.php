<?php /** @var \gamboamartin\organigrama\controllers\controlador_org_puesto $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->inputs->id; ?>
<?php echo $controlador->inputs->codigo; ?>
<?php echo $controlador->inputs->codigo_bis; ?>
<?php echo $controlador->inputs->descripcion; ?>
<?php echo $controlador->inputs->select->org_tipo_puesto_id; ?>
<?php echo $controlador->inputs->select->org_departamento_id; ?>
<?php include (new views())->ruta_templates.'botons/submit/modifica_bd.php';?>
