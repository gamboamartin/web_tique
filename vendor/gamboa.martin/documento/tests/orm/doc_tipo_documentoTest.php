<?php
namespace tests\orm;

use gamboamartin\errores\errores;
use gamboamartin\test\liberator;
use models\doc_tipo_documento;
use tests\base_test;


class doc_tipo_documentoTest extends base_test {
    public errores $errores;
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->errores = new errores();
    }

    public function test_es_extension_permitida()
    {
        errores::$error = false;
        $tipo_doc = new doc_tipo_documento($this->link);
        $tipo_doc = new liberator($tipo_doc);

        $extension = '';
        $extensiones_permitidas = array();
        $resultado = $tipo_doc->es_extension_permitida(extension: $extension,
            extensiones_permitidas: $extensiones_permitidas);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error extension no puede venir vacio', $resultado['mensaje']);

        errores::$error = false;

        $inserta_extension = $this->inserta_extension();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al insertar extension', data: $inserta_extension);
            print_r($error);
            die('Error');
        }

        $extension = 'pdf';
        $extensiones_permitidas = array();
        $resultado = $tipo_doc->es_extension_permitida(extension: $extension,
            extensiones_permitidas: $extensiones_permitidas);
        $this->assertIsBool($resultado);
        $this->assertNotTrue(errores::$error);

        errores::$error = false;
    }
}

