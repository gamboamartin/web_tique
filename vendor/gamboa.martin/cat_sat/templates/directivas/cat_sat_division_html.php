<?php
namespace html;

use controllers\controlador_cat_sat_division;
use gamboamartin\errores\errores;
use gamboamartin\system\html_controler;
use models\cat_sat_actividad_economica;
use models\cat_sat_division;
use PDO;
use stdClass;

class cat_sat_division_html extends html_controler {

    private function asigna_inputs(controlador_cat_sat_division $controler, stdClass $inputs): array|stdClass
    {
        $controler->inputs->select = new stdClass();

        $controler->inputs->select->cat_sat_tipo_producto_id = $inputs->selects->cat_sat_tipo_producto_id;

        return $controler->inputs;
    }

    public function genera_inputs_alta(controlador_cat_sat_division $controler,PDO $link): array|stdClass
    {
        $inputs = $this->init_alta(link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);

        }
        $inputs_asignados = $this->asigna_inputs(controler:$controler, inputs: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al asignar inputs',data:  $inputs_asignados);
        }

        return $inputs_asignados;
    }

    private function init_alta(PDO $link): array|stdClass
    {
        $selects = $this->selects_alta(link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects',data:  $selects);
        }

        $alta_inputs = new stdClass();

        $alta_inputs->selects = $selects;
        return $alta_inputs;
    }

    private function selects_alta(PDO $link): array|stdClass
    {
        $selects = new stdClass();

        $cat_sat_tipo_producto_html= new cat_sat_tipo_producto_html(html:$this->html_base);

        $select = $cat_sat_tipo_producto_html->select_cat_sat_tipo_producto_id(cols: 12, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }

        $selects->cat_sat_tipo_producto_id = $select;

        return $selects;
    }

    public function select_cat_sat_division_id(int $cols,bool $con_registros,int $id_selected, PDO $link): array|string
    {
        $modelo = new cat_sat_division($link);

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected,
            modelo: $modelo,label: 'Division',required: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }
}
