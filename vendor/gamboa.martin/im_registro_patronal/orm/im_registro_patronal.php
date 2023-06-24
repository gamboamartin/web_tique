<?php
namespace models;
use base\orm\modelo;
use PDO;

class im_registro_patronal extends modelo{
    public function __construct(PDO $link){
        $tabla = __CLASS__;
        $columnas = array($tabla=>false, 'fc_csd' => $tabla, 'org_sucursal' => 'fc_csd',
            'org_empresa' => 'org_sucursal','im_clase_riesgo' => $tabla,'dp_calle_pertenece'=>'org_sucursal',
            'dp_colonia_postal'=>'dp_calle_pertenece','dp_cp'=>'dp_colonia_postal',
            'cat_sat_regimen_fiscal'=>'org_empresa');
        $campos_obligatorios = array('im_clase_riesgo_id','fc_csd_id','descripcion_select');

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);
    }
}