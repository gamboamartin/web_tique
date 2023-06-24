<?php
namespace gamboamartin\documento\controllers;

use base\controller\controlador_base;
use models\doc_extension_permitido;

class controlador_doc_extension_permitido extends controlador_base{
    public function __construct($link){
        $modelo = new doc_extension_permitido($link);
        parent::__construct($link, $modelo);
    }
}