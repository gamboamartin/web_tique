<?php
namespace models;


use base\orm\modelo;
use PDO;

class adm_tipo_dato extends modelo{
    public function __construct(PDO $link){
        $tabla = __CLASS__;
        $columnas = array($tabla=>false);
        parent::__construct(link: $link, tabla: $tabla,columnas: $columnas);
    }
}