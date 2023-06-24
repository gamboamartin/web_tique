<?php
namespace html;

use gamboamartin\direccion_postal\models\dp_cp;
use gamboamartin\errores\errores;
use gamboamartin\system\html_controler;
use gamboamartin\template_1\directivas;
use PDO;
use stdClass;


class dp_cp_html extends html_controler {

    /**
     * Genera un select de tipo cp
     * @param int $cols Numero de columnas en css
     * @param bool $con_registros si no con registros deja un select vacio
     * @param int|null $id_selected Id seleccionado
     * @param PDO $link conexion a la base de datos
     * @param bool $disabled Si disabled el input queda deshabilitado
     * @param array $filtro Filtro para obtencion de datos
     * @param bool $required
     * @return array|string
     * @version 0.60.8
     * @verfuncion 0.1.0
     * @fecha 2022-08-03 17:15
     * @author mgamboa
     */
    public function select_dp_cp_id(int $cols, bool $con_registros, int|null $id_selected, PDO $link,
                                    bool $disabled = false, array $filtro = array(),
                                    bool $required = false): array|string
    {

        $valida = (new directivas(html:$this->html_base))->valida_cols(cols:$cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }
        $modelo = new dp_cp($link);

        if(is_null($id_selected)){
            $id_selected = -1;
        }
        $select = $this->select_catalogo(cols: $cols, con_registros: $con_registros, id_selected: $id_selected,
            modelo: $modelo, disabled: $disabled, filtro: $filtro, label: 'CP', required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

    public function input(int $cols, stdClass $row_upd, bool $value_vacio, string $campo): array|string
    {

        $div = (new inputs_html())->input(cols: $cols,directivas:  $this->directivas, row_upd: $row_upd,
            value_vacio:  $value_vacio,campo:  $campo);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $div);
        }

        return $div;
    }
}
