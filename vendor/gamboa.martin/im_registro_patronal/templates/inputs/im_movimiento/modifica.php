<?php /** @var \gamboamartin\im_registro_patronal\controllers\controlador_im_movimiento  $controlador controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->inputs->select->im_tipo_movimiento_id; ?>
<?php echo $controlador->inputs->select->im_registro_patronal_id; ?>
<?php echo $controlador->inputs->select->em_empleado_id; ?>
<?php echo $controlador->inputs->fecha; ?>
<?php echo $controlador->inputs->salario_diario; ?>
<?php echo $controlador->inputs->salario_diario_integrado; ?>
<?php include (new views())->ruta_templates.'botons/submit/modifica_bd.php';?>
