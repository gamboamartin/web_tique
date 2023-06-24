<?php /** @var  \gamboamartin\empleado\models\controlador_em_cuenta_bancaria $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->inputs->codigo; ?>
<?php echo $controlador->inputs->codigo_bis; ?>
<?php echo $controlador->inputs->descripcion; ?>
<?php echo $controlador->inputs->num_cuenta; ?>
<?php echo $controlador->inputs->clabe; ?>
<?php echo $controlador->inputs->select->em_empleado_id; ?>
<?php echo $controlador->inputs->select->bn_sucursal_id; ?>
<?php include (new views())->ruta_templates.'botons/submit/alta_bd_otro.php';?>