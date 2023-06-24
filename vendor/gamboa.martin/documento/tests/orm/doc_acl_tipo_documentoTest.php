<?php
namespace tests\orm;

use gamboamartin\errores\errores;
use gamboamartin\test\test;
use models\doc_acl_tipo_documento;


class doc_acl_tipo_documentoTest extends test {
    public errores $errores;
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->errores = new errores();
    }

    public function test_tipo_documento_permiso()
    {
        errores::$error = false;
        $acl_tipo_doc = new doc_acl_tipo_documento($this->link);
        //$inicializacion = new liberator($inicializacion);

        $grupo_id = -1;
        $tipo_documento_id = 1;
        $resultado = $acl_tipo_doc->tipo_documento_permiso(grupo_id: $grupo_id, tipo_documento_id: $tipo_documento_id);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error grupo id no puede ser menor a 1', $resultado['mensaje']);

        errores::$error = false;

        $grupo_id = 1;
        $tipo_documento_id = -1;
        $resultado = $acl_tipo_doc->tipo_documento_permiso(grupo_id: $grupo_id, tipo_documento_id: $tipo_documento_id);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error tipo documento id no puede ser menor a 1', $resultado['mensaje']);

        errores::$error = false;

        $grupo_id = 1;
        $tipo_documento_id = 1;
        $resultado = $acl_tipo_doc->tipo_documento_permiso(grupo_id: $grupo_id, tipo_documento_id: $tipo_documento_id);
        $this->assertIsBool($resultado);
        $this->assertNotTrue(errores::$error);

        errores::$error = false;
    }
}

