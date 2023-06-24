<?php
namespace html;

use base\orm\modelo;
use gamboamartin\errores\errores;
use gamboamartin\organigrama\controllers\controlador_org_puesto;
use gamboamartin\organigrama\models\org_puesto;
use gamboamartin\system\html_controler;
use gamboamartin\template\directivas;
use gamboamartin\validacion\validacion;


use PDO;
use stdClass;

class org_puesto_html extends html_controler {

    /**
     * Asigna los valores de un conjunto de inputs para se mostrados en front
     * @param controlador_org_puesto $controler Controlador en ejecucion
     * @param stdClass $inputs Inputs precargados
     * @return array|stdClass
     * @version 0.280.36
     */
    private function asigna_inputs(controlador_org_puesto $controler, stdClass $inputs): array|stdClass
    {
        $keys = array('selects');
        $valida = (new validacion())->valida_existencia_keys(keys: $keys, registro: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar inputs',data:  $valida);
        }

        $keys = array('org_tipo_puesto_id','org_departamento_id');
        $valida = (new validacion())->valida_existencia_keys(keys: $keys, registro: $inputs->selects);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar inputs',data:  $valida);
        }

        if(is_array($controler->inputs)){
            $controler->inputs = new stdClass();
        }

        $controler->inputs->select = new stdClass();
        $controler->inputs->select->org_tipo_puesto_id = $inputs->selects->org_tipo_puesto_id;
        $controler->inputs->select->org_departamento_id = $inputs->selects->org_departamento_id;

        return $controler->inputs;
    }

    public function genera_inputs_alta(controlador_org_puesto $controler, modelo $modelo, PDO $link, array $keys_selects = array()): array|stdClass
    {
        $inputs = $this->init_alta2(modelo: $modelo, link: $link,keys_selects:$keys_selects );
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);

        }
        $inputs_asignados = $this->asigna_inputs(controler:$controler, inputs: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al asignar inputs',data:  $inputs_asignados);
        }

        return $inputs_asignados;
    }


    private function genera_inputs_modifica(controlador_org_puesto $controler,PDO $link): array|stdClass
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

    private function init_modifica(PDO $link, stdClass $row_upd): array|stdClass
    {

        $selects = $this->selects_modifica(link: $link, row_upd: $row_upd);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects',data:  $selects);
        }

        $alta_inputs = new stdClass();
        $alta_inputs->selects = $selects;

        return $alta_inputs;
    }

    public function inputs_org_puesto(controlador_org_puesto $controlador_org_puesto): array|stdClass
    {
        $inputs = $this->genera_inputs_modifica(controler: $controlador_org_puesto, link: $controlador_org_puesto->link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);
        }
        return $inputs;
    }

    public function select_org_puesto_id(int $cols, bool $con_registros, int|NULL $id_selected,
                                         PDO $link, bool $disabled = false, bool $required = false): array|string
    {
        $valida = (new directivas(html:$this->html_base))->valida_cols(cols:$cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }
        
        if(is_null($id_selected)){
            $id_selected = -1;
        }

        $modelo = new org_puesto($link);

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected,
            modelo: $modelo, disabled: $disabled,label: "Puesto",required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

    private function selects_modifica(PDO $link, stdClass $row_upd): array|stdClass
    {

        $selects = new stdClass();

        $select = (new org_tipo_puesto_html(html:$this->html_base))->select_org_tipo_puesto_id(
            cols: 12, con_registros:true, id_selected:$row_upd->org_tipo_puesto_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }

        $selects->org_tipo_puesto_id = $select;

        $select = (new org_departamento_html(html:$this->html_base))->select_org_departamento_id(
            cols: 12, con_registros:true, id_selected:$row_upd->org_departamento_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }

        $selects->org_departamento_id = $select;

        return $selects;
    }

}
