<?php
/**
 * Obtiene el nombre del archivo basado en la url en ejecucion
 * @return string
 */

function get_landing_url():string{
    return $_SERVER["REQUEST_URI"];
}

function limpia_url_landing($url_landing):string{
    return basename($url_landing);
}

function quitar_php ($url_landing_limpia):string{
    $url_landing_limpia = str_replace('vista-impresion-', '', $url_landing_limpia);
    return basename($url_landing_limpia,  '.php');
}

function regenera_ruta($landing_name):string{
    return str_replace('-', '_', $landing_name);
}