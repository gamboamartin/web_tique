<?php
namespace gamboamartin\documento\controllers;

use base\controller\controlador_base;
use models\doc_extension;

class controlador_doc_extension extends controlador_base{
    public function __construct($link){
        $modelo = new doc_extension($link);
        parent::__construct($link, $modelo);
    }
}