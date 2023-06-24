<?php
namespace gamboamartin\direccion_postal\models;
use base\orm\modelo;
use PDO;

class dp_cp extends modelo{
    public function __construct(PDO $link){
        $tabla = 'dp_cp';
        $columnas = array($tabla=>false,'dp_municipio'=>$tabla,'dp_estado'=>'dp_municipio','dp_pais'=>'dp_estado');
        $campos_obligatorios[] = 'descripcion';
        $campos_obligatorios[] = 'descripcion_select';

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);
    }
}