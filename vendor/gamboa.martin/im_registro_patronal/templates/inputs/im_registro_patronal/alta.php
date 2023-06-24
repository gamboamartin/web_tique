<?php /** @var gamboamartin\im_registro_patronal\controllers\controlador_im_registro_patronal $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->forms_inputs_alta; ?>
<?php echo $controlador->inputs->select->fc_csd_id; ?>
<?php echo $controlador->inputs->select->im_clase_riesgo_id; ?>
<?php include (new views())->ruta_templates.'botons/submit/alta_bd_otro.php';?>
<div class="control-group btn-alta">
</div>