<?php
namespace tests\links\secciones;

use gamboamartin\errores\errores;
use gamboamartin\organigrama\controllers\controlador_org_puesto;
use gamboamartin\template_1\html;
use gamboamartin\test\liberator;
use gamboamartin\test\test;

use html\org_empresa_html;
use html\org_puesto_html;
use html\org_tipo_empresa_html;
use JsonException;
use stdClass;


class org_puesto_htmlTest extends test {
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
    public function test_asigna_inputs(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'cat_sat_tipo_persona';
        $_GET['accion'] = 'lista';
        $_SESSION['grupo_id'] = 1;
        $_GET['session_id'] = '1';
        $html_ = new html();
        $html = new org_puesto_html($html_);
        $html = new liberator($html);

        $controler = new controlador_org_puesto(link: $this->link, paths_conf: $this->paths_conf);
        $inputs = new stdClass();
        $inputs->selects = new stdClass();
        $inputs->selects->org_empresa_id = 'x';
        $inputs->selects->org_tipo_puesto_id = 'x';
        $inputs->selects->org_departamento_id = 'x';
        $resultado = $html->asigna_inputs($controler, $inputs);

        $this->assertIsObject($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase("x", $resultado->select->org_departamento_id);

        errores::$error = false;
    }

}

