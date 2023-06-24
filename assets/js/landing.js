"use strict";

function get_landing_url(){
    return window.location;
}

function limpia_url_landing(){
    var url_landing_limpia = window.location.pathname;
    return url_landing_limpia.replace('/web_tique/hogares/', '');
}

function quitar_php (url_landing_limpia){
    return url_landing_limpia.replace('.php', '');
}
