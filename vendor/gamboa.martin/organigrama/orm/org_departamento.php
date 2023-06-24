<?php
namespace gamboamartin\organigrama\models;
use base\orm\modelo;

use PDO;

class org_departamento extends modelo{
    public function __construct(PDO $link){
        $tabla = 'org_departamento';
        $columnas = array($tabla=>false, 'org_empresa'=>$tabla,'org_clasificacion_dep'=>$tabla);

        $campos_obligatorios = array('org_clasificacion_dep_id');
        $no_duplicados = array();
        $tipo_campos = array();

        parent::__construct(link: $link, tabla: $tabla, campos_obligatorios: $campos_obligatorios, columnas: $columnas,
            no_duplicados: $no_duplicados, tipo_campos: $tipo_campos);
    }

}