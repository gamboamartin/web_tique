<?php
namespace gamboamartin\controllers;
use base\controller\controlador_base;
use models\wt_usuario_registrado;


class controlador_wt_usuario_registrado extends controlador_base{
    public function __construct($link){
        $modelo = new wt_usuario_registrado($link);
        parent::__construct($link, $modelo);
    }
}