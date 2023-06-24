<?php
namespace models;
use base\orm\modelo;
use PDO;

class cat_sat_isr extends modelo{
    public function __construct(PDO $link){
        $tabla = __CLASS__;
        $columnas = array($tabla=>false, 'cat_sat_periodicidad_pago_nom'=>$tabla);
        $campos_obligatorios[] = 'codigo';
        $campos_obligatorios[] = 'descripcion';
        $campos_obligatorios[] = 'descripcion_select';
        $campos_obligatorios[] = 'alias';
        $campos_obligatorios[] = 'codigo_bis';
        $campos_obligatorios[] = 'limite_inferior';
        $campos_obligatorios[] = 'limite_superior';
        $campos_obligatorios[] = 'cuota_fija';
        $campos_obligatorios[] = 'porcentaje_excedente';
        $campos_obligatorios[] = 'cat_sat_periodicidad_pago_nom_id';

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);
    }
}