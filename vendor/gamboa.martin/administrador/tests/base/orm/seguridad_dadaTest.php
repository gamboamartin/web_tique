<?php
namespace tests\base\orm;

use base\orm\seguridad_dada;
use base\orm\sql_bass;
use gamboamartin\errores\errores;

use gamboamartin\test\liberator;
use gamboamartin\test\test;
use models\adm_seccion;

class seguridad_dadaTest extends test {
    public errores $errores;
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->errores = new errores();
    }

    public function test_filtro_seguridad(): void
    {
        errores::$error = false;
        $seg = new seguridad_dada();
        $seg = new liberator($seg);

        $_SESSION['usuario_id'] = 2;
        $modelo = new adm_seccion($this->link);
        $resultado = $seg->filtro_seguridad($modelo);

        $this->assertIsArray( $resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEmpty($resultado);

        errores::$error = false;
    }


}