<?php
namespace html;

use gamboamartin\errores\errores;
use gamboamartin\organigrama\models\org_tipo_puesto;
use gamboamartin\system\html_controler;
use PDO;


class org_tipo_puesto_html extends html_controler {
    public function select_org_tipo_puesto_id(int $cols, bool $con_registros, int $id_selected, PDO $link): array|string
    {
        $modelo = new org_tipo_puesto($link);

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected, modelo: $modelo, label: "Puesto", required: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

}
