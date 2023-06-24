<?php
namespace tests\controllers;

use gamboamartin\errores\errores;
use gamboamartin\organigrama\controllers\controlador_adm_session;
use gamboamartin\test\test;

use stdClass;

class controlador_adm_sessionTest extends test {
    public errores $errores;
    private stdClass $paths_conf;
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->errores = new errores();
        $this->paths_conf = new stdClass();
        $this->paths_conf->generales = '/var/www/html/organigrama/config/generales.php';
        $this->paths_conf->database = '/var/www/html/organigrama/config/database.php';
        $this->paths_conf->views = '/var/www/html/organigrama/config/views.php';


    }

    /**
     */
    public function test_denegado(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'org_empresa';
        $_GET['accion'] = 'ubicacion';

        $_SESSION['grupo_id'] = 1;
        $_GET['session_id'] = '1';
        $_SESSION['usuario_id'] = '2';
        $ctl = new controlador_adm_session(link: $this->link, paths_conf: $this->paths_conf);

        $resultado = $ctl->denegado(false);

        $this->assertIsarray($resultado);
        $this->assertNotTrue(errores::$error);

        errores::$error = false;
    }


}

