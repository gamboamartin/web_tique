<?php /** @var  controllers\controlador_cat_sat_tipo_persona $controlador  Controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->forms_inputs_modifica; ?>
<?php include "templates/botons/cat_sat_tipo_persona/valida_persona_fisica.php"; ?>
<?php include (new views())->ruta_templates."botons/status.php"; ?>
<?php include (new views())->ruta_templates.'botons/submit/modifica_bd.php';?>
