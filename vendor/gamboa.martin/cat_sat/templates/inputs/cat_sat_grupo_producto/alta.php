<?php /** @var controllers\controlador_cat_sat_grupo_producto $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->inputs->codigo; ?>
<?php echo $controlador->inputs->codigo_bis; ?>
<?php echo $controlador->inputs->descripcion; ?>
<?php echo $controlador->inputs->descripcion_select; ?>
<?php echo $controlador->inputs->alias; ?>

<?php echo $controlador->inputs->select->cat_sat_division_id; ?>

<?php include (new views())->ruta_templates.'botons/submit/alta_bd_otro.php';?>

