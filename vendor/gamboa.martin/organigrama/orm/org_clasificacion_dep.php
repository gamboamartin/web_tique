<?php
namespace gamboamartin\organigrama\models;
use base\orm\modelo;

use PDO;

class org_clasificacion_dep extends modelo{
    public function __construct(PDO $link){
        $tabla = 'org_clasificacion_dep';
        $columnas = array($tabla=>false);

        $campos_obligatorios = array();
        $no_duplicados = array();
        $tipo_campos = array();

        parent::__construct(link: $link, tabla: $tabla, campos_obligatorios: $campos_obligatorios, columnas: $columnas,
            no_duplicados: $no_duplicados, tipo_campos: $tipo_campos);
    }

}