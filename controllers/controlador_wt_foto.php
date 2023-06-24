<?php
namespace gamboamartin\controllers;
use base\controller\controlador_base;
use models\wt_foto;
use models\wt_usuario_registrado;


class controlador_wt_foto extends controlador_base{
    public function __construct($link){
        $modelo = new wt_foto($link);
        parent::__construct($link, $modelo);
    }
}