<?php
namespace html;

use gamboamartin\errores\errores;
use gamboamartin\im_registro_patronal\controllers\controlador_im_movimiento;
use gamboamartin\system\html_controler;
use gamboamartin\system\system;
use gamboamartin\template\directivas;
use models\im_movimiento;
use PDO;
use stdClass;


class im_movimiento_html extends html_controler {


    public function select_im_movimiento_id(int $cols,bool $con_registros,int|null $id_selected, PDO $link,
                                            bool $required = false): array|string
    {
        $valida = (new directivas(html:$this->html_base))->valida_cols(cols:$cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }

        if(is_null($id_selected)){
            $id_selected = -1;
        }

        $modelo = new im_movimiento($link);

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected,
            modelo: $modelo,label: 'Movimiento',required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

    protected function asigna_inputs(system $controler, stdClass $inputs): array|stdClass
    {
        $controler->inputs->select = new stdClass();

        $controler->inputs->select->im_tipo_movimiento_id = $inputs->selects->im_tipo_movimiento_id;
        $controler->inputs->select->im_registro_patronal_id = $inputs->selects->im_registro_patronal_id;
        $controler->inputs->select->em_empleado_id = $inputs->selects->em_empleado_id;
        $controler->inputs->fecha = $inputs->texts->fecha;
        $controler->inputs->salario_diario = $inputs->texts->salario_diario;
        $controler->inputs->salario_diario_integrado = $inputs->texts->salario_diario_integrado;

        return $controler->inputs;
    }

    public function genera_inputs_alta(controlador_im_movimiento $controler, array $keys_selects,PDO $link): array|stdClass
    {
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

    public function genera_inputs_modifica(controlador_im_movimiento $controler,PDO $link,
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

        $in_fecha = $this->input_fecha(cols: 4,row_upd:  new stdClass(),value_vacio:  false);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_fecha);
        }
        $texts->fecha = $in_fecha;

        $in_salario_diario = $this->input_salario_diario(cols: 4,row_upd:  new stdClass(),value_vacio:  false);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_salario_diario);
        }
        $texts->salario_diario = $in_salario_diario; 
        
        $in_salario_diario_integrado = $this->input_salario_diario_integrado(cols: 4,row_upd:  new stdClass(),value_vacio:  false);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_salario_diario_integrado);
        }
        $texts->salario_diario_integrado = $in_salario_diario_integrado;

        $selects = $this->selects_alta(keys_selects: $keys_selects,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects',data:  $selects);
        }

        $alta_inputs = new stdClass();
        $alta_inputs->selects = $selects;
        $alta_inputs->texts = $texts;
        return $alta_inputs;
    }

    private function init_modifica(PDO $link, stdClass $row_upd, stdClass $params = new stdClass()): array|stdClass
    {

        $texts = new stdClass();

        $in_fecha = $this->input_fecha(cols: 4,row_upd:  $row_upd,value_vacio:  false, disabled: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_fecha);
        }
        $texts->fecha = $in_fecha;

        $in_salario_diario = $this->input_salario_diario(cols: 4,row_upd:  $row_upd,value_vacio:  false);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_salario_diario);
        }
        $texts->salario_diario = $in_salario_diario; 
        
        $in_salario_diario_integrado = $this->input_salario_diario_integrado(cols: 4,row_upd:  $row_upd,value_vacio:  false);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_salario_diario_integrado);
        }
        $texts->salario_diario_integrado = $in_salario_diario_integrado;

        $selects = $this->selects_modifica(link: $link, row_upd: $row_upd);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects',data:  $selects);
        }

        $alta_inputs = new stdClass();
        $alta_inputs->selects = $selects;
        $alta_inputs->texts = $texts;
        return $alta_inputs;
    }

    public function input_fecha(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->fecha_required(disable: $disabled,name: 'fecha',place_holder: 'Fecha',
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

    public function input_salario_diario(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false, bool $required = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text(disable: $disabled, name: 'salario_diario', place_holder: 'Salario diario',
            required: $required, row_upd: $row_upd, value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $this->directivas->html->div_group(cols: $cols,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }

    public function input_salario_diario_integrado(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false, bool $required = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text(disable: $disabled, name: 'salario_diario_integrado',
            place_holder: 'Salario Diario Integrado', required: $required, row_upd: $row_upd,
            value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $this->directivas->html->div_group(cols: $cols,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }


    private function selects_modifica(PDO $link, stdClass $row_upd): array|stdClass
    {
        $selects = new stdClass();

        $select = (new im_tipo_movimiento_html($this->html_base))->select_im_tipo_movimiento_id(cols: 12, con_registros:true,
            id_selected: $row_upd->im_tipo_movimiento_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }

        $selects->im_tipo_movimiento_id = $select;

        $select = (new im_registro_patronal_html($this->html_base))->select_im_registro_patronal_id(cols: 12, con_registros:true,
            id_selected: $row_upd->im_registro_patronal_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }

        $selects->im_registro_patronal_id = $select;

        $select = (new em_empleado_html($this->html_base))->select_em_empleado_id(cols: 12, con_registros:true,
            id_selected: $row_upd->em_empleado_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }

        $selects->em_empleado_id = $select;

        return $selects;
    }

}
