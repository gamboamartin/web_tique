<?php /** @var \gamboamartin\empleado\models\em_empleado $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>

<main class="main section-color-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="widget  widget-box box-container form-main widget-form-cart" id="form">
                    <?php include (new views())->ruta_templates."head/title.php"; ?>
                    <?php include (new views())->ruta_templates."head/subtitulo.php"; ?>
                    <?php include (new views())->ruta_templates."mensajes.php"; ?>
                    <form method="post" action="<?php echo $controlador->link_em_anticipo_alta_bd; ?>" class="form-additional">
                        <?php echo $controlador->inputs->codigo; ?>
                        <?php echo $controlador->inputs->select->em_tipo_anticipo_id; ?>
                        <?php echo $controlador->inputs->descripcion; ?>
                        <?php echo $controlador->inputs->select->em_empleado_id; ?>
                        <?php echo $controlador->inputs->monto; ?>
                        <?php echo $controlador->inputs->fecha_prestacion; ?>
                        <div class="control-group btn-alta">
                            <div class="controls">
                                <button type="submit" class="btn btn-success" value="genera_anticipo" name="btn_action_next">Alta</button><br>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>

</main>







