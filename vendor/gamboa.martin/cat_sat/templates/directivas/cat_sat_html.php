<?php
namespace html;

use gamboamartin\errores\errores;
use gamboamartin\system\html_controler;
use stdClass;

class cat_sat_html extends html_controler {

    /**
     * Se integra input n dias
     * @param int $cols No de columnas css
     * @param stdClass $row_upd registro
     * @param bool $value_vacio si valor esta vacio
     * @return array|string
     * @version 0.80.9
     */
    public function input_n_dias(int $cols, stdClass $row_upd, bool $value_vacio): array|string
    {
        $valida = $this->directivas->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $html =$this->directivas->input_text_required(disable: false,name: 'n-dias',place_holder: 'Numero dias',
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
