<?php
namespace tests\links\secciones;

use gamboamartin\errores\errores;
use gamboamartin\template_1\html;

use gamboamartin\test\test;

use html\com_sucursal_html;

use stdClass;


class com_sucursal_htmlTest extends test {
    public errores $errores;
    private stdClass $paths_conf;
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->errores = new errores();
    }

    /**
     */
    public function test_select_com_sucursal_id(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'cat_sat_tipo_persona';
        $_GET['accion'] = 'lista';
        $_SESSION['grupo_id'] = 1;
        $_GET['session_id'] = '1';
        $html_ = new html();
        $html = new com_sucursal_html($html_);
        //$link = new liberator($link);

        $cols = 1;
        $id_selected = -1;
        $con_registros = -1;
        $link = $this->link;
        $resultado = $html->select_com_sucursal_id($cols, $con_registros, $id_selected, $link);


        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase("r='com_sucursal_id'>Sucursal", $resultado);

        errores::$error = false;



        $cols = 1;
        $id_selected = -1;
        $con_registros = -1;
        $link = $this->link;
        $label = 'x';
        $resultado = $html->select_com_sucursal_id($cols, $con_registros, $id_selected, $link, $label);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase("'control-label' for='com_sucursal_id'>x</label>", $resultado);

        errores::$error = false;
    }

}

