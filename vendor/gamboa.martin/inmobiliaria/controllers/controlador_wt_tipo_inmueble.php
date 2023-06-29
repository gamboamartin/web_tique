<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace controllers;

use gamboamartin\errores\errores;
use gamboamartin\system\links_menu;
use gamboamartin\system\system;
use gamboamartin\template\html;
use html\wt_tipo_inmueble_html;
use models\wt_tipo_inmueble;
use PDO;
use stdClass;

class controlador_wt_tipo_inmueble extends system {

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){
        $modelo = new wt_tipo_inmueble(link: $link);
        $html_base = new html();
        $html = new wt_tipo_inmueble_html(html: $html_base);
        $obj_link = new links_menu($this->registro_id);
        parent::__construct(html:$html, link: $link,modelo:  $modelo, obj_link: $obj_link, paths_conf: $paths_conf);

        $this->titulo_lista = 'Tipo Inmueble';

    }



}
