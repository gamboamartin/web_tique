<?php
namespace models;
use base\orm\modelo;
use PDO;

class com_producto extends modelo{

    public function __construct(PDO $link){
        $tabla = __CLASS__;
        $columnas = array($tabla=>false,'cat_sat_factor'=>$tabla,'cat_sat_obj_imp'=>$tabla,'cat_sat_producto'=>$tabla,
            'cat_sat_unidad'=>$tabla,'cat_sat_tipo_factor'=>$tabla);
        $campos_obligatorios = array();

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);
    }
}