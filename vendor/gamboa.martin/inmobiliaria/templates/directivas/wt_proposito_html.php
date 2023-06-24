<?php
namespace html;

use gamboamartin\errores\errores;
use gamboamartin\system\html_controler;
use models\wt_proposito;
use PDO;
use stdClass;

class wt_proposito_html extends html_controler {
    public function select_wt_proposito_id(int $cols, bool $con_registros,int $id_selected, PDO $link): array|string
    {
        $modelo = new wt_proposito($link);

        $select = $this->select_catalogo(cols:$cols, con_registros: $con_registros,id_selected:$id_selected, modelo: $modelo);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

}
