<?php
namespace html;


use gamboamartin\errores\errores;
use gamboamartin\system\html_controler;
use gamboamartin\template\directivas;
use models\cat_sat_tipo_contrato_nom;
use PDO;


class cat_sat_tipo_contrato_nom_html extends html_controler {

    /**
     * Genera un select de tipo contrato nomina
     * @param int $cols No de columnas css
     * @param bool $con_registros si con registros integra todos los options disponibles
     * @param int|null $id_selected id seleccionado
     * @param PDO $link conexion a la base de datos
     * @return array|string
     * @version 0.77.9
     *
     */
    public function select_cat_sat_tipo_contrato_nom_id(int $cols, bool $con_registros, int|null $id_selected, PDO $link): array|string
    {
        $valida = (new directivas(html:$this->html_base))->valida_cols(cols:$cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }

        if(is_null($id_selected)){
            $id_selected = -1;
        }

        $modelo = new cat_sat_tipo_contrato_nom($link);

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected,
            modelo: $modelo, label: 'Tipo Contrato');
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }
}
