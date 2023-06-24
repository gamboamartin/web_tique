<?php
namespace tests\controllers;

use controllers\controlador_cat_sat_tipo_persona;
use gamboamartin\errores\errores;
use gamboamartin\template\html;
use gamboamartin\test\liberator;
use gamboamartin\test\test;
use html\fc_factura_html;
use JsonException;
use models\adm_dia;

use models\fc_partida;
use stdClass;


class fc_factura_htmlTest extends test {
    public errores $errores;
    private stdClass $paths_conf;
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->errores = new errores();
        $this->paths_conf = new stdClass();
        $this->paths_conf->generales = '/var/www/html/cat_sat/config/generales.php';
        $this->paths_conf->database = '/var/www/html/cat_sat/config/database.php';
        $this->paths_conf->views = '/var/www/html/cat_sat/config/views.php';
    }

    public function test_valida_partida_alta(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'cat_sat_tipo_persona';
        $_GET['accion'] = 'lista';
        $_SESSION['grupo_id'] = 1;
        $_SESSION['usuario_id'] = 2;
        $_GET['session_id'] = '1';

        $html_ = new html();
        $html = new fc_factura_html($html_);


        $cols = 1;
        $row_upd = new stdClass();
        $row_upd->exportacion = '1';
        $resultado = $html->select_exportacion($cols, $row_upd);

        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase("ortacion' id='exportacion' name='exportacion", $resultado);
        errores::$error = false;


    }


}

