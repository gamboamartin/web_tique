<?php
namespace config;
class generales{
    public bool $muestra_index = true;
    public string $path_base;
    public string $session_id = '';
        public string $sistema = 'web_tique';
    public string $url_base = 'http://localhost/web_tique/';
    public array $secciones = array();
    public bool $encripta_md5 = false;
    public bool $aplica_seguridad = true;
    public array $defaults ;

    public function __construct(){
        //$this->path_base = getcwd();
        $this->path_base = '/var/www/html/web_tique/';
        if(isset($_GET['session_id'])){
            $this->session_id = $_GET['session_id'];
        }
        $this->defaults['dp_pais']['id'] = 121;
        $this->defaults['dp_estado']['id'] = 1;
        $this->defaults['dp_municipio']['id'] = 1;
    }
}