<?php
namespace gamboamartin\direccion_postal\models;
use base\orm\modelo;
use PDO;

class dp_colonia_postal extends modelo{
    public function __construct(PDO $link){
        $tabla = 'dp_colonia_postal';
        $columnas = array($tabla=>false,'dp_cp'=>$tabla,'dp_colonia'=>$tabla,'dp_municipio'=>'dp_cp',
            'dp_estado'=>'dp_municipio','dp_pais'=>'dp_estado');
        $campos_obligatorios[] = 'descripcion';

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);
    }
}