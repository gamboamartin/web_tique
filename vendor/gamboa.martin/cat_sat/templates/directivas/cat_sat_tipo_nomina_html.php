<?php
namespace html;

use gamboamartin\errores\errores;
use gamboamartin\system\html_controler;
use gamboamartin\template\directivas;
use models\cat_sat_actividad_economica;
use models\cat_sat_tipo_nomina;
use PDO;

class cat_sat_tipo_nomina_html extends html_controler {

    /**
     * Genera un select de tipo nomina
     * @param int $cols No de columnas css
     * @param bool $con_registros Si con registros asigna options
     * @param int|null $id_selected Identificador para selected
     * @param PDO $link Conexion a la BD
     * @return array|string
     * @version 0.71.8
     */
    public function select_cat_sat_tipo_nomina_id(int $cols,bool $con_registros,int|null $id_selected,
                                                  PDO $link): array|string
    {
        $valida = (new directivas(html:$this->html_base))->valida_cols(cols:$cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }

        if(is_null($id_selected)){
            $id_selected = -1;
        }

        $modelo = new cat_sat_tipo_nomina($link);

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected,
            modelo: $modelo,label: 'Tipo nomina',required: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

}
