<?php
include "init.php";
use base\conexion;
use gamboamartin\errores\errores;
use models\adm_dia;
use models\wt_usuario_registrado;

require 'vendor/autoload.php';

$conexion = new conexion();
$wt_usuario_registrado_modelo = new wt_usuario_registrado($conexion::$link);
//$adm_dia_modelo = new adm_dia($conexion::$link);


$_SESSION['usuario_id'] = '2';


//Mostrar registros

$r_adm_dia = $wt_usuario_registrado_modelo->registros();

print_r($r_adm_dia);

var_dump($r_adm_dia);


//insertar
/*
$dia = array();
$dia['descripcion'] = '37';
$dia['codigo'] = '37';

$r_adm_dia = $adm_dia_modelo->alta_registro($dia);

print_r($r_adm_dia);

var_dump($r_adm_dia);

*/

//baja
/*
$r_adm_dia = $adm_dia_modelo->elimina_bd(36);
print_r($r_adm_dia);

var_dump($r_adm_dia);
*/

//modifica
/*
$dia = array();
$dia['id'] = '35';
$dia['descripcion'] = '35';
$dia['codigo'] = '35';
$adm_dia_modelo->usuario_id = $_SESSION['usuario_id'];
$r_adm_dia = $adm_dia_modelo->modifica_bd($dia,44);
print_r($r_adm_dia);

var_dump($r_adm_dia);
*/
/*
$wt_usuario_registrado_ins = array();
$wt_usuario_registrado_ins['codigo'] = 1;
$wt_usuario_registrado_ins['nombre'] = 'Ivan';
$wt_usuario_registrado_ins['primer_apellido'] = 'Avelar';
$wt_usuario_registrado_ins['user'] = 'ivan';
$wt_usuario_registrado_ins['pass'] = 'avelar';
$wt_usuario_registrado_ins['cp_pais_id'] = 1;
$wt_usuario_registrado_ins['cp_estado_id'] = 1;
$wt_usuario_registrado_ins['cp_municipio_id'] = 1;
$wt_usuario_registrado_ins['cp_id'] = 1;
$wt_usuario_registrado_ins['colonia'] = 1;
$wt_usuario_registrado_ins['numero_exterior'] = 1;
$wt_usuario_registrado_ins['telefono'] = '3315727575';

$r_wt_usuario_registrado_alta = $wt_usuario_registrado_modelo->alta_registro(registro: $wt_usuario_registrado_ins);
if(errores::$error){
    $error = (new errores())->error(mensaje: 'Error al insertar ', data: $r_wt_usuario_registrado_alta);
    print_r($error);
    exit;
}

print_r($r_wt_usuario_registrado_alta);
*/
//print_r($r_wt_usuario_registrado);

//var_dump($r_wt_usuario_registrado);

