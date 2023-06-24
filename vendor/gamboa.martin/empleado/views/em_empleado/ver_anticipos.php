<?php /** @var \gamboamartin\empleado\controllers\controlador_em_empleado $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>

<main class="main section-color-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <?php include (new views())->ruta_templates."head/title.php"; ?>
                <?php include (new views())->ruta_templates."mensajes.php"; ?>
            </div>
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="widget widget-box box-container widget-mylistings">

                                <div class="">
                                    <div class="widget-header">
                                        <h2>Anticipos</h2>
                                    </div>

                                    <table class="table table-striped footable-sort" data-sorting="true">
                                        <thead>
                                        <tr>
                                            <th data-breakpoints="xs sm md" data-type="html">Id</th>
                                            <th data-breakpoints="xs sm md" data-type="html">Codigo</th>
                                            <th data-breakpoints="xs sm md" data-type="html">Descripcion</th>
                                            <th data-breakpoints="xs sm md" data-type="html">Descripcion Select</th>
                                            <th data-breakpoints="xs sm md" data-type="html">Alias</th>

                                            <th data-breakpoints="xs md" class="control"  data-type="html">Modifica</th>
                                            <th data-breakpoints="xs md" class="control"  data-type="html">Elimina</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach ($controlador->anticipos->registros as $anticipo){?>
                                            <tr>
                                                <td><?php echo $anticipo['em_anticipo_id']; ?></td>
                                                <td><?php echo $anticipo['em_anticipo_codigo']; ?></td>
                                                <td><?php echo $anticipo['em_anticipo_descripcion']; ?></td>
                                                <td><?php echo $anticipo['em_anticipo_descripcion_select']; ?></td>
                                                <td><?php echo $anticipo['em_anticipo_alias']; ?></td>
                                                <td><?php echo $anticipo['link_modifica']; ?></td>
                                                <td><?php echo $anticipo['link_elimina']; ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="box-body">
                                        * Total registros: <?php echo $controlador->anticipos->n_registros; ?><br />
                                        * Fecha Hora: <?php echo $controlador->fecha_hoy; ?>
                                    </div>
                                </div>
                            </div> <!-- /. widget-table-->
                        </div><!-- /.center-content -->
                    </div>
                </div>

            </div>
        </div>


    </div>
    <br>



</main>





