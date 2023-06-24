<?php
namespace models;
use base\orm\modelo;
use PDO;

class cat_sat_subsidio extends modelo{

    public function __construct(PDO $link){
        $tabla = __CLASS__;
        $columnas = array($tabla=>false, 'cat_sat_periodicidad_pago_nom' => $tabla);
        $campos_obligatorios = array();

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);
    }
}