<?php
namespace tests\links\secciones;

use gamboamartin\errores\errores;
use gamboamartin\template_1\html;
use gamboamartin\test\liberator;
use gamboamartin\test\test;

use html\org_empresa_html;
use JsonException;
use stdClass;


class org_empresa_htmlTest extends test {
    public errores $errores;
    private stdClass $paths_conf;
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->errores = new errores();
    }

    /**
     */
    public function test_btn_next_action(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'cat_sat_tipo_persona';
        $_GET['accion'] = 'lista';
        $_SESSION['grupo_id'] = 1;
        $_GET['session_id'] = '1';
        $html_ = new html();
        $html = new org_empresa_html($html_);
        $html = new liberator($html);

        $label = 'a';
        $value = 'b';

        $resultado = $html->btn_next_action($label, $value);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div class='col-md-6'><button type='submit' class='btn btn-info btn-guarda col-md-12' name='btn_action_next' value='b'>a</button></div>", $resultado);

        errores::$error = false;
    }

    /**
     */
    public function test_input_codigo(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'cat_sat_tipo_persona';
        $_GET['accion'] = 'lista';
        $_SESSION['grupo_id'] = 1;
        $_GET['session_id'] = '1';
        $html_ = new html();
        $html = new org_empresa_html($html_);
        //$link = new liberator($link);

        $cols = 1;
        $row_upd = new stdClass();
        $value_vacio = false;
        $resultado = $html->input_codigo($cols, $row_upd, $value_vacio);

        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div class='control-group col-sm-1'><label class='control-label' for='codigo'>Código</label><div class='controls'><input type='text' name='codigo' value='' class='form-control'  required id='codigo' placeholder='Código' /></div></div>", $resultado);


        errores::$error = false;
    }

    /**
     */
    public function test_select_org_empresa_id(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'cat_sat_tipo_persona';
        $_GET['accion'] = 'lista';
        $_SESSION['grupo_id'] = 1;
        $_GET['session_id'] = '1';
        $html_ = new html();
        $html = new org_empresa_html($html_);
        //$link = new liberator($link);

        $cols = 2;
        $con_registros = false;
        $id_selected = -1;
        $disabled = false;
        $resultado = $html->select_org_empresa_id($cols, $con_registros, $id_selected, $this->link, $disabled);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase("<div class='control-group col-sm-2'><label class='control-label' for='org_empresa_id'>Empresa", $resultado);

        errores::$error = false;
    }







}

