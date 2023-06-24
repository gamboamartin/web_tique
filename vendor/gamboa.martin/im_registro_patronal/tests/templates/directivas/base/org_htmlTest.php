<?php
namespace tests\links\secciones;

use gamboamartin\errores\errores;
use gamboamartin\template_1\html;
use gamboamartin\test\liberator;
use gamboamartin\test\test;

use html\base\org_html;
use html\org_empresa_html;
use JsonException;
use stdClass;


class org_htmlTest extends test {
    public errores $errores;
    private stdClass $paths_conf;
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->errores = new errores();
    }

    /**
     */
    public function test_selects_alta(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'cat_sat_tipo_persona';
        $_GET['accion'] = 'lista';
        $_SESSION['grupo_id'] = 1;
        $_GET['session_id'] = '1';
        $html_ = new html();
        $html = new org_html($html_);
        $html = new liberator($html);

        $resultado = $html->selects_alta(array(),$this->link);

        $this->assertIsObject($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase("<div class='control-group col-sm-6'><label class='control-label' ", $resultado->dp_pais_id);
        $this->assertStringContainsStringIgnoringCase(" for='dp_estado_id'>Estado<", $resultado->dp_estado_id);
        $this->assertStringContainsStringIgnoringCase("p_municipio_id'>Municipio</label><d", $resultado->dp_municipio_id);
        $this->assertStringContainsStringIgnoringCase("'dp_cp_id'>CP</label", $resultado->dp_cp_id);
        $this->assertStringContainsStringIgnoringCase("='control-label' for='dp_colonia_postal_id", $resultado->dp_colonia_postal_id);
        $this->assertStringContainsStringIgnoringCase("ass='control-label' for='dp_calle_pertene", $resultado->dp_calle_pertenece_id);


        errores::$error = false;
    }


}

