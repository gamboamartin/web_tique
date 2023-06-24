<?php
namespace tests\links\secciones;

use gamboamartin\errores\errores;
use gamboamartin\template_1\html;
use gamboamartin\test\test;
use html\dp_estado_html;
use stdClass;


class dp_estado_htmlTest extends test {
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
    public function test_select_dp_estado_id(): void
    {
        errores::$error = false;
        $_GET['session_id'] = 1;
        $_GET['seccion'] = 'dp_estado';
        $html = new html();
        $dir = new dp_estado_html($html);

        $cols = 1;
        $con_registros = false;
        $id_selected = -1;
        $resultado = $dir->select_dp_estado_id($cols, $con_registros, $id_selected, $this->link);

        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div class='control-group col-sm-1'><label class='control-label' for='dp_estado_id'>Estado</label><div class='controls'><select class='form-control selectpicker color-secondary dp_estado_id' id='dp_estado_id' name='dp_estado_id'  ><option value=''  >Selecciona una opcion</option></select></div></div>",$resultado);


        errores::$error = false;
        $cols = 1;
        $con_registros = true;
        $id_selected = -1;
        $resultado = $dir->select_dp_estado_id($cols, $con_registros, $id_selected, $this->link);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase("<div class='control-group col-sm-1'><label class='control-label' for='dp_estado_id'>Estado</label><div class='controls'>",$resultado);

        errores::$error = false;
    }







}

