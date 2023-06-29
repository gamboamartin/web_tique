<?php use config\views; ?>
<?php /** @var stdClass $row  viene de registros del controler*/ ?>

<tr>

    <td><?php echo $row->doc_extension_id; ?></td>
    <td><?php echo $row->doc_extension_descripcion; ?></td>
    <td><?php echo $row->doc_extension_codigo; ?></td>
    <td><?php echo $row->doc_extension_descripcion_select; ?></td>
    <!-- Dynamic generated -->

    <!-- End dynamic generated -->

    <?php include (new views())->ruta_templates.'listas/action_row.php';?>
</tr>