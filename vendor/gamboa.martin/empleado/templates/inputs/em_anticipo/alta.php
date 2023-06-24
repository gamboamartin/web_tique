<?php /** @var  \gamboamartin\empleado\controllers\controlador_em_anticipo $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->inputs->codigo; ?>
<?php echo $controlador->inputs->select->em_tipo_anticipo_id; ?>
<?php echo $controlador->inputs->descripcion; ?>
<?php echo $controlador->inputs->select->em_empleado_id; ?>
<?php echo $controlador->inputs->monto; ?>
<?php echo $controlador->inputs->fecha_prestacion; ?>
<?php include (new views())->ruta_templates.'botons/submit/alta_bd_otro.php';?>