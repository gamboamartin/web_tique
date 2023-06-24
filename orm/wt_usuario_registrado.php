<?php
namespace models;
use base\orm\modelo;
use PDO;

class wt_usuario_registrado extends modelo{
    public function __construct(PDO $link){
        $tabla = __CLASS__;
        $columnas = array($tabla=>false);
        $no_duplicados[] = 'codigo';
        parent::__construct(link: $link,tabla:  $tabla,columnas: $columnas, no_duplicados: $no_duplicados);
    }
}