<?php
namespace html;

use gamboamartin\comercial\controllers\controlador_com_producto;
use gamboamartin\errores\errores;
use gamboamartin\system\html_controler;
use models\com_producto;
use models\com_sucursal;
use PDO;
use stdClass;

class com_producto_html extends html_controler {

    private function asigna_inputs(controlador_com_producto $controler, stdClass $inputs): array|stdClass
    {
        $controler->inputs->select = new stdClass();
        $controler->inputs->select->cat_sat_producto_id = $inputs->selects->cat_sat_producto_id;
        $controler->inputs->select->cat_sat_unidad_id = $inputs->selects->cat_sat_unidad_id;
        $controler->inputs->select->cat_sat_obj_imp_id = $inputs->selects->cat_sat_obj_imp_id;
        $controler->inputs->select->cat_sat_tipo_factor_id = $inputs->selects->cat_sat_tipo_factor_id;
        $controler->inputs->select->cat_sat_factor_id = $inputs->selects->cat_sat_factor_id;
        $controler->inputs->obj_imp = $inputs->texts->obj_imp;

        return $controler->inputs;
    }

    public function genera_inputs_alta(controlador_com_producto $controler,array $keys_selects,PDO $link): array|stdClass
    {
        $inputs = $this->init_alta(keys_selects:$keys_selects, link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);

        }
        $inputs_asignados = $this->asigna_inputs(controler:$controler, inputs: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al asignar inputs',data:  $inputs_asignados);
        }

        return $inputs_asignados;
    }

    private function genera_inputs_modifica(controlador_com_producto $controler,PDO $link, stdClass $params): array|stdClass
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

    protected function init_alta(array $keys_selects, PDO $link): array|stdClass
    {
        $selects = $this->selects_alta(keys_selects: $keys_selects, link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects',data:  $selects);
        }

        $params = new stdClass();
        $texts = $this->texts_alta(row_upd: new stdClass(), value_vacio: true, params: $params);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar texts',data:  $texts);
        }

        $alta_inputs = new stdClass();
        $alta_inputs->selects = $selects;
        $alta_inputs->texts = $texts;

        return $alta_inputs;
    }

    private function init_modifica(PDO $link, stdClass $row_upd, stdClass $params): array|stdClass
    {

        $selects = $this->selects_modifica(link: $link, row_upd: $row_upd);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects',data:  $selects);
        }

        $texts = $this->texts_alta(row_upd: new stdClass(), value_vacio: true, params: $params);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar texts',data:  $texts);
        }

        $alta_inputs = new stdClass();
        $alta_inputs->selects = $selects;
        $alta_inputs->texts = $texts;

        return $alta_inputs;
    }

    public function inputs_com_producto(controlador_com_producto $controlador_org_puesto, array $keys_selects): array|stdClass
    {
        $inputs = $this->genera_inputs_modifica(controler: $controlador_org_puesto,
            link: $controlador_org_puesto->link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);
        }
        return $inputs;
    }

    public function input_obj_imp(int $cols, stdClass $row_upd, bool $value_vacio): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: false,name: 'obj_imp',place_holder: 'OBJ IMP',
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

    protected function selects_alta(array $keys_selects, PDO $link): array|stdClass
    {
        $selects = new stdClass();

        $cat_sat_producto_html = new cat_sat_producto_html(html:$this->html_base);
        $select = $cat_sat_producto_html->select_cat_sat_producto_id(cols: 12, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_producto_id = $select;

        $cat_sat_unidad_html = new cat_sat_unidad_html(html:$this->html_base);
        $select = $cat_sat_unidad_html->select_cat_sat_unidad_id(cols: 12, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_unidad_id = $select;

        $cat_sat_obj_imp_html = new cat_sat_obj_imp_html(html:$this->html_base);
        $select = $cat_sat_obj_imp_html->select_cat_sat_obj_imp_id(cols: 12, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_obj_imp_id = $select;
        
        $cat_sat_tipo_factor_html = new cat_sat_tipo_factor_html(html:$this->html_base);
        $select = $cat_sat_tipo_factor_html->select_cat_sat_tipo_factor_id(cols: 12, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_tipo_factor_id = $select;     
        
        $cat_sat_factor_html = new cat_sat_factor_html(html:$this->html_base);
        $select = $cat_sat_factor_html->select_cat_sat_factor_id(cols: 12, con_registros:true,
            id_selected:-1,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_factor_id = $select;


        return $selects;
    }

    private function selects_modifica(PDO $link, stdClass $row_upd): array|stdClass
    {
        $selects = new stdClass();

        $select = (new cat_sat_producto_html(html:$this->html_base))->select_cat_sat_producto_id(
            cols: 12, con_registros:true, id_selected:$row_upd->cat_sat_producto_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_producto_id = $select;

        $select = (new cat_sat_unidad_html(html:$this->html_base))->select_cat_sat_unidad_id(
            cols: 6, con_registros:true, id_selected:$row_upd->cat_sat_unidad_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_unidad_id = $select;

        $select = (new cat_sat_obj_imp_html(html:$this->html_base))->select_cat_sat_obj_imp_id(
            cols: 6, con_registros:true, id_selected:$row_upd->cat_sat_obj_imp_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_obj_imp_id = $select;

        $select = (new cat_sat_tipo_factor_html(html:$this->html_base))->select_cat_sat_tipo_factor_id(
            cols: 6, con_registros:true, id_selected:$row_upd->cat_sat_tipo_factor_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_tipo_factor_id = $select;

        return $selects;
    }

    public function select_com_producto_id(int $cols, bool $con_registros, int $id_selected, PDO $link): array|string
    {
        $modelo = new com_producto(link: $link);

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected,
            modelo: $modelo,label: 'Productos',required: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

    protected function texts_alta(stdClass $row_upd, bool $value_vacio, stdClass $params = new stdClass()): array|stdClass
    {
        $texts = new stdClass();

        $in_obj_imp = $this->input_obj_imp(cols: 12,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_obj_imp);
        }
        $texts->obj_imp = $in_obj_imp;


        return $texts;
    }

}
