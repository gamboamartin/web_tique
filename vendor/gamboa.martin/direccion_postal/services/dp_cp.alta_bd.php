<?php

include "../init.php";
require '../vendor/autoload.php';

$_SESSION['usuario_id'] = 2;

use base\orm\modelo_base;
use config\database;
use gamboamartin\errores\errores;
use gamboamartin\services\error_write\error_write;
use gamboamartin\services\services;


$services = new services(path: __FILE__);

$info = '';
$tabla = 'dp_cp';

$db = new database();


$data_local = $services->data_conexion_local(name_model: $tabla);
if(errores::$error){
    return $this->error->error(mensaje: 'Error al obtener datos de conexion local',data:  $data_local);
}


$valida = $services->valida_init_services(data_local: $data_local, db: $db,tabla:  $tabla);
if(errores::$error){
    $error = (new errores())->error('Error comparar datos ', $valida);
    (new error_write())->out(error: $error,info:  $info,path_info:  $services->name_files->path_info);
}

$modelo_local = (new modelo_base(link: $data_local->link))->genera_modelo(modelo: $tabla);
if(errores::$error){
    $error = (new errores())->error(mensaje: 'Error al generar modelo',data:  $modelo_local);
    (new error_write())->out(error: $error,info:  $info,path_info:  $services->name_files->path_info);
}


$offset = 0;
$order[$tabla.'.id'] = 'DESC';

$r_modelo_local = $modelo_local->filtro_and(columnas_en_bruto: true, limit: 0,offset: $offset, order: $order);
if(errores::$error){
    $error = (new errores())->error('Error al obtener datos locales', $r_modelo_local);
    (new error_write())->out(error: $error,info:  $info,path_info:  $services->name_files->path_info);
}

$registros = $r_modelo_local->registros;

foreach ($db->servers_in_data as $database){


    $insersiones_data = $services->alta_por_host(database: $database, registros: $registros,tabla:  $tabla);
    if(errores::$error){
        $error = (new errores())->error(mensaje: 'Error al insertar registro', data: $insersiones_data);
        (new error_write())->out(error: $error,info:  $info,path_info:  $services->name_files->path_info);
    }

}

$services->finaliza_servicio();