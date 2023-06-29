<?php
use src\notificacion;
use config\generales;
require 'vendor/autoload.php';
$generales = new generales();


if(isset($_POST['mail'])) {//si la variable 'mail' no esta vacía, podemos entrar al if
// (esta información se obtiene del método post del formulario compramos_hogar.php

    $notificacion = new notificacion();//se declara nueva notificación
    $data = '<h3>Nombre: ' . utf8_decode($_POST['name']). '</h3><br><h3>'.utf8_decode("Teléfono").': ' . utf8_decode($_POST['phone']) . '</h3><br><h3>E-mail: ' . utf8_decode($_POST['mail']) . '</h3><br><h3>Mensaje: ' . utf8_decode($_POST['message']);
    //se almacenan los datos enviados por el post del formulario compramos_hogar.php
    $contenido = new stdClass();// se genera una nueva stdClass
    $contenido->subject = 'Requiero informacion acerca de'. $_POST['hogar'];
    //asunto de la notificación
    $contenido->mensaje = $data;//contenido de la notificación

    $destinatario = new stdClass();// se genera una nueva stdClass
    $destinatario->email = 'alejandro.esquivel@inmobiliariatique.com';
    //correo de la persona a la cual se le enviará la notificación
    $destinatario->name = 'Alejandro Esquivel';
    //nombre de la persona a la cual se le enviará la notificación
    // (dueñ@ del email o correo proporcionado en la anterior línea de código)
    $envia = $notificacion->envia(contenido: $contenido,destinatario:  $destinatario);
    //se envía el correo o notificación con las variables $contenido y $destinatario
    if(gamboamartin\errores\errores::$error){
        $error = (new gamboamartin\errores\errores())->error(mensaje: 'Error',data:  $envia);
        print_r($error);
        die('Error');
    }
    // si hay algún error al enviar la notificación, se verá un mensaje, el cual describa cuál fue el error al enviar la notificación
    header('Location:' . $generales->url_base . 'hogares/'.$_POST['url_redireccion']);
    //si se envía exitosamente la notificación nos redirigiremos a la url_redireccion la cual también la obtendremos del formulario compremos_hogar.php
}