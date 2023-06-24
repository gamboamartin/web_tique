<?php
namespace html;

use gamboamartin\errores\errores;

use gamboamartin\system\html_controler;
use gamboamartin\system\init;
use gamboamartin\template\html;
use PDO;
use stdClass;


class selects {
    private errores  $error;
    public function __construct(){
        $this->error = new errores();
    }

    /**
     * Genera los inputs de direcciones de manera masiva
     * @param html $html Html de controler
     * @param PDO $link conexion a la base de datos
     * @param stdClass $row registro en proceso
     * @param stdClass $selects Conjunto de selects para la integracion
     * @param stdClass $params Parametros para integracion del select
     * @return array|stdClass
     * @version 0.109.8
     * @verfuncion 0.1.0
     * @author mgamboa
     * @fecha 2022-08-08 16:35
     */
    public function direcciones(html $html, PDO $link, stdClass $row, stdClass $selects, stdClass
    $params = new stdClass()): array|stdClass
    {
        $tablas = array('dp_pais_id','dp_estado_id','dp_municipio_id','dp_cp_id','dp_colonia_postal_id',
            'dp_calle_pertenece_id','dp_calle_pertenece_entre1_id','dp_calle_pertenece_entre2_id');
        foreach ($tablas as $key_id){

            $filtro = array();
            $cols = $params->$key_id->cols ?? 6;
            $disabled = $params->$key_id->disabled ?? false;
            $required = $params->$key_id->required ?? false;
            $data_select = $this->$key_id(filtro:$filtro,html: $html,link:  $link, row: $row, cols: $cols,
                disabled:$disabled, required: $required);
            if(errores::$error){
                return $this->error->error(mensaje: 'Error al generar select en '.$key_id,data:  $data_select);

            }
            $selects->$key_id = $data_select->select;
            $row = $data_select->row;
        }
        return $selects;
    }

    /**
     * Genera un select de tipo estado inicializado
     * @param array $filtro Filtro para obtencion de datos
     * @param html $html Clade de template
     * @param PDO $link conexion a bd
     * @param stdClass $row Registro en operacion
     * @param int $cols N columnas css
     * @param bool $disabled Si disabled deja el input deshabilitado
     * @return array|stdClass
     * @version 0.114.8
     */
    public function dp_calle_pertenece_id(array $filtro, html $html, PDO $link, stdClass $row, int $cols = 6,
                                          bool $disabled = false, bool $required = false): array|stdClass
    {
        if(isset($row->dp_colonia_postal_id) && (int)$row->dp_colonia_postal_id !== -1){
            $filtro['dp_colonia_postal.id'] = $row->dp_colonia_postal_id;
        }
        $con_registros = true;
        if(count($filtro) === 0){
            $con_registros = false;
        }

        $data = $this->select_base(con_registros: $con_registros,filtro:$filtro, html: $html,link:  $link,
            row: $row,tabla:  'dp_calle_pertenece', cols: $cols, disabled:$disabled, required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $data);

        }

        return $data;
    }

    /**
     * Genera un select de tipo estado inicializado
     * @param array $filtro Filtro de datos
     * @param html $html Clade de template
     * @param PDO $link conexion a bd
     * @param stdClass $row Registro en operacion
     * @param int $cols N columnas css
     * @param bool $disabled Si disabled deja el input deshabilitado
     * @return array|stdClass
     * @version 0.123.8
     */
    public function dp_calle_pertenece_entre1_id(array $filtro,html $html, PDO $link, stdClass $row, int $cols = 6,
                                                 bool $disabled = false, bool $required = false): array|stdClass
    {
        if(isset($row->dp_colonia_postal_id) && (int)$row->dp_colonia_postal_id !== -1){
            $filtro['dp_colonia_postal.id'] = $row->dp_colonia_postal_id;
        }
        $con_registros = true;
        if(count($filtro) === 0){
            $con_registros = false;
        }
        $data = $this->select_base(con_registros: $con_registros, filtro: $filtro, html: $html, link: $link,
            row: $row, tabla: 'dp_calle_pertenece', cols: $cols, disabled: $disabled,
            key_id: 'dp_calle_pertenece_entre1_id', name_funcion: 'select_dp_calle_pertenece_entre1_id',
            required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $data);

        }

        return $data;
    }

    /**
     * Genera un select de tipo estado inicializado
     * @param array $filtro Filtro con datos para obtencion de select
     * @param html $html Clade de template
     * @param PDO $link conexion a bd
     * @param stdClass $row Registro en operacion
     * @param int $cols N columnas css
     * @param bool $disabled Si disabled deja el input deshabilitado
     * @return array|stdClass
     */
    public function dp_calle_pertenece_entre2_id(array $filtro,html $html, PDO $link, stdClass $row, int $cols = 6,
                                                 bool $disabled = false, bool $required = false): array|stdClass
    {
        if(isset($row->dp_colonia_postal_id) && (int)$row->dp_colonia_postal_id !== -1){
            $filtro['dp_colonia_postal.id'] = $row->dp_colonia_postal_id;
        }
        $con_registros = true;
        if(count($filtro) === 0){
            $con_registros = false;
        }
        $data = $this->select_base(con_registros: $con_registros, filtro: $filtro, html: $html, link: $link,
            row: $row, tabla: 'dp_calle_pertenece', cols: $cols, disabled: $disabled,
            key_id: 'dp_calle_pertenece_entre2_id', name_funcion: 'select_dp_calle_pertenece_entre2_id',
            required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $data);

        }

        return $data;
    }

    /**
     * Genera un select de tipo estado inicializado
     * @param array $filtro
     * @param html $html Clade de template
     * @param PDO $link conexion a bd
     * @param stdClass $row Registro en operacion
     * @param int $cols N columnas css
     * @param bool $disabled Si disabled deja el input deshabilitado
     * @return array|stdClass
     */
    public function dp_colonia_postal_id(array $filtro,html $html, PDO $link, stdClass $row, int $cols = 6,
                                         bool $disabled = false, bool $required = false): array|stdClass
    {

        if(isset($row->dp_cp_id) && (int)$row->dp_cp_id !== -1){
            $filtro['dp_cp.id'] = $row->dp_cp_id;
        }
        $con_registros = true;
        if(count($filtro) === 0){
            $con_registros = false;
        }
        $data = $this->select_base(con_registros: $con_registros,filtro:$filtro,html: $html,
            link:  $link, row: $row,tabla:  'dp_colonia_postal', cols: $cols, disabled: $disabled, required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $data);

        }

        return $data;
    }

    /**
     * Genera un select de tipo estado inicializado
     * @param array $filtro
     * @param html $html Clade de template
     * @param PDO $link conexion a bd
     * @param stdClass $row Registro en operacion
     * @param int $cols N columnas css
     * @param bool $disabled Si disabled deja el input deshabilitado
     * @return array|stdClass
     */
    public function dp_cp_id(array $filtro,html $html, PDO $link, stdClass $row, int $cols = 6,
                             bool $disabled = false, bool $required = false): array|stdClass
    {

        if(isset($row->dp_municipio_id) && (int)$row->dp_municipio_id !== -1){
            $filtro['dp_municipio.id'] = $row->dp_municipio_id;
        }
        $con_registros = true;
        if(count($filtro) === 0){
            $con_registros = false;
        }
        $data = $this->select_base(con_registros: $con_registros,filtro:$filtro,html: $html,link:  $link,
            row: $row,tabla:  'dp_cp', cols: $cols, disabled:$disabled, required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $data);

        }

        return $data;
    }

    /**
     * Genera un select de tipo estado inicializado
     * @param array $filtro Filtro para obtencion de datos
     * @param html $html Clade de template
     * @param PDO $link conexion a bd
     * @param stdClass $row Registro en operacion
     * @param int $cols N columnas css
     * @param bool $disabled Si disabled deja el input deshabilitado
     * @return array|stdClass
     * @version 0.125.8
     */
    public function dp_estado_id(array $filtro,html $html, PDO $link, stdClass $row, int $cols = 6,
                                 bool $disabled = false, bool $required = false): array|stdClass
    {

        if(isset($row->dp_pais_id) && (int)$row->dp_pais_id !== -1){
            $filtro['dp_pais.id'] = $row->dp_pais_id;
        }
        $con_registros = true;
        if(count($filtro) === 0){
            $con_registros = false;
        }
        $data = $this->select_base(con_registros: $con_registros,filtro:$filtro,html: $html,
            link:  $link, row: $row,tabla:  'dp_estado', cols: $cols, disabled:$disabled, required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $data);

        }

        return $data;
    }

    /**
     * Genera un select de tipo estado inicializado
     * @param array $filtro
     * @param html $html Clade de template
     * @param PDO $link conexion a bd
     * @param stdClass $row Registro en operacion
     * @param int $cols N columnas css
     * @param bool $disabled Si disabled deja el input deshabilitado
     * @return array|stdClass
     */
    public function dp_municipio_id(array $filtro,html $html, PDO $link, stdClass $row, int $cols = 6,
                                    bool $disabled = false, bool $required = false): array|stdClass
    {

        if(isset($row->dp_estado_id) && (int)$row->dp_estado_id !== -1){
            $filtro['dp_estado.id'] = $row->dp_estado_id;
        }
        $con_registros = true;
        if(count($filtro) === 0){
            $con_registros = false;
        }

        $data = $this->select_base(con_registros: $con_registros,filtro:$filtro,html: $html,link:  $link,
            row: $row,tabla:  'dp_municipio', cols: $cols, disabled:$disabled, required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $data);

        }

        return $data;
    }

    /**
     * Genera un select de tipo pais inicializado
     * @param array $filtro
     * @param html $html Clade de template
     * @param PDO $link conexion a bd
     * @param stdClass $row Registro en operacion
     * @param int $cols N columnas css
     * @param bool $disabled Si disabled deja el input deshabilitado
     * @return array|stdClass
     * @version 0.83.8
     * @verfuncion 0.1.0
     * @fecha 2022-08-05 10:01
     * @author mgamboa
     */
    public function dp_pais_id(array $filtro,html $html, PDO $link, stdClass $row, int $cols = 6,
                               bool $disabled = false, bool $required = false): array|stdClass
    {

        $data = $this->select_base(con_registros: true,filtro:$filtro,html: $html,
            link:  $link, row: $row,tabla:  'dp_pais',cols: $cols, disabled: $disabled, required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $data);

        }

        return $data;
    }

    /**
     * @param html $html Html del template
     * @param string $tabla Tabla o estructura
     * @return html_controler|array
     * @version 0.92.8
     * @verfuncion 0.1.0
     * @fecha 2022-08-05 12:20
     * @author mgamboa
     */
    private function genera_obj_html(html $html, string $tabla): html_controler|array
    {
        $tabla = trim($tabla);
        if($tabla === ''){
            return $this->error->error(mensaje: 'Error tabla esta vacia',data: $tabla);
        }
        $name_obj = $this->name_obk_html(tabla: $tabla);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al obtener nombre de obj',data:  $name_obj);
        }

        $obj_html = $this->obj_html(name_obj: $name_obj,html: $html);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar objeto html',data:  $obj_html);
        }
        return $obj_html;
    }

    /**
     * Genera un select inicilaizado
     * @param bool $con_registros Si con registros muestra los registros
     * @param array $filtro Filtro de obtencion de datos
     * @param PDO $link Conexion a la base de datos
     * @param html_controler $obj_html Obj de controller html
     * @param stdClass $row_ registro en proceso
     * @param string $tabla Tabla de ejecucion
     * @param int $cols Columnas css
     * @param bool $disabled Si disabled el input queda deshablitado
     * @param string $key_id llave del identificador
     * @param string $name_function nombre de funcion para generacion de select
     * @return array|string
     * @version 0.128..26
     * @verfuncion 0.1.0
     * @fecha 2022-08-05 13:19
     * @author mgamboa
     */
    private function genera_select(bool $con_registros, array $filtro, PDO $link, html_controler $obj_html,
                                   stdClass $row_, string $tabla, int $cols = 6, bool $disabled = false,
                                   string $key_id = '', string $name_function = '',
                                   bool $required = false): array|string
    {
        $tabla = trim($tabla);
        if($tabla === ''){
            return $this->error->error(mensaje: 'Error tabla esta vacia',data: $tabla);
        }

        $key_id = trim($key_id);
        if($key_id === '') {
            $key_id_ = $this->key_id(tabla: $tabla);
            if (errores::$error) {
                return $this->error->error(mensaje: 'Error al generar key id', data: $key_id);
            }

            $key_id = (string)$key_id_;
        }
        if(!isset($row_->$key_id)){
            $row_->$key_id = -1;
        }

        $name_function = trim($name_function);
        if($name_function==='') {
            $name_function_ = $this->name_function(key_id: $key_id);
            if (errores::$error) {
                return $this->error->error(mensaje: 'Error al generar name function', data: $name_function_);
            }
            if(is_string($name_function_)) {
                $name_function = $name_function_;
            }
        }


        $select = $obj_html->$name_function(cols: $cols, con_registros:$con_registros, id_selected:$row_->$key_id,
            link: $link, filtro:$filtro, disabled:$disabled, required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);

        }
        return $select;
    }

    /**
     * Genera un key id
     * @param string $tabla Tabla o estructura de database
     * @return string|array
     * @version 0.94.8
     * @verfuncion 0.1.0
     * @fecha 2022-08-05 12:33
     * @author mgamboa
     */
    private function key_id(string $tabla): string|array
    {
        $tabla = trim($tabla);
        if($tabla === ''){
            return $this->error->error(mensaje: 'Error tabla esta vacia',data: $tabla);
        }
        return $tabla.'_id';
    }

    /**
     * Genera el nombre de la funcion a generar
     * @param string $key_id tabla_id
     * @return string|array
     * @version 0.96.8
     * @verfuncion 0.1.0
     * @fecha 2022-08-05
     * @author mgamboa
     */
    private function name_function(string $key_id): string|array
    {
        $key_id = trim($key_id);
        if($key_id === ''){
            return $this->error->error(mensaje: 'Error $key_id esta vacia',data: $key_id);
        }
        return 'select_'.$key_id;
    }

    /**
     * Genera el name del obj html
     * @param string $tabla Tabla para generacion
     * @return string|array
     * @version 0.86.8
     * @verfuncion 0.1.0
     * @fecha 2022-08-05 10:36
     * @author mgamboa
     */
    private function name_obk_html(string $tabla): string|array
    {
        $tabla = trim($tabla);
        if($tabla === ''){
            return $this->error->error(mensaje: 'Error tabla esta vacia',data: $tabla);
        }
        return "html\\".$tabla.'_html';
    }

    /**
     * Genera un objeto de tipo html controler
     * @param string $name_obj Nombre del objeto a generar
     * @param html $html html controller
     * @return html_controler|array
     * @version 0.88.8
     * @verfuncion 0.1.0
     * @fecha 2022-08-05 10:54
     * @author mgamboa
     */
    private function obj_html(string $name_obj, html $html): html_controler|array
    {
        $name_obj = trim($name_obj);
        if($name_obj === ''){
            return $this->error->error(mensaje: 'Error name obj esta vacio',data: $name_obj);
        }
        if(!class_exists($name_obj)){
            return $this->error->error(mensaje: 'Error no existe la clase',data: $name_obj);
        }
        /**
         * @var $obj_html html_controler
         */
        $obj_html = new $name_obj(html: $html);
        return $obj_html;
    }


    /**
     * Genera un select basico
     * @param bool $con_registros Si con registros muestra los registros
     * @param array $filtro Filtro para obtencion de datos
     * @param html $html Html del template
     * @param PDO $link Conexion a la base de datos
     * @param stdClass $row Registro en ejecucion
     * @param string $tabla Tabla o estructura
     * @param int $cols N columnas css
     * @param bool $disabled Si disabled deja el input deshabilitado
     * @param string $key_id Llave del identiifcador a validar
     * @param string $name_funcion Nombre de funcion
     * @return array|stdClass
     * @version 0.100.8
     * @verfuncion 0.1.0
     * @fecha 2022-08-05 15:50
     * @author mgamboa
     */
    private function select_base(bool $con_registros, array $filtro, html $html, PDO $link, stdClass $row,
                                 string $tabla, int $cols = 6, bool $disabled = false, string $key_id = '',
                                 string $name_funcion = '', bool $required = false): array|stdClass
    {

        $tabla = trim($tabla);
        if($tabla === ''){
            return $this->error->error(mensaje: 'Error la tabla esta vacia',data:  $tabla);
        }

        $row_ = $row;

        $row_ = (new init())->row_value_id($row_, tabla: $tabla);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al obtener id',data:  $row_);
        }


        $obj_html = $this->genera_obj_html(html: $html,tabla: $tabla);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar objeto html',data:  $obj_html);
        }

        $select = $this->genera_select(con_registros: $con_registros, filtro: $filtro, link: $link,
            obj_html: $obj_html, row_: $row_, tabla: $tabla, cols: $cols, disabled: $disabled, key_id: $key_id,
            name_function: $name_funcion, required: $required);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select',data:  $select);

        }

        $data = new stdClass();
        $data->row = $row_;
        $data->select = $select;
        return $data;
    }

}
