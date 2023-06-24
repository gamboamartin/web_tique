<?php
namespace html;

use gamboamartin\errores\errores;
use gamboamartin\organigrama\controllers\controlador_org_clasificacion_dep;
use gamboamartin\organigrama\controllers\controlador_org_departamento;
use gamboamartin\organigrama\controllers\controlador_org_puesto;
use gamboamartin\system\html_controler;
use gamboamartin\template\directivas;
use gamboamartin\validacion\validacion;
use models\org_departamento;

use PDO;
use stdClass;

class org_clasificacion_dep_html extends html_controler {


    private function asigna_inputs(controlador_org_puesto $controler, stdClass $inputs): array|stdClass
    {


        if(is_array($controler->inputs)){
            $controler->inputs = new stdClass();
        }

        $controler->inputs->select = new stdClass();


        return $controler->inputs;
    }

    public function genera_inputs_alta(controlador_org_clasificacion_dep $controler, array $keys_selects,PDO $link): array|stdClass
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

    private function genera_inputs_modifica(controlador_org_clasificacion_dep $controler,PDO $link): array|stdClass
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

    public function inputs_org_departamento(controlador_org_clasificacion_dep $controlador_org_clasificacion_dep): array|stdClass
    {
        $inputs = $this->genera_inputs_modifica(controler: $controlador_org_clasificacion_dep, link: $controlador_org_clasificacion_dep->link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar inputs',data:  $inputs);
        }
        return $inputs;
    }


    public function select_org_clasificacion_dep_id(int $cols, bool $con_registros, int|NULL $id_selected,
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
            modelo: $modelo, disabled: $disabled,label: "Clasificacion Dep",required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

    private function selects_modifica(PDO $link, stdClass $row_upd): array|stdClass
    {

        $selects = new stdClass();


        return $selects;
    }


}
