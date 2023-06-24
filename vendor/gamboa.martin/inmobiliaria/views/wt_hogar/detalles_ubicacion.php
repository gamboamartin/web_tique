<?php use config\views; ?>
<?php /** @var controllers\controlador_wt_hogar $controlador */ ?>
<?php /** @var stdClass $row  viene de registros del controler*/ ?>
<div class="widget  widget-box box-container form-main widget-form-cart" id="form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <section class="top-title">
                    <ul class="breadcrumb">
                        <li class="item"><a href="./index.php?seccion=adm_session&accion=inicio&session_id=<?php echo $controlador->session_id; ?>"> Inicio </a></li>
                        <li class="item"><a href="./index.php?seccion=wt_hogar&accion=lista&session_id=<?php echo $controlador->session_id; ?>"> Lista </a></li>
                        <li class="item"> <?php echo $controlador->row_upd->wt_hogar_descripcion?> </li>
                    </ul>    <h1 class="h-side-title page-title page-title-big text-color-primary"><?php echo strtoupper($controlador->row_upd->wt_hogar_descripcion)?></h1>
                </section> <!-- /. content-header -->
                <div class="widget  widget-box box-container form-main widget-form-cart" id="form">
                    <div class="widget-header">
                        <h2>Detalles Ubicacion</h2>
                    </div>
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Georeferencia</th>
                                <th scope="col">Proposito</th>
                                <th scope="col">Tipo Inmueble</th>
                                <th scope="col">Terreno</th>
                                <th scope="col">Construccion</th>
                                <th scope="col">Niveles</th>
                                <th scope="col">Baños</th>
                                <th scope="col">Recamaras</th>
                                <th scope="col">Patio</th>
                                <th scope="col">Estacionamiento</th>
                                <th scope="col">Editar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $controlador->row_upd->wt_hogar_georeferencia?></td>
                                <td><?php echo $controlador->row_upd->wt_proposito_descripcion?></td>
                                <td><?php echo $controlador->row_upd->wt_tipo_inmueble_descripcion?></td>
                                <td><?php echo $controlador->row_upd->wt_hogar_terreno?></td>
                                <td><?php echo $controlador->row_upd->wt_hogar_construccion?></td>
                                <td><?php echo $controlador->row_upd->wt_hogar_niveles?></td>
                                <td><?php echo $controlador->row_upd->wt_hogar_banio?></td>
                                <td><?php echo $controlador->row_upd->wt_hogar_recamara?></td>
                                <td><?php echo $controlador->row_upd->wt_hogar_patio?></td>
                                <td><?php echo $controlador->row_upd->wt_hogar_estacionamiento?></td>
                                <td>
                                    <a href="./index.php?seccion=wt_hogar&accion=detalles_ubicacion&registro_id=<?php echo $controlador->registro_id; ?>&session_id=<?php echo $controlador->session_id; ?>" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i>
                                        Modificar
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /.center-content -->
        </div>
    </div>

</div>