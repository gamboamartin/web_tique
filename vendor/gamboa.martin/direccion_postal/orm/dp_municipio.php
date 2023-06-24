<?php
namespace gamboamartin\direccion_postal\models;
use base\orm\modelo;
use PDO;

class dp_municipio extends modelo{
    public function __construct(PDO $link){
        $tabla = 'dp_municipio';
        $columnas = array($tabla=>false,'dp_estado'=>$tabla,'dp_pais'=>'dp_estado');
        $campos_obligatorios[] = 'descripcion';
        $campos_obligatorios[] = 'descripcion_select';
        $campos_obligatorios[] = 'dp_estado_id';

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);
    }
}