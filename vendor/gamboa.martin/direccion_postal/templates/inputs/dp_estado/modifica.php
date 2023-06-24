<?php /** @var controllers\controlador_dp_estado $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->forms_inputs_modifica; ?>
<?php include "templates/selects/dp_pais_id.php"; ?>
<?php include (new views())->ruta_templates.'botons/submit/modifica_bd.php';?>
