<?php
namespace models;
use base\orm\modelo;
use PDO;

class com_tipo_producto extends modelo{
    public function __construct(PDO $link){
        $tabla = __CLASS__;
        $columnas = array($tabla=>false,'cat_sat_moneda'=>$tabla,'dp_pais'=>'cat_sat_moneda');
        $campos_obligatorios = array('cat_sat_moneda_id');

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);
    }
}