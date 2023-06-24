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
use html\doc_extension_html;
use html\wt_proposito_html;
use models\doc_extension;
use PDO;
use stdClass;

class controlador_doc_extension extends system {

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){
        $modelo = new doc_extension(link: $link);
        $html_base = new html();
        $html = new doc_extension_html(html: $html_base);
        $obj_link = new links_menu($this->registro_id);
        parent::__construct(html:$html, link: $link,modelo:  $modelo, obj_link: $obj_link, paths_conf: $paths_conf);

        $this->titulo_lista = 'Extension';

    }



}
