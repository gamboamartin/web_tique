<?php use config\views; ?>
<?php /** @var controllers\controlador_wt_hogar $controlador */ ?>
<?php /** @var stdClass $row  viene de registros del controler*/ ?>

<tr>
    <?php //var_dump($controlador); exit;?>
    <td><?php echo $row->wt_hogar_id; ?></td>
    <td><?php echo $row->wt_hogar_descripcion; ?></td>
    <!-- Dynamic generated -->
    <td>
        <a href="./index.php?seccion=wt_hogar&accion=ver_observaciones&registro_id=<?php echo $row->wt_hogar_id; ?>&session_id=<?php echo $controlador->session_id; ?>" class="btn btn-info"><i class="glyphicon glyphicon-eye-open"></i>
            Ver Observaciones
        </a>
    </td>
    <td><?php echo $row->wt_hogar_url; ?></td>
    <td><?php echo $row->wt_hogar_ubicacion; ?></td>
    <td><a href="https://www.google.com.mx/maps/place/<?php echo $row->wt_hogar_georeferencia; ?>" class="btn btn-info" target="_blank"><i class="glyphicon glyphicon-eye-open"></i>
            Ver ubicacion
        </a>
    </td>
    <td>
        <a href="./index.php?seccion=wt_hogar&accion=detalles_ubicacion&registro_id=<?php echo $row->wt_hogar_id; ?>&session_id=<?php echo $controlador->session_id; ?>" class="btn btn-info"><i class="glyphicon glyphicon-eye-open"></i>
            Detalles ubicacion
        </a>
    </td>


    <!-- End dynamic generated -->

    <?php include (new views())->ruta_templates.'listas/action_row.php';?>
</tr>