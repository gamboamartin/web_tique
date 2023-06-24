<?php
namespace html;

use gamboamartin\errores\errores;
use gamboamartin\im_registro_patronal\controllers\controlador_im_clase_riesgo;
use gamboamartin\im_registro_patronal\controllers\controlador_im_registro_patronal;
use gamboamartin\system\html_controler;
use gamboamartin\system\system;
use models\im_clase_riesgo;
use models\im_registro_patronal;
use PDO;
use stdClass;


class im_clase_riesgo_html extends html_controler {

    public function select_im_clase_riesgo_id(int $cols,bool $con_registros,int $id_selected, PDO $link): array|string
    {
        $modelo = new im_clase_riesgo($link);

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected,
            modelo: $modelo,label: 'Clase Riesgos',required: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

    protected function asigna_inputs(system $controler, stdClass $inputs): array|stdClass
    {
        $controler->inputs->factor = $inputs->texts->factor;
        return $controler->inputs;
    }

    public function genera_inputs_alta(controlador_im_clase_riesgo $controler,PDO $link): array|stdClass
    {
        $keys_selects =array();
        $inputs = $this->init_alta(keys_selects: $keys_selects, link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);

        }
        $inputs_asignados = $this->asigna_inputs(controler:$controler, inputs: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al asignar inputs',data:  $inputs_asignados);
        }

        return $inputs_asignados;
    }

    public function genera_inputs_modifica(controlador_im_clase_riesgo $controler,PDO $link,
                                           stdClass $params = new stdClass()): array|stdClass
    {
        $inputs = $this->init_modifica(link: $link, row_upd: $controler->row_upd, params: $params);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);

        }
        $inputs_asignados = $this->asigna_inputs(controler:$controler, inputs: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al asignar inputs',data:  $inputs_asignados);
        }

        return $inputs_asignados;
    }

    protected function init_alta(array $keys_selects, PDO $link): array|stdClass
    {
        $texts = new stdClass();

        $in_factor = $this->input_factor(cols: 12,row_upd:  new stdClass(),value_vacio:  false);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_factor);
        }
        $texts->factor = $in_factor;

        $alta_inputs = new stdClass();
        $alta_inputs->texts = $texts;
        return $alta_inputs;
    }

    private function init_modifica(PDO $link, stdClass $row_upd, stdClass $params = new stdClass()): array|stdClass
    {
        $texts = new stdClass();

        $in_factor = $this->input_factor(cols: 12,row_upd:  $row_upd,value_vacio:  false, disabled: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_factor);
        }
        $texts->factor = $in_factor;

        $alta_inputs = new stdClass();
        $alta_inputs->texts = $texts;
        return $alta_inputs;
    }

    public function input_factor(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: $disabled,name: 'factor',place_holder: 'Factor',
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



}
