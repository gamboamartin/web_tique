<?php
namespace tests\src;

use gamboamartin\errores\errores;
use gamboamartin\template\directivas;
use gamboamartin\template\html;
use gamboamartin\test\liberator;
use gamboamartin\test\test;
use JetBrains\PhpStorm\NoReturn;
use JsonException;
use stdClass;


class directivasTest extends test {
    public errores $errores;
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->errores = new errores();


    }

    /**
     */
    #[NoReturn] public function test_btn_action_next(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        $html = new liberator($html);
        $_GET['session_id'] = 1;

        $label = '1';
        $value = 'c';


        $resultado = $html->btn_action_next($label, $value);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<button type='submit' class='btn btn-info btn-guarda col-md-12' name='btn_action_next' value='c'>1</button>", $resultado);
        errores::$error = false;
    }

    /**
     */
    #[NoReturn] public function test_btn_action_next_div(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        //$html = new liberator($html);
        $_GET['session_id'] = 1;

        $label = 'a';
        $value = 'v';


        $resultado = $html->btn_action_next_div($label, $value);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div class='col-md-6'><button type='submit' class='btn btn-info btn-guarda col-md-12' name='btn_action_next' value='v'>a</button></div>", $resultado);
        errores::$error = false;
    }

    /**
     * @throws JsonException
     */
    #[NoReturn] public function test_button_href(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        $html = new liberator($html);
        $_GET['session_id'] = 1;

        $accion = 'd';
        $etiqueta = 'f';
        $name = 'a';
        $place_holder = 'b';
        $registro_id = '-1';
        $seccion = 'c';
        $style = 'e';


        $resultado = $html->button_href($accion, $etiqueta, $name, $place_holder, $registro_id, $seccion, $style);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div |class|><a |role| href='index.php?seccion=c&accion=d&registro_id=-1&session_id=1' |class|>f</a></div>", $resultado);
        errores::$error = false;
    }

    /**
     * @throws JsonException
     */
    #[NoReturn] public function test_button_href_status(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        //$html = new liberator($html);
        $_GET['session_id'] = 1;

        $cols = '2';
        $registro_id = '-1';
        $seccion = 'a';
        $status = 'c';


        $resultado = $html->button_href_status($cols, $registro_id, $seccion, $status);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div |class|><div |class|><a |role| href='index.php?seccion=a&accion=status&registro_id=-1&session_id=1' |class|>c</a></div></div>", $resultado);
        errores::$error = false;
    }

    /**
     */
    #[NoReturn] public function test_email_required(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        //$html = new liberator($html);
        $_GET['session_id'] = 1;

        $disable = false;
        $name = 'a';
        $row_upd = new stdClass();
        $value_vacio = false;
        $place_holder = 'x';


        $resultado = $html->email_required($disable, $name, $place_holder, $row_upd, $value_vacio);

        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div |class|><input type='text' name='a' value='' |class|  required id='a' placeholder='x' pattern='[a-z0-9!#$%&'*+=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$' /></div>",$resultado);

    }

    /**
     */
    #[NoReturn] public function test_init_text(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        $html = new liberator($html);
        $_GET['session_id'] = 1;

        $name = 'a';
        $place_holder = 'a';
        $row_upd = new stdClass();
        $value_vacio = false;

        $resultado = $html->init_text($name, $place_holder, $row_upd, $value_vacio);
        $this->assertIsObject($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("", $resultado->row_upd->a);
        $this->assertEquals("", $resultado->label);
        errores::$error = false;
    }

    /**
     */
    #[NoReturn] public function test_input_alias(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        //$html = new liberator($html);
        $_GET['session_id'] = 1;

        $row_upd = new stdClass();

        $value_vacio = false;


        $resultado = $html->input_alias($row_upd, $value_vacio);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div |class|><div |class|><input type='text' name='alias' value='' |class|  required id='alias' placeholder='Alias' /></div></div>", $resultado);
        errores::$error = false;
    }

    /**
     */
    #[NoReturn] public function test_input_codigo(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        //$html = new liberator($html);
        $_GET['session_id'] = 1;

        $row_upd = new stdClass();
        $cols = '1';
        $value_vacio = true;

        $resultado = $html->input_codigo($cols, $row_upd, $value_vacio);

        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div |class|><div |class|><input type='text' name='codigo' value='' |class|  required id='codigo' placeholder='Codigo' /></div></div>", $resultado);
        errores::$error = false;
    }
    /**
     */
    #[NoReturn] public function test_input_codigo_bis(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        //$html = new liberator($html);
        $_GET['session_id'] = 1;

        $row_upd = new stdClass();
        $cols = '1';
        $value_vacio = true;

        $resultado = $html->input_codigo_bis($cols, $row_upd, $value_vacio);

        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div |class|><div |class|><input type='text' name='codigo_bis' value='' |class|  required id='codigo_bis' placeholder='Codigo BIS' /></div></div>", $resultado);
        errores::$error = false;
    }

    /**
     * @throws JsonException
     */
    #[NoReturn] public function test_fecha_required(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        // $html = new liberator($html);
        $_GET['session_id'] = 1;

        $name = 'a';
        $disable = false;
        $value_vacio = false;
        $place_holder = 'c';
        $row_upd = new stdClass();

        $resultado = $html->fecha_required($disable, $name, $place_holder, $row_upd, $value_vacio);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div |class|><input type='date' name='a' value='' |class|  required id='a' placeholder='c' /></div>", $resultado);

        errores::$error = false;
    }

    /**
     * @throws JsonException
     */
    #[NoReturn] public function test_input_descripcion_select(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        //$html = new liberator($html);
        $_GET['session_id'] = 1;

        $row_upd = new stdClass();
        $value_vacio = false;


        $resultado = $html->input_descripcion_select($row_upd, $value_vacio);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div |class|><div |class|><input type='text' name='descripcion_select' value='' |class|  required id='descripcion_select' placeholder='Descripcion Select' /></div></div>", $resultado);

        errores::$error = false;
    }

    /**
     * @throws JsonException
     */
    #[NoReturn] public function test_input_id(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        // $html = new liberator($html);
        $_GET['session_id'] = 1;

        $cols = 1;
        $value_vacio = false;
        $row_upd = new stdClass();

        $resultado = $html->input_id($cols, $row_upd, $value_vacio);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div |class|><div |class|><input type='text' name='id' value='' |class| disabled  id='id' placeholder='ID' /></div></div>", $resultado);
        errores::$error = false;
    }

    /**
     * @throws JsonException
     */
    #[NoReturn] public function test_input_text(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
       // $html = new liberator($html);
        $_GET['session_id'] = 1;

        $name = 'a';
        $disable = false;
        $required = false;
        $value_vacio = false;
        $place_holder = 'b';
        $row_upd = new stdClass();


        $resultado = $html->input_text($disable, $name, $place_holder, $required, $row_upd, $value_vacio);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div |class|><input type='text' name='a' value='' |class|   id='a' placeholder='b' /></div>", $resultado);
        errores::$error = false;
    }

    /**
     */
    #[NoReturn] public function test_input_text_required(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        //$html = new liberator($html);
        $_GET['session_id'] = 1;

        $row_upd = new stdClass();
        $disable = false;
        $value_vacio = true;
        $name = 'z';
        $place_holder = 'd';

        $resultado = $html->input_text_required($disable, $name, $place_holder, $row_upd, $value_vacio);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals("<div |class|><input type='text' name='z' value='' |class|  required id='z' placeholder='d' /></div>", $resultado);
        errores::$error = false;
    }

    /**
     * @throws JsonException
     */
    #[NoReturn] public function test_label_input(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        $html = new liberator($html);
        $_GET['session_id'] = 1;

        $name = 'a';
        $place_holder = 'c';


        $resultado = $html->label_input($name, $place_holder);
        $this->assertIsString($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals('', $resultado);
        errores::$error = false;
    }

    /**
     * @throws JsonException
     */
    #[NoReturn] public function test_row_upd_name(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        $html = new liberator($html);
        $_GET['session_id'] = 1;

        $name = 'a';
        $value_vacio = false;


        $resultado = $html->row_upd_name($name, $value_vacio);
        $this->assertIsObject($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals('', $resultado->a);
        errores::$error = false;
    }

    /**
     */
    #[NoReturn] public function test_valida_btn_next(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        //$html = new liberator($html);
        $_GET['session_id'] = 1;

        $label = '';
        $value = '';
        $style = '';
        $type = '';


        $resultado = $html->valida_btn_next($label, $style, $type, $value);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error al validar datos', $resultado['mensaje']);

        errores::$error = false;

        $label = 'a';
        $value = '';
        $style = '';
        $type = '';


        $resultado = $html->valida_btn_next($label, $style, $type, $value);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error al validar datos', $resultado['mensaje']);

        errores::$error = false;

        $label = 'a';
        $value = 'a';
        $style = '';
        $type = '';


        $resultado = $html->valida_btn_next($label, $style, $type, $value);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error $style esta vacio', $resultado['mensaje']);

        errores::$error = false;

        $label = 'a';
        $value = 'a';
        $style = 's';
        $type = '';


        $resultado = $html->valida_btn_next($label, $style, $type, $value);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error $type esta vacio', $resultado['mensaje']);

        errores::$error = false;

        $label = 'a';
        $value = 'a';
        $style = 's';
        $type = 's';


        $resultado = $html->valida_btn_next($label, $style, $type, $value);
        $this->assertIsBool($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertTrue($resultado);
        errores::$error = false;
    }



    /**
     * @throws JsonException
     */
    #[NoReturn] public function test_valida_cols(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        $html = new liberator($html);
        $_GET['session_id'] = 1;

        $cols = -1;


        $resultado = $html->valida_cols($cols);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error cols debe ser mayor a 0', $resultado['mensaje']);

        errores::$error = false;

        $cols = 13;


        $resultado = $html->valida_cols($cols);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error cols debe ser menor o igual a  12', $resultado['mensaje']);

        errores::$error = false;

        $cols = 1;


        $resultado = $html->valida_cols($cols);
        $this->assertIsBool($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertTrue($resultado);
        errores::$error = false;
    }

    /**
     * @throws JsonException
     */
    #[NoReturn] public function test_valida_data_label(): void
    {
        errores::$error = false;
        $html_ = new html();
        $html = new directivas($html_);
        $html = new liberator($html);
        $_GET['session_id'] = 1;
        $name = '';
        $place_holder = '';


        $resultado = $html->valida_data_label($name, $place_holder);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error $name debe tener info', $resultado['mensaje']);
        errores::$error = false;

        $_GET['session_id'] = 1;
        $name = 'a';
        $place_holder = '';


        $resultado = $html->valida_data_label($name, $place_holder);
        $this->assertIsArray($resultado);
        $this->assertTrue(errores::$error);
        $this->assertStringContainsStringIgnoringCase('Error $place_holder debe tener info', $resultado['mensaje']);

        errores::$error = false;

        $_GET['session_id'] = 1;
        $name = 'a';
        $place_holder = 'c';


        $resultado = $html->valida_data_label($name, $place_holder);
        $this->assertIsBool($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertTrue($resultado);

        errores::$error = false;
    }


}

