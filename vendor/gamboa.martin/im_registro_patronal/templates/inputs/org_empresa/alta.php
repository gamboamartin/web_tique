<?php /** @var controllers\controlador_org_empresa $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->forms_inputs_alta; ?>
<?php include "templates/selects/cat_sat_regimen_fiscal_id.php"; ?>
<?php include (new views())->ruta_templates.'botons/submit/alta_bd_otro.php';?>
