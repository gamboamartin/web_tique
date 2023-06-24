<?php
namespace gamboamartin\direccion_postal\models;
use base\orm\modelo;
use PDO;

class dp_pais extends modelo{
    public function __construct(PDO $link){
        $tabla = 'dp_pais';
        $columnas = array($tabla=>false);
        $campos_obligatorios[] = 'descripcion';
        $campos_obligatorios[] = 'descripcion_select';

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);
    }

}