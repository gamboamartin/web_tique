<?php
namespace html;

use gamboamartin\errores\errores;
use gamboamartin\im_registro_patronal\controllers\controlador_im_registro_patronal;
use gamboamartin\system\html_controler;
use gamboamartin\system\system;
use gamboamartin\template\directivas;
use models\im_registro_patronal;
use PDO;
use stdClass;


class im_registro_patronal_html extends html_controler {

    /**
     * Genera un select de tipo im registro patronal
     * @param int $cols No de columnas css
     * @param bool $con_registros si con registros muestra todos los registros
     * @param int|null $id_selected id para selected
     * @param PDO $link conexion a la base de datos
     * @param bool $required
     * @return array|string
     * @version 0.9.2
     */
    public function select_im_registro_patronal_id(int $cols,bool $con_registros,int|null $id_selected, PDO $link,
                                                   bool $required = false): array|string
    {
        $valida = (new directivas(html:$this->html_base))->valida_cols(cols:$cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }

        if(is_null($id_selected)){
            $id_selected = -1;
        }

        $modelo = new im_registro_patronal($link);

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected,
            modelo: $modelo,label: 'Registro Patronal',required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

    protected function asigna_inputs(system $controler, stdClass $inputs): array|stdClass
    {
        $controler->inputs->select = new stdClass();

        $controler->inputs->select->fc_csd_id = $inputs->selects->fc_csd_id;
        $controler->inputs->select->im_clase_riesgo_id = $inputs->selects->im_clase_riesgo_id;

        return $controler->inputs;
    }

    public function genera_inputs_alta(controlador_im_registro_patronal $controler, array $keys_selects,PDO $link): array|stdClass
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

    public function genera_inputs_modifica(controlador_im_registro_patronal $controler,PDO $link,
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


    private function init_modifica(PDO $link, stdClass $row_upd, stdClass $params = new stdClass()): array|stdClass
    {

        $selects = $this->selects_modifica(link: $link, row_upd: $row_upd);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar selects',data:  $selects);
        }

        $alta_inputs = new stdClass();

        $alta_inputs->selects = $selects;

        return $alta_inputs;
    }


    private function selects_modifica(PDO $link, stdClass $row_upd): array|stdClass
    {
        $selects = new stdClass();

        $select = (new fc_csd_html(html:$this->html_base))->select_fc_csd_id(
            cols: 12, con_registros:true, id_selected:$row_upd->fc_csd_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }
        $selects->fc_csd_id = $select;

        $select = (new im_clase_riesgo_html($this->html_base))->select_im_clase_riesgo_id(cols: 12, con_registros:true,
            id_selected: $row_upd->im_clase_riesgo_id,link: $link);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);
        }

        $selects->im_clase_riesgo_id = $select;

        return $selects;
    }

}
