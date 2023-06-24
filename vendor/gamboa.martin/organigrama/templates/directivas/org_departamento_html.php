<?php
namespace html;

use gamboamartin\errores\errores;
use gamboamartin\organigrama\controllers\controlador_org_departamento;
use gamboamartin\organigrama\controllers\controlador_org_puesto;
use gamboamartin\organigrama\models\org_departamento;
use gamboamartin\system\html_controler;
use gamboamartin\template\directivas;
use gamboamartin\validacion\validacion;

use PDO;
use stdClass;

class org_departamento_html extends html_controler {


    private function asigna_inputs(controlador_org_departamento $controler, stdClass $inputs): array|stdClass
    {
        $keys = array('selects');
        $valida = (new validacion())->valida_existencia_keys(keys: $keys, registro: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar inputs',data:  $valida);
        }

        $keys = array('org_empresa_id','org_clasificacion_dep_id');
        $valida = (new validacion())->valida_existencia_keys(keys: $keys, registro: $inputs->selects);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar inputs',data:  $valida);
        }

        if(is_array($controler->inputs)){
            $controler->inputs = new stdClass();
        }

        $controler->inputs->select = new stdClass();
        $controler->inputs->select->org_empresa_id = $inputs->selects->org_empresa_id;
        $controler->inputs->select->org_clasificacion_dep_id = $inputs->selects->org_clasificacion_dep_id;

        return $controler->inputs;
    }

    public function genera_inputs_alta(controlador_org_departamento $controler, array $keys_selects,PDO $link): array|stdClass
    {
        $inputs = $this->init_alta(keys_selects: $keys_selects, link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);

        }
        $inputs_asignados = $this->asigna_inputs(controler:$controler, inputs: $inputs);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al asignar inputs',data:  $inputs_asignados);
        }

        return $inputs_asignados;
    }

    private function genera_inputs_modifica(controlador_org_departamento $controler,PDO $link): array|stdClass
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

    public function inputs_org_departamento(controlador_org_departamento $controlador_org_departamento): array|stdClass
    {
        $inputs = $this->genera_inputs_modifica(controler: $controlador_org_departamento, link: $controlador_org_departamento->link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);
        }
        return $inputs;
    }


    public function select_org_departamento_id(int $cols, bool $con_registros, int|NULL $id_selected,
                                         PDO $link, bool $disabled = false, bool $required = false): array|string
    {
        $valida = (new directivas(html:$this->html_base))->valida_cols(cols:$cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }
        
        if(is_null($id_selected)){
            $id_selected = -1;
        }

        $modelo = new org_departamento($link);

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected,
            modelo: $modelo, disabled: $disabled,label: "Departamento",required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

    private function selects_modifica(PDO $link, stdClass $row_upd): array|stdClass
    {

        $selects = new stdClass();

        $select = (new org_clasificacion_dep_html(html:$this->html_base))->select_org_clasificacion_dep_id(
            cols: 12, con_registros:true, id_selected:$row_upd->org_tipo_puesto_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }

        $selects->org_tipo_puesto_id = $select;

        $select = (new org_empresa_html(html:$this->html_base))->select_org_empresa_id(
            cols: 6, con_registros:true, id_selected:$row_upd->org_empresa_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }

        $selects->org_empresa_id = $select;

        return $selects;
    }


}
