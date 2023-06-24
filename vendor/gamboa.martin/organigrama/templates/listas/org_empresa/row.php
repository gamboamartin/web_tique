<?php use config\views; ?>
<?php /** @var stdClass $row  viene de registros del controler*/ ?>
<tr>
    <td><?php echo $row->org_empresa_id; ?></td>
    <td><?php echo $row->org_empresa_codigo; ?></td>
    <td><?php echo $row->org_empresa_codigo_bis; ?></td>
    <!-- Dynamic generated -->
    <td><?php echo $row->org_empresa_descripcion; ?></td>
    <td><?php echo $row->org_empresa_descripcion_select; ?></td>
    <td><?php echo $row->org_empresa_alias; ?></td>
    <td><?php include 'templates/botons/org_empresa/link_empresa_registros_patronales.php';?></td>
    <td><?php include 'templates/botons/org_empresa/link_empresa_sucursales.php';?></td>

    <!-- End dynamic generated -->

    <?php include (new views())->ruta_templates.'listas/action_row.php';?>
</tr>
