<?php
namespace gamboamartin\direccion_postal\tests\templates\directivas;

use gamboamartin\errores\errores;
use gamboamartin\template_1\html;
use gamboamartin\test\liberator;
use gamboamartin\test\test;
use html\dp_calle_pertenece_html;
use stdClass;


class dp_calle_pertenece_htmlTest extends test {
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
    public function test_entre_calles(): void
    {
        errores::$error = false;
        $_GET['session_id'] = 1;
        $_GET['seccion'] = 'dp_estado';
        $html = new html();
        $dir = new dp_calle_pertenece_html($html);
        $dir = new liberator($dir);

        $cols = 1;
        $con_registros = true;
        $id_selected = -1;
        $filtro = array();
        $name = '';
        $resultado = $dir->entre_calles(cols:$cols,con_registros: $con_registros,filtro:  $filtro,
            id_selected:  $id_selected,label:  'Entre Calle', link: $this->link,name:  $name);


        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase("ss='control-group col-sm-1'><label class='control-label' for='dp_calle_pertenece_id'>Entre Calle</lab",$resultado);
        $this->assertStringContainsStringIgnoringCase("ass='form-control selectpicker color-secondary dp_calle_pertenece_id'",$resultado);

        errores::$error = false;
        $_GET['session_id'] = 1;
        $_GET['seccion'] = 'dp_estado';


        $cols = 1;
        $con_registros = true;
        $id_selected = -1;
        $filtro = array();
        $name = 'xxx';
        $resultado = $dir->entre_calles(cols:$cols, con_registros:$con_registros,filtro: $filtro,
            id_selected:$id_selected,label:'xxx',link: $this->link,name: $name);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase("<div class='control-group col-sm-1'><label class='control-label' for='xxx'",$resultado);
        $this->assertStringContainsStringIgnoringCase(" color-secondary xxx' id='xxx' name='xxx'",$resultado);

        errores::$error = false;
    }

    public function test_select_dp_calle_pertenece_id(): void
    {
        errores::$error = false;
        $_GET['session_id'] = 1;
        $_GET['seccion'] = 'dp_estado';
        $html = new html();
        $dir = new dp_calle_pertenece_html($html);
        //$dir = new liberator($dir);

        $cols = 1;
        $con_registros = true;
        $id_selected = -1;

        $resultado = $dir->select_dp_calle_pertenece_id($cols, $con_registros, $id_selected, $this->link);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase(" class='control-label' for='dp_calle_pertenece_id'>Calle</label><div class='contr",$resultado);
        errores::$error = false;
    }







}

