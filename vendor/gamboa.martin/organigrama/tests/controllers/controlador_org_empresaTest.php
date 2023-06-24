<?php
namespace tests\links\secciones;

use gamboamartin\errores\errores;
use gamboamartin\organigrama\controllers\controlador_org_empresa;
use gamboamartin\test\liberator;
use gamboamartin\test\test;
use JsonException;
use links\secciones\link_org_empresa;
use models\org_empresa;
use models\org_sucursal;
use stdClass;
use tests\base_test;


class controlador_org_empresaTest extends test {
    public errores $errores;
    private stdClass $paths_conf;
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->errores = new errores();
        $this->paths_conf = new stdClass();
        $this->paths_conf->generales = '/var/www/html/organigrama/config/generales.php';
        $this->paths_conf->database = '/var/www/html/organigrama/config/database.php';
        $this->paths_conf->views = '/var/www/html/organigrama/config/views.php';


    }

    /**
     */
    public function test_asigna_link_sucursal_row(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'org_empresa';
        $_GET['accion'] = 'ubicacion';

        $_SESSION['grupo_id'] = 1;
        $_GET['session_id'] = '1';
        $_SESSION['usuario_id'] = '2';
        $ctl = new controlador_org_empresa(link: $this->link, paths_conf: $this->paths_conf);
        $ctl = new liberator($ctl);
        $row = new stdClass();
        $row->org_empresa_id = 1;
        $resultado = $ctl->asigna_link_sucursal_row($row);
        $this->assertIsObject($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals(1,$resultado->org_empresa_id);
        $this->assertEquals('./index.php?seccion=org_empresa&accion=sucursales&registro_id=1&session_id=1',$resultado->link_sucursales);
        $this->assertEquals('info',$resultado->link_sucursales_style);
        errores::$error = false;
    }

    /**
     */
    public function test_params_empresa(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'org_empresa';
        $_GET['accion'] = 'ubicacion';

        $_SESSION['grupo_id'] = 1;
        $_GET['session_id'] = '1';
        $_SESSION['usuario_id'] = '2';
        $ctl = new controlador_org_empresa(link: $this->link, paths_conf: $this->paths_conf);
        $ctl = new liberator($ctl);
        $resultado = $ctl->params_empresa();
        $this->assertIsObject($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertTrue($resultado->codigo->disabled);
        $this->assertTrue($resultado->codigo_bis->disabled);
        $this->assertTrue($resultado->razon_social->disabled);
        $this->assertEquals(6, $resultado->codigo_bis->cols);
        errores::$error = false;
    }

    /**
     * @throws JsonException
     */
    public function test_ubicacion(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'org_empresa';
        $_GET['accion'] = 'ubicacion';

        $_SESSION['grupo_id'] = 1;
        $_GET['session_id'] = '1';
        $_SESSION['usuario_id'] = '2';
        $ctl = new controlador_org_empresa(link: $this->link, paths_conf: $this->paths_conf);



        $del = (new base_test())->del_org_sucursal($this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $del = (new base_test())->del_org_empresa($this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $alta = (new base_test())->alta_org_empresa($this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al insertar', $alta);
            print_r($error);
            exit;
        }




        $_GET['registro_id'] = $alta->registro_id;
        $ctl->registro_id = $alta->registro_id;

        $resultado = $ctl->ubicacion(false);

        $this->assertIsObject($resultado);
        $this->assertNotTrue(errores::$error);

        errores::$error = false;
    }









}

