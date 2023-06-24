<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 0.18.1
 * @created 2022-06-21
 * @final En proceso
 *
 */
namespace controllers;

use gamboamartin\system\links_menu;
use gamboamartin\system\system;
use gamboamartin\template_1\html;
use html\cat_sat_tipo_de_comprobante_html;
use models\cat_sat_tipo_de_comprobante;
use PDO;
use stdClass;

class controlador_cat_sat_tipo_de_comprobante extends system {

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){

        $modelo = new cat_sat_tipo_de_comprobante(link: $link);
        $html_base = new html();
        $html = new cat_sat_tipo_de_comprobante_html(html: $html_base);
        $obj_link = new links_menu($this->registro_id);
        parent::__construct(html:$html,link: $link,modelo:  $modelo,obj_link: $obj_link, paths_conf: $paths_conf);

        $this->titulo_lista = 'Tipos de Comprobante';

    }


}
