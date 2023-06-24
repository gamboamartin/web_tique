<?php
namespace models;
use base\orm\modelo;
use gamboamartin\errores\errores;
use PDO;
use stdClass;

class wt_hogar extends modelo{
    public function __construct(PDO $link){
        $tabla = __CLASS__;
        $columnas = array($tabla=>false, 'wt_proposito'=>$tabla, 'wt_tipo_inmueble'=>$tabla);
        $campos_obligatorios = array('wt_proposito_id', 'wt_tipo_inmueble_id');

        $no_duplicados = array();


        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas,no_duplicados: $no_duplicados);
    }

    public function obtener_registro_wt_hogar(string $landing_url): array{
        $wt_hogar_url_buscado['url'] = $landing_url;

        $r_wt_hogar = $this->filtro_and(filtro: $wt_hogar_url_buscado, tipo_filtro: 'textos');
        if(errores::$error){
            $error = (new errores())->error(mensaje: 'Error al obtener registro hogar con url busca',data:  $r_wt_hogar);
            print_r($error);
            die('Error');
        }

        $wt_hogar = array();
        if(isset($r_wt_hogar->registros_obj) && count($r_wt_hogar->registros_obj) > 0){
            $wt_hogar_id = $r_wt_hogar->registros_obj[0]->wt_hogar_id;
            if(errores::$error){
                $error = (new errores())->error(mensaje: 'Error al obtener id hogar',data:  $wt_hogar_id);
                print_r($error);
                die('Error');
            }

            $wt_hogar = $this->registro(registro_id: $wt_hogar_id);
            if(errores::$error){
                $error = (new errores())->error(mensaje: 'Error al obtener hogar',data:  $wt_hogar);
                print_r($error);
                die('Error');
            }
        }
        return $wt_hogar;
    }

}