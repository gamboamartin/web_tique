<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace gamboamartin\empleado\controllers;

use base\frontend\params_inputs;
use gamboamartin\empleado\models\em_anticipo;
use gamboamartin\empleado\models\em_cuenta_bancaria;
use gamboamartin\errores\errores;
use gamboamartin\system\actions;
use gamboamartin\system\init;
use gamboamartin\system\links_menu;
use gamboamartin\system\system;
use gamboamartin\template\html;
use html\cat_sat_moneda_html;
use html\em_empleado_html;
use gamboamartin\empleado\models\em_empleado;
use PDO;
use stdClass;
use Throwable;

class controlador_em_empleado extends system {

    public array $keys_selects = array();
    public stdClass $cuentas_bancarias;
    public stdClass $anticipos;
    public string $link_em_anticipo_alta_bd = '';

    public function __construct(PDO $link, html $html = new \gamboamartin\template_1\html(),
                                stdClass $paths_conf = new stdClass()){
        $modelo = new em_empleado(link: $link);
        $html_ = new em_empleado_html(html: $html);
        $obj_link = new links_menu($this->registro_id);
        parent::__construct(html:$html_, link: $link,modelo:  $modelo, obj_link: $obj_link, paths_conf: $paths_conf);

        $this->titulo_lista = 'Empleados';

        $keys_rows_lista = $this->keys_rows_lista();
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al generar keys de lista', data: $keys_rows_lista);
            print_r($error);
            die('Error');
        }
        $this->keys_row_lista = $keys_rows_lista;

        $link_em_anticipo_alta_bd = $obj_link->link_con_id(accion: 'genera_anticipo_alta_bd',
            registro_id: $this->registro_id, seccion: $this->seccion);
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al generar link', data: $link_em_anticipo_alta_bd);
            print_r($error);
            die('Error');
        }

        $this->link_em_anticipo_alta_bd = $link_em_anticipo_alta_bd;

        $this->keys_selects['dp_calle_pertenece_id'] = new stdClass();
        $this->keys_selects['dp_calle_pertenece_id']->label = 'Calle Pertenece';

        $this->keys_selects['cat_sat_regimen_fiscal_id'] = new stdClass();
        $this->keys_selects['cat_sat_regimen_fiscal_id']->label = 'Regimen Fiscal';

        $this->keys_selects['im_registro_patronal_id'] = new stdClass();
        $this->keys_selects['im_registro_patronal_id']->label = 'Registro Patronal Fiscal';

        $this->keys_selects['org_puesto_id'] = new stdClass();
        $this->keys_selects['org_puesto_id']->label = 'Puesto';
        $this->keys_selects['org_puesto_id']->required = false;

        $this->keys_selects['cat_sat_tipo_regimen_nom_id'] = new stdClass();
        $this->keys_selects['cat_sat_tipo_regimen_nom_id']->label = 'Tipo Regimen Nom';
    }

    public function alta(bool $header, bool $ws = false): array|string
    {
        $r_alta =  parent::alta(header: false, ws: false);
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al generar template',data:  $r_alta, header: $header,ws:$ws);
        }

        $inputs = (new em_empleado_html(html: $this->html_base))->genera_inputs_alta(controler: $this,
            keys_selects:  $this->keys_selects);
        if(errores::$error){
            $error = $this->errores->error(mensaje: 'Error al generar inputs',data:  $inputs);
            print_r($error);
            die('Error');
        }
        return $r_alta;
    }

    private function asigna_keys_post(array $keys_generales): array
    {
        $registro = array();
        foreach ($keys_generales as $key_general){
            $registro = $this->asigna_key_post(key_general: $key_general,registro:  $registro);
            if(errores::$error){
                return $this->errores->error(mensaje: 'Error al asignar key post',data:  $registro);
            }
        }
        return $registro;
    }

    private function asigna_key_post(string $key_general, array $registro): array
    {
        if(isset($_POST[$key_general])){
            $registro[$key_general] = $_POST[$key_general];
        }
        return $registro;
    }

    private function asigna_link_genera_anticipo_row(stdClass $row): array|stdClass
    {
        $keys = array('em_empleado_id');
        $valida = $this->validacion->valida_ids(keys: $keys,registro:  $row);
        if(errores::$error){
            return $this->errores->error(mensaje: 'Error al validar row',data:  $valida);
        }

        $link_genera_anticipo = $this->obj_link->link_con_id(accion:'genera_anticipo',registro_id:  $row->em_empleado_id,
            seccion:  $this->tabla);
        if(errores::$error){
            return $this->errores->error(mensaje: 'Error al genera link',data:  $link_genera_anticipo);
        }

        $row->link_genera_anticipo = $link_genera_anticipo;
        $row->link_genera_anticipo_style = 'info';

        return $row;
    }

    private function asigna_link_ver_anticipos_row(stdClass $row): array|stdClass
    {
        $keys = array('em_empleado_id');
        $valida = $this->validacion->valida_ids(keys: $keys,registro:  $row);
        if(errores::$error){
            return $this->errores->error(mensaje: 'Error al validar row',data:  $valida);
        }

        $link_ver_anticipos = $this->obj_link->link_con_id(accion:'ver_anticipos',registro_id:  $row->em_empleado_id,
            seccion:  $this->tabla);
        if(errores::$error){
            return $this->errores->error(mensaje: 'Error al genera link',data:  $link_ver_anticipos);
        }

        $row->link_ver_anticipos = $link_ver_anticipos;
        $row->link_ver_anticipos_style = 'info';

        return $row;
    }

    public function anticipo(bool $header, bool $ws = false): array|stdClass
    {
        $r_modifica =  parent::modifica(header: false,aplica_form:  false); // TODO: Change the autogenerated stub
        if(errores::$error){
            return $this->errores->error(mensaje: 'Error al generar template',data:  $r_modifica);
        }

        $this->row_upd->em_empleado_id = $this->registro_id;
        $this->row_upd->em_tipo_anticipo_id = -1;

        $inputs = (new em_empleado_html(html: $this->html_base))->genera_inputs_anticipo(controler: $this,
            link: $this->link);
        if(errores::$error){
            $error = $this->errores->error(mensaje: 'Error al generar inputs',data:  $inputs);
            print_r($error);
            die('Error');
        }

        $anticipos = (new em_anticipo($this->link))->anticipos(em_empleado_id: $this->registro_id);
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al obtener cuentas_bancarias',data:  $anticipos, header: $header,ws:$ws);
        }

        $this->anticipos = $anticipos;

        return $inputs;
    }

    public function alta_cuenta_bancaria_bd(bool $header, bool $ws = false){

        $this->link->beginTransaction();

        $siguiente_view = (new actions())->init_alta_bd();
        if(errores::$error){
            $this->link->rollBack();
            return $this->retorno_error(mensaje: 'Error al obtener siguiente view', data: $siguiente_view,
                header:  $header, ws: $ws);
        }


        if(isset($_POST['guarda'])){
            unset($_POST['guarda']);
        }
        if(isset($_POST['btn_action_next'])){
            unset($_POST['btn_action_next']);
        }


        $registro = $_POST;
        $registro['em_empleado_id'] = $this->registro_id;

        $r_alta_cuenta_bancaria_bd = (new em_cuenta_bancaria($this->link))->alta_registro(registro:$registro); // TODO: Change the autogenerated stub
        if(errores::$error){
            $this->link->rollBack();
            return $this->retorno_error(mensaje: 'Error al dar de alta cuenta_bancaria',data:  $r_alta_cuenta_bancaria_bd,
                header: $header,ws:$ws);
        }


        $this->link->commit();



        if($header){

            $retorno = (new actions())->retorno_alta_bd(registro_id:$this->registro_id,seccion: $this->tabla,
                siguiente_view: $siguiente_view);
            if(errores::$error){
                return $this->retorno_error(mensaje: 'Error al dar de alta registro', data: $r_alta_cuenta_bancaria_bd,
                    header:  true, ws: $ws);
            }
            header('Location:'.$retorno);
            exit;
        }
        if($ws){
            header('Content-Type: application/json');
            echo json_encode($r_alta_cuenta_bancaria_bd, JSON_THROW_ON_ERROR);
            exit;
        }

        return $r_alta_cuenta_bancaria_bd;

    }

    public function alta_anticipo_bd(bool $header, bool $ws = false){

        $this->link->beginTransaction();

        $siguiente_view = (new actions())->init_alta_bd();
        if(errores::$error){
            $this->link->rollBack();
            return $this->retorno_error(mensaje: 'Error al obtener siguiente view', data: $siguiente_view,
                header:  $header, ws: $ws);
        }


        if(isset($_POST['guarda'])){
            unset($_POST['guarda']);
        }
        if(isset($_POST['btn_action_next'])){
            unset($_POST['btn_action_next']);
        }


        $registro = $_POST;
        $registro['em_empleado_id'] = $this->registro_id;

        $r_alta_anticipo_bd = (new em_anticipo($this->link))->alta_registro(registro:$registro); // TODO: Change the autogenerated stub
        if(errores::$error){
            $this->link->rollBack();
            return $this->retorno_error(mensaje: 'Error al dar de alta anticipo',data:  $r_alta_anticipo_bd,
                header: $header,ws:$ws);
        }


        $this->link->commit();



        if($header){

            $retorno = (new actions())->retorno_alta_bd(registro_id:$this->registro_id,seccion: $this->tabla,
                siguiente_view: $siguiente_view);
            if(errores::$error){
                return $this->retorno_error(mensaje: 'Error al dar de alta registro', data: $r_alta_anticipo_bd,
                    header:  true, ws: $ws);
            }
            header('Location:'.$retorno);
            exit;
        }
        if($ws){
            header('Content-Type: application/json');
            echo json_encode($r_alta_anticipo_bd, JSON_THROW_ON_ERROR);
            exit;
        }

        return $r_alta_anticipo_bd;

    }

    private function base(stdClass $params = new stdClass()): array|stdClass
    {
        $r_modifica =  parent::modifica(header: false,aplica_form:  false); // TODO: Change the autogenerated stub
        if(errores::$error){
            return $this->errores->error(mensaje: 'Error al generar template',data:  $r_modifica);
        }

        $this->keys_selects['dp_calle_pertenece_id']->id_selected = $this->row_upd->dp_calle_pertenece_id;
        $this->keys_selects['cat_sat_regimen_fiscal_id']->id_selected = $this->row_upd->cat_sat_regimen_fiscal_id;
        $this->keys_selects['im_registro_patronal_id']->id_selected = $this->row_upd->im_registro_patronal_id;
        $this->keys_selects['org_puesto_id']->id_selected = $this->row_upd->org_puesto_id;
        $this->keys_selects['cat_sat_tipo_regimen_nom_id']->id_selected = $this->row_upd->cat_sat_tipo_regimen_nom_id;

        $inputs = (new em_empleado_html(html: $this->html_base))->genera_inputs_alta(controler: $this,
            keys_selects: $this->keys_selects);
        if(errores::$error){
            return $this->errores->error(mensaje: 'Error al inicializar inputs',data:  $inputs);
        }

        $data = new stdClass();
        $data->template = $r_modifica;
        $data->inputs = $inputs;

        return $data;
    }

    public function calcula_sdi(bool $header, bool $ws = true){
        $em_empleado_id = $_GET['em_empleado_id'];
        $fecha_inicio_rel = $_GET['fecha_inicio_rel_laboral'];
        $salario_diario = $_GET['salario_diario'];

        $result = (new em_empleado($this->link))->calcula_sdi(em_empleado_id: $em_empleado_id,
            fecha_inicio_rel: $fecha_inicio_rel, salario_diario: $salario_diario);
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al obtener',data:  $result, header: $header,ws:$ws);
        }

        if($header){
            $retorno = $_SERVER['HTTP_REFERER'];
            header('Location:'.$retorno);
            exit;
        }
        if($ws){
            header('Content-Type: application/json');
            try {
                echo json_encode($result, JSON_THROW_ON_ERROR);
            }
            catch (Throwable $e){
                return $this->retorno_error(mensaje: 'Error al maquetar estados',data:  $e, header: false,ws:$ws);
            }
            exit;
        }

        return $result;
    }

    public function cuenta_bancaria(bool $header, bool $ws = false): array|stdClass
    {
        $r_modifica =  parent::modifica(header: false,aplica_form:  false); // TODO: Change the autogenerated stub
        if(errores::$error){
            return $this->errores->error(mensaje: 'Error al generar template',data:  $r_modifica);
        }

        $this->row_upd->em_empleado_id = $this->registro_id;
        $this->row_upd->bn_sucursal_id = -1;

        $inputs = (new em_empleado_html(html: $this->html_base))->genera_inputs_cuenta_bancaria(controler: $this,
            link: $this->link);
        if(errores::$error){
            $error = $this->errores->error(mensaje: 'Error al generar inputs',data:  $inputs);
            print_r($error);
            die('Error');
        }

        $cuentas_bancarias = (new em_cuenta_bancaria($this->link))->cuentas_bancarias(em_empleado_id: $this->registro_id);
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al obtener cuentas_bancarias',data:  $cuentas_bancarias, header: $header,ws:$ws);
        }

        $this->cuentas_bancarias = $cuentas_bancarias;

        return $inputs;
    }

    private function data_anticipo_btn(array $anticipo): array
    {
        $btn_elimina = $this->html_base->button_href(accion: 'elimina_bd', etiqueta: 'Elimina',
            registro_id: $anticipo['em_anticipo_id'], seccion: 'em_anticipo', style: 'danger');
        if (errores::$error) {
            return $this->errores->error(mensaje: 'Error al generar btn', data: $btn_elimina);
        }
        $anticipo['link_elimina'] = $btn_elimina;

        $btn_modifica = $this->html_base->button_href(accion: 'modifica', etiqueta: 'Modifica',
            registro_id: $anticipo['em_anticipo_id'], seccion: 'em_anticipo', style: 'warning');
        if (errores::$error) {
            return $this->errores->error(mensaje: 'Error al generar btn', data: $btn_modifica);
        }
        $anticipo['link_modifica'] = $btn_modifica;

        return $anticipo;
    }

    public function fiscales(bool $header, bool $ws = false): array|stdClass
    {
        $base = $this->base();
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al maquetar datos',data:  $base,
                header: $header,ws:$ws);
        }

        return $base;

    }

    public function genera_anticipo(bool $header, bool $ws = false): array|stdClass
    {
        $r_alta = parent::alta(header: false, ws: false);
        if (errores::$error) {
            return $this->retorno_error(mensaje: 'Error al generar template', data: $r_alta, header: $header, ws: $ws);
        }

        $keys_selects = array();
        $keys_selects['em_empleado_id'] = new stdClass();
        $keys_selects['em_empleado_id']->cols = 6;
        $keys_selects['em_empleado_id']->disabled = true;
        $keys_selects['em_empleado_id']->filtro = array('em_empleado.id' => $this->registro_id);
        $keys_selects['em_empleado_id']->id_selected = $this->registro_id;
        $keys_selects['em_empleado_id']->label = 'Empleado';

        $keys_selects['em_tipo_anticipo_id'] = new stdClass();
        $keys_selects['em_tipo_anticipo_id']->cols = 6;
        $keys_selects['em_tipo_anticipo_id']->label = 'Tipo Anticipo';

        $inputs = (new em_empleado_html(html: $this->html_base))->genera_inputs_genera_anticipo(controler: $this,
            link: $this->link,keys_selects: $keys_selects);
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al generar inputs', data: $inputs);
            print_r($error);
            die('Error');
        }

        return $inputs;
    }

    public function genera_anticipo_alta_bd(bool $header, bool $ws = false): array|stdClass
    {
        $this->link->beginTransaction();

        $siguiente_view = (new actions())->init_alta_bd();
        if (errores::$error) {
            $this->link->rollBack();
            return $this->retorno_error(mensaje: 'Error al obtener siguiente view', data: $siguiente_view,
                header: $header, ws: $ws);
        }

        if (isset($_POST['btn_action_next'])) {
            unset($_POST['btn_action_next']);
        }
        $_POST['em_empleado_id'] = $this->registro_id;

        $alta = (new em_anticipo($this->link))->alta_registro(registro: $_POST);
        if (errores::$error) {
            $this->link->rollBack();
            return $this->retorno_error(mensaje: 'Error al dar de alta percepcion', data: $alta,
                header: $header, ws: $ws);
        }

        $this->link->commit();

        if ($header) {
            $this->retorno_base(registro_id:$this->registro_id, result: $alta,
                siguiente_view: "lista", ws:  $ws);
        }
        if ($ws) {
            header('Content-Type: application/json');
            echo json_encode($alta, JSON_THROW_ON_ERROR);
            exit;
        }
        $alta->siguiente_view = "lista";

        return $alta;
    }

    public function imss(bool $header, bool $ws = false): array|stdClass
    {
        $base = $this->base();
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al maquetar datos',data:  $base,
                header: $header,ws:$ws);
        }

        return $base;

    }

    public function lista(bool $header, bool $ws = false): array
    {
        $r_lista = parent::lista($header, $ws); // TODO: Change the autogenerated stub
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al maquetar datos',data:  $r_lista, header: $header,ws:$ws);
        }

        $registros = $this->maqueta_registros_lista(registros: $this->registros);
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al maquetar registros',data:  $registros, header: $header,ws:$ws);
        }
        $this->registros = $registros;


        return $r_lista;
    }

    private function keys_rows_lista(): array
    {
        $keys_rows_lista = array();
        $keys = array('em_empleado_id','em_empleado_codigo','em_empleado_nombre','em_empleado_ap','em_empleado_am','em_empleado_rfc');

        foreach ($keys as $campo) {
            $keys_rows_lista = $this->key_row_lista_init(campo: $campo,keys_rows_lista: $keys_rows_lista);
            if (errores::$error){
                return $this->errores->error(mensaje: "error al inicializar key",data: $keys_rows_lista);
            }
        }

        return $keys_rows_lista;
    }

    private function key_row_lista_init(string $campo, array $keys_rows_lista): array
    {
        $data = new stdClass();
        $data->campo = $campo;

        $campo = str_replace(array("em_empleado", "em_", "_"), '', $campo);
        $campo = ucfirst(strtolower($campo));

        $data->name_lista = $campo;
        $keys_rows_lista[] = $data;

        return $keys_rows_lista;
    }

    public function modifica(bool $header, bool $ws = false, string $breadcrumbs = '', bool $aplica_form = true,
                             bool $muestra_btn = true): array|string
    {
        $params =  new stdClass();
        $params->codigo = new stdClass();
        $params->codigo->cols = 8;

        $base = $this->base(params: $params);
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al maquetar datos',data:  $base,
                header: $header,ws:$ws);
        }

        return $base->template;
    }

    public function modifica_fiscales(bool $header, bool $ws = false): array|stdClass
    {
        $keys_fiscales[] = 'cat_sat_regimen_fiscal_id';
        $keys_fiscales[] = 'rfc';

        $r_modifica_bd = $this->upd_base(keys_generales: $keys_fiscales);
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al modificar cif',data:  $r_modifica_bd,
                header: $header,ws:$ws);
        }

        $_SESSION[$r_modifica_bd->salida][]['mensaje'] = $r_modifica_bd->mensaje.' del id '.$this->registro_id;
        $this->header_out(result: $r_modifica_bd, header: $header,ws:  $ws);

        return $r_modifica_bd;
    }

    private function maqueta_registros_lista(array $registros): array
    {
        foreach ($registros as $indice=> $row){
            $row = $this->asigna_link_genera_anticipo_row(row: $row);
            if(errores::$error){
                return $this->errores->error(mensaje: 'Error al maquetar row',data:  $row);
            }
            $registros[$indice] = $row;

            $row = $this->asigna_link_ver_anticipos_row(row: $row);
            if(errores::$error){
                return $this->errores->error(mensaje: 'Error al maquetar row',data:  $row);
            }
            $registros[$indice] = $row;
        }
        return $registros;
    }

    private function upd_base(array $keys_generales): array|stdClass
    {
        $registro = $this->asigna_keys_post(keys_generales: $keys_generales);
        if(errores::$error){
            return $this->errores->error(mensaje: 'Error al asignar keys post',data:  $registro);
        }

        $r_modifica_bd = $this->modelo->modifica_bd(registro: $registro, id: $this->registro_id);
        if(errores::$error){

            return $this->errores->error(mensaje: 'Error al modificar generales',data:  $r_modifica_bd);
        }
        return $r_modifica_bd;
    }

    public function ver_anticipos(bool $header, bool $ws = false): array|stdClass
    {
        $filtro['em_anticipo.em_empleado_id'] = $this->registro_id;
        $anticipos = (new em_anticipo($this->link))->filtro_and(filtro: $filtro);
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al obtener anticipos',data:  $anticipos,
                header: $header,ws:$ws);
        }

        foreach ($anticipos->registros as $indice => $anticipo) {
            $anticipo = $this->data_anticipo_btn(anticipo: $anticipo);
            if (errores::$error) {
                return $this->retorno_error(mensaje: 'Error al asignar botones', data: $anticipo, header: $header, ws: $ws);
            }
            $anticipos->registros[$indice] = $anticipo;
        }

        $this->anticipos = $anticipos;

        return $this->anticipos;
    }

}
