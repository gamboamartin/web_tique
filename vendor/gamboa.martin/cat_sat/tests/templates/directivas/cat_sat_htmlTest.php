<?php
namespace tests\controllers;

use controllers\controlador_cat_sat_tipo_persona;
use gamboamartin\errores\errores;
use gamboamartin\template_1\html;
use gamboamartin\test\liberator;
use gamboamartin\test\test;
use html\cat_sat_html;
use html\cat_sat_regimen_fiscal_html;
use JsonException;
use links\secciones\link_cat_sat_regimen_fiscal;
use stdClass;


class cat_sat_htmlTest extends test {
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

    /**
     */
    public function test_input_n_dias(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'cat_sat_tipo_persona';
        $_GET['accion'] = 'lista';
        $_SESSION['grupo_id'] = 1;
        $_GET['session_id'] = '1';
        $html_ = new html();
        $html = new cat_sat_html($html_);
       // $link = new liberator($link);

        $cols = 1;
        $row_upd = new stdClass();
        $value_vacio = false;

        $resultado = $html->input_n_dias($cols, $row_upd, $value_vacio);


        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div class='control-group col-sm-1'><label class='control-label' for='n-dias'>Numero dias</label><div class='controls'><input type='text' name='n-dias' value='' class='form-control'  required id='n-dias' placeholder='Numero dias' /></div></div>", $resultado);


        errores::$error = false;
    }







}

