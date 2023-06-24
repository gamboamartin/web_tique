<?php
namespace gamboamartin\documento\controllers;

use base\controller\controlador_base;
use models\doc_tipo_documento;

class controlador_doc_tipo_documento extends controlador_base{
    public function __construct($link){
        $modelo = new doc_tipo_documento($link);
        parent::__construct($link, $modelo);
    }
}