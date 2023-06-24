<?php
namespace tests\links\secciones;

use gamboamartin\errores\errores;
use gamboamartin\template_1\html;
use gamboamartin\test\liberator;
use gamboamartin\test\test;

use html\im_registro_patronal_html;
use html\org_empresa_html;
use models\im_movimiento;
use stdClass;
use tests\base_test;


class im_movimientoTest extends test {

    public errores $errores;
    private stdClass $paths_conf;
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->errores = new errores();
    }

    public function test_filtro_extra_fecha(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'cat_sat_tipo_persona';
        $_GET['accion'] = 'lista';
        $_SESSION['grupo_id'] = 1;
        $_SESSION['usuario_id'] = 2;
        $_GET['session_id'] = '1';
        $html = new im_movimiento($this->link);
        $html = new liberator($html);

        $fecha = '2020-01-01';
        $resultado = $html->filtro_extra_fecha($fecha);
        $this->assertIsArray($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals('>=', $resultado[0]['im_movimiento.fecha']['operador']);
        errores::$error = false;
    }

    /**
     */
    public function test_filtro_movimiento_fecha(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'cat_sat_tipo_persona';
        $_GET['accion'] = 'lista';
        $_SESSION['grupo_id'] = 1;
        $_SESSION['usuario_id'] = 2;
        $_GET['session_id'] = '1';
        $html = new im_movimiento($this->link);
        //$html = new liberator($html);

        $em_empleado_id = -1;
        $fecha = "";
        $resultado = $html->filtro_movimiento_fecha(em_empleado_id: $em_empleado_id,fecha: $fecha);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error id del empleado no puede ser menor a uno', $resultado['mensaje']);
        errores::$error = false;

        $em_empleado_id = 1;
        $fecha = "";
        $resultado = $html->filtro_movimiento_fecha(em_empleado_id: $em_empleado_id,fecha: $fecha);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error: ingrese una fecha valida', $resultado['mensaje']);
        errores::$error = false;

        $em_empleado_id = 1;
        $fecha = "2022";
        $resultado = $html->filtro_movimiento_fecha(em_empleado_id: $em_empleado_id,fecha: $fecha);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error: ingrese una fecha valida', $resultado['mensaje']);
        errores::$error = false;


        $em_empleado_id = 1;
        $fecha = "2022-09-13-";
        $resultado = $html->filtro_movimiento_fecha(em_empleado_id: $em_empleado_id,fecha: $fecha);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error: ingrese una fecha valida', $resultado['mensaje']);
        errores::$error = false;

        $del = (new base_test())->del($this->link, 'gamboamartin\\empleado\\models\\em_cuenta_bancaria');
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $del = (new base_test())->del($this->link, 'models\\im_movimiento');
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $del = (new base_test())->del($this->link, 'gamboamartin\\empleado\\models\\em_empleado');
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $del = (new base_test())->del($this->link, 'models\\org_puesto');
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $del = (new base_test())->del($this->link, 'models\\org_porcentaje_act_economica');
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $del = (new base_test())->del($this->link, 'models\\fc_partida');
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $del = (new base_test())->del($this->link, 'models\\fc_factura');
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $del = (new base_test())->del($this->link, 'models\\im_registro_patronal');
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $del = (new base_test())->del($this->link, 'models\\fc_csd');
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $del = (new base_test())->del($this->link, 'models\\org_sucursal');
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $del = (new base_test())->del($this->link, 'models\\org_empresa');
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $del = (new base_test())->del($this->link, 'models\\org_tipo_sucursal');
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $alta = (new base_test())->alta_org_tipo_sucursal($this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al dar de alta', $alta);
            print_r($error);
            exit;
        }

        $alta = (new base_test())->alta_org_empresa($this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al dar de alta', $alta);
            print_r($error);
            exit;
        }

        $del = (new base_test())->del($this->link, 'org_sucursal');
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $del = (new base_test())->del($this->link, 'im_tipo_movimiento');
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $alta = (new base_test())->alta_org_sucursal($this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al dar de alta', $alta);
            print_r($error);
            exit;
        }

        $alta = (new base_test())->alta_fc_csd($this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al dar de alta', $alta);
            print_r($error);
            exit;
        }

        $alta = (new base_test())->alta_org_puesto($this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al dar de alta', $alta);
            print_r($error);
            exit;
        }

        $alta = (new base_test())->alta_im_registro_patronal($this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al dar de alta', $alta);
            print_r($error);
            exit;
        }



        $alta = (new base_test())->alta_em_empleado($this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al dar de alta', $alta);
            print_r($error);
            exit;
        }

        $alta = (new base_test())->alta_im_tipo_movimiento($this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al dar de alta', $alta);
            print_r($error);
            exit;
        }

        $alta = (new base_test())->alta_im_movimiento($this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al dar de alta', $alta);
            print_r($error);
            exit;
        }



        $em_empleado_id = 1;
        $fecha = "2022-09-13";
        $resultado = $html->filtro_movimiento_fecha(em_empleado_id: $em_empleado_id,fecha: $fecha);


        $this->assertIsArray($resultado);
        $this->assertNotTrue(errores::$error);
        errores::$error = false;
    }

    public function test_select_im_registro_patronal_id(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'cat_sat_tipo_persona';
        $_GET['accion'] = 'lista';
        $_SESSION['grupo_id'] = 1;
        $_SESSION['usuario_id'] = 2;
        $_GET['session_id'] = '1';
        $html = new im_movimiento($this->link);
        //$html = new liberator($html);

        $em_empleado_id = -1;
        $resultado = $html->get_ultimo_movimiento_empleado(em_empleado_id: $em_empleado_id);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error id del empleado no puede ser menor a uno', $resultado['mensaje']);
        errores::$error = false;

        $em_empleado_id = 999;
        $resultado = $html->get_ultimo_movimiento_empleado(em_empleado_id: $em_empleado_id);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error no hay registros para el empleado', $resultado['mensaje']);
        errores::$error = false;

        $em_empleado_id = 1;
        $resultado = $html->get_ultimo_movimiento_empleado(em_empleado_id: $em_empleado_id);
        $this->assertIsArray($resultado);
        $this->assertNotTrue(errores::$error);

        errores::$error = false;
    }

}

