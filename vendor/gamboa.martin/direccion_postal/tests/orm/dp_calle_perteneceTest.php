<?php
namespace gamboamartin\direccion_postal\tests\orm;

use gamboamartin\direccion_postal\models\dp_calle_pertenece;
use gamboamartin\direccion_postal\tests\base_test;
use gamboamartin\errores\errores;
use gamboamartin\test\test;
use stdClass;



class dp_calle_perteneceTest extends test {
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

    public function test_id_prederminado(): void
    {
        errores::$error = false;
        $_GET['session_id'] = 1;
        $_GET['seccion'] = 'dp_estado';
        $_SESSION['usuario_id'] = 1;
        $modelo = new dp_calle_pertenece($this->link);

        $del = (new base_test())->del_dp_calle(link: $this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $alta = (new base_test())->alta_dp_calle_pertenece(link: $this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al insertar', $alta);
            print_r($error);
            exit;
        }


        $resultado = $modelo->id_predeterminado();

        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase("Error no existe predeterminado", $resultado['mensaje']);

        errores::$error = false;

        $del = (new base_test())->del_dp_calle(link: $this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }

        $alta = (new base_test())->alta_dp_calle_pertenece(link: $this->link, predeterminado: 'activo');
        if(errores::$error){
            $error = (new errores())->error('Error al insertar', $alta);
            print_r($error);
            exit;
        }

        $resultado = $modelo->id_predeterminado();
        $this->assertIsInt($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals(1, $resultado);

        errores::$error = false;


    }


    public function test_objs_direcciones(): void
    {
        errores::$error = false;
        $_GET['session_id'] = 1;
        $_GET['seccion'] = 'dp_estado';
        $_SESSION['usuario_id'] = 1;
        $modelo = new dp_calle_pertenece($this->link);


        $del = (new base_test())->del_dp_calle($this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al eliminar', $del);
            print_r($error);
            exit;
        }



        $dp_calle_pertenece_id = 1;
        $resultado = $modelo->objs_direcciones($dp_calle_pertenece_id);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase("Error al obtener calle pertenece",$resultado['mensaje']);

        errores::$error = false;

        $alta = (new base_test())->alta_dp_calle_pertenece($this->link);
        if(errores::$error){
            $error = (new errores())->error('Error al insertar', $alta);
            print_r($error);
            exit;
        }


        $dp_calle_pertenece_id = 1;
        $resultado = $modelo->objs_direcciones($dp_calle_pertenece_id);


        $this->assertIsObject($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertObjectHasAttribute('pais',$resultado);

        errores::$error = false;
    }







}

