<?php
namespace html;


use gamboamartin\errores\errores;
use gamboamartin\organigrama\controllers\controlador_org_sucursal;
use gamboamartin\system\html_controler;
use gamboamartin\system\system;
use gamboamartin\template\directivas;
use html\base\org_html;
use models\base\limpieza;
use models\org_sucursal;
use PDO;
use stdClass;


class org_sucursal_html extends org_html {


    protected function asigna_inputs(system $controler, stdClass $inputs): array|stdClass
    {
        $r_inputs = parent::asigna_inputs(controler: $controler,inputs:  $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $r_inputs);
        }

        $controler->inputs->select->org_empresa_id = $inputs->selects->org_empresa_id;
        $controler->inputs->select->org_tipo_sucursal_id = $inputs->selects->org_tipo_sucursal_id;
        $controler->inputs->serie = $inputs->texts->serie;


        return $controler->inputs;
    }




    public function genera_inputs_alta(controlador_org_sucursal $controler,PDO $link, int $org_empresa_id,
                                       bool $org_empresa_id_disabled) : array|stdClass
    {
        $inputs = $this->init_alta_base(link: $link, org_empresa_id: $org_empresa_id,
            org_empresa_id_disabled: $org_empresa_id_disabled);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);

        }
        $inputs_asignados = $this->asigna_inputs(controler:$controler, inputs: $inputs);

        if(errores::$error){
            return $this->error->error(mensaje: 'Error al asignar inputs',data:  $inputs_asignados);
        }

        return $inputs_asignados;
    }

    private function genera_inputs_modifica(controlador_org_sucursal $controler,PDO $link): array|stdClass
    {
        $inputs = $this->init_modifica(link: $link, row_upd: $controler->row_upd);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);

        }
        $inputs_asignados = $this->asigna_inputs(controler:$controler, inputs: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al asignar inputs',data:  $inputs_asignados);
        }

        return $inputs_asignados;
    }



    private function init_alta_base(PDO $link, int $org_empresa_id, bool $org_empresa_id_disabled = false): array|stdClass
    {
        $row_upd = new stdClass();
        $selects = $this->selects_alta_base( link: $link, org_empresa_id: $org_empresa_id,
            org_empresa_id_disabled: $org_empresa_id_disabled);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects',data:  $selects);
        }

        $fechas = $this->fechas_alta();

        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs fecha',data:  $fechas);
        }

        $texts = $this->texts_alta_base(row_upd: $row_upd,value_vacio: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar texts',data:  $texts);
        }

        $telefonos = $this->telefonos_alta();

        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs $telefonos',data:  $telefonos);
        }

        $alta_inputs = new stdClass();
        $alta_inputs->texts = $texts;
        $alta_inputs->fechas = $fechas;
        $alta_inputs->selects = $selects;
        $alta_inputs->telefonos = $telefonos;
        return $alta_inputs;
    }

    private function init_modifica(PDO $link, stdClass $row_upd): array|stdClass
    {


        $selects = $this->selects_modifica(link: $link, row_upd: $row_upd);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects',data:  $selects);
        }

        $texts = $this->texts_alta_base(row_upd: $row_upd, value_vacio: false);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar texts',data:  $texts);
        }
        $fechas = $this->fechas_alta(row_upd: $row_upd);

        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs fecha',data:  $fechas);
        }

        $telefonos = $this->telefonos_alta(row_upd: $row_upd);

        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs $telefonos',data:  $telefonos);
        }

        $alta_inputs = new stdClass();

        $alta_inputs->texts = $texts;
        $alta_inputs->selects = $selects;
        $alta_inputs->fechas = $fechas;
        $alta_inputs->telefonos = $telefonos;
        return $alta_inputs;
    }





    public function input_exterior(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {

        if($cols<=0){
            return $this->error->error(mensaje: 'Error cold debe ser mayor a 0', data: $cols);
        }
        if($cols>=13){
            return $this->error->error(mensaje: 'Error cold debe ser menor o igual a  12', data: $cols);
        }

        $html =$this->directivas->input_text_required(disable: $disabled,name: 'exterior',place_holder: 'Num Ext',row_upd: $row_upd,
            value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $this->directivas->html->div_group(cols: $cols,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }



    public function input_interior(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {

        if($cols<=0){
            return $this->error->error(mensaje: 'Error cold debe ser mayor a 0', data: $cols);
        }
        if($cols>=13){
            return $this->error->error(mensaje: 'Error cold debe ser menor o igual a  12', data: $cols);
        }

        $html =$this->directivas->input_text(disable: $disabled,name: 'interior',place_holder: 'Num Int', required: false,
            row_upd: $row_upd, value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $this->directivas->html->div_group(cols: $cols,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }

    public function input_serie(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false,
                                string $place_holder = 'Serie'): array|string
    {

        if($cols<=0){
            return $this->error->error(mensaje: 'Error cold debe ser mayor a 0', data: $cols);
        }
        if($cols>=13){
            return $this->error->error(mensaje: 'Error cold debe ser menor o igual a  12', data: $cols);
        }

        $html =$this->directivas->input_text_required(disable: $disabled,name: 'serie',place_holder: $place_holder,
            row_upd: $row_upd, value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $this->directivas->html->div_group(cols: $cols,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }

    public function inputs_org_sucursal(controlador_org_sucursal $controlador_org_sucursal): array|stdClass
    {
        $init = (new limpieza())->init_modifica_org_sucursal(controler: $controlador_org_sucursal);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al inicializa datos',data:  $init);
        }

        $inputs = $this->genera_inputs_modifica(controler: $controlador_org_sucursal, link: $controlador_org_sucursal->link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);
        }
        return $inputs;
    }

    /**
     * Gemera los inputs de un alta para sucursal
     * @param PDO $link
     * @param int $org_empresa_id
     * @param bool $org_empresa_id_disabled
     * @return array|stdClass
     */
    protected function selects_alta_base(PDO $link, int $org_empresa_id = -1, bool $org_empresa_id_disabled = false): array|stdClass
    {
        $selects = parent::selects_alta(array(),link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects',data:  $selects);

        }

        $select = (new org_empresa_html($this->html_base))->select_org_empresa_id(cols: 12, con_registros:true,
            id_selected:$org_empresa_id,link: $link, disabled: $org_empresa_id_disabled);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);

        }

        $selects->org_empresa_id = $select;

        $org_tipo_sucursal_html = new org_tipo_sucursal_html(html:$this->html_base);

        $select = $org_tipo_sucursal_html->select_org_tipo_sucursal_id(cols: 4, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }

        $selects->org_tipo_sucursal_id = $select;

        return $selects;
    }

    private function selects_modifica(PDO $link, stdClass $row_upd): array|stdClass
    {

        $selects = new stdClass();


        $selects = (new selects())->direcciones(html: $this->html_base,link:  $link,row:  $row_upd,selects:  $selects);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects de domicilios',data:  $selects);

        }
        $select = (new org_empresa_html($this->html_base))->select_org_empresa_id(cols: 12, con_registros:true,
            id_selected:$row_upd->org_empresa_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);

        }

        $selects->org_empresa_id = $select;

        $org_tipo_sucursal_html = new org_tipo_sucursal_html(html:$this->html_base);

        $select = $org_tipo_sucursal_html->select_org_tipo_sucursal_id(cols: 4, con_registros:true,
            id_selected:$row_upd->org_tipo_sucursal_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }

        $selects->org_tipo_sucursal_id = $select;

        return $selects;
    }

    /**
     * Genera un select para sucursal
     * @param int $cols
     * @param bool $con_registros
     * @param int $id_selected
     * @param PDO $link
     * @param string $label
     * @return array|string
     */
    public function select_org_sucursal_id(int $cols, bool $con_registros, int $id_selected, PDO $link,
                                           string $label = 'Empresa'): array|string
    {
        $valida = (new directivas(html:$this->html_base))->valida_cols(cols:$cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }
        $modelo = new org_sucursal(link: $link);

        if(is_null($id_selected)){
            $id_selected = -1;
        }

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected,
            modelo: $modelo,label: $label,required: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

    public function telefono_1(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        if($cols<=0){
            return $this->error->error(mensaje: 'Error cold debe ser mayor a 0', data: $cols);
        }
        if($cols>=13){
            return $this->error->error(mensaje: 'Error cold debe ser menor o igual a  12', data: $cols);
        }

        $html =$this->directivas->input_text_required(disable: $disabled,name: 'telefono_1',
            place_holder: 'Telefono 1',row_upd: $row_upd, value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $this->directivas->html->div_group(cols: $cols,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }

    public function telefono_2(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        if($cols<=0){
            return $this->error->error(mensaje: 'Error cold debe ser mayor a 0', data: $cols);
        }
        if($cols>=13){
            return $this->error->error(mensaje: 'Error cold debe ser menor o igual a  12', data: $cols);
        }

        $html =$this->directivas->input_text(disable: $disabled,name: 'telefono_2',
            place_holder: 'Telefono 2',required: false,row_upd: $row_upd, value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $this->directivas->html->div_group(cols: $cols,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }

    public function telefono_3(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        if($cols<=0){
            return $this->error->error(mensaje: 'Error cold debe ser mayor a 0', data: $cols);
        }
        if($cols>=13){
            return $this->error->error(mensaje: 'Error cold debe ser menor o igual a  12', data: $cols);
        }

        $html =$this->directivas->input_text(disable: $disabled,name: 'telefono_3',
            place_holder: 'Telefono 3',required: false,row_upd: $row_upd, value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $this->directivas->html->div_group(cols: $cols,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }

    private function telefonos_alta(stdClass $row_upd = new stdClass()): array|stdClass
    {

        $telefonos = new stdClass();

        $telefono_1 = $this->telefono_1(cols: 4,row_upd: $row_upd,value_vacio:  false);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $telefono_1);
        }
        $telefonos->telefono_1 = $telefono_1;

        $telefono_2 = $this->telefono_2(cols: 4,row_upd: $row_upd,value_vacio:  false);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $telefono_2);
        }
        $telefonos->telefono_2 = $telefono_2;

        $telefono_3 = $this->telefono_3(cols: 4,row_upd: $row_upd,value_vacio:  false);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $telefono_3);
        }
        $telefonos->telefono_3 = $telefono_3;


        return $telefonos;
    }

    private function texts_alta_base(stdClass $row_upd, bool $value_vacio): array|stdClass
    {

        $texts = new stdClass();

        $in_codigo = $this->input_codigo(cols: 4,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_codigo);
        }
        $texts->codigo = $in_codigo;



        $in_codigo_bis = $this->input_codigo_bis(cols: 4,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_codigo_bis);
        }
        $texts->codigo_bis = $in_codigo_bis;

        $in_exterior = $this->input_exterior(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_exterior);
        }
        $texts->exterior = $in_exterior;

        $in_interior = $this->input_interior(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_exterior);
        }
        $texts->interior = $in_interior;

        $in_serie = $this->input_serie(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_serie);
        }
        $texts->serie = $in_serie;



        return $texts;
    }
}
