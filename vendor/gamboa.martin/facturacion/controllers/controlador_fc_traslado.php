<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace gamboamartin\facturacion\controllers;

use gamboamartin\facturacion\models\fc_traslado;
use gamboamartin\system\links_menu;
use gamboamartin\system\system;

use gamboamartin\template\html;
use html\fc_traslado_html;
use PDO;
use stdClass;

class controlador_fc_traslado extends system{
    public string $rfc = '';
    public string $razon_social = '';

    public function __construct(PDO $link, html $html = new \gamboamartin\template_1\html(),
                                stdClass $paths_conf = new stdClass()){
        $modelo = new fc_traslado(link: $link);
        $html_ = new fc_traslado_html(html: $html);
        $obj_link = new links_menu($this->registro_id);
        parent::__construct(html:$html_, link: $link,modelo:  $modelo, obj_link: $obj_link, paths_conf: $paths_conf);

        $this->titulo_lista = 'Traslado';
    }


}
