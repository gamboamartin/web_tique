<?php
namespace models;
use base\orm\modelo;
use gamboamartin\empleado\models\em_empleado;
use gamboamartin\errores\errores;
use PDO;

class im_conf_pres_empresa extends modelo{
    public function __construct(PDO $link){
        $tabla = __CLASS__;
        $columnas = array($tabla=>false, 'org_empresa'=>$tabla, 'im_conf_prestaciones'=>$tabla);
        $campos_obligatorios = array();

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);
    }

    public function obten_configuraciones_empresa(int $em_empleado_id){
        $org_empresa = (new em_empleado($this->link))->get_empresa(em_empleado_id: $em_empleado_id);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al obtener registro empresa', data: $org_empresa);
        }

        $filtro['org_empresa.id'] = $org_empresa['org_empresa_id'];
        $r_conf_prestaciones = $this->filtro_and(filtro: $filtro);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al obtener registro configuracion', data: $r_conf_prestaciones);
        }

        return $r_conf_prestaciones->registros;
    }
}