<?php
namespace tests\orm;

use gamboamartin\errores\errores;

use models\doc_extension;
use tests\base_test;


class doc_extensionTest extends base_test {
    public errores $errores;
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->errores = new errores();
    }

    public function test_doc_extension_id()
    {
        errores::$error = false;
        $tipo_doc = new doc_extension($this->link);
        //$inicializacion = new liberator($inicializacion);

        $extension = '';
        $resultado = $tipo_doc->doc_extension_id(extension: $extension);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error extension no puede venir vacia', $resultado['mensaje']);

        errores::$error = false;

        $elimina_extension = $this->elimina_extension();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al eliminar extension', data: $elimina_extension);
            print_r($error);
            die('Error');
        }


        $inserta_extension = $this->inserta_extension();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al insertar extension', data: $inserta_extension);
            print_r($error);
            die('Error');
        }

        $extension = 'pdf';
        $resultado = $tipo_doc->doc_extension_id(extension: $extension);

        $this->assertIsInt($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals('1', (string)$resultado);

        errores::$error = false;
    }
}

