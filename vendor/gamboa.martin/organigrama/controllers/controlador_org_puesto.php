<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace gamboamartin\organigrama\controllers;

use gamboamartin\errores\errores;
use gamboamartin\organigrama\models\org_puesto;
use gamboamartin\system\links_menu;
use gamboamartin\system\system;
use gamboamartin\template\html;
use html\org_puesto_html;
use PDO;
use stdClass;

class controlador_org_puesto extends system {

    public function __construct(PDO $link, html $html = new \gamboamartin\template_1\html(),
                                stdClass $paths_conf = new stdClass()){

        $modelo = new org_puesto(link: $link);
        $html_ = new org_puesto_html($html);
        $obj_link = new links_menu($this->registro_id);
        parent::__construct(html:$html_, link: $link,modelo:  $modelo, obj_link: $obj_link, paths_conf: $paths_conf);

        $this->titulo_lista = 'Puestos';
    }

    public function alta(bool $header, bool $ws = false): array|string
    {
        $r_alta =  parent::alta(header: false); // TODO: Change the autogenerated stub
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al generar template',data:  $r_alta, header: $header,ws:$ws);
        }

        $keys_selects = array();
        $keys_selects['org_tipo_puesto_id'] = new stdClass();
        $keys_selects['org_tipo_puesto_id']->label = 'Tipo Puesto';

        $keys_selects['org_departamento_id'] = new stdClass();
        $keys_selects['org_departamento_id']->label = 'Departamento';

        $inputs = (new org_puesto_html(html: $this->html_base))->genera_inputs_alta(
            controler: $this, modelo: $this->modelo, link: $this->link,keys_selects: $keys_selects);
        if(errores::$error){
            $error = $this->errores->error(mensaje: 'Error al generar inputs',data:  $inputs);
            print_r($error);
            die('Error');
        }
        return $r_alta;
    }

    public function modifica(bool $header, bool $ws = false, string $breadcrumbs = '', bool $aplica_form = true,
                             bool $muestra_btn = true): array|string
    {
        $r_modifica =  parent::modifica(header: false,aplica_form:  false);
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al generar template',data:  $r_modifica, header: $header,ws:$ws);
        }

        $inputs = (new org_puesto_html(html: $this->html_base))->inputs_org_puesto(controlador_org_puesto:$this);
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al inicializar inputs',data:  $inputs, header: $header,ws:$ws);
        }

        return $r_modifica;
    }
}
