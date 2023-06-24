<?php
namespace html;

use gamboamartin\errores\errores;
use gamboamartin\system\html_controler;
use gamboamartin\system\system;
use gamboamartin\validacion\validacion;
use stdClass;

class em_html extends html_controler {

    /**
     * Asigna inputs base de cuenta empleado
     * @param system $controler Controlador en ejecucion
     * @param stdClass $inputs Inputs precargados
     * @return array|stdClass
     * @version 0.43.6
     */
    protected function asigna_inputs_base(system $controler, stdClass $inputs): array|stdClass
    {
        $keys = array('selects','texts');
        $valida = (new validacion())->valida_existencia_keys(keys: $keys,registro: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar inputs', data: $valida);
        }

        $keys = array('bn_sucursal_id','em_empleado_id');
        $valida = (new validacion())->valida_existencia_keys(keys: $keys,registro: $inputs->selects);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar inputs', data: $valida);
        }

        $keys = array('num_cuenta','clabe');
        $valida = (new validacion())->valida_existencia_keys(keys: $keys,registro: $inputs->texts);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar inputs', data: $valida);
        }

        if(is_array($controler->inputs)){
            $controler->inputs = new stdClass();
        }

        $controler->inputs->select = new stdClass();
        $controler->inputs->select->em_empleado_id = $inputs->selects->em_empleado_id;
        $controler->inputs->select->bn_sucursal_id = $inputs->selects->bn_sucursal_id;
        $controler->inputs->num_cuenta = $inputs->texts->num_cuenta;
        $controler->inputs->clabe = $inputs->texts->clabe;

        return $controler->inputs;
    }

    public function input_clabe(int $cols, stdClass $row_upd, bool $value_vacio, bool $disable = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: $disable,name: 'clabe',place_holder: 'Clabe',
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

    public function input_monto(int $cols, stdClass $row_upd, bool $value_vacio, bool $disable = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: $disable,name: 'monto',place_holder: 'Monto',
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

    public function input_fecha_prestacion(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->fecha_required(disable: $disabled,name: 'fecha_prestacion',place_holder: 'Fecha Prestacion',
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
