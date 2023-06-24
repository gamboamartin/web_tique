<?php
namespace html;

use config\generales;
use gamboamartin\comercial\controllers\controlador_com_cliente;
use gamboamartin\errores\errores;
use gamboamartin\system\html_controler;
use models\base\limpieza;
use models\com_cliente;
use PDO;
use stdClass;

class com_cliente_html extends html_controler {

    private function asigna_inputs(controlador_com_cliente $controler, stdClass $inputs): array|stdClass
    {
        $controler->inputs->select = new stdClass();

        $controler->inputs->select->dp_pais_id = $inputs->selects->dp_pais_id;
        $controler->inputs->select->dp_estado_id = $inputs->selects->dp_estado_id;
        $controler->inputs->select->dp_municipio_id = $inputs->selects->dp_municipio_id;
        $controler->inputs->select->dp_cp_id = $inputs->selects->dp_cp_id;
        $controler->inputs->select->dp_colonia_id = $inputs->selects->dp_colonia_id;
        $controler->inputs->select->dp_calle_pertenece_id = $inputs->selects->dp_calle_pertenece_id;
        $controler->inputs->select->cat_sat_regimen_fiscal_id = $inputs->selects->cat_sat_regimen_fiscal_id;
        $controler->inputs->select->cat_sat_moneda_id = $inputs->selects->cat_sat_moneda_id;
        $controler->inputs->select->cat_sat_forma_pago_id = $inputs->selects->cat_sat_forma_pago_id;
        $controler->inputs->select->cat_sat_metodo_pago_id = $inputs->selects->cat_sat_metodo_pago_id;
        $controler->inputs->select->cat_sat_uso_cfdi_id = $inputs->selects->cat_sat_uso_cfdi_id;
        $controler->inputs->select->cat_sat_tipo_de_comprobante_id = $inputs->selects->cat_sat_tipo_de_comprobante_id;

        $controler->inputs->razon_social = $inputs->texts->razon_social;
        $controler->inputs->rfc = $inputs->texts->rfc;
        $controler->inputs->numero_exterior = $inputs->texts->numero_exterior;
        $controler->inputs->numero_interior = $inputs->texts->numero_interior;
        $controler->inputs->telefono = $inputs->texts->telefono;

        return $controler->inputs;
    }

    public function genera_inputs_alta(controlador_com_cliente $controler,PDO $link): array|stdClass
    {
        $inputs = $this->init_alta(link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);

        }
        $inputs_asignados = $this->asigna_inputs(controler:$controler, inputs: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al asignar inputs',data:  $inputs_asignados);
        }

        return $inputs_asignados;
    }

    private function genera_inputs_modifica(controlador_com_cliente $controler,PDO $link): array|stdClass
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

    private function init_alta(PDO $link): array|stdClass
    {
        $selects = $this->selects_alta(link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects',data:  $selects);
        }

        $texts = $this->texts_alta(row_upd: new stdClass(), value_vacio: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar texts',data:  $texts);
        }

        $alta_inputs = new stdClass();
        $alta_inputs->selects = $selects;
        $alta_inputs->texts = $texts;

        return $alta_inputs;
    }

    private function init_modifica(PDO $link, stdClass $row_upd): array|stdClass
    {

        $selects = $this->selects_modifica(link: $link, row_upd: $row_upd);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects',data:  $selects);
        }

        $texts = $this->texts_alta(row_upd: new stdClass(), value_vacio: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar texts',data:  $texts);
        }

        $alta_inputs = new stdClass();
        $alta_inputs->selects = $selects;
        $alta_inputs->texts = $texts;

        return $alta_inputs;
    }

    public function inputs_com_cliente(controlador_com_cliente $controlador_com_cliente): array|stdClass
    {
        $inputs = $this->genera_inputs_modifica(controler: $controlador_com_cliente, link: $controlador_com_cliente->link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);
        }
        return $inputs;
    }

    public function input_numero_interior(int $cols, stdClass $row_upd, bool $value_vacio): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: false,name: 'numero_interior',place_holder: 'Numero interior',
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

    public function input_numero_exterior(int $cols, stdClass $row_upd, bool $value_vacio): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: false,name: 'numero_exterior',place_holder: 'Numero exterior',
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

    public function input_telefono(int $cols, stdClass $row_upd, bool $value_vacio): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: false,name: 'telefono',place_holder: 'Telefono',
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

    public function input_razon_social(int $cols, stdClass $row_upd, bool $value_vacio): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: false,name: 'razon_social',place_holder: 'Razon social',
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

    public function input_rfc(int $cols, stdClass $row_upd, bool $value_vacio): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: false,name: 'rfc',place_holder: 'Rfc',
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

    private function selects_alta(PDO $link): array|stdClass
    {
        $selects = new stdClass();

        $dp_pais_html = new dp_pais_html(html:$this->html_base);
        $select = $dp_pais_html->select_dp_pais_id(cols: 6, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->dp_pais_id = $select;

        $dp_estado_html = new dp_estado_html(html:$this->html_base);
        $select = $dp_estado_html->select_dp_estado_id(cols: 6, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->dp_estado_id = $select;

        $dp_municipio_html = new dp_municipio_html(html:$this->html_base);
        $select = $dp_municipio_html->select_dp_municipio_id(cols: 6, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->dp_municipio_id = $select;

        $dp_cp_html = new dp_cp_html(html:$this->html_base);
        $select = $dp_cp_html->select_dp_cp_id(cols: 6, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->dp_cp_id = $select;

        $dp_colonia_html = new dp_colonia_html(html:$this->html_base);
        $select = $dp_colonia_html->select_dp_colonia_id(cols: 6, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->dp_colonia_id = $select;

        $dp_calle_pertenece_html = new dp_calle_pertenece_html(html:$this->html_base);
        $select = $dp_calle_pertenece_html->select_dp_calle_pertenece_id(cols: 6, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->dp_calle_pertenece_id = $select;

        $cat_sat_regimen_fiscal_html = new cat_sat_regimen_fiscal_html(html:$this->html_base);
        $select = $cat_sat_regimen_fiscal_html->select_cat_sat_regimen_fiscal_id(cols: 12, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_regimen_fiscal_id = $select;

        $cat_sat_moneda_html = new cat_sat_moneda_html(html:$this->html_base);
        $select = $cat_sat_moneda_html->select_cat_sat_moneda_id(cols: 6, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_moneda_id = $select;

        $cat_sat_forma_pago_html = new cat_sat_forma_pago_html(html:$this->html_base);
        $select = $cat_sat_forma_pago_html->select_cat_sat_forma_pago_id(cols: 6, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_forma_pago_id = $select;

        $cat_sat_metodo_pago_html = new cat_sat_metodo_pago_html(html:$this->html_base);
        $select = $cat_sat_metodo_pago_html->select_cat_sat_metodo_pago_id(cols: 6, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_metodo_pago_id = $select;

        $cat_sat_uso_cfdi_html = new cat_sat_uso_cfdi_html(html:$this->html_base);
        $select = $cat_sat_uso_cfdi_html->select_cat_sat_uso_cfdi_id(cols: 6, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_uso_cfdi_id = $select;

        $cat_sat_tipo_de_comprobante_html = new cat_sat_tipo_de_comprobante_html(html:$this->html_base);
        $select = $cat_sat_tipo_de_comprobante_html->select_cat_sat_tipo_de_comprobante_id(cols: 6, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_tipo_de_comprobante_id = $select;

        return $selects;
    }

    private function selects_modifica(PDO $link, stdClass $row_upd): array|stdClass
    {

        $selects = new stdClass();

        $select = (new cat_sat_regimen_fiscal_html(html:$this->html_base))->select_cat_sat_regimen_fiscal_id(
            cols: 12, con_registros:true, id_selected:$row_upd->cat_sat_regimen_fiscal_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }

        $selects->cat_sat_regimen_fiscal_id = $select;

        $select = (new dp_pais_html(html:$this->html_base))->select_dp_pais_id(
            cols: 6, con_registros:true, id_selected:$row_upd->dp_pais_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }

        $selects->dp_pais_id = $select;

        $select = (new dp_estado_html(html:$this->html_base))->select_dp_estado_id(
            cols: 6, con_registros:true, id_selected:$row_upd->dp_estado_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->dp_estado_id = $select;

        $select = (new dp_municipio_html(html:$this->html_base))->select_dp_municipio_id(
            cols: 6, con_registros:true, id_selected:$row_upd->dp_municipio_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->dp_municipio_id = $select;

        $select = (new dp_cp_html(html:$this->html_base))->select_dp_cp_id(
            cols: 6, con_registros:true, id_selected:$row_upd->dp_cp_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->dp_cp_id = $select;


        $select = (new dp_calle_pertenece_html(html:$this->html_base))->select_dp_calle_pertenece_id(
            cols: 6, con_registros:true, id_selected:$row_upd->dp_calle_pertenece_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->dp_calle_pertenece_id = $select;

        $select = (new cat_sat_regimen_fiscal_html(html:$this->html_base))->select_cat_sat_regimen_fiscal_id(
            cols: 6, con_registros:true, id_selected:$row_upd->cat_sat_regimen_fiscal_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_regimen_fiscal_id = $select;

        $select = (new cat_sat_moneda_html(html:$this->html_base))->select_cat_sat_moneda_id(
            cols: 6, con_registros:true, id_selected:$row_upd->cat_sat_moneda_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_moneda_id = $select;

        $select = (new cat_sat_forma_pago_html(html:$this->html_base))->select_cat_sat_forma_pago_id(
            cols: 6, con_registros:true, id_selected:$row_upd->cat_sat_forma_pago_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_forma_pago_id = $select;

        $select = (new cat_sat_metodo_pago_html(html:$this->html_base))->select_cat_sat_metodo_pago_id(
            cols: 6, con_registros:true, id_selected:$row_upd->cat_sat_metodo_pago_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_metodo_pago_id = $select;

        $select = (new cat_sat_uso_cfdi_html(html:$this->html_base))->select_cat_sat_uso_cfdi_id(
            cols: 6, con_registros:true, id_selected:$row_upd->cat_sat_uso_cfdi_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_uso_cfdi_id = $select;

        $select = (new cat_sat_tipo_de_comprobante_html(html:$this->html_base))->select_cat_sat_tipo_de_comprobante_id(
            cols: 6, con_registros:true, id_selected:$row_upd->cat_sat_tipo_de_comprobante_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_tipo_de_comprobante_id = $select;

        $select = (new dp_colonia_html(html:$this->html_base))->select_dp_colonia_id(
            cols: 6, con_registros:true, id_selected:$row_upd->dp_colonia_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->dp_colonia_id = $select;


        return $selects;
    }

    public function select_com_cliente_id(int $cols, bool $con_registros, int $id_selected, PDO $link): array|string
    {
        $modelo = new com_cliente(link: $link);

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected,
            modelo: $modelo,label: 'Cliente', required: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

    private function texts_alta(stdClass $row_upd, bool $value_vacio): array|stdClass
    {

        $texts = new stdClass();

        $in_razon_social = $this->input_razon_social(cols: 12,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_razon_social);
        }
        $texts->razon_social = $in_razon_social;

        $in_rfc = $this->input_rfc(cols: 12,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_rfc);
        }
        $texts->rfc = $in_rfc;

        $in_numero_exterior = $this->input_numero_exterior(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_numero_exterior);
        }
        $texts->numero_exterior = $in_numero_exterior;

        $in_numero_interior = $this->input_numero_interior(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_numero_interior);
        }
        $texts->numero_interior = $in_numero_interior;

        $in_telefono = $this->input_telefono(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_telefono);
        }
        $texts->telefono = $in_telefono;

        return $texts;
    }

}
