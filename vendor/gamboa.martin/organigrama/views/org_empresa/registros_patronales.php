<?php /** @var gamboamartin\organigrama\controllers\controlador_org_empresa $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>

<main class="main section-color-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="widget  widget-box box-container form-main widget-form-cart" id="form">
                    <form method="post" action="<?php echo $controlador->link_im_registro_patronal_alta_bd; ?>" class="form-additional">
                        <?php include (new views())->ruta_templates."head/title.php"; ?>
                        <?php include (new views())->ruta_templates."head/subtitulo.php"; ?>
                        <?php include (new views())->ruta_templates."mensajes.php"; ?>

                        <?php echo $controlador->inputs->select->org_empresa_id; ?>
                        <?php echo $controlador->inputs->select->org_sucursal_id; ?>
                        <?php echo $controlador->inputs->select->fc_csd_id; ?>
                        <?php echo $controlador->inputs->codigo; ?>
                        <?php echo $controlador->inputs->codigo_bis; ?>
                        <?php echo $controlador->inputs->select->im_clase_riesgo_id; ?>
                        <?php echo $controlador->inputs->descripcion; ?>

                        <div class="control-group btn-alta">
                            <div class="controls">
                                <button type="submit" class="btn btn-success" value="registros_patronales" name="btn_action_next">Alta</button><br>
                            </div>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="widget widget-box box-container widget-mylistings">

                    <div class="">
                        <table class="table table-striped footable-sort" data-sorting="true">
                            <th>Id</th>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Ver</th>
                            <th>Modifica</th>
                            <th>Elimina</th>

                            <tbody>
                            <?php foreach ($controlador->registros_patronales->registros as $registro_patronal){
                                ?>
                            <tr>
                                <td><?php echo $registro_patronal['im_registro_patronal_id']; ?></td>
                                <td><?php echo $registro_patronal['im_registro_patronal_codigo']; ?></td>
                                <td><?php echo $registro_patronal['im_registro_patronal_descripcion']; ?></td>
                                <td><?php echo $registro_patronal['link_ve']; ?></td>
                                <td><?php echo $registro_patronal['link_modifica']; ?></td>
                                <td><?php echo $registro_patronal['link_elimina']; ?></td>

                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <div class="box-body">
                            * Total registros: <?php echo $controlador->registros_patronales->n_registros; ?><br />
                            * Fecha Hora: <?php echo $controlador->fecha_hoy; ?>
                        </div>
                    </div>
                </div> <!-- /. widget-table-->
            </div><!-- /.center-content -->
        </div>
    </div>


</main>





