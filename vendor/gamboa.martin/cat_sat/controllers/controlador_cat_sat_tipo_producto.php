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
use gamboamartin\template\html;
use html\cat_sat_actividad_economica_html;
use html\cat_sat_tipo_nomina_html;
use html\cat_sat_tipo_producto_html;
use models\cat_sat_actividad_economica;
use models\cat_sat_tipo_nomina;
use models\cat_sat_tipo_producto;
use PDO;
use stdClass;

class controlador_cat_sat_tipo_producto extends system {

    public function __construct(PDO $link, html $html = new \gamboamartin\template_1\html(),
                                stdClass $paths_conf = new stdClass()){

        $modelo = new cat_sat_tipo_producto(link: $link);
        $html_ = new cat_sat_tipo_producto_html(html: $html);
        $obj_link = new links_menu($this->registro_id);
        parent::__construct(html:$html_, link: $link,modelo:  $modelo, obj_link: $obj_link, paths_conf: $paths_conf);

        $this->titulo_lista = 'Tipo Producto';

    }




}
