<?php

use src\notificacion;

require 'vendor/autoload.php';

$notificacion = new notificacion();

$contenido = new stdClass();
$contenido->subject = 'Esto es una prueba';
$contenido->mensaje = 'Esto es una prueba del mensaje';

$destinatario = new stdClass();
$destinatario->email = 'ivan.avelar00@gmail.com';
$destinatario->name = 'Ivan Avelar';
$envia = $notificacion->envia(contenido: $contenido,destinatario:  $destinatario);
if(gamboamartin\errores\errores::$error){
    $error = (new gamboamartin\errores\errores())->error(mensaje: 'Error',data:  $envia);
    print_r($error);
    die('Error');
}
var_dump($envia);