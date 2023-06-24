<?php
namespace html;

use gamboamartin\errores\errores;
use gamboamartin\organigrama\controllers\controlador_org_porcentaje_act_economica;
use gamboamartin\system\html_controler;
use models\base\limpieza;
use PDO;
use stdClass;


class org_porcentaje_act_economica_html extends html_controler {

    private function asigna_inputs(controlador_org_porcentaje_act_economica $controler, stdClass $inputs): array|stdClass
    {
        $controler->inputs->select = new stdClass();

        $controler->inputs->select->cat_sat_actividad_economica_id = $inputs->selects->cat_sat_actividad_economica_id;
        $controler->inputs->select->org_empresa_id = $inputs->selects->org_empresa_id;

        $controler->inputs->porcentaje = $inputs->texts->porcentaje;

        return $controler->inputs;
    }

    public function genera_inputs_alta(controlador_org_porcentaje_act_economica $controler,PDO $link): array|stdClass
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

        $texts = $this->texts_alta(row_upd: new stdClass(), value_vacio: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar texts',data:  $texts);
        }

        $alta_inputs = new stdClass();

        $alta_inputs->texts = $texts;
        $alta_inputs->selects = $selects;
        return $alta_inputs;
    }

    public function input_porcentaje(int $cols, stdClass $row_upd, bool $value_vacio): array|string
    {

        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: false,name: 'porcentaje',place_holder: 'Porcentaje',
            row_upd: $row_upd, value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $this->directivas->html->div_group(cols: $cols,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }

    private function selects_alta(PDO $link): array|stdClass
    {
        $selects = new stdClass();

        $cat_sat_actividad_economica_html = new cat_sat_actividad_economica_html(html:$this->html_base);

        $select = $cat_sat_actividad_economica_html->select_cat_sat_actividad_economica_id(cols: 12, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_actividad_economica_id = $select;

        $org_empresa_html= new org_empresa_html(html:$this->html_base);
        $select = $org_empresa_html->select_org_empresa_id(cols: 12, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->org_empresa_id = $select;

        return $selects;
    }

    private function texts_alta(stdClass $row_upd, bool $value_vacio): array|stdClass
    {
        $texts = new stdClass();

        $in_porcentaje = $this->input_porcentaje(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_codigo);
        }
        $texts->porcentaje = $in_porcentaje;

        return $texts;
    }

}
