<?php use config\views; ?>
<?php /** @var stdClass $row  viene de registros del controler*/ ?>

<tr>

    <td><?php echo $row->wt_contexto_id; ?></td>
    <td><?php echo $row->wt_contexto_descripcion; ?></td>
    <td><?php echo $row->wt_contexto_codigo; ?></td>
    <td><?php echo $row->wt_contexto_descripcion_select; ?></td>
    <td><?php echo $row->wt_contexto_wt_context_img_id; ?></td>
    <!-- Dynamic generated -->

    <!-- End dynamic generated -->

    <?php include (new views())->ruta_templates.'listas/action_row.php';?>
</tr>