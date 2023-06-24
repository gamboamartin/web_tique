<?php
namespace gamboamartin\documento\controllers;

use base\controller\controlador_base;
use models\doc_version;

class controlador_doc_version extends controlador_base{
    public function __construct($link){
        $modelo = new doc_version($link);
        parent::__construct($link, $modelo);
    }
}