<?php
namespace tests\orm;

use config\generales;
use gamboamartin\errores\errores;
use gamboamartin\test\test;
use models\doc_acl_tipo_documento;
use models\doc_documento;
use models\doc_extension;
use models\doc_extension_permitido;
use models\doc_tipo_documento;
use models\doc_version;
use tests\base_test;


class doc_documentoTest extends base_test {
    public errores $errores;
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->errores = new errores();
    }

    public function test_alta_bd()
    {
        errores::$error = false;


        $doc_documento = new doc_documento($this->link);
        //$inicializacion = new liberator($inicializacion);

        $doc_version = (new doc_version($this->link))->elimina_todo();
        if(errores::$error){
            $error = $this->errores->error(mensaje: 'Error al eliminar $doc_version', data: $doc_version);
            print_r($error);
            die('Error');
        }

        $documentos = (new doc_documento($this->link))->elimina_todo();
        if(errores::$error){
            $error = $this->errores->error(mensaje: 'Error al eliminar documentos', data: $documentos);
            print_r($error);
            die('Error');
        }

        $resultado = $doc_documento->alta_bd();
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error al validar FILES', $resultado['mensaje']);

        errores::$error = false;
        $_FILES['name'] = 'a';
        $resultado = $doc_documento->alta_bd();
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error al validar FILES', $resultado['mensaje']);

        errores::$error = false;

        $elimina_extension = $this->elimina_extension();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al eliminar extension', data: $elimina_extension);
            print_r($error);
            die('Error');
        }

        $inserta_extension = $this->inserta_extension(descripcion: 'a');
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al insertar extension', data: $inserta_extension);
            print_r($error);
            die('Error');
        }

        $inserta_extension_permitido = $this->inserta_extension_permitido();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al insertar $inserta_extension_permitido', data: $inserta_extension_permitido);
            print_r($error);
            die('Error');
        }

        $_FILES['name'] = 'a.a';
        $_FILES['tmp_name'] = '/var/www/html/documento/tests/files/a.a';
        $resultado = $doc_documento->alta_bd($_FILES);

        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error al validar registro a insertar', $resultado['mensaje']);

        errores::$error = false;
        $_FILES['name'] = 'a.a';
        $doc_documento->registro['doc_tipo_documento_id'] = 1;

        $elimina_extension = $this->elimina_extension();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al eliminar extension', data: $elimina_extension);
            print_r($error);
            die('Error');
        }

        $resultado = $doc_documento->alta_bd($_FILES);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error validar documento', $resultado['mensaje']);

        errores::$error = false;
        $_FILES['name'] = 'a.a';
        $doc_documento->registro['doc_tipo_documento_id'] = 1;
        $_SESSION['grupo_id'] = 1;
        unset($_SESSION['usuario_id']);

        $elimina_acl_tipo_documento = $this->elimina_acl_tipo_documento();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al eliminar $elimina_acl_tipo_documento', data: $elimina_acl_tipo_documento);
            print_r($error);
            die('Error');
        }

        $inserta_grupo = $this->inserta_grupo();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al insertar $inserta_grupo', data: $inserta_grupo);
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

        $inserta_extension_permitido = $this->inserta_extension_permitido();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al insertar $inserta_extension_permitido', data: $inserta_extension_permitido);
            print_r($error);
            die('Error');
        }


        $resultado = $doc_documento->alta_bd($_FILES);
        $this->assertIsObject($resultado);
        $this->assertNotTrue(errores::$error);

        errores::$error = false;
        $_FILES['name'] = 'a.a';
        $doc_documento->registro['doc_tipo_documento_id'] = 1;
        $_SESSION['grupo_id'] = 1;
        $_SESSION['usuario_id'] = 1;

        $filtro = array();
        $filtro['doc_tipo_documento.id'] = 1;
        $existe_tipo_documento = (new doc_tipo_documento($this->link))->existe(filtro: $filtro);
        if(errores::$error){
            $error = $this->errores->error(mensaje: 'Error al verificar tipo documento', data: $existe_tipo_documento);
            print_r($error);
            die('Error');
        }

        if(!$existe_tipo_documento) {

            $doc_tipo_documento['id'] = 1;
            $doc_tipo_documento['codigo'] = 1;
            $doc_tipo_documento['descripcion'] = 1;
            $alta_tipo_documento = (new doc_tipo_documento($this->link))->alta_registro(registro: $doc_tipo_documento);
            if (errores::$error) {
                $error = $this->errores->error(mensaje: 'Error al insertar tipo documento', data: $alta_tipo_documento);
                print_r($error);
                die('Error');
            }
        }

        $filtro = array();
        $filtro['doc_acl_tipo_documento.id'] = 1;
        $existe_acl_tipo_documento = (new doc_acl_tipo_documento($this->link))->existe(filtro: $filtro);
        if(errores::$error){
            $error = $this->errores->error(mensaje: 'Error al verificar acl tipo documento', data: $existe_acl_tipo_documento);
            print_r($error);
            die('Error');
        }

        if(!$existe_acl_tipo_documento) {

            $doc_acl_tipo_documento['id'] = 1;
            $doc_acl_tipo_documento['adm_grupo_id'] = 1;
            $doc_acl_tipo_documento['doc_tipo_documento_id'] = 1;
            $alta_acl_tipo_documento = (new doc_acl_tipo_documento($this->link))->alta_registro(registro: $doc_acl_tipo_documento);
            if (errores::$error) {
                $error = $this->errores->error(mensaje: 'Error al insertar acl tipo documento', data: $alta_acl_tipo_documento);
                print_r($error);
                die('Error');
            }
        }

        if(file_exists("/var/www/html/documento/tests/files/a.a")){
            unlink('/var/www/html/documento/tests/files/a.a');
        }

        $resultado = $doc_documento->alta_bd($_FILES);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error al guardar archivo temporal', $resultado['mensaje']);

        errores::$error = false;
        $_FILES['name'] = 'a.a';
        copy("/var/www/html/documento/tests/files/1.pdf","/var/www/html/documento/tests/files/a.a");
        $doc_documento->registro['doc_tipo_documento_id'] = 1;
        $_SESSION['grupo_id'] = 1;
        $_SESSION['usuario_id'] = 1;

        $resultado = $doc_documento->alta_bd($_FILES);

        $this->assertIsObject($resultado);
        $this->assertNotTrue(errores::$error);


        errores::$error = false;
        $_FILES['name'] = 'a.a';
        $doc_documento->registro['doc_tipo_documento_id'] = 1;
        $_SESSION['grupo_id'] = 1;
        $_SESSION['usuario_id'] = 1;



        $inserta_extension_permitido = $this->inserta_extension_permitido();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al insertar extension permitido', data: $inserta_extension_permitido);
            print_r($error);
            die('Error');
        }


        $resultado = $doc_documento->alta_bd($_FILES);
        $this->assertIsObject($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertFileExists($resultado->registro['doc_documento_ruta_absoluta']);

        errores::$error = false;
    }
}

