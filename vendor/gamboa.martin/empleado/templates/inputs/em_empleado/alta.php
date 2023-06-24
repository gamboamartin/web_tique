<?php /** @var  \gamboamartin\empleado\models\controlador_em_empleado $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->inputs->codigo; ?>
<?php echo $controlador->inputs->nombre; ?>
<?php echo $controlador->inputs->ap; ?>
<?php echo $controlador->inputs->am; ?>
<?php echo $controlador->inputs->select->dp_calle_pertenece_id; ?>
<?php echo $controlador->inputs->select->cat_sat_regimen_fiscal_id; ?>
<?php echo $controlador->inputs->select->org_puesto_id; ?>
<?php echo $controlador->inputs->select->cat_sat_tipo_regimen_nom_id; ?>
<?php echo $controlador->inputs->telefono; ?>
<?php echo $controlador->inputs->rfc; ?>
<?php echo $controlador->inputs->curp; ?>
<?php echo $controlador->inputs->nss; ?>
<?php echo $controlador->inputs->select->im_registro_patronal_id; ?>
<?php echo $controlador->inputs->fecha_inicio_rel_laboral; ?>
<?php echo $controlador->inputs->salario_diario; ?>
<?php echo $controlador->inputs->salario_diario_integrado; ?>


<?php include (new views())->ruta_templates.'botons/submit/alta_bd_otro.php';?>