<?php
namespace gamboamartin\organigrama\models;
use base\orm\modelo;
use PDO;

class org_empresa_clasificada extends modelo{
    public function __construct(PDO $link){
        $tabla = 'org_empresa_clasificada';
        $columnas = array($tabla=>false);
        $campos_obligatorios = array();

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);
    }
}