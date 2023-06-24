<?php
namespace tests\orm;

use gamboamartin\errores\errores;
use gamboamartin\test\liberator;
use gamboamartin\test\test;
use gamboamartin\organigrama\models\limpieza;
use JsonException;
use stdClass;


class limpiezaTest extends test {
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
     * @throws JsonException
     */
    public function test_init_data_base_org_empresa(): void
    {
        errores::$error = false;

        $lim = new limpieza();
        $lim = new liberator($lim);

        $registro = array();
        $registro['razon_social'] = 'a';
        $registro['rfc'] = 'b';

        $resultado = $lim->init_data_base_org_empresa($this->link, $registro);



        $this->assertIsArray($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals('a',$resultado['razon_social']);
        $this->assertEquals('b',$resultado['rfc']);
        $this->assertEquals('a',$resultado['descripcion']);
        $this->assertEquals('b',$resultado['codigo_bis']);
        $this->assertEquals('a',$resultado['descripcion_select']);
        $this->assertEquals('a',$resultado['alias']);

        errores::$error = false;
    }

    public function test_descripcion_sucursal(): void
    {
        errores::$error = false;

        $lim = new limpieza();
        $lim = new liberator($lim);

        $dp_calle_pertenece = array();
        $org_empresa = array();
        $registro = array();

        $org_empresa['org_empresa_descripcion'] = 'a';
        $dp_calle_pertenece['dp_municipio_descripcion'] = 'b';
        $dp_calle_pertenece['dp_estado_descripcion'] = 'b';
        $dp_calle_pertenece['dp_cp_descripcion'] = 'b';
        $registro['codigo'] = 'c';


        $resultado = $lim->descripcion_sucursal($dp_calle_pertenece, $org_empresa, $registro);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals('a b b b c',$resultado);
        errores::$error = false;
    }

    public function test_init_org_empresa_alta_bd(): void
    {
        errores::$error = false;

        $lim = new limpieza();
        //$lim = new liberator($lim);

        $registro = array();
        $registro['razon_social'] = 'a';
        $registro['rfc'] = 'b';
        $resultado = $lim->init_org_empresa_alta_bd($this->link, $registro);
        $this->assertIsArray($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals('a',$resultado['razon_social']);
        $this->assertEquals('b',$resultado['rfc']);
        $this->assertEquals('a',$resultado['descripcion']);
        $this->assertEquals('b',$resultado['codigo_bis']);
        $this->assertEquals('a',$resultado['descripcion_select']);
        $this->assertEquals('a',$resultado['alias']);
        errores::$error = false;
    }

    public function test_limpia_domicilio_con_calle(): void
    {
        errores::$error = false;

        $lim = new limpieza();
        $lim = new liberator($lim);

        $registro = array('dp_pais_id'=>'1');

        $resultado = $lim->limpia_domicilio_con_calle($registro);
        $this->assertIsArray($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEmpty($resultado);
        errores::$error = false;
    }

    public function test_limpia_foraneas_org_empresa(): void
    {
        errores::$error = false;

        $lim = new limpieza();
        $lim = new liberator($lim);

        $registro = array();
        $registro['razon_social'] = 'a';
        $registro['rfc'] = 'b';
        $registro['cat_sat_regimen_fiscal_id'] = 'b';

        $resultado = $lim->limpia_foraneas_org_empresa($registro);
        $this->assertIsArray($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals('b',$resultado['cat_sat_regimen_fiscal_id']);

        errores::$error = false;

        $registro = array();
        $registro['razon_social'] = 'a';
        $registro['rfc'] = 'b';
        $registro['cat_sat_regimen_fiscal_id'] = '1';

        $resultado = $lim->limpia_foraneas_org_empresa($registro);
        $this->assertIsArray($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals(1,$resultado['cat_sat_regimen_fiscal_id']);

        errores::$error = false;

        $registro = array();
        $registro['razon_social'] = 'a';
        $registro['rfc'] = 'b';
        $registro['cat_sat_regimen_fiscal_id'] = '-1';

        $resultado = $lim->limpia_foraneas_org_empresa($registro);
        $this->assertIsArray($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertArrayNotHasKey('cat_sat_regimen_fiscal_id',$resultado);
        errores::$error = false;

    }








}

