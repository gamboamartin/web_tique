<?php
namespace gamboamartin\template;
use base\frontend\params_inputs;
use config\generales;
use config\views;
use gamboamartin\errores\errores;
use gamboamartin\validacion\validacion;
use stdClass;

class html{
    protected errores $error;
    public function __construct(){
        $this->error = new errores();
    }

    /**
     * Genera un alert html boostrap con un mensaje incluido

     * @param string $mensaje Mensaje a mostrar
     * @return string|array Resultado en un html
     * @version 0.78.4
     */
    public function alert_success(string $mensaje): string|array
    {
        $mensaje = trim($mensaje);
        if($mensaje === ''){
            return $this->error->error(mensaje: 'Error mensaje esta vacio', data: $mensaje);
        }
        return "<div class='alert alert-success' role='alert' ><strong>Muy bien!</strong> $mensaje.</div>";
    }

    /**
     * Genera un alert de tipo warning
     * @param string $mensaje Mensaje a mostrar en el warning
     * @return string|array
     * @version 0.89.4
     */
    public function alert_warning(string $mensaje): string|array
    {
        $mensaje = trim($mensaje);
        if($mensaje === ''){
            return $this->error->error(mensaje: 'Error mensaje esta vacio', data: $mensaje);
        }
        return "<div class='alert alert-warning' role='alert' ><strong>Advertencia!</strong> $mensaje.</div>";
    }

    /**
     *
     * Funcion que genera un boton de tipo link con href
     * @param string $accion Accion a ejecutar
     * @param string $etiqueta Etiqueta de boton
     * @param int $registro_id Registro a mandar transaccion
     * @param string $seccion Seccion a ejecutar
     * @param string $style Estilo del boton info,danger,warning etc
     * @param array $params Parametros para incrustar post GET
     * @return string|array
     * @version 0.11.0
     */
    public function button_href(string $accion, string $etiqueta, int $registro_id, string $seccion,
                                string $style, array $params = array()): string|array
    {

        $valida = $this->valida_input(accion: $accion,etiqueta:  $etiqueta, seccion: $seccion,style:  $style);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar datos', data: $valida);
        }

        $session_id = (new generales())->session_id;

        if($session_id === ''){
            return $this->error->error(mensaje: 'Error la $session_id esta vacia', data: $session_id);
        }

        $params_get = '';
        foreach ($params as $key=>$value){
            $params_get .= "&$key=$value";
        }

        $link = "index.php?seccion=$seccion&accion=$accion&registro_id=$registro_id&session_id=$session_id";
        $link .= $params_get;
        return "<a |role| href='$link' |class|>$etiqueta</a>";
    }

    /**
     * Genera un div con un label dentro del div
     * @param int $cols Numero de columnas css
     * @param string $contenido Contenido a integrar dentro del div
     * @return string|array
     * @version 0.50.1
     */
    protected function div_control_group_cols(int $cols, string $contenido): string|array
    {
        $valida = (new directivas(html:$this))->valida_cols(cols:$cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }
        $contenido = trim($contenido);

        $div_contenedor_ini = "<div class='control-group col-sm-$cols'>";
        $div_contenedor_fin = "</div>";

        return $div_contenedor_ini.$contenido.$div_contenedor_fin;
    }

    /**
     * Genera un div con una etiqueta
     * @param int $cols Numero de columnas css
     * @param string $contenido Contenido a integrar dentro del div
     * @param string $label Etiqueta a mostrar
     * @param string $name Name a utilizar como label
     * @return string|array
     * @version 0.69.4
     * @verfuncion 0.1.0
     * @fecha 2022-08-03 15:21
     * @author mgamboa
     */
    private function div_control_group_cols_label(int $cols, string $contenido, string $label, string $name): string|array
    {

        $label = trim($label);
        $name = trim($name);
        $valida = $this->valida_input_select(cols: $cols, label: $label, name: $name);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar input', data: $valida);
        }

        $label_html = $this->label(id_css:$name,place_holder: $label);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar label', data: $label_html);
        }

        $html = $this->div_control_group_cols(cols: $cols,contenido: $label_html.$contenido);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar contenedor', data: $html);
        }

        return $html;
    }

    /**
     * Integra el contenido de divs de tipo input
     * @param string $contenido Contenido a integrar en el div
     * @return string
     * @version 0.68.4
     * @verfuncion 0.1.0
     * @fecha 2022-08-03 15:13
     * @author mgamboa
     */
    private function div_controls(string $contenido): string
    {
        $div_controls_ini = "<div class='controls'>";
        $div_controls_fin = "</div>";

        return $div_controls_ini.$contenido.$div_controls_fin;
    }

    /**
     * Integra un div group control-group col-sm-n_cols
     * @param int $cols Numero de columnas css
     * @param string $html Html a integrar en contendedor
     * @return string|array
     * @version 0.14.0
     */
    public function div_group(int $cols, string $html): string|array
    {
        $valida = (new directivas(html: $this))->valida_cols(cols: $cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }
        return "<div |class|>$html</div>";
    }

    /**
     * Genera un contenedor con label
     * @version 0.12.0
     * @param string $html Contenido del div
     * @param string $label Contenido de etiqueta
     * @return string
     */
    public function div_label(string $html, string $label): string
    {
        return $label."<div |class|>$html</div>";
    }

    /**
     * Genera un div de tipo select
     * @param string $name Name input
     * @param string $options_html Options en html
     * @param bool $disabled Si disabled el input quedara disabled
     * @param bool $required si required integra requieren en select
     * @return array|string
     * @version 0.67.4
     * @verfuncion 0.1.0
     * @verfuncion 0.2.0
     * @fecha 2022-08-03 15:07
     * @author mgamboa
     */
    protected function div_select(string $name, string $options_html, bool $disabled = false,
                                  bool $required = false): array|string
    {
        $required_html = (new params_inputs())->required_html(required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'La asignacion de required es incorrecta', data: $required_html);
        }

        $disabled_html = (new params_inputs())->disabled_html(disabled: $disabled);
        if(errores::$error){
            return $this->error->error(mensaje: 'La asignacion de disabled es incorrecta', data: $disabled_html);
        }


        $select_in = "<select class='form-control selectpicker color-secondary $name' id='$name' name='$name' $required_html $disabled_html>";
        $select_fin = '</select>';
        return $select_in.$options_html.$select_fin;
    }

    /** Genera un input de tipo email
     * @version 0.31.1
     * @param bool $disabled Si disabled retorna text disabled
     * @param string $id_css Identificador de tipo css
     * @param string $name Nombre del input
     * @param string $place_holder Contenido a mostrar previo a la captura del input
     * @param bool $required Si required aplica required en html
     * @param mixed $value Valor de input
     * @return array|string
     */
    public function email(bool $disabled, string $id_css, string $name, string $place_holder, bool $required,
                          mixed $value): array|string
    {

        $valida = $this->valida_params_txt(id_css: $id_css,name:  $name,place_holder:  $place_holder);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar datos', data: $valida);
        }

        $params = $this->params_txt(disabled: $disabled,id_css:  $id_css,name:  $name,place_holder:  $place_holder,
            required:  $required);

        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar parametros', data: $params);
        }

        $val = new validacion();
        if (!isset($val->patterns['correo_html5'])) {
            return $this->error->error(mensaje: 'No existe el regex para email', data: $params);
        }

        $html = "<input type='text' name='$params->name' value='$value' |class| $params->disabled $params->required ";
        $html.= "id='$params->id_css' placeholder='$params->place_holder' pattern='{$val->patterns['correo_html5']}' />";
        return $html;
    }

    /**
     * Genera extra params para integrar con html
     * @param array $extra_params Conjunto de extra params key = data value = valor
     * @return array|string
     * @version 0.61.4
     * @verfuncion 0.1.0
     * @fecha 2022-08-03 09:59
     * @author mgamboa
     */
    private function extra_params(array $extra_params): array|string
    {
        $extra_params_html = '';
        foreach ($extra_params as $data=>$val){
            if(is_numeric($data)){
                return $this->error->error(mensaje: 'Error $data bede ser un texto valido', data: $extra_params);
            }

            $extra_params_html.= " data-$data = '$val'";
        }
        return $extra_params_html;
    }

    /**
     * Obtiene el html de una fecha
     * @version 0.31.1
     * @param bool $disabled Si disabled retorna text disabled
     * @param string $id_css Identificador de tipo css
     * @param string $name Nombre del input
     * @param string $place_holder Contenido a mostrar previo a la captura del input
     * @param bool $required
     * @param mixed $value
     * @return array|string
     */
    public function fecha(bool $disabled, string $id_css, string $name, string $place_holder, bool $required,
                          mixed $value): array|string
    {
        $valida = $this->valida_params_txt(id_css: $id_css,name:  $name,place_holder:  $place_holder);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar datos', data: $valida);
        }
        $params = $this->params_txt(disabled: $disabled,id_css:  $id_css,name:  $name,place_holder:  $place_holder,
            required:  $required);

        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar parametros', data: $params);
        }

        $html = "<input type='date' name='$params->name' value='$value' |class| $params->disabled $params->required ";
        $html.= "id='$params->id_css' placeholder='$params->place_holder' />";
        return $html;
    }

    /**
     * Integra los options en forma de html
     * @param string $descripcion_select Descripcion del option
     * @param mixed $id_selected Id o valor a comparar origen de la base de valor
     * @param string $options_html Options previamente generados en html
     * @param mixed $value Valor a asignar en option
     * @param array $extra_params Conjunto de datos para extra params
     * @return array|string
     * @version 0.65.4
     * @verfuncion 0.1.0
     * @fecha 2022-08-03 12:25
     * @author mgamboa
     */
    private function integra_options_html(string $descripcion_select, mixed $id_selected, string $options_html,
                                          mixed $value, array $extra_params = array()): array|string
    {
        $option_html = $this->option_html(descripcion_select: $descripcion_select,id_selected: $id_selected,
            value: $value, extra_params: $extra_params);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar option', data: $option_html);
        }

        $options_html.=$option_html;

        return $options_html;
    }

    /**
     * Genera un label html
     * @version 0.7.0
     * @param string $id_css id de css
     * @param string $place_holder Etiqueta a mostrar
     * @return string|array string Salida html de label
     */
    public function label(string $id_css, string $place_holder): string|array
    {
        $id_css = trim($id_css);
        if($id_css === ''){
            return $this->error->error(mensaje: 'Error el $id_css esta vacio', data: $id_css);
        }
        $place_holder = trim($place_holder);
        if($place_holder === ''){
            return $this->error->error(mensaje: 'Error el $place_holder esta vacio', data: $place_holder);
        }

       return "";
    }

    /**
     * Genera un link en el menu lateral con un numero
     * @param string $etiqueta
     * @param string $number
     * @return array|string
     */
    public function link_menu_lateral(string $etiqueta, string $number): array|string
    {
        $number_html = $this->number_menu_lateral(number: $number);
        if(errores::$error){
            return $this->error->error(mensaje:  'Error al obtener numero ', data: $number_html);
        }
        $txt_link = $this->menu_lateral(etiqueta: $etiqueta);
        if(errores::$error){
            return $this->error->error(mensaje:  'Error al generar link', data: $txt_link);
        }

        return $number_html.$txt_link;

    }

    /**
     * Genera un texto de menu lateral
     * @param string $etiqueta Etiqueta del menu
     * @return string|array
     * @version 0.96.4
     */
    public function menu_lateral(string $etiqueta): string|array
    {
        $etiqueta = trim($etiqueta);
        if($etiqueta === ''){
            return $this->error->error(mensaje: 'Error la etiqueta esta vacia', data: $etiqueta);
        }
        return "<span class='texto-menu-lateral'>$etiqueta</span>";
    }

    /**
     * Genera un numero en img para menu lateral
     * @param string $number numero
     * @return string|array
     * @version 0.100.4
     */
    private function number_menu_lateral(string $number): string|array
    {
        $number = trim($number);
        if($number === ''){
            return $this->error->error(mensaje: 'Error number vacio', data: $number);
        }
        $img =  (new views())->url_assets."img/numeros/$number.svg";
        return "<img src='$img' class='numero'>";
    }

    /**
     * Genera un option para un select
     * @param string $descripcion descripcion del option
     * @param bool $selected Si selected se anexa selected a option
     * @param mixed $value Value del option
     * @param array $extra_params Arreglo con datos para integrar un extra param
     * @return string|array
     * @version 0.62.4
     * @verfuncion 0.1.0
     * @fecha 2022-08-03 10:59
     * @author mgamboa
     */
    private function option(string $descripcion, bool $selected, int|string $value, array $extra_params = array()): string|array
    {

        $valida = $this->valida_option(descripcion: $descripcion, value: $value);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar option', data: $valida);
        }

        $selected_html = '';
        if($selected){
            $selected_html = 'selected';
        }

        $extra_params_html = $this->extra_params(extra_params: $extra_params);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar extra params', data: $extra_params_html);
        }

        if((int)$value === -1){
            $value = '';
        }
        return "<option value='$value' $selected_html $extra_params_html>$descripcion</option>";
    }

    /**
     * Genera un option en forma de html
     * @param string $descripcion_select Descripcion a mostrar en option
     * @param mixed $id_selected Id o valor a comparar origen de la base de valor
     * @param mixed $value Valor de asignacion a option
     * @param array $extra_params Conjunto de datos para integrar un extra param en un option
     * @return array|string
     * @version 0.63.4
     * @verfuncion 0.1.0
     * @fecha 2022-08-03 12:03
     * @author mgamboa
     */
    private function option_html(string $descripcion_select, mixed $id_selected, mixed $value,
                                 array $extra_params = array()): array|string
    {
        $descripcion_select = trim($descripcion_select);
        if($descripcion_select === ''){
            return $this->error->error(mensaje: 'Error $descripcion_select no puede venir vacio',
                data: $descripcion_select);
        }
        $value = trim($value);
        if($value === ''){
            $value = -1;
        }

        $value = (int)$value;
        $selected = $this->selected(value: $value,id_selected: $id_selected);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al verificar selected', data: $selected);
        }

        $option_html = $this->option(descripcion: $descripcion_select,selected:  $selected, value: $value,
            extra_params: $extra_params);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar option', data: $option_html);
        }
        return $option_html;
    }

    /**
     * Integra todos los options de un html select
     * @param mixed $id_selected Id o valor a comparar origen de la base de valor
     * @param array $values Valores para options
     * @param array $extra_params_key keys de extra params para integrar valor
     * @return array|string
     * @version 0.65.4
     * @verfuncion 0.1.0
     * @fecha 2022-08-03 14:55
     * @author mgamboa
     */
    private function options(mixed $id_selected, array $values, array $extra_params_key = array()): array|string
    {
        $options_html = $this->option(descripcion: 'Selecciona una opcion',selected:  false, value: -1);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar option', data: $options_html);
        }
        $options_html = $this->options_html_data(id_selected: $id_selected,options_html: $options_html,values: $values,
            extra_params_key: $extra_params_key);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar options', data: $options_html);
        }
        return $options_html;
    }

    /**
     * Integra el html de un conjunto de options
     * @param mixed $id_selected Id o valor a comparar origen de la base de valor
     * @param string $options_html Options previos en html
     * @param array $values Valores para asignacion y generacion de options
     * @param array $extra_params_key Conjunto de keys para asignar el valor e integrar un extra param basado en el
     * valor puesto
     * @return array|string
     * @version 0.66.4
     * @verfuncion 0.1.0
     * @fecha 2022-08-03 14:30
     * @
     */
    private function options_html_data(mixed $id_selected, string $options_html, array $values,
                                       array $extra_params_key = array()): array|string
    {
        /**
         * REFACTORIZAR
         */
        $options_html_ = $options_html;
        foreach ($values as $row_id=>$row){
            if(!is_array($row)){
                return $this->error->error(mensaje: 'Error el row debe ser un array', data: $row);
            }
            $keys = array('descripcion_select');
            $valida = (new validacion())->valida_existencia_keys(keys: $keys,registro:  $row);
            if(errores::$error){
                return $this->error->error(mensaje: 'Error al validar row', data: $valida);
            }

            $extra_params = array();
            foreach ($extra_params_key as $key_extra_param){
                $extra_params[$key_extra_param] = $row[$key_extra_param];
            }
            $options_html_ = $this->integra_options_html(descripcion_select: $row['descripcion_select'],
                id_selected: $id_selected,options_html: $options_html_,value: $row_id, extra_params: $extra_params);
            if(errores::$error){
                return $this->error->error(mensaje: 'Error al generar option', data: $options_html_);
            }
        }
        return $options_html_;
    }


    /**
     * Genera y valida los parametros de in input tipo text
     * @version 0.28.0
     * @param bool $disabled Si disabled retorna text disabled
     * @param string $id_css Identificador de tipo css
     * @param string $name Nombre del input
     * @param string $place_holder Contenido a mostrar previo a la captura del input
     * @param bool $required Si required aplica required en html
     * @return array|stdClass
     */
    private function params_txt(bool $disabled, string $id_css, string $name, string $place_holder,
                                bool $required): array|stdClass
    {

        $valida = $this->valida_params_txt(id_css: $id_css,name:  $name,place_holder:  $place_holder);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar datos', data: $valida);
        }


        $disabled_html = (new params_inputs())->disabled_html(disabled:$disabled);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar $disabled_html', data: $disabled_html);
        }

        $required_html = (new params_inputs())->required_html(required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar $required_html', data: $required_html);
        }

        $params = new stdClass();
        $params->name = $name;
        $params->id_css = $id_css;
        $params->place_holder = $place_holder;
        $params->disabled = $disabled_html;
        $params->required = $required_html;

        return $params;
    }

    /**
     * Genera un input de tipo select
     * @param int $cols Numero de columnas css
     * @param mixed $id_selected Id o valor a comparar origen de la base de valor
     * @param string $label Etiqueta a mostrar
     * @param string $name Name input
     * @param array $values Valores para options
     * @param bool $disabled Si disabled el input quedara disabled
     * @param array $extra_params_key keys de extra params para integrar valor
     * @param bool $required if required integra required a select
     * @return array|string
     * @version 0.71.4
     * @verfuncion 0.1.0
     * @verfuncion 0.2.0
     * @fecha 2022-08-03 15:42
     * @author mgamboa
     */
    public function select(int $cols, int $id_selected, string $label,string $name, array $values,
                           bool $disabled = false, array $extra_params_key = array(),
                           bool $required = false): array|string
    {

        $label = trim($label);
        $name = trim($name);
        $valida = $this->valida_input_select(cols: $cols, label: $label, name: $name);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar input', data: $valida);
        }

        $options_html = $this->options(id_selected: $id_selected,values: $values, extra_params_key: $extra_params_key);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar options', data: $options_html);
        }

        $select = $this->select_html(cols: $cols, label: $label,name: $name,options_html: $options_html,
            disabled: $disabled, required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar contenedor', data: $select);
        }

        return $select;

    }

    /**
     * Genera un select en forma de html completo
     * @param int $cols Numero de columnas css
     * @param string $label Etiqueta a mostrar
     * @param string $name Name input
     * @param string $options_html Options precargados para select
     * @param bool $disabled Si disabled el input quedara inactivo
     * @param bool $required Si required se integra required como atributo del input
     * @return array|string
     * @version 0.70.4
     * @verfuncion 0.1.0
     * @verfuncion 0.2.0
     * @fecha 2022-08-03 15:30
     * @author mgamboa
     */
    private function select_html(int $cols, string $label, string $name, string $options_html, bool $disabled = false,
                                 bool $required = false): array|string
    {

        $label = trim($label);
        $name = trim($name);
        $valida = $this->valida_input_select(cols: $cols, label: $label, name: $name);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar input', data: $valida);
        }

        $select = $this->div_select(name: $name,options_html: $options_html, disabled:$disabled, required:  $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar contenedor', data: $select);
        }

        $select = $this->div_controls(contenido: $select);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar contenedor', data: $select);
        }

        $select = $this->div_control_group_cols_label(cols: $cols,contenido: $select,label: $label,name: $name);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar contenedor', data: $select);
        }
        return $select;
    }
    /**
     * Verifica si el elemento debe ser selected o no
     * @param mixed $value valor del item del select
     * @param mixed $id_selected Id o valor a comparar origen de la base de valor
     * @return bool
     * @version 0.59.4
     * @verfuncion 0.1.0
     * @fecha 2022-08-02 14:17
     * @author mgamboa
     */
    protected function selected(mixed $value, mixed $id_selected): bool
    {
        $selected = false;
        if((string)$value === (string)$id_selected){
            $selected = true;
        }
        return $selected;
    }


    /**
     * Genera um input text basado en los parametros enviados
     * @param bool $disabled Si disabled retorna text disabled
     * @param string $id_css Identificador css
     * @param string $name Name input html
     * @param string $place_holder Muestra elemento en input
     * @param bool $required indica si es requerido o no
     * @param mixed $value Valor en caso de que exista
     * @return string|array Html en forma de input text
     * @version 0.9.0
     */
    public function text(bool $disabled, string $id_css, string $name, string $place_holder, bool $required,
                         mixed $value): string|array
    {

        $params = $this->params_txt(disabled: $disabled,id_css:  $id_css,name:  $name,place_holder:  $place_holder,
            required:  $required);

        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar parametros', data: $params);
        }

        $html = "<input type='text' name='$params->name' value='$value' |class| $params->disabled $params->required ";
        $html.= "id='$id_css' placeholder='$params->place_holder' />";
        return $html;
    }



    /**
     * Valida los datos de un input sean correctos
     * @version 0.36.5
     * @param string $accion Accion a verificar
     * @param string $etiqueta Etiqueta a mostrar en el input
     * @param string $seccion Seccion en ejecucion
     * @param string $style Estilo css
     * @return bool|array
     */
    public function valida_input(string $accion, string $etiqueta, string $seccion, string $style): bool|array
    {
        $seccion = trim($seccion);
        if($seccion === ''){
            return $this->error->error(mensaje: 'Error la $seccion esta vacia', data: $seccion);
        }
        $accion = trim($accion);
        if($accion === ''){
            return $this->error->error(mensaje: 'Error la $accion esta vacia', data: $accion);
        }
        $style = trim($style);
        if($style === ''){
            return $this->error->error(mensaje: 'Error la $style esta vacia', data: $style);
        }
        $etiqueta = trim($etiqueta);
        if($etiqueta === ''){
            return $this->error->error(mensaje: 'Error la $etiqueta esta vacia', data: $etiqueta);
        }
        return true;
    }

    /**
     * Valida que los datos de un selects sean los correctos
     * @param int $cols Columnas css
     * @param string $label Etiqueta a mostrar
     * @param string $name Nombre del input
     * @return bool|array
     * @version 0.88.4
     */
    protected function valida_input_select(int $cols, string $label, string $name): bool|array
    {
        $label = trim($label);
        if($label === ''){
            return $this->error->error(mensaje: 'Error el $label esta vacio', data: $label);
        }
        $name = trim($name);
        if($name === ''){
            return $this->error->error(mensaje: 'Error el $name esta vacio', data: $name);
        }
        $valida = (new directivas(html:$this))->valida_cols(cols:$cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }
        return true;
    }

    /**
     * Valida que los datos de un option sean validos
     * @param string $descripcion Descripcion del option
     * @param int|string $value Valor del option
     * @return bool|array
     * @version 0.89.4
     */
    protected function valida_option(string $descripcion,int|string $value ): bool|array
    {
        $value = trim($value);
        if($value === ''){
            return $this->error->error(mensaje: 'Error value no puede venir vacio', data: $value);
        }
        $descripcion = trim($descripcion);
        if($descripcion === ''){
            return $this->error->error(mensaje: 'Error $descripcion no puede venir vacio', data: $descripcion);
        }
        return true;
    }

    /**
     * Valida los parametros de un input text
     * @param string $id_css Identifcador css
     * @param string $name Nombre del input
     * @param string $place_holder Label a mostrar en input
     * @return bool|array
     * @version 0.90.4
     */
    protected function valida_params_txt(string $id_css, string $name, string $place_holder): bool|array
    {
        $name = trim($name);
        if($name === ''){
            return $this->error->error(mensaje: 'Error name es necesario', data: $name);
        }
        $id_css = trim($id_css);
        if($id_css === ''){
            return $this->error->error(mensaje: 'Error $id_css es necesario', data: $id_css);
        }
        $place_holder = trim($place_holder);
        if($place_holder === ''){
            return $this->error->error(mensaje: 'Error $place_holder es necesario', data: $place_holder);
        }
        return true;

    }
}
