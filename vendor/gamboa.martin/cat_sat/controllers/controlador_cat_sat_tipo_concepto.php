<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace controllers;
use gamboamartin\system\links_menu;
use gamboamartin\system\system;
use html\cat_sat_tipo_concepto_html;
use html\html;
use models\cat_sat_tipo_concepto;
use PDO;
use stdClass;

class controlador_cat_sat_tipo_concepto extends system {

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){
        $modelo = new cat_sat_tipo_concepto(link: $link);
        $html_base = new html();
        $html = new cat_sat_tipo_concepto_html(html: $html_base);
        $obj_link = new links_menu($this->registro_id);
        parent::__construct(html:$html, link: $link,modelo:  $modelo, obj_link: $obj_link, paths_conf: $paths_conf);

        $this->titulo_lista = 'Tipos de Concepto';

    }




}
