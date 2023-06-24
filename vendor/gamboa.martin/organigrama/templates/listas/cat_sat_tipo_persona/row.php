<?php use config\views; ?>
<?php /** @var stdClass $row  viene de registros del controler*/ ?>
<tr>
    <td><?php echo $row->cat_sat_tipo_persona_id; ?></td>
    <td><?php echo $row->cat_sat_tipo_persona_codigo; ?></td>
    <td><?php echo $row->cat_sat_tipo_persona_codigo_bis; ?></td>
    <!-- Dynamic generated -->
    <td><?php echo $row->cat_sat_tipo_persona_descripcion; ?></td>
    <td><?php echo $row->cat_sat_tipo_persona_descripcion_select; ?></td>
    <td><?php echo $row->cat_sat_tipo_persona_alias; ?></td>
    <td><?php include 'templates/botons/cat_sat_tipo_persona/link_valida_persona_fisica.php';?></td>

    <!-- End dynamic generated -->

    <?php include (new views())->ruta_templates.'listas/action_row.php';?>
</tr>
