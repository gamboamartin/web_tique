<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace controllers;

use gamboamartin\system\system;
use gamboamartin\template_1\html;
use html\cat_sat_regimen_fiscal_html;

use links\secciones\link_cat_sat_regimen_fiscal;
use models\cat_sat_regimen_fiscal;
use PDO;
use stdClass;

class controlador_cat_sat_regimen_fiscal extends system {

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){
        $modelo = new cat_sat_regimen_fiscal(link: $link);
        $html_base = new html();
        $html = new cat_sat_regimen_fiscal_html(html: $html_base);
        $obj_link = new link_cat_sat_regimen_fiscal($this->registro_id);
        parent::__construct(html:$html, link: $link,modelo:  $modelo, obj_link: $obj_link, paths_conf: $paths_conf);

        $this->titulo_lista = 'Regimenes Fiscales';

    }

}
