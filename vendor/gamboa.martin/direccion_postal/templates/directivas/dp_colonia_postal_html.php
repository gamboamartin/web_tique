<?php
namespace html;

use gamboamartin\direccion_postal\models\dp_colonia_postal;
use gamboamartin\errores\errores;
use gamboamartin\system\html_controler;
use gamboamartin\template\directivas;
use PDO;


class dp_colonia_postal_html extends html_controler {

    /**
     * Genera un select de tipo colonia postal
     * @param int $cols Numero de columnas en css
     * @param bool $con_registros si no con registros muestra un div vacio
     * @param int|null $id_selected id selected
     * @param PDO $link conexion a la base de datos
     * @param bool $disabled Si disabled el input queda deshabilitado
     * @param array $filtro filtro de registros
     * @param bool $required
     * @return array|string
     * @version 0.63.7
     * @verfuncion 0.1.0
     * @fecha 2022-08-04 11:42
     * @author mgamboa
     */
    public function select_dp_colonia_postal_id(int $cols, bool $con_registros, int|null $id_selected, PDO $link,
                                                bool $disabled = false, array $filtro = array(),
                                                bool $required = false): array|string
    {

        $valida = (new directivas(html:$this->html_base))->valida_cols(cols:$cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }

        $modelo = new dp_colonia_postal($link);

        if(is_null($id_selected)){
            $id_selected = -1;
        }
        $select = $this->select_catalogo(cols: $cols, con_registros: $con_registros, id_selected: $id_selected,
            modelo: $modelo, disabled: $disabled, filtro: $filtro, label: 'Colonia', required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

}
