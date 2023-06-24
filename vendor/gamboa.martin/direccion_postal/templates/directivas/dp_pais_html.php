<?php
namespace html;

use gamboamartin\direccion_postal\models\dp_pais;
use gamboamartin\errores\errores;
use gamboamartin\system\html_controler;
use gamboamartin\template\directivas;
use PDO;


class dp_pais_html extends html_controler {

    /**
     * @param int $cols Numero de columnas css
     * @param bool $con_registros si no con registros deja el select vacio
     * @param int|null $id_selected id para selected
     * @param PDO $link conexion a la base de datos
     * @param bool $disabled Si disabled el input queda deshabilitado
     * @param array $filtro Filtro de obtencion de datos
     * @return array|string
     * @version 0.120.26
     * @verfuncion 0.1.0
     * @fecha 2022-08-04
     * @author mgamboa
     */
    public function select_dp_pais_id(int $cols, bool $con_registros, int|null $id_selected, PDO $link,
                                      bool $disabled = false, array $filtro = array(),
                                      bool $required = false): array|string
    {
        $valida = (new directivas(html:$this->html_base))->valida_cols(cols:$cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }

        if(is_null($id_selected)){
            $id_selected = -1;
        }

        $modelo = new dp_pais($link);

        $select = $this->select_catalogo(cols: $cols, con_registros: $con_registros, id_selected: $id_selected,
            modelo: $modelo, disabled: $disabled, filtro: $filtro, label: 'Pais', required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

}
