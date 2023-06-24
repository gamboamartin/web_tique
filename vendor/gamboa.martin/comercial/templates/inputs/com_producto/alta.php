<?php /** @var \gamboamartin\comercial\controllers\controlador_com_producto $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->inputs->codigo; ?>
<?php echo $controlador->inputs->codigo_bis; ?>
<?php echo $controlador->inputs->descripcion; ?>
<?php echo $controlador->inputs->obj_imp; ?>
<?php echo $controlador->inputs->select->cat_sat_producto_id; ?>
<?php echo $controlador->inputs->select->cat_sat_unidad_id; ?>
<?php echo $controlador->inputs->select->cat_sat_obj_imp_id; ?>
<?php echo $controlador->inputs->select->cat_sat_tipo_factor_id; ?>
<?php echo $controlador->inputs->select->cat_sat_factor_id; ?>
<?php include (new views())->ruta_templates.'botons/submit/alta_bd_otro.php';?>