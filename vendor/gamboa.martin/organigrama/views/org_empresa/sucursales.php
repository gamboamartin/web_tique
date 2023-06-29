<?php /** @var gamboamartin\organigrama\controllers\controlador_org_empresa $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>

<main class="main section-color-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="widget  widget-box box-container form-main widget-form-cart" id="form">
                    <form method="post" action="<?php echo $controlador->link_org_sucursal_alta_bd; ?>" class="form-additional">
                        <?php include (new views())->ruta_templates."head/title.php"; ?>
                        <?php include (new views())->ruta_templates."head/subtitulo.php"; ?>
                        <?php include (new views())->ruta_templates."mensajes.php"; ?>

                    <?php echo $controlador->inputs->select->org_empresa_id; ?>
                    <?php echo $controlador->inputs->codigo; ?>
                    <?php echo $controlador->inputs->codigo_bis; ?>

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

                        <div class="control-group btn-alta">
                            <div class="controls">
                                <button type="submit" class="btn btn-success" value="sucursales" name="btn_action_next">Alta</button><br>
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
                            <th>Tipo</th>
                            <th>Descripcion</th>
                            <th>Fecha Inicio</th>
                            <th>Calle</th>
                            <th>Ext</th>
                            <th>Int</th>
                            <th>CP</th>
                            <th>Mun</th>
                            <th>Edo</th>
                            <th>Tel</th>
                            <th>Serie</th>
                            <th>Ver</th>
                            <th>Modifica</th>
                            <th>Elimina</th>

                            <tbody>
                            <?php foreach ($controlador->sucursales->registros as $sucursal){
                                ?>
                            <tr>
                                <td><?php echo $sucursal['org_sucursal_id']; ?></td>
                                <td><?php echo $sucursal['org_sucursal_codigo']; ?></td>
                                <td><?php echo $sucursal['org_tipo_sucursal_descripcion']; ?></td>
                                <td><?php echo $sucursal['org_sucursal_descripcion']; ?></td>
                                <td><?php echo $sucursal['org_sucursal_fecha_inicio_operaciones']; ?></td>
                                <td><?php echo $sucursal['dp_calle_descripcion']; ?></td>
                                <td><?php echo $sucursal['org_sucursal_exterior']; ?></td>
                                <td><?php echo $sucursal['org_sucursal_interior']; ?></td>
                                <td><?php echo $sucursal['dp_cp_descripcion']; ?></td>
                                <td><?php echo $sucursal['dp_municipio_descripcion']; ?></td>
                                <td><?php echo $sucursal['dp_estado_descripcion']; ?></td>
                                <td><?php echo $sucursal['org_sucursal_telefono_1']; ?></td>
                                <td><?php echo $sucursal['org_sucursal_serie']; ?></td>
                                <td><?php echo $sucursal['link_ve']; ?></td>
                                <td><?php echo $sucursal['link_modifica']; ?></td>
                                <td><?php echo $sucursal['link_elimina']; ?></td>

                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <div class="box-body">
                            * Total registros: <?php echo $controlador->sucursales->n_registros; ?><br />
                            * Fecha Hora: <?php echo $controlador->fecha_hoy; ?>
                        </div>
                    </div>
                </div> <!-- /. widget-table-->
            </div><!-- /.center-content -->
        </div>
    </div>


</main>





