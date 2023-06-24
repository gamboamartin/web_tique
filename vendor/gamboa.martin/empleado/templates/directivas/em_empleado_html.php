<?php
namespace html;


use base\orm\modelo;
use gamboamartin\empleado\controllers\controlador_em_empleado;
use gamboamartin\empleado\models\em_anticipo;
use gamboamartin\errores\errores;
use gamboamartin\template\directivas;
use gamboamartin\empleado\models\em_empleado;
use PDO;
use stdClass;

class em_empleado_html extends em_html {

    private function asigna_inputs(controlador_em_empleado $controler, stdClass $inputs): array|stdClass
    {
        $controler->inputs->select = new stdClass();
        $controler->inputs->select->dp_calle_pertenece_id = $inputs->selects->dp_calle_pertenece_id;
        $controler->inputs->select->cat_sat_regimen_fiscal_id = $inputs->selects->cat_sat_regimen_fiscal_id;
        $controler->inputs->select->im_registro_patronal_id = $inputs->selects->im_registro_patronal_id;
        $controler->inputs->select->org_puesto_id = $inputs->selects->org_puesto_id;
        $controler->inputs->select->cat_sat_tipo_regimen_nom_id = $inputs->selects->cat_sat_tipo_regimen_nom_id;
        $controler->inputs->codigo = $inputs->texts->codigo;
        $controler->inputs->nombre = $inputs->texts->nombre;
        $controler->inputs->ap = $inputs->texts->ap;
        $controler->inputs->am = $inputs->texts->am;
        $controler->inputs->telefono = $inputs->texts->telefono;
        $controler->inputs->rfc = $inputs->texts->rfc;
        $controler->inputs->curp = $inputs->texts->curp;
        $controler->inputs->nss = $inputs->texts->nss;
        $controler->inputs->fecha_inicio_rel_laboral = $inputs->texts->fecha_inicio_rel_laboral;
        $controler->inputs->salario_diario = $inputs->texts->salario_diario;
        $controler->inputs->salario_diario_integrado = $inputs->texts->salario_diario_integrado;

        return $controler->inputs;
    }

    private function asigna_inputs_cuenta_bancaria(controlador_em_empleado $controler, stdClass $inputs): array|stdClass
    {
        $inputs_ = $this->asigna_inputs_base(controler: $controler,inputs:  $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs_);
        }

        return $inputs_;
    }

    private function asigna_inputs_anticipo(controlador_em_empleado $controler, stdClass $inputs): array|stdClass
    {
        $controler->inputs->select = new stdClass();
        $controler->inputs->select->em_empleado_id = $inputs->selects->em_empleado_id;
        $controler->inputs->select->em_tipo_anticipo_id = $inputs->selects->em_tipo_anticipo_id;

        $controler->inputs->monto = $inputs->texts->monto;
        $controler->inputs->fecha_prestacion = $inputs->texts->fecha_prestacion;
        return $controler->inputs;
    }

    public function genera_inputs_alta(controlador_em_empleado $controler, array $keys_selects = array()): array|stdClass
    {
        $inputs = $this->init_alta2(modelo: $controler->modelo, link: $controler->link, keys_selects:$keys_selects);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);
        }

        $inputs_asignados = $this->asigna_inputs(controler:$controler, inputs: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al asignar inputs',data:  $inputs_asignados);
        }

        return $inputs_asignados;
    }

    private function genera_inputs_modifica(controlador_em_empleado $controler,
                                            array $keys_selects = array()): array|stdClass
    {
        $inputs = $this->init_alta2(modelo: $controler->modelo, link: $controler->link,keys_selects:$keys_selects);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);
        }
        $inputs_asignados = $this->asigna_inputs(controler:$controler, inputs: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al asignar inputs',data:  $inputs_asignados);
        }

        return $inputs_asignados;
    }

    public function genera_inputs_anticipo(controlador_em_empleado $controler,PDO $link,
                                                  stdClass $params = new stdClass()): array|stdClass
    {
        $inputs = $this->init_anticipo(link: $link, row_upd: $controler->row_upd, params: $params);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);

        }
        $inputs_asignados = $this->asigna_inputs_anticipo(controler: $controler, inputs: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al asignar inputs',data:  $inputs_asignados);
        }

        return $inputs_asignados;
    }

    public function genera_inputs_genera_anticipo(controlador_em_empleado $controler, PDO $link,
                                                  array $keys_selects = array()): array|stdClass
    {
        $inputs = (new em_anticipo_html(html: $this->html_base))->init_alta2(modelo: $controler->modelo,link: $link,keys_selects: $keys_selects);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al generar inputs', data: $inputs);
        }

        $inputs_asignados = $this->asigna_inputs_anticipo(controler: $controler, inputs: $inputs);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al asignar inputs', data: $inputs_asignados);
        }

        return $inputs;
    }


    public function genera_inputs_cuenta_bancaria(controlador_em_empleado $controler,PDO $link,
                                                  stdClass $params = new stdClass()): array|stdClass
    {
        $inputs = $this->init_cuenta_bancaria(link: $link, row_upd: $controler->row_upd, params: $params);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);

        }
        $inputs_asignados = $this->asigna_inputs_cuenta_bancaria(controler: $controler, inputs: $inputs);
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

        $params =  new stdClass();
        $params->nombre = new stdClass();
        $params->nombre->cols = 6;
        $texts = $this->texts_alta(row_upd: new stdClass(), value_vacio: true, params: $params);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar texts',data:  $texts);
        }

        $alta_inputs = new stdClass();
        $alta_inputs->selects = $selects;
        $alta_inputs->texts = $texts;

        return $alta_inputs;
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

    private function init_anticipo(PDO $link, stdClass $row_upd, stdClass $params = new stdClass()): array|stdClass
    {

        $selects = $this->selects_anticipo(link: $link, row_upd: $row_upd);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects',data:  $selects);
        }

        $texts = $this->texts_anticipo(row_upd: $row_upd, value_vacio: false, params: $params);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar texts',data:  $texts);
        }

        $alta_inputs = new stdClass();
        $alta_inputs->texts = $texts;
        $alta_inputs->selects = $selects;

        return $alta_inputs;
    }

    private function init_cuenta_bancaria(PDO $link, stdClass $row_upd, stdClass $params = new stdClass()): array|stdClass
    {

        $selects = $this->selects_cuenta_bancaria(link: $link, row_upd: $row_upd);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects',data:  $selects);
        }

        $texts = $this->texts_cuenta_bancaria(row_upd: $row_upd, value_vacio: false, params: $params);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar texts',data:  $texts);
        }

        $alta_inputs = new stdClass();
        $alta_inputs->texts = $texts;
        $alta_inputs->selects = $selects;

        return $alta_inputs;
    }


    public function inputs_em_empleado(controlador_em_empleado $controlador,array $keys_selects = array()): array|stdClass
    {
        $inputs = $this->genera_inputs_modifica(controler: $controlador,keys_selects: $keys_selects);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);
        }
        return $inputs;
    }

    /**
     * Genera un input de tipo nombre
     * @param int $cols N columnas css
     * @param stdClass $row_upd registro en proceso
     * @param bool $value_vacio si vacio deja el input limpio
     * @param bool $disabled si disabled el input queda deshabiliado
     * @return array|string
     * @version 0.50.6
     */
    public function input_nombre(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: $disabled,name: 'nombre',place_holder: 'Nombre',
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

    /**
     * Genera un input de tipo ap
     * @param int $cols N columnas css
     * @param stdClass $row_upd registro en proceso
     * @param bool $value_vacio si vacio deja el input sin value
     * @param bool $disabled si disabled el input queda con el atributo disabled
     * @return array|string
     * @version 0.50.6
     */
    public function input_ap(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: $disabled,name: 'ap',place_holder: 'Apellido paterno',
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

    public function input_am(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text(disable: $disabled,name: 'am',place_holder: 'Apellido materno',
            required: false, row_upd: $row_upd, value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $this->directivas->html->div_group(cols: $cols,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }

    public function input_telefono(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: $disabled,name: 'telefono',place_holder: 'Telefono',
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

    public function input_rfc(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: $disabled,name: 'rfc',place_holder: 'Rfc',
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

    public function input_curp(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: $disabled,name: 'curp',place_holder: 'Curp',
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

    public function input_nss(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: $disabled,name: 'nss',place_holder: 'Nss',
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

    public function input_fecha_inicio_rel_laboral(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->fecha_required(disable: $disabled,name: 'fecha_inicio_rel_laboral',place_holder: 'Fecha inicio relacion laboral',
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

    public function input_cuenta_bancaria(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: $disabled,name: 'cuenta_bancaria',place_holder: 'Cuenta bancaria',
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

    public function input_salario_diario(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: $disabled,name: 'salario_diario',place_holder: 'Salario diario',
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

    public function input_salario_diario_integrado(int $cols, stdClass $row_upd, bool $value_vacio, bool $disabled = false): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: $disabled,name: 'salario_diario_integrado',place_holder: 'Salario diario integrado',
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

    private function selects_anticipo(PDO $link, stdClass $row_upd): array|stdClass
    {
        $selects = new stdClass();

        $select = (new em_empleado_html(html:$this->html_base))->select_em_empleado_id(
            cols: 6, con_registros:true, id_selected:$row_upd->em_empleado_id,link: $link,disabled: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->em_empleado_id = $select;

        $select = (new em_tipo_anticipo_html(html:$this->html_base))->select_em_tipo_anticipo_id(
            cols: 6, con_registros:true, id_selected:$row_upd->em_tipo_anticipo_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->em_tipo_anticipo_id = $select;

        return $selects;
    }

    private function selects_cuenta_bancaria(PDO $link, stdClass $row_upd): array|stdClass
    {
        $selects = new stdClass();

        $select = (new em_empleado_html(html:$this->html_base))->select_em_empleado_id(
            cols: 6, con_registros:true, id_selected:$row_upd->em_empleado_id,link: $link,disabled: true);
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

    private function selects_modifica(PDO $link, stdClass $row_upd): array|stdClass
    {
        $selects = new stdClass();

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

        $select = (new org_puesto_html(html:$this->html_base))->select_org_puesto_id(
            cols: 6, con_registros:true, id_selected:$row_upd->org_puesto_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->org_puesto_id = $select;

        $select = (new cat_sat_tipo_regimen_nom_html(html:$this->html_base))->select_cat_sat_tipo_regimen_nom_id(
            cols: 6, con_registros:true, id_selected:$row_upd->cat_sat_tipo_regimen_nom_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->cat_sat_tipo_regimen_nom_id = $select;

        $select = (new im_registro_patronal_html(html:$this->html_base))->select_im_registro_patronal_id(
            cols: 6, con_registros:true, id_selected:$row_upd->im_registro_patronal_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->im_registro_patronal_id = $select;



        return $selects;
    }

    /**
     * Genera un input de tipo empleado
     * @param int $cols N columnas css
     * @param bool $con_registros si con registros deja el input con rows para options
     * @param int $id_selected identificador selected
     * @param PDO $link conexion a la bd
     * @param array $filtro filtro para obtencion de datos
     * @param bool $disabled si disabled el input queda disabled
     * @return array|string
     */
    public function select_em_empleado_id(int $cols, bool $con_registros, mixed $id_selected, PDO $link,
                                          array $filtro = array(), bool $disabled = false): array|string
    {

        $valida = (new directivas(html:$this->html_base))->valida_cols(cols:$cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }
        if(is_null($id_selected)){
            $id_selected = -1;
        }

        $modelo = new em_empleado(link: $link);

        $extra_params_keys[] = 'em_empleado_id';
        $extra_params_keys[] = 'em_empleado_rfc';
        $extra_params_keys[] = 'em_empleado_curp';
        $extra_params_keys[] = 'em_empleado_nss';
        $extra_params_keys[] = 'em_empleado_salario_diario';
        $extra_params_keys[] = 'em_empleado_salario_diario_integrado';
        $extra_params_keys[] = 'em_empleado_fecha_inicio_rel_laboral';
        $extra_params_keys[] = 'em_empleado_org_puesto_id';

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected,modelo: $modelo,
            disabled: $disabled,extra_params_keys:$extra_params_keys,filtro: $filtro,label: 'Empleado',required: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

    protected function texts_alta(stdClass $row_upd, bool $value_vacio, stdClass $params = new stdClass()): array|stdClass
    {
        $texts = new stdClass();

        $cols_codigo         = $params->codigo->cols ?? 6;
        $disabled_codigo     = $params->codigo->disabled ?? false;

        $in_codigo = $this->input_codigo(cols: $cols_codigo, row_upd: $row_upd, value_vacio: $value_vacio,
            disabled: $disabled_codigo);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_codigo);
        }
        $texts->codigo = $in_codigo;

        $cols_codigo_bis     = $params->codigo_bis->cols ?? 6;
        $disabled_codigo_bis = $params->codigo_bis->disabled ?? false;

        $in_codigo_bis = $this->input_codigo_bis(cols: $cols_codigo_bis,row_upd:  $row_upd,value_vacio:  $value_vacio,
            disabled:$disabled_codigo_bis);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_codigo);
        }
        $texts->codigo_bis = $in_codigo_bis;

        $cols_nombre     = $params->nombre->cols ?? 6;

        $in_nombre= $this->input_nombre(cols: $cols_nombre,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_nombre);
        }
        $texts->nombre = $in_nombre;

        $in_ap = $this->input_ap(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_ap);
        }
        $texts->ap = $in_ap;

        $in_am = $this->input_am(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_am);
        }
        $texts->am = $in_am;

        $in_telefono = $this->input_telefono(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_telefono);
        }
        $texts->telefono = $in_telefono;

        $in_rfc= $this->input_rfc(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_rfc);
        }
        $texts->rfc = $in_rfc;

        $in_curp = $this->input_curp(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_curp);
        }
        $texts->curp = $in_curp;

        $in_nss = $this->input_nss(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_nss);
        }
        $texts->nss = $in_nss;

        $row_upd->fecha_inicio_rel_laboral = date('Y-m-d');

        $in_fecha_inicio_rel_laboral = $this->input_fecha_inicio_rel_laboral(cols: 6,row_upd:  $row_upd,value_vacio: false);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_fecha_inicio_rel_laboral);
        }
        $texts->fecha_inicio_rel_laboral = $in_fecha_inicio_rel_laboral;

        $in_cuenta_bancaria= $this->input_cuenta_bancaria(cols: 12,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_cuenta_bancaria);
        }
        $texts->cuenta_bancaria = $in_cuenta_bancaria;

        $in_salario_diario = $this->input_salario_diario(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_salario_diario);
        }
        $texts->salario_diario = $in_salario_diario;

        $in_salario_diario_integrado = $this->input_salario_diario_integrado(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_salario_diario_integrado);
        }
        $texts->salario_diario_integrado = $in_salario_diario_integrado;

        $in_num_cuenta= $this->input_num_cuenta(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_num_cuenta);
        }
        $texts->num_cuenta = $in_num_cuenta;

        $in_clabe= $this->input_clabe(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_clabe);
        }
        $texts->num_cuenta = $in_clabe;

        return $texts;
    }

    private function texts_anticipo(stdClass $row_upd, bool $value_vacio, stdClass $params = new stdClass()): array|stdClass
    {
        $texts = new stdClass();

        $in_monto = $this->input_monto(cols: 6,row_upd:  $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_monto);
        }
        $texts->monto = $in_monto;

        $in_fecha_prestacion = $this->input_fecha_prestacion(cols: 6,row_upd:  $row_upd,value_vacio: false);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input',data:  $in_fecha_prestacion);
        }
        $texts->fecha_prestacion = $in_fecha_prestacion;

        return $texts;
    }

    private function texts_cuenta_bancaria(stdClass $row_upd, bool $value_vacio, stdClass $params = new stdClass()): array|stdClass
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
}
