<?php
namespace html\base;

use gamboamartin\errores\errores;
use gamboamartin\system\html_controler;
use gamboamartin\system\system;
use html\inputs_html;
use html\selects;
use PDO;
use stdClass;


class org_html extends html_controler {

    /**
     * Asigna la integracion de inputs generados previamente
     * @param system $controler Controlador en ejecucion
     * @param stdClass $inputs Inputs precargados
     * @return array|stdClass
     */
    protected function asigna_inputs(system $controler, stdClass $inputs): array|stdClass
    {
        $controler->inputs->select = new stdClass();

        $inputs_direcciones_postales = (new inputs_html())->base_direcciones_asignacion(controler:$controler,
            inputs: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al asignar direcciones',data:  $inputs_direcciones_postales);
        }

        $controler->inputs->codigo = $inputs->texts->codigo;
        $controler->inputs->codigo_bis = $inputs->texts->codigo_bis;
        $controler->inputs->exterior = $inputs->texts->exterior;
        $controler->inputs->fecha_inicio_operaciones = $inputs->fechas->fecha_inicio_operaciones;
        $controler->inputs->interior = $inputs->texts->interior;
        $controler->inputs->telefono_1 = $inputs->telefonos->telefono_1;
        $controler->inputs->telefono_2 = $inputs->telefonos->telefono_2;
        $controler->inputs->telefono_3 = $inputs->telefonos->telefono_3;

        return $controler->inputs;
    }



    public function fec_fecha_inicio_operaciones(int $cols, stdClass $row_upd, bool $value_vacio,
                                                 bool $disabled = false): array|string
    {

        if($cols<=0){
            return $this->error->error(mensaje: 'Error cold debe ser mayor a 0', data: $cols);
        }
        if($cols>=13){
            return $this->error->error(mensaje: 'Error cold debe ser menor o igual a  12', data: $cols);
        }

        $html =$this->directivas->fecha_required(disable: $disabled,name: 'fecha_inicio_operaciones',
            place_holder: 'Inicio de Operaciones',row_upd: $row_upd, value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $this->directivas->html->div_group(cols: $cols,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }

    protected function fechas_alta(stdClass $row_upd = new stdClass(), stdClass $params = new stdClass()): array|stdClass
    {

        $fechas = new stdClass();

        if(!isset($row_upd->fecha_inicio_operaciones) || $row_upd->fecha_inicio_operaciones === '0000-00-00') {
            $row_upd->fecha_inicio_operaciones = date('Y-m-d');
        }

        $cols_fecha_inicio_operaciones = $params->fecha_inicio_operaciones->cols ?? 6;

        $fec_fecha_inicio_operaciones = $this->fec_fecha_inicio_operaciones(cols: $cols_fecha_inicio_operaciones,
            row_upd: $row_upd, value_vacio:  false);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $fec_fecha_inicio_operaciones);
        }
        $fechas->fecha_inicio_operaciones = $fec_fecha_inicio_operaciones;

        return $fechas;
    }

    /**
     * Genera un conjunto de selects para views por default direcciones
     * @param array $keys_selects
     * @param PDO $link conexion a la base de datos
     * @return array|stdClass
     * @version 0.264.35
     */
    protected function selects_alta(array $keys_selects, PDO $link): array|stdClass
    {
        $selects = new stdClass();


        $row_upd = new stdClass();

        $selects = (new selects())->direcciones(html: $this->html_base,link:  $link,row:  $row_upd,selects:  $selects);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects de domicilios',data:  $selects);

        }

        $selects_extra = parent::selects_alta(keys_selects: $keys_selects, link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects',data:  $selects_extra);
        }

        foreach ($selects_extra as $attr=>$select){
            $selects->$attr = $select;
        }


        return $selects;
    }




}
