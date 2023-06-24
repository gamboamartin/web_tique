<?php
namespace html;

use gamboamartin\direccion_postal\models\dp_estado;
use gamboamartin\errores\errores;
use gamboamartin\system\html_controler;
use gamboamartin\template_1\directivas;
use PDO;


class dp_estado_html extends html_controler {
    /**
     * @param int $cols Columnas css
     * @param bool $con_registros si con registros asigna registros si no deja limpio el select
     * @param int|null $id_selected Id seleccionado
     * @param PDO $link Conexion a la bd
     * @param bool $disabled Si disabled el input queda deshabilitado
     * @param array $filtro Filtro para la obtencion de registros
     * @param bool $required
     * @return array|string
     * @version 0.59.7
     * @verfuncion 0.1.0
     * @fecha 2022-08-03 16:58
     * @author mgamboa
     */
    public function select_dp_estado_id(int $cols, bool $con_registros,int|null $id_selected, PDO $link,
                                        bool $disabled = false, array $filtro = array(),
                                        bool $required = false): array|string
    {
        $valida = (new directivas(html:$this->html_base))->valida_cols(cols:$cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }

        $modelo = new dp_estado($link);
        if(is_null($id_selected)){
            $id_selected = -1;
        }
        $select = $this->select_catalogo(cols: $cols, con_registros: $con_registros, id_selected: $id_selected,
            modelo: $modelo, disabled: $disabled, filtro: $filtro, label: 'Estado', required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

}
