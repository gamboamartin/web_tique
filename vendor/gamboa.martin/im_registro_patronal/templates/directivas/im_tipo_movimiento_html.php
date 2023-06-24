<?php
namespace html;

use gamboamartin\errores\errores;
use gamboamartin\im_tipo_movimiento\controllers\controlador_im_tipo_movimiento;
use gamboamartin\system\html_controler;
use gamboamartin\system\system;
use gamboamartin\template\directivas;
use models\im_tipo_movimiento;
use PDO;
use stdClass;


class im_tipo_movimiento_html extends html_controler {

    public function select_im_tipo_movimiento_id(int $cols,bool $con_registros,int $id_selected, PDO $link): array|string
    {
        $modelo = new im_tipo_movimiento($link);

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected,
            modelo: $modelo,label: 'Tipo Movimiento',required: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }



}
