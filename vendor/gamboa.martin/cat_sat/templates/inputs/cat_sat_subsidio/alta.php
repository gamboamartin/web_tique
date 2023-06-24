<?php /** @var  \gamboamartin\nomina\controllers\controlador_nom_deduccion $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->inputs->codigo; ?>
<?php echo $controlador->inputs->codigo_bis; ?>
<?php echo $controlador->inputs->descripcion; ?>
<?php echo $controlador->inputs->select->cat_sat_periodicidad_pago_nom_id; ?>
<?php echo $controlador->inputs->limite_inferior; ?>
<?php echo $controlador->inputs->limite_superior; ?>
<?php echo $controlador->inputs->cuota_fija; ?>
<?php echo $controlador->inputs->porcentaje_excedente; ?>
<?php echo $controlador->inputs->fecha_inicio; ?>
<?php echo $controlador->inputs->fecha_fin; ?>
<?php include (new views())->ruta_templates.'botons/submit/alta_bd_otro.php';?>