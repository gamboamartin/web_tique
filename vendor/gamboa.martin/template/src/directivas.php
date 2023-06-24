<?php
namespace gamboamartin\template;
use config\views;
use gamboamartin\errores\errores;
use stdClass;

class directivas{
    protected errores $error;
    public html $html;
    public function __construct(html $html){
        $this->error = new errores();
        $this->html = $html;
    }


    /**
     * Genera un boton next action
     * @param string $label Etiqueta de boton
     * @param string $value Valor de siguiente accion
     * @param string $style Stilo info success etc
     * @param string $type Typo submit o button
     * @return string|array
     * @version 0.83.4
     */
    private function btn_action_next(string $label,string $value, string $style = 'info', string $type='submit'): string|array
    {
        $valida = $this->valida_btn_next(label: $label,style:  $style,type:  $type,value:  $value);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar datos', data: $valida);
        }


        $btn = "<button type='$type' class='btn btn-$style btn-guarda col-md-12' ";
        $btn .= "name='btn_action_next' value='$value'>$label</button>";
        return $btn;
    }

    /**
     * Genera un boton con un div para ser usado en views
     * @param string $label Etiqueta
     * @param string $value siguiente accion
     * @param int $cols n cols css
     * @param string $style estilo del boton
     * @param string $type tipo de btn submit button
     * @return array|string
     * @version 0.84.4
     */
    public function btn_action_next_div(string $label,string $value, int $cols = 6, string $style = 'info',
                                        string $type='submit'): array|string
    {
        $valida = $this->valida_btn_next(label: $label,style:  $style,type:  $type,value:  $value);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar datos', data: $valida);
        }

        $valida = $this->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar columnas', data: $valida);
        }

        $btn = $this->btn_action_next(label: $label,value:  $value, style: $style, type: $type);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar btn datos ', data: $btn);
        }

        return "<div class='col-md-$cols'>$btn</div>";
    }

    /**
     * Genera un boton tipo link
     * @version 0.13.0
     * @param string $accion Accion a ejecutar
     * @param string $etiqueta Etiqueta de boton
     * @param string $name Nombre para ser aplicado a for
     * @param string $place_holder Etiqueta a mostrar
     * @param int $registro_id Registro a mandar transaccion
     * @param string $seccion Seccion a ejecutar
     * @param string $style Estilo del boton info,danger,warning etc
     * @return array|string
     */
    protected function button_href(string $accion, string $etiqueta, string $name, string $place_holder, int $registro_id,
                                 string $seccion, string $style): array|string
    {

        $valida = $this->valida_data_label(name: $name,place_holder:  $place_holder);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar datos ', data: $valida);
        }

        $valida = $this->html->valida_input(accion: $accion,etiqueta:  $etiqueta, seccion: $seccion,style:  $style);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar datos', data: $valida);
        }

        $label = $this->label_input(name: $name,place_holder: $place_holder);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar label', data: $label);
        }

        $place_holder = trim($place_holder);
        if($place_holder === ''){
            return $this->error->error(mensaje: 'Error $place_holder debe tener info', data: $place_holder);
        }
        $html= $this->html->button_href(accion: $accion,etiqueta:  $etiqueta, registro_id: $registro_id,
            seccion:  $seccion, style: $style);

        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar html', data: $html);
        }

        $div = $this->html->div_label(html: $html,label:  $label);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;

    }

    /**
     * Genera un boton de tipo link para transaccionar status
     * @version 0.15.0
     * @param int $cols Columnas en formato css de 1 a 12
     * @param int $registro_id Registro id a mandar transaccion
     * @param string $seccion Seccion a ejecutar
     * @param string $status debe ser activo inactivo
     * @return array|string
     */
    public function button_href_status(int $cols, int $registro_id, string $seccion, string $status): array|string
    {

        $seccion = trim($seccion);
        if($seccion === ''){
            return $this->error->error(mensaje: 'Error la $seccion esta vacia', data: $seccion);
        }
        $status = trim($status);
        if($status === ''){
            return $this->error->error(mensaje: 'Error el $status esta vacio', data: $status);
        }
        $valida = $this->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }

        $style = 'danger';
        if($status === 'activo'){
            $style = 'info';
        }

        $html = $this->button_href(accion: 'status',etiqueta: $status,name: 'status',
            place_holder: 'Status',registro_id: $registro_id,seccion: $seccion, style: $style);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar label', data: $html);
        }

        $div = $this->html->div_group(cols: $cols,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }

    /**
     * Genera un input de tipo email como required
     * @param bool $disable Si disabled el input queda inhabilitado
     * @param string $name Name del input
     * @param string $place_holder Muestra el contenido en el input
     * @param stdClass $row_upd Registro en proceso
     * @param bool $value_vacio Si valor vacio el value lo deja vacio
     * @return array|string
     * @version 0.99.4
     */
    public function email_required(bool $disable, string $name, string $place_holder, stdClass $row_upd,
                                   bool $value_vacio ): array|string
    {

        $valida = $this->valida_data_label(name: $name,place_holder:  $place_holder);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar datos ', data: $valida);
        }

        $init = $this->init_text(name: $name,place_holder:  $place_holder, row_upd: $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al inicializar datos', data: $init);
        }

        $html= $this->html->email(disabled:$disable, id_css: $name, name: $name, place_holder: $place_holder,
            required: true, value: $init->row_upd->$name);

        $div = $this->html->div_label(html:  $html,label:$init->label);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;

    }

    /**
     * Genera input de tipo fecha como required
     * @param stdClass $row_upd Registro obtenido para actualizar
     * @param bool $disable si disabled retorna el input como disabled
     * @param string $name Usado para identificador css name input y place holder
     * @param string $place_holder Texto a mostrar en el input
     * @param bool $value_vacio Para altas en caso de que sea vacio o no existe el key
     * @return array|string
     * @version 0.102.4
     */
    public function fecha_required(bool $disable, string $name, string $place_holder, stdClass $row_upd,
                                   bool $value_vacio ): array|string
    {

        $valida = $this->valida_data_label(name: $name,place_holder:  $place_holder);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar datos ', data: $valida);
        }

        $data_init = $this->init_text(name: $name, place_holder: $place_holder,row_upd:  $row_upd,
            value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al inicializar row_upd div', data: $data_init);
        }

        $html= $this->html->fecha(disabled:$disable, id_css: $name, name: $name, place_holder: $place_holder,
            required: true, value: $data_init->row_upd->$name);

        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar input fecha', data: $html);
        }

        $div = $this->html->div_label(html:  $html,label:$data_init->label);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;

    }



    /**
     * Genera un input de tipo alias
     * @version 0.49.1
     * @param stdClass $row_upd Registro obtenido para actualizar
     * @param bool $value_vacio Para altas en caso de que sea vacio o no existe el key
     * @return array|string
     */
    public function input_alias(stdClass $row_upd, bool $value_vacio): array|string
    {
        $html =$this->input_text_required(disable: false,name: 'alias',
            place_holder: 'Alias', row_upd: $row_upd, value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $this->html->div_group(cols: 6,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }

    /**
     * Genera un input de tipo codigo
     * @version 0.35.1
     * @param int $cols Numero de columnas boostrap
     * @param stdClass $row_upd Registro obtenido para actualizar
     * @param bool $value_vacio Para altas en caso de que sea vacio o no existe el key
     * @return array|string
     */
    public function input_codigo(int $cols, stdClass $row_upd, bool $value_vacio): array|string
    {

        $valida = $this->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }

        $html =$this->input_text_required(disable: false,name: 'codigo',place_holder: 'Codigo',row_upd: $row_upd,
            value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $this->html->div_group(cols: $cols,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }

    /**
     * Genera un input de tipo codigo bis
     * @version 0.36.1
     * @param int $cols Numero de columnas boostrap
     * @param stdClass $row_upd Registro obtenido para actualizar
     * @param bool $value_vacio Para altas en caso de que sea vacio o no existe el key
     * @return array|string
     */
    public function input_codigo_bis(int $cols, stdClass $row_upd, bool $value_vacio): array|string
    {

        $valida = $this->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }

        $html =$this->input_text_required(disable: false,name: 'codigo_bis',
            place_holder: 'Codigo BIS', row_upd: $row_upd, value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }
        $div = $this->html->div_group(cols: $cols,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;

    }

    /**
     * Genera un text de tipo descripcion
     * @param stdClass $row_upd Objeto con datos del row
     * @param bool $value_vacio si value vacia no integra valor en el input
     * @return array|string
     */
    public function input_descripcion(stdClass $row_upd, bool $value_vacio): array|string
    {
        $html =$this->input_text_required(disable: false,name: 'descripcion', place_holder: 'Descripcion',
            row_upd: $row_upd, value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $this->html->div_group(cols: 12,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;

    }

    /**
     * Genera un input text de descripcion_select

     * @param stdClass $row_upd Registro obtenido para actualizar
     * @param bool $value_vacio Para altas en caso de que sea vacio o no existe el key
     * @return array|string
     * @version 0.94.4
     */
    public function input_descripcion_select(stdClass $row_upd, bool $value_vacio): array|string
    {
        $html =$this->input_text_required(disable: false,name: 'descripcion_select',
            place_holder: 'Descripcion Select', row_upd: $row_upd, value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $this->html->div_group(cols: 6,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }

    /**
     * Genera un input de tipo id
     * @param int $cols Numero de columnas css
     * @param stdClass $row_upd Registro en operacion
     * @param bool $value_vacio si value vacio deja limpio el input
     * @return array|string
     * @version 0.103.4
     */
    public function input_id(int $cols, stdClass $row_upd, bool $value_vacio): array|string
    {
        $valida = (new directivas(html: $this->html))->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }

        $html =$this->input_text(disable: true,name: 'id',place_holder: 'ID',
            required: false, row_upd: $row_upd, value_vacio: $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar input', data: $html);
        }

        $div = $this->html->div_group(cols: $cols,html:  $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;
    }


    /**
     * Funcion de inicializacion de datos para inputs
     * @version 0.48.1
     * @param string $name Nombre del input
     * @param string $place_holder Dato a mostrar previo a la captura
     * @param stdClass $row_upd Registro
     * @param bool $value_vacio Si vacio inicializa row name como vacio
     * @return array|stdClass
     */
    protected function init_text(string $name, string $place_holder, stdClass $row_upd, bool $value_vacio): array|stdClass
    {
        $valida = $this->valida_data_label(name: $name,place_holder:  $place_holder);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar datos ', data: $valida);
        }

        $label = $this->label_input(name: $name,place_holder: $place_holder);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar label', data: $label);
        }

        if($value_vacio || !(isset($row_upd->$name))){
            $row_upd->$name = '';
        }

        $data = new stdClass();
        $data->row_upd = $row_upd;
        $data->label = $label;

        return $data;
    }

    /**
     * Genera un input text en html
     * @param bool $disable si disabled el elemento queda deshabilitado
     * @param string $name Nombre de input
     * @param string $place_holder Label a mostrar dentro de input
     * @param bool $required si required integra attr required
     * @param stdClass $row_upd Registro en proceso
     * @param bool $value_vacio Si vacio deja input sin value
     * @return array|string
     * @version 0.101.4
     */
    public function input_text(bool $disable, string $name, string $place_holder, bool $required, stdClass $row_upd,
                               bool $value_vacio): array|string
    {

        $name = trim($name);
        if($name === ''){
            return $this->error->error(mensaje: 'Error el $name esta vacio', data: $name);
        }
        $place_holder = trim($place_holder);
        if($place_holder === ''){
            return $this->error->error(mensaje: 'Error el $place_holder esta vacio', data: $place_holder);
        }

        $row_upd_ =$row_upd;

        $label = $this->html->label(id_css: $name, place_holder: $place_holder);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar label', data: $label);
        }

        $row_upd_ = $this->row_upd_name(name: $name, value_vacio: $value_vacio, row_upd: $row_upd_);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar row upd', data: $row_upd_);
        }


        $html= $this->html->text(disabled:$disable, id_css: $name, name: $name, place_holder: $place_holder,
            required: $required, value: $row_upd_->$name);

        $div = $this->html->div_label(html:  $html,label:$label);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;

    }

    /**
     * Genera un input tipo required
     * @version 0.48.1
     * @param stdClass $row_upd Registro obtenido para actualizar
     * @param bool $disable si disabled retorna el input como disabled
     * @param string $name Usado para identificador css name input y place holder
     * @param string $place_holder Texto a mostrar en el input
     * @param bool $value_vacio Para altas en caso de que sea vacio o no existe el key
     * @return array|string
     */
    public function input_text_required(bool $disable, string $name, string $place_holder, stdClass $row_upd,
                                        bool $value_vacio ): array|string
    {

        $valida = $this->valida_data_label(name: $name,place_holder:  $place_holder);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar datos ', data: $valida);
        }

        $init = $this->init_text(name: $name,place_holder:  $place_holder, row_upd: $row_upd,value_vacio:  $value_vacio);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al inicializar datos', data: $init);
        }

        $html= $this->html->text(disabled:$disable, id_css: $name, name: $name, place_holder: $place_holder,
            required: true, value: $init->row_upd->$name);

        $div = $this->html->div_label(html:  $html,label:$init->label);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al integrar div', data: $div);
        }

        return $div;

    }

    /**
     *
     * Genera el label de in input para ser mostrado en el front
     * @version 0.8.0
     * @param string $name Nombre del input
     * @param string $place_holder Etiqueta a mostrar
     * @return array|string
     */
    protected function label_input(string $name, string $place_holder): array|string
    {
        $valida = $this->valida_data_label(name: $name,place_holder:  $place_holder);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar datos ', data: $valida);
        }

        $label = $this->html->label(id_css: $name, place_holder: $place_holder);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar label', data: $label);
        }
        return $label;
    }

    /**
     * Genera un mensaje de exito
     * @param string $mensaje_exito mensaje a mostrar
     * @return array|string
     */
    public function mensaje_exito(string $mensaje_exito): array|string
    {
        $alert_exito = '';
        if($mensaje_exito!==''){
            $alert_exito = $this->html->alert_success(mensaje: $mensaje_exito);
            if(errores::$error){
                return $this->error->error(mensaje: 'Error al generar alerta', data: $alert_exito);
            }

        }
        return $alert_exito;
    }

    /**
     * Genera un mensaje de tipo warning
     * @param string $mensaje_warning mensaje a mostrar
     * @return array|string

     */
    public function mensaje_warning( string $mensaje_warning): array|string
    {
        $alert_warning = '';
        if($mensaje_warning!==''){
            $alert_warning = $this->html->alert_warning(mensaje: $mensaje_warning);
            if(errores::$error){
                return $this->error->error(mensaje: 'Error al generar alerta', data: $alert_warning);
            }
        }
        return $alert_warning;
    }

    /**
     * Genera un numero para menu lateral
     * @param string $number Numero svg
     * @return string
     */
    public function number_menu_lateral(string $number): string
    {
        $img =  (new views())->url_assets."img/numeros/$number.svg";
        return "<img src='$img' class='numero'>";
    }

    /**
     * Inicializa un row_upd
     * @param string $name Nombre de input
     * @param bool $value_vacio Si vacio lo genera
     * @param stdClass $row_upd Datos inicializados
     * @return stdClass|array
     * @version 0.100.4
     */
    private function row_upd_name(string $name, bool $value_vacio, stdClass $row_upd = new stdClass()): stdClass|array
    {
        $name = trim($name);
        if($name === ''){
            return $this->error->error(mensaje: 'Error name esta vacio', data: $name);
        }
        if($value_vacio){
            $row_upd = new stdClass();
            $row_upd->$name = '';
        }
        if(!isset($row_upd->$name)){
            $row_upd->$name = '';
        }

        return $row_upd;
    }

    /**
     * Valida los elementos de un boton
     * @param string $label Etiqueta
     * @param string $style Stilo
     * @param string $type Tipo submit o button
     * @param string $value Valor
     * @return bool|array
     * @version 0.92.4
     */
    public function valida_btn_next(string $label, string $style, string $type, string $value): bool|array
    {

        $valida = $this->valida_data_base(label: $label,value:  $value);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar datos', data: $valida);
        }

        $style = trim($style);
        if($style === ''){
            return $this->error->error(mensaje: 'Error $style esta vacio', data: $style);
        }
        $type = trim($type);
        if($type === ''){
            return $this->error->error(mensaje: 'Error $type esta vacio', data: $type);
        }

        return true;
    }

    public function valida_data_base(string $label, string $value): bool|array
    {
        $label = trim($label);
        if($label === ''){
            return $this->error->error(mensaje: 'Error label esta vacio', data: $label);
        }
        $value = trim($value);
        if($value === ''){
            return $this->error->error(mensaje: 'Error $value esta vacio', data: $value);
        }
        return true;
    }



    /**
     * @param int $cols Numero de columnas css
     * @version 0.4.0
     * @return bool|array
     */
    public function valida_cols(int $cols): bool|array
    {
        if($cols<=0){
            return $this->error->error(mensaje: 'Error cols debe ser mayor a 0', data: $cols);
        }
        if($cols>=13){
            return $this->error->error(mensaje: 'Error cols debe ser menor o igual a  12', data: $cols);
        }
        return true;
    }

    /**
     * Verifica los datos de entrada de un label
     * @version 0.1.0
     * @param string $name Nombre del input
     * @param string $place_holder Dato a mostrar dentro del input de manera inicial
     * @return bool|array
     */
    protected function valida_data_label(string $name, string $place_holder): bool|array
    {

        $name = trim($name);
        if($name === ''){
            return $this->error->error(mensaje: 'Error $name debe tener info', data: $name);
        }
        $place_holder = trim($place_holder);
        if($place_holder === ''){
            return $this->error->error(mensaje: 'Error $place_holder debe tener info', data: $place_holder);
        }
        return true;
    }
}
