<?php /** @var gamboamartin\organigrama\controllers\controlador_org_sucursal $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>

<?php echo $controlador->inputs->select->org_empresa_id; ?>
<?php echo $controlador->inputs->codigo; ?>
<?php echo $controlador->inputs->codigo_bis; ?>
<?php echo $controlador->inputs->select->org_tipo_sucursal_id; ?>
<?php echo $controlador->inputs->serie; ?>

<?php echo $controlador->inputs->fecha_inicio_operaciones; ?>

<?php echo $controlador->inputs->select->dp_pais_id; ?>
<?php echo $controlador->inputs->select->dp_estado_id; ?>
<?php echo $controlador->inputs->select->dp_municipio_id; ?>
<?php echo $controlador->inputs->select->dp_cp_id; ?>
<?php echo $controlador->inputs->select->dp_colonia_postal_id; ?>
<?php echo $controlador->inputs->select->dp_calle_pertenece_id; ?>



<?php echo $controlador->inputs->exterior; ?>
<?php echo $controlador->inputs->interior; ?>

<?php echo $controlador->inputs->telefono_1; ?>
<?php echo $controlador->inputs->telefono_2; ?>
<?php echo $controlador->inputs->telefono_3; ?>

<?php include (new views())->ruta_templates.'botons/submit/alta_bd_otro.php';?>

<div class="control-group btn-alta col-12">
    <div class="controls">
        <?php include 'templates/botons/org_empresa_alta.php';?>
    </div>
</div>
