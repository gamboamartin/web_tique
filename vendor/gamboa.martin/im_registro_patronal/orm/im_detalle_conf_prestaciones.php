<?php
namespace models;
use base\orm\modelo;
use gamboamartin\errores\errores;
use PDO;

class im_detalle_conf_prestaciones extends modelo{
    public function __construct(PDO $link){
        $tabla = __CLASS__;
        $columnas = array($tabla=>false, 'im_conf_prestaciones'=>$tabla);
        $campos_obligatorios = array('im_conf_prestaciones_id','n_year','n_dias','n_dias_vacaciones','n_dias_aguinaldo');

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);
    }

    public function obten_detalle_conf(int $im_conf_prestaciones_id){
        if ($im_conf_prestaciones_id <= 0) {
            return $this->error->error(mensaje: 'Error al obtener im_conf_prestaciones_id es 0',
                data: $im_conf_prestaciones_id);
        }

        $filtro['im_conf_prestaciones.id'] = $im_conf_prestaciones_id;
        $r_detalle_conf_pres = $this->filtro_and(filtro: $filtro);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al obtener registro empresa', data: $r_detalle_conf_pres);
        }

        return $r_detalle_conf_pres->registros;
    }
}