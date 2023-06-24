<?php
namespace gamboamartin\organigrama\models;
use base\orm\modelo;
use PDO;

class org_porcentaje_act_economica extends modelo{
    public function __construct(PDO $link){
        $tabla = 'org_porcentaje_act_economica';
        $columnas = array($tabla=>false,'org_empresa'=>$tabla,'cat_sat_actividad_economica'=>$tabla);
        $campos_obligatorios = array();

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);
    }
}