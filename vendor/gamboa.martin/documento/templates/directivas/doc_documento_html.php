<?php
namespace html;

use gamboamartin\errores\errores;
use gamboamartin\system\html_controler;
use models\doc_documento;
use PDO;

class doc_documento_html extends html_controler {

    public function select_doc_documento_id(int $cols, bool $con_registros, int $id_selected, PDO $link): array|string
    {
        $modelo = new doc_documento(link: $link);

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected,
            modelo: $modelo,label: 'Documento',required: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }


}
