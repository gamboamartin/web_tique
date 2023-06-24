<?php
namespace tests\templates\directivas;


use gamboamartin\errores\errores;
use gamboamartin\template_1\html;
use gamboamartin\test\test;
use html\em_empleado_html;
use stdClass;


class em_empleado_htmlTest extends test {
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

    public function test_input_ap(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'cat_sat_tipo_persona';
        $_GET['accion'] = 'lista';
        $_SESSION['grupo_id'] = 1;
        $_SESSION['usuario_id'] = 2;
        $_GET['session_id'] = '1';

        $html = new html();
        $html = new em_empleado_html($html);

        //$html = new liberator($html);

        $cols = 1;
        $row_upd = new stdClass();
        $value_vacio = false;
        $resultado = $html->input_ap($cols, $row_upd, $value_vacio);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div class='control-group col-sm-1'><label class='control-label' for='ap'>Apellido paterno</label><div class='controls'><input type='text' name='ap' value='' class='form-control'  required id='ap' placeholder='Apellido paterno' /></div></div>", $resultado);

        errores::$error = false;
    }


    public function test_input_nombre(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'cat_sat_tipo_persona';
        $_GET['accion'] = 'lista';
        $_SESSION['grupo_id'] = 1;
        $_SESSION['usuario_id'] = 2;
        $_GET['session_id'] = '1';

        $html = new html();
        $html = new em_empleado_html($html);

        //$html = new liberator($html);

        $cols = 1;
        $row_upd = new stdClass();
        $value_vacio = false;
        $resultado = $html->input_nombre($cols, $row_upd, $value_vacio);

        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div class='control-group col-sm-1'><label class='control-label' for='nombre'>Nombre</label><div class='controls'><input type='text' name='nombre' value='' class='form-control'  required id='nombre' placeholder='Nombre' /></div></div>", $resultado);

        errores::$error = false;
    }

    public function test_select_em_empleado_id(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'cat_sat_tipo_persona';
        $_GET['accion'] = 'lista';
        $_SESSION['grupo_id'] = 1;
        $_SESSION['usuario_id'] = 2;
        $_GET['session_id'] = '1';

        $html = new html();
        $html = new em_empleado_html($html);

        //$html = new liberator($html);

        $cols = 1;
        $con_registros = false;
        $id_selected = -1;
        $link = $this->link;
        $resultado = $html->select_em_empleado_id($cols, $con_registros, $id_selected, $link);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase("l' for='em_empleado_id'>Empleado</label><div class=", $resultado);

        errores::$error = false;
    }





}

