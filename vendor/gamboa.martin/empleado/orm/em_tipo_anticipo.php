<?php
namespace gamboamartin\empleado\models;
use base\orm\modelo;
use DateTime;
use gamboamartin\errores\errores;
use gamboamartin\organigrama\models\org_puesto;
use models\cat_sat_tipo_jornada_nom;
use models\cat_sat_tipo_regimen_nom;
use models\im_conf_pres_empresa;
use models\im_detalle_conf_prestaciones;
use models\im_registro_patronal;
use models\cat_sat_regimen_fiscal;
use models\dp_calle_pertenece;
use PDO;
use stdClass;

class em_tipo_anticipo extends modelo{

    public function __construct(PDO $link){
        $tabla = 'em_tipo_anticipo';
        $columnas = array($tabla=>false);
        $campos_obligatorios = array('descripcion','codigo','descripcion_select','alias','codigo_bis');

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);

        $this->NAMESPACE = __NAMESPACE__;
    }
}