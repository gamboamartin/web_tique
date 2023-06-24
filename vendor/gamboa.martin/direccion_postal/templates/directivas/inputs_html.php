<?php
namespace html;

use gamboamartin\errores\errores;

use gamboamartin\system\system;
use gamboamartin\template\directivas;
use gamboamartin\validacion\validacion;

use stdClass;


class inputs_html {
    private errores $error;
    public function __construct(){
        $this->error = new errores();
    }

    /**
     * Asigna los elementos de un direcciones basicas
     * @param system $controler Controlador en ejecucion
     * @param stdClass $inputs Inputs con datos asignados en forma de html
     * @return stdClass|array
     * @version 0.105.8
     * @verfuncion 0.1.0
     * @fecha 2022-08-08 13:39
     * @author mgamboa
     */
    public function base_direcciones_asignacion(system $controler, stdClass $inputs): stdClass|array
    {

        $keys = array('selects');
        $valida = (new validacion())->valida_existencia_keys(keys: $keys, registro: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar inputs', data: $valida);
        }

        $keys = array('dp_pais_id','dp_estado_id','dp_municipio_id','dp_cp_id','dp_colonia_postal_id',
            'dp_calle_pertenece_id');
        $valida = (new validacion())->valida_existencia_keys(keys: $keys, registro: $inputs->selects,
            valida_vacio: false);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar inputs->selects', data: $valida);
        }

        if(is_array($controler->inputs)){
            $controler->inputs = (object)$controler->inputs;
        }
        if(!isset($controler->inputs->select)){
            $controler->inputs->select = new stdClass();
        }

        $controler->inputs->select->dp_pais_id = $inputs->selects->dp_pais_id;
        $controler->inputs->select->dp_estado_id = $inputs->selects->dp_estado_id;
        $controler->inputs->select->dp_municipio_id = $inputs->selects->dp_municipio_id;
        $controler->inputs->select->dp_cp_id = $inputs->selects->dp_cp_id;
        $controler->inputs->select->dp_colonia_postal_id = $inputs->selects->dp_colonia_postal_id;
        $controler->inputs->select->dp_calle_pertenece_id = $inputs->selects->dp_calle_pertenece_id;
        return $controler->inputs->select;
    }

    /**
     * @param int $cols Numero de columnas css
     * @param directivas $directivas Directivas de template html
     * @param stdClass $row_upd registro en proceso
     * @param bool $value_vacio si vacio limpiar valores
     * @param string $campo Nombre del campo para name
     * @return array|string
     */
    public function input(int $cols, directivas $directivas, stdClass $row_upd, bool $value_vacio,
                          string $campo): array|string
    {

        if($cols<=0){
            return $this->error->error(mensaje: 'Error cold debe ser mayor a 0', data: $cols);
        }
        if($cols>=13){
            return $this->error->error(mensaje: 'Error cold debe ser menor o igual a  12', data: $cols);
        }

        $html =$directivas->input_text_required(disable: false,name: $campo,place_holder: $campo,
            row_upd: $row_upd, value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $directivas->html->div_group(cols: $cols,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }


}
