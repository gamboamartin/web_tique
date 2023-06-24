<?php /** @var \gamboamartin\comercial\controllers\controlador_com_cliente $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>

<?php echo $controlador->inputs->codigo_bis; ?>
<?php echo $controlador->inputs->razon_social; ?>
<?php echo $controlador->inputs->rfc; ?>
<?php echo $controlador->inputs->select->cat_sat_regimen_fiscal_id; ?>
<?php echo $controlador->inputs->select->dp_pais_id; ?>
<?php echo $controlador->inputs->select->dp_estado_id; ?>
<?php echo $controlador->inputs->select->dp_municipio_id; ?>
<?php echo $controlador->inputs->select->dp_cp_id; ?>
<?php echo $controlador->inputs->select->dp_colonia_id; ?>
<?php echo $controlador->inputs->select->dp_calle_pertenece_id; ?>
<?php echo $controlador->inputs->select->cat_sat_uso_cfdi_id; ?>
<?php echo $controlador->inputs->select->cat_sat_moneda_id; ?>
<?php echo $controlador->inputs->select->cat_sat_tipo_de_comprobante_id; ?>
<?php echo $controlador->inputs->select->cat_sat_forma_pago_id; ?>
<?php echo $controlador->inputs->select->cat_sat_metodo_pago_id; ?>
<?php echo $controlador->inputs->numero_interior; ?>
<?php echo $controlador->inputs->numero_exterior; ?>
<?php echo $controlador->inputs->telefono; ?>

<?php include (new views())->ruta_templates.'botons/submit/modifica_bd.php';?>