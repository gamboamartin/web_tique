<?php /** @var  \gamboamartin\facturacion\controllers\controlador_fc__partida $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->inputs->select->fc_factura_id; ?>
<?php echo $controlador->inputs->select->com_producto_id; ?>
<?php echo $controlador->inputs->codigo; ?>
<?php echo $controlador->inputs->descripcion; ?>
<?php echo $controlador->inputs->cantidad; ?>
<?php echo $controlador->inputs->valor_unitario; ?>
<?php echo $controlador->inputs->descuento; ?>
<?php include (new views())->ruta_templates.'botons/submit/modifica_bd.php';?>