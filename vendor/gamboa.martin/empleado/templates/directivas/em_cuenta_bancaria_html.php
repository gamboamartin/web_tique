<?php
namespace html;

use base\orm\modelo;
use gamboamartin\empleado\controllers\controlador_em_cuenta_bancaria;
use gamboamartin\errores\errores;
use gamboamartin\template\directivas;
use gamboamartin\empleado\models\em_cuenta_bancaria;
use PDO;
use stdClass;

class em_cuenta_bancaria_html extends em_html {

    private function asigna_inputs(controlador_em_cuenta_bancaria $controler, stdClass $inputs): array|stdClass
    {
        $inputs_ = $this->asigna_inputs_base(controler: $controler,inputs:  $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs_);
        }

        return $inputs_;
    }

    public function genera_inputs_alta(controlador_em_cuenta_bancaria $controler, modelo $modelo, PDO $link,
                                       array $keys_selects = array()): array|stdClass
    {
        $inputs = $this->init_alta2(modelo: $modelo,link: $link,keys_selects:$keys_selects );
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);

        }
        $inputs_asignados = $this->asigna_inputs(controler:$controler, inputs: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al asignar inputs',data:  $inputs_asignados);
        }

        return $inputs_asignados;
    }

    private function genera_inputs_modifica(controlador_em_cuenta_bancaria $controler,PDO $link,
                                            stdClass $params = new stdClass()): array|stdClass
    {
        $inputs = $this->init_modifica(link: $link, row_upd: $controler->row_upd, params: $params);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);

        }
        $inputs_asignados = $this->asigna_inputs(controler:$controler, inputs: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al asignar inputs',data:  $inputs_asignados);
        }

        return $inputs_asignados;
    }


    public function input_num_cuenta(int $cols, stdClass $row_upd, bool $value_vacio, bool $disable = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: $disable,name: 'num_cuenta',place_holder: 'Nº cuenta',
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

    private function init_modifica(PDO $link, stdClass $row_upd, stdClass $params = new stdClass()): array|stdClass
    {
        $selects = $this->selects_modifica(link: $link, row_upd: $row_upd);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects',data:  $selects);
        }

        $texts = $this->texts_alta(row_upd: $row_upd, value_vacio: false, params: $params);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar texts',data:  $texts);
        }

        $alta_inputs = new stdClass();
        $alta_inputs->texts = $texts;
        $alta_inputs->selects = $selects;
        return $alta_inputs;
    }

    public function inputs_em_cuenta_bancaria(controlador_em_cuenta_bancaria $controlador,
                                       stdClass $params = new stdClass()): array|stdClass
    {
        $inputs = $this->genera_inputs_modifica(controler: $controlador,
            link: $controlador->link, params: $params);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);
        }
        return $inputs;
    }




    private function selects_modifica(PDO $link, stdClass $row_upd): array|stdClass
    {
        $selects = new stdClass();

        $select = (new em_empleado_html(html:$this->html_base))->select_em_empleado_id(
            cols: 6, con_registros:true, id_selected:$row_upd->em_empleado_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->em_empleado_id = $select;

        $select = (new bn_sucursal_html(html:$this->html_base))->select_bn_sucursal_id(
            cols: 6, con_registros:true, id_selected:$row_upd->bn_sucursal_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->bn_sucursal_id = $select;

        return $selects;
    }

    public function select_em_cuenta_bancaria_id(int $cols, bool $con_registros, int $id_selected, PDO $link,
                                                 array $filtro = array()): array|string
    {
        $valida = (new directivas(html:$this->html_base))->valida_cols(cols:$cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }
        if(is_null($id_selected)){
            $id_selected = -1;
        }
        $modelo = new em_cuenta_bancaria(link: $link);

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected,
            modelo: $modelo,filtro: $filtro, label: 'Cuenta bancaria',required: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

    protected function texts_alta(stdClass $row_upd, bool $value_vacio, stdClass $params = new stdClass()): array|stdClass
    {
        $texts = new stdClass();

        $in_clabe = $this->input_clabe(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_clabe);
        }
        $texts->clabe = $in_clabe;

        $in_num_cuenta = $this->input_num_cuenta(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_num_cuenta);
        }
        $texts->num_cuenta = $in_num_cuenta;

        return $texts;
    }

}
