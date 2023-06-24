<?php
namespace tests\templates\directivas;



use gamboamartin\empleado\controllers\controlador_em_cuenta_bancaria;
use gamboamartin\errores\errores;
use gamboamartin\template_1\html;
use gamboamartin\test\liberator;
use gamboamartin\test\test;
use html\em_empleado_html;
use stdClass;


class em_htmlTest extends test {
    public errores $errores;
    private stdClass $paths_conf;
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->errores = new errores();
        $this->paths_conf = new stdClass();
        $this->paths_conf->generales = '/var/www/html/empleado/config/generales.php';
        $this->paths_conf->database = '/var/www/html/empleado/config/database.php';
        $this->paths_conf->views = '/var/www/html/empleado/config/views.php';
    }


    public function test_asigna_inputs_base(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'cat_sat_tipo_persona';
        $_GET['accion'] = 'lista';
        $_SESSION['grupo_id'] = 1;
        $_SESSION['usuario_id'] = 2;
        $_GET['session_id'] = '1';

        $html = new html();
        $html = new em_empleado_html($html);

        $html = new liberator($html);

        $controler = new controlador_em_cuenta_bancaria(link: $this->link,paths_conf:$this->paths_conf);

        $inputs = new stdClass();
        $inputs->selects = new stdClass();
        $inputs->texts = new stdClass();
        $inputs->selects->bn_sucursal_id = 'x';
        $inputs->selects->em_empleado_id = 'x';
        $inputs->texts->num_cuenta = 'x';
        $inputs->texts->clabe = 'x';

        $resultado = $html->asigna_inputs_base($controler, $inputs);


        $this->assertIsObject($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("x", $resultado->select->em_empleado_id);

        errores::$error = false;
    }





}

