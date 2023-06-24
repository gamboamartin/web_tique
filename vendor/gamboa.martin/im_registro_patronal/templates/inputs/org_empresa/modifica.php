<?php /** @var controllers\controlador_org_empresa $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->forms_inputs_modifica; ?>
<?php include "templates/selects/cat_sat_regimen_fiscal_id.php"; ?>
<?php include (new views())->ruta_templates.'botons/submit/modifica_bd.php';?>
