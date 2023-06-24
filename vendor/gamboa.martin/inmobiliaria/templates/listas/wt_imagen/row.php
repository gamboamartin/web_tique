<?php use config\views; ?>
<?php /** @var stdClass $row  viene de registros del controler*/ ?>

<tr>

    <td><?php echo $row->wt_imagen_id; ?></td>
    <td><?php echo $row->wt_imagen_descripcion; ?></td>
    <td><?php echo $row->wt_imagen_codigo; ?></td>
    <td><?php echo $row->wt_imagen_doc_extension_id; ?></td>
    <td><?php echo $row->wt_imagen_wt_hogar_id; ?></td>
    <td><?php echo $row->wt_imagen_wt_context_img_id; ?></td>
    <!-- Dynamic generated -->

    <!-- End dynamic generated -->

    <?php include (new views())->ruta_templates.'listas/action_row.php';?>
</tr>