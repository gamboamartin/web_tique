<?php
namespace tests\orm;

use gamboamartin\errores\errores;
use gamboamartin\organigrama\models\org_sucursal;
use gamboamartin\test\test;
use stdClass;


class org_sucursalTest extends test {
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
     */
    public function test_sucursales(): void
    {
        errores::$error = false;

        $modelo = new org_sucursal(link: $this->link);
        //$lim = new liberator($lim);

        $org_empresa_id = 1;
        $resultado = $modelo->sucursales($org_empresa_id);

        $this->assertIsObject($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertObjectHasAttribute('registros',$resultado);
        $this->assertObjectHasAttribute('n_registros',$resultado);


        errores::$error = false;
    }


}

