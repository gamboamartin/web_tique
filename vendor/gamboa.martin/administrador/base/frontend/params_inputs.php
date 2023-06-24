<?php
namespace base\frontend;
use gamboamartin\errores\errores;
use JetBrains\PhpStorm\Pure;
use stdClass;


class params_inputs{
    private errores $error;
    private validaciones_directivas $validacion;
    #[Pure] public function __construct(){
        $this->error = new errores();
        $this->validacion = new validaciones_directivas();
    }

    /**
     * PROBADO - PARAMS ORDER PARAMS INT
     * Asigna los parametros de un input para ser utilizados en java o css
     * @param string $pattern Regex para ser integrado en validacion de input via html5
     * @param array $clases_css Clases de estilos para ser utilizas en css y/o java
     * @param bool $disabled si disabled input queda inhabilitado en front
     * @param bool $required si required input es requerido y se validara via html5
     * @param array $ids_css Id de estilos para ser utilizas en css y/o java
     * @param string $campo nombre de input
     * @param array $data_extra datos para ser utilizados en javascript
     * @param string $value valor inicial del input puede ser vacio
     * @return array|stdClass Valor en un objeto para ser integrados en un input
     */
    private function base_input(string $campo, array $clases_css, array $data_extra, bool $disabled,
                                array $ids_css, string $pattern, bool $required, string $value): array|stdClass
    {
        $campo = trim($campo);

        if($campo === ''){
            return $this->error->error('Error el campo no puede venir vacio', $campo);
        }

        $html_pattern = $this->pattern_html(pattern: $pattern);
        if(errores::$error){
            return $this->error->error('Error al generar pattern css', $html_pattern);
        }

        $class_css_html = (new class_css())->class_css_html(clases_css: $clases_css);
        if(errores::$error){
            return $this->error->error('Error al generar clases css', $class_css_html);
        }

        $disabled_html = $this->disabled_html(disabled: $disabled);
        if(errores::$error){
            return $this->error->error('Error al generar disabled html', $disabled_html);
        }

        $required_html = $this->required_html(required: $required);
        if(errores::$error){
            return $this->error->error('Error al generar required html', $required_html);
        }

        $ids_css_html = $this->ids_html(campo: $campo, ids_css: $ids_css);
        if(errores::$error){
            return $this->error->error('Error al generar ids html', $ids_css_html);
        }

        $data_extra_html = (new extra_params())->data_extra_html(data_extra: $data_extra);
        if(errores::$error){
            return $this->error->error('Error al generar data extra html', $data_extra_html);
        }

        $value = str_replace("'","`",$value);

        $datas = new stdClass();
        $datas->pattern = $html_pattern;
        $datas->class = $class_css_html;
        $datas->disabled = $disabled_html;
        $datas->required = $required_html;
        $datas->ids = $ids_css_html;
        $datas->data_extra = $data_extra_html;
        $datas->value = $value;

        return $datas;
    }

    /**
     * PROBADO - PARAMS ORDER PARAMS INT
     * @param string $etiqueta
     * @param string $campo
     * @return stdClass|array
     */
    private function base_input_dinamic( string $campo, string $etiqueta): stdClass|array
    {
        $etiqueta = trim($etiqueta);
        $campo = trim($campo);

        if($campo === ''){
            return $this->error->error('Error el campo no puede venir vacio', $campo);
        }

        $campo_mostrable = $etiqueta;
        $place_holder = $campo_mostrable;
        $name = $campo;

        $data = new stdClass();
        $data->campo_mostrable = $etiqueta;
        $data->place_holder = $place_holder;
        $data->name = $name;
        return $data;
    }

    /**
     * Genera el atributo checked si valor es activo
     * @param string $valor Valor a verificar activo inactivo
     * @version 1.234.39
     * @verfuncion 1.1.0
     * @author mgamboa
     * @fecha 2022-08-01 14:04
     * @return string|array
     */
    private function checked(string $valor): string|array
    {
        $valor = trim($valor);

        $checked_html = '';
        if($valor==='activo'){
            $checked_html = 'checked';
        }
        return $checked_html;
    }

    /**
     * P INT P ORDER PROBADO
     * @param array $value
     * @param string $tabla
     * @param int $valor_envio
     * @param array $data_extra
     * @param array $data_con_valor
     * @return array|stdClass
     */
    public function data_content_option(array $data_con_valor, array $data_extra, string $tabla, int $valor_envio,
                                        array $value): array|stdClass
    {
        $selected = $this->validacion->valida_selected(id: $valor_envio, tabla: $tabla, value: $value);
        if(errores::$error){
            return $this->error->error('Error al validar selected', $selected);
        }

        $data_extra_html = (new extra_params())->datas_extra(data_con_valor:$data_con_valor,data_extra: $data_extra,
            value: $value);
        if(errores::$error){
            return $this->error->error('Error al generar datas extra', $data_extra_html);
        }

        $value_html = (new values())->content_option_value(tabla: $tabla, value: $value);
        if(errores::$error){
            return $this->error->error('Error al generar value', $data_extra_html);
        }

        $datas = new stdClass();
        $datas->selected = $selected;
        $datas->data_extra_html = $data_extra_html;
        $datas->value_html = $value_html;

        return $datas;
    }

    /**
     * Genera disabled html para inputs
     * @version 1.86.19
     * @param bool $disabled Si disabled retorna text disabled
     * @return string
     */
    public function disabled_html(bool $disabled): string
    {
        $disabled_html = '';
        if($disabled){
            $disabled_html = 'disabled';
        }
        return $disabled_html;
    }

    /**
     * Genera un id tipo css para html
     * @param string $id_css Identificador css para java
     * @return string
     * @version 1.248.39
     * @verfuncion 1.1.0
     * @author mgamboa
     * @fecha 2022-08-01 18:20
     */
    private function id_html(string $id_css): string
    {
        $id_html = '';
        if($id_css !==''){
            $id_html = " id = '$id_css' ";
        }
        return $id_html;
    }

    /**
     * Genera id de css en forma html
     * @param array $ids_css Id para css
     * @param string $campo Nombre del campo
     * @return string|array
     * @version 1.309.41
     */
    public function ids_html(string $campo, array $ids_css): string|array
    {
        $campo = trim($campo);
        if($campo === ''){
            return $this->error->error(mensaje: 'Error el campo esta vacio', data: $campo);
        }
        $ids_css_html = $campo;
        foreach($ids_css as $id_css){
            $ids_css_html.=' '.$id_css;
        }
        return $ids_css_html;
    }

    /**
     * Limpia los elementos de un objeto basado en sus atributos
     * @param array $keys Keys de parametros a limpiar
     * @param stdClass $params Parametros a limpiar
     * @return stdClass
     * @version 1.309.41
     */
    private function limpia_obj(array $keys, stdClass $params): stdClass
    {
        foreach($keys as $key){
            if(!isset($params->$key)){
                $params->$key = '';
            }
        }
        return $params;
    }

    /**
     * FULL
     * @param stdClass $params
     * @return stdClass
     */
    public function limpia_obj_btn(stdClass $params): stdClass
    {
        $keys = array('class','data_extra','icon');
        $params = $this->limpia_obj(keys: $keys,params: $params);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al limpiar params', data: $params);
        }
        return $params;
    }

    /**
     * Limpia un conjunto de objetos a vacio
     * @param stdClass $params Inicializa parametros
     * @return array|stdClass
     * @version 1.352.41
     */
    public function limpia_obj_input(stdClass $params): array|stdClass
    {
        $keys = array('class','ids','required','data_extra','disabled');
        $params = $this->limpia_obj(keys: $keys, params: $params);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al limpiar params', data: $params);
        }
        return $params;
    }

    /**
     * Genera un salto de linea html
     * @param bool $ln Si salto genera un div col 12
     * @param string $size sm lg etc
     * @return string|array
     * @version 1.310.41
     */
    public function ln(bool $ln, string $size): string|array
    {
        $size = trim($size);
        if($size === ''){
            return $this->error->error(mensaje: 'Error size no puede venir vacio',data: $size);
        }
        $html = '';
        if($ln){
            $html = "<div class='col-$size-12'></div>";
        }
        return $html;
    }

    /**
     * Aplica un multiple al input
     * @param bool $multiple si multiple hace el el input se integre para multiples selecciones
     * @return stdClass
     * @version 1.455.49
     */
    #[Pure] public function multiple_html(bool $multiple): stdClass
    {
        $multiple_html = '';
        $data_array ='';
        if($multiple){
            $multiple_html = 'multiple';
            $data_array = '[]';
        }
        $data = new stdClass();
        $data->multiple = $multiple_html;
        $data->data = $data_array;
        return $data;
    }

    /**
     * PROBADO-PARAMS ORDER P INT
     * @param string $valor Valor a verificar activo inactivo
     * @param bool $ln Si true aplica div 12
     * @param string $css_id Identificador css para java
     * @return array|stdClass $data->[string checked_html,string salto,string id_html]
     * @version 1.249.40
     * @verfuncion 1.1.0
     * @author mgamboa
     * @fecha 2022-08-01 18:26
     */
    public function params_chk(string $css_id, bool $ln, string $valor): array|stdClass
    {
        $checked_html = $this->checked(valor: $valor);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar checked',data: $checked_html);
        }


        $salto = $this->salto(ln: $ln);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar ln',data: $salto);
        }

        $id_html = $this->id_html(id_css: $css_id);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar $id_html',data: $id_html);
        }

        $data = new stdClass();
        $data->checked_html = $checked_html;
        $data->salto = $salto;
        $data->id_html = $id_html;
        return $data;
    }

    /**
     * Genera los parametros de una fecha input
     * @param bool $disabled Si disabled deja input disabled
     * @param bool $required Si required deja input como requerido
     * @param array $data_extra conjunto de extraparams
     * @param array $css conjunto de css a integrar
     * @param array $ids conjunto de ids a integrar
     * @param string $campo nombre del campo
     * @return array|stdClass
     * @version 1.332.41
     */
    public function params_fecha(string $campo, array $css, array $data_extra, bool $disabled, array $ids,
                                 bool $required): array|stdClass
    {
        $campo = trim($campo);
        if($campo === ''){
            return $this->error->error(mensaje: 'Error el campo esta vacio', data: $campo);
        }
        $disabled_html = $this->disabled_html(disabled: $disabled);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al generar disabled html',data: $disabled_html);
        }

        $required_html = $this->required_html(required: $required);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al generar required html',data: $required_html);
        }

        $data_extra_html = (new extra_params())->data_extra_html(data_extra: $data_extra);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al generar data html',data: $data_extra_html);
        }

        $css_html = (new class_css())->class_css_html(clases_css: $css);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al generar class html',data: $css_html);
        }
        $ids_html = $this->ids_html(campo:  $campo, ids_css: $ids);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al generar ids html',data: $ids_html);
        }

        $params = new stdClass();
        $params->disabled = $disabled_html;
        $params->required = $required_html;
        $params->data_extra = $data_extra_html;
        $params->class = $css_html;
        $params->ids = $ids_html;

        return $params;
    }

    /**
     * PROBADO - PARAMS ORDER PARAMS INT
     * @param string $etiqueta
     * @param string $campo
     * @param string $pattern
     * @param array $clases_css
     * @param bool $disabled
     * @param bool $required
     * @param array $ids_css
     * @param array $data_extra
     * @param string $value
     * @return array|stdClass
     */
    public function params_input(string $campo, array $clases_css, array $data_extra, bool $disabled, string $etiqueta,
                                 array $ids_css, string $pattern, bool $required, string $value): array|stdClass
    {
        $campo = trim($campo);

        if($campo === ''){
            return $this->error->error('Error el campo no puede venir vacio', $campo);
        }

        $base_input_dinamic = $this->base_input_dinamic(campo:  $campo, etiqueta: $etiqueta);
        if(errores::$error){
            return $this->error->error('Error al genera base input', $base_input_dinamic);
        }

        $data_base_input = $this->base_input(campo: $campo, clases_css: $clases_css, data_extra:  $data_extra,
            disabled:  $disabled, ids_css: $ids_css, pattern: $pattern, required:  $required, value: $value);

        if(errores::$error){
            return $this->error->error('Error al genera base input', $data_base_input);
        }

        $obj = new stdClass();
        foreach ($base_input_dinamic as $name=>$base){
            $obj->$name = $base;
        }
        foreach ($data_base_input as $name=>$base){
            $obj->$name = $base;
        }
        return $obj;
    }

    /**
     * PROBADO - PARAMS-ORDER PARAMS INT
     * @param string $pattern
     * @return string
     */
    private function pattern_html(string $pattern): string
    {
        $html_pattern = '';
        if($pattern){
            $html_pattern = "pattern='$pattern'";
        }
        return $html_pattern;
    }

    /**
     * Genera required en forma html para ser integrado en un input
     * @version 1.87.19
     * @param bool $required indica si es requerido o no
     * @return string required en caso true o vacio en false
     */
    public function required_html(bool $required): string
    {
        $required_html = '';
        if($required){
            $required_html = 'required';
        }
        return $required_html;
    }

    /**
     * Genera un salto de linea aplicando div 12
     * @param bool $ln Si true aplica div 12
     * @return string
     * @version 1.246.39
     * @verfuncion 1.1.0
     * @author mgamboa
     * @fecha 2022-08-01 17:06
     */
    private function salto(bool $ln): string
    {
        $salto = '';
        if($ln){
            $salto = "<div class='col-md-12'></div>";
        }
        return $salto;
    }



}
