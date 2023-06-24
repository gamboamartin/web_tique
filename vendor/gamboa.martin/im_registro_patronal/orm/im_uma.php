<?php
namespace models;
use base\orm\modelo;
use gamboamartin\errores\errores;
use PDO;
use stdClass;

class im_uma extends modelo{
    public function __construct(PDO $link){
        $tabla = __CLASS__;
        $columnas = array($tabla=>false);
        $campos_obligatorios = array("fecha_inicio","fecha_fin");

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);
    }

    public function alta_bd(): array|stdClass
    {
        if(!isset($this->registro['codigo_bis'])){
            $this->registro['codigo_bis'] = strtoupper($this->registro['codigo']);
        }

        if(!isset($this->registro['descripcion_select'])){
            $this->registro['descripcion_select'] = $this->registro['descripcion'];
            $this->registro['descripcion_select'] .= $this->registro['codigo'];
        }
        if(!isset($this->registro['alias'])){
            $this->registro['alias'] = strtoupper($this->registro['descripcion_select']);
        }

        $r_alta_bd = parent::alta_bd();
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al dar de alta tipo salario minimo',data: $r_alta_bd);
        }
        return $r_alta_bd;
    }

    public function get_uma(string $fecha): array|stdClass
    {
        $filtro_rango[$fecha]['valor1'] = 'im_uma.fecha_inicio';
        $filtro_rango[$fecha]['valor2'] = 'im_uma.fecha_fin';
        $filtro_rango[$fecha]['valor_campo'] = true;

        $order = array('im_uma.fecha_inicio'=>'DESC');

        $uma = ($this)->filtro_and(filtro_rango: $filtro_rango, limit: 1, order: $order);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al obtener uma', data: $uma);
        }
        print_r($uma);

        return $uma;
    }
}