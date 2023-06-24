<?php use config\views; ?>
<?php /** @var stdClass $row  viene de registros del controler*/ ?>
<tr>
    <td><?php echo $row->im_registro_patronal_id; ?></td>
    <td><?php echo $row->im_registro_patronal_codigo; ?></td>
    <td><?php echo $row->im_registro_patronal_codigo_bis; ?></td>
    <!-- Dynamic generated -->
    <td><?php echo $row->im_registro_patronal_descripcion; ?></td>
    <td><?php echo $row->im_registro_patronal_descripcion_select; ?></td>
    <td><?php echo $row->im_registro_patronal_alias; ?></td>
    <td><?php echo $row->org_empresa_descripcion; ?></td>
    <td><?php echo $row->cat_sat_regimen_fiscal_descripcion; ?></td>


    <!-- End dynamic generated -->

    <?php include (new views())->ruta_templates.'listas/action_row.php';?>
</tr>
