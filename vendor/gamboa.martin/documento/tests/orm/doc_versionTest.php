<?php
namespace tests\orm;

use gamboamartin\errores\errores;
use models\doc_version;
use tests\base_test;


class doc_versionTest extends base_test {
    public errores $errores;
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->errores = new errores();
    }

    public function test_alta_bd()
    {
        errores::$error = false;


        $doc_version = new doc_version($this->link);
        //$inicializacion = new liberator($inicializacion);

        $resultado = $doc_version->alta_bd();
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error al validar $this->registro', $resultado['mensaje']);

        errores::$error = false;

        $elimina_version = $this->elimina_version();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al eliminar version', data: $elimina_version);
            print_r($error);
            die('Error');
        }

        $elimina_extension = $this->elimina_extension();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al eliminar extension', data: $elimina_extension);
            print_r($error);
            die('Error');
        }

        $inserta_tipo_documento = $this->inserta_tipo_documento(descripcion: 'a');
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al insertar $inserta_tipo_documento', data: $inserta_tipo_documento);
            print_r($error);
            die('Error');
        }
        $inserta_acl_tipo_documento = $this->inserta_acl_tipo_documento();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al insertar $inserta_acl_tipo_documento', data: $inserta_acl_tipo_documento);
            print_r($error);
            die('Error');
        }

        $inserta_extension = $this->inserta_extension(descripcion: 'a');
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al insertar extension', data: $inserta_extension);
            print_r($error);
            die('Error');
        }

        $_SESSION['grupo_id'] = 1;
        $inserta_extension_permitido = $this->inserta_extension_permitido();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al insertar $inserta_extension_permitido', data: $inserta_extension_permitido);
            print_r($error);
            die('Error');
        }

        $inserta_documento = $this->inserta_documento();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al insertar $inserta_documento', data: $inserta_documento);
            print_r($error);
            die('Error');
        }
        unset($_SESSION['grupo_id']);
        $doc_version->registro['doc_documento_id'] = 1;
        $resultado = $doc_version->alta_bd();

        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error al validar permiso', $resultado['mensaje']);

        errores::$error = false;

        $inserta_acl_tipo_documento = $this->elimina_acl_tipo_documento();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al insertar $inserta_acl_tipo_documento', data: $inserta_acl_tipo_documento);
            print_r($error);
            die('Error');
        }

        $inserta_acl_tipo_documento = $this->inserta_acl_tipo_documento();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al insertar $inserta_acl_tipo_documento', data: $inserta_acl_tipo_documento);
            print_r($error);
            die('Error');
        }

        $_SESSION['grupo_id'] = 1;
        $doc_version->registro['doc_documento_id'] = 1;
        $resultado = $doc_version->alta_bd();
        $this->assertIsObject($resultado);
        $this->assertNotTrue(errores::$error);

        errores::$error = false;
    }
}

