<?php
namespace models;
use base\orm\modelo;
use config\generales;
use gamboamartin\errores\errores;
use gamboamartin\plugins\files;
use JsonException;
use PDO;
use RuntimeException;
use stdClass;


class doc_documento extends modelo{ //FINALIZADAS
    /**
     * DEBUG INI
     * accion constructor.
     * @param PDO $link
     */
    public function __construct(PDO $link){
        $tabla = __CLASS__;
        $columnas = array($tabla=>false, 'doc_tipo_documento'=>$tabla, 'doc_extension'=>$tabla);
        $campos_obligatorios = array('doc_tipo_documento_id', 'doc_extension_id');
        parent::__construct(link: $link,tabla:  $tabla,campos_obligatorios: $campos_obligatorios, columnas:  $columnas);
    }

    /**
     * PRUEBA P ORDER P INT
     * Funcion sobrescrita la cual solo devuelve error
     * @param bool $reactiva
     * @return array
     */
    public function activa_bd(bool $reactiva = false): array
    {
        return $this->error->error(mensaje: 'Error la funcion de activa_bd no esta permitada para este modelo', data: $reactiva);
    }

    /**
     * PRUEBA P ORDER P INT
     * Inserta registro de documento en la base de datos
     * @param array $file
     * @return array|stdClass
     * @throws JsonException
     */
    public function alta_bd(array $file = array()): array|stdClass
    {
        $keys = array('name','tmp_name');
        $valida = $this->validacion->valida_existencia_keys(keys: $keys,registro:  $file);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar FILES', data: $valida);
        }
        $keys = array('doc_tipo_documento_id');
        $valida = $this->validacion->valida_existencia_keys(keys: $keys, registro: $this->registro);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar registro a insertar', data: $valida);
        }
        $valida = (new files())->valida_extension(archivo: $file['name']);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar extension', data: $valida);
        }

        $extension = (new files())->extension(archivo: $file['name']);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error obtener extension', data: $extension);
        }

        $grupo_id = -1;
        if(isset($_SESSION['grupo_id']) && $_SESSION['grupo_id']!==''){
            $grupo_id = $_SESSION['grupo_id'];
        }

        $validaciones = $this->validaciones_documentos(extension: $extension, grupo_id: $grupo_id,
            tipo_documento_id: $this->registro['doc_tipo_documento_id']);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error validar documento', data: $validaciones);
        }

        $extension_id = (new doc_extension($this->link))->doc_extension_id(extension: $extension);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error obtener extension id', data: $extension_id);
        }

        $nombre_doc = (new files())->nombre_doc(tipo_documento_id: $this->registro['doc_tipo_documento_id'],
            extension: $extension);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error obtener nombre documento', data: $nombre_doc);
        }

        $ruta_archivos = (new generales())->path_base.'/archivos/';

        $ruta_relativa = 'archivos/'.$this->tabla.'/';

        if(!is_dir($ruta_archivos) && !mkdir($ruta_archivos) && !is_dir($ruta_archivos)) {
            return $this->error->error(mensaje: 'Error crear directorio', data: $ruta_archivos);
        }


        $ruta_absoluta_directorio = (new generales())->path_base.$ruta_relativa;

        if(!is_dir($ruta_absoluta_directorio) && !mkdir($ruta_absoluta_directorio) &&
            !is_dir($ruta_absoluta_directorio)) {
            return $this->error->error(mensaje: 'Error crear directorio', data: $ruta_absoluta_directorio);
        }


        if(!file_exists($file['tmp_name'])){
            return $this->error->error('Error al guardar archivo temporal', $file);
        }

        $this->registro['status'] = 'activo';
        $this->registro['nombre'] = $nombre_doc;
        $this->registro['ruta_relativa'] = $ruta_relativa.$nombre_doc;
        $this->registro['ruta_absoluta'] = $ruta_absoluta_directorio.$nombre_doc;
        $this->registro['doc_extension_id'] = $extension_id;

        $r_alta_doc = parent::alta_bd();
        if(errores::$error){
            return $this->error->error('Error al guardar registro', $r_alta_doc);
        }

        $guarda = (new files())->guarda_archivo_fisico(contenido_file:  file_get_contents($file['tmp_name']),
            ruta_file: $this->registro['ruta_absoluta']);
        if(errores::$error){
            return $this->error->error('Error al guardar archivo', $guarda);
        }

        return $r_alta_doc;
    }

    public function alta_registro(array $registro, array $file = array()): array|stdClass
    {
        $this->registro = $registro;
        $r_alta = $this->alta_bd(file:$file);
        if(errores::$error){
            return $this->error->error('Error al guardar archivo', $r_alta);
        }
        return $r_alta;
    }

    /**
     * PRUEBA P ORDER P INT
     * Funcion sobrescrita la cual solo devuelve error
     * @return array
     */
    public function desactiva_bd(): array
    {
        return $this->error->error(mensaje: 'Error la funcion de desactiva_bd no esta permitada para este modelo', data: $this);
    }

    public function elimina_bd(int $id): array
    {
        $documento = $this->registro(registro_id: $id);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al obtener documento', data: $documento);
        }

        $grupo_id = -1;
        if(isset($_SESSION['grupo_id']) && $_SESSION['grupo_id']!==''){
            $grupo_id = $_SESSION['grupo_id'];
        }

        $tiene_permiso = (new doc_acl_tipo_documento($this->link))->tipo_documento_permiso(
            grupo_id: $grupo_id, tipo_documento_id: $documento['doc_tipo_documento_id']);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar permiso',
                data: $tiene_permiso);
        }
        if (!$tiene_permiso) {
            return $this->error->error(mensaje: 'Error no tiene permiso de alta', data: $tiene_permiso);
        }

        $filtro['doc_documento.id'] = $id;
        $versiones = (new doc_version($this->link))->filtro_and(filtro: $filtro);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error obtener versiones', data: $versiones);
        }

        foreach ($versiones as $version){
            $elimina_version = (new doc_version($this->link))->elimina_bd(id: $version['doc_version_id']);
            if(errores::$error){
                return $this->error->error(mensaje: 'Error al eliminar versiones', data: $elimina_version);
            }
        }

        if(file_exists($documento['doc_documento_ruta_absoluta'])){
            unlink($documento['doc_documento_ruta_absoluta']);
        }

        $r_elimina_doc = parent::elimina_bd(id: $id);
        if(errores::$error){
            return $this->error->error(mensaje:'Error al eliminar documento', data: $r_elimina_doc);
        }

        return $r_elimina_doc;
    }

    /**
     * PRUEBA P ORDER P INT
     * Se edita registro y se genera registro de version
     * @param array $registro
     * @param int $id
     * @param bool $reactiva
     * @return array|stdClass
     */
    public function modifica_bd(array $registro, int $id, bool $reactiva = false): array|stdClass
    {
        if(isset($registro['status'])){
            return $this->error->error(mensaje: 'Error no puedes modificar status', data: $registro);
        }
        $keys = array('name','tmp_name');
        $valida = $this->validacion->valida_existencia_keys(keys: $keys,registro:  $_FILES);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar FILES', data: $valida);
        }
        $keys = array('doc_tipo_documento_id');
        $valida = $this->validacion->valida_existencia_keys(keys: $keys, registro: $registro);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar registro a insertar', data: $valida);
        }

        $valida = (new files())->valida_extension(archivo: $_FILES['name']);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar extension', data: $valida);
        }

        $extension = (new files())->extension(archivo: $_FILES['name']);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error obtener extension', data: $extension);
        }

        $grupo_id = -1;
        if(isset($_SESSION['grupo_id']) && $_SESSION['grupo_id']!==''){
            $grupo_id = $_SESSION['grupo_id'];
        }

        $validaciones = $this->validaciones_documentos(extension: $extension, grupo_id: $grupo_id,
            tipo_documento_id: $registro['doc_tipo_documento_id']);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error validar documento', data: $validaciones);
        }

        $documento = $this->registro(registro_id: $id);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al obtener documento', data: $documento);
        }

        if(!file_exists($_FILES['tmp_name'])){
            return $this->error->error('Error al guardar archivo temporal', $_FILES);
        }

        if($documento['doc_extension_descripcion'] !== $extension){
            $extension_id = (new doc_extension($this->link))->doc_extension_id(extension: $extension);
            if(errores::$error){
                return $this->error->error(mensaje: 'Error obtener extension id', data: $extension_id);
            }

            $ruta_archivos = (new generales())->path_base.'/archivos/';

            $ruta_relativa = 'archivos/'.$this->tabla.'/';

            if(!is_dir($ruta_archivos) && !mkdir($ruta_archivos) && !is_dir($ruta_archivos)) {
                return $this->error->error(mensaje: 'Error crear directorio', data: $ruta_archivos);
            }

            $ruta_absoluta_directorio = (new generales())->path_base.$ruta_relativa;

            if(!is_dir($ruta_absoluta_directorio) && !mkdir($ruta_absoluta_directorio) &&
                !is_dir($ruta_absoluta_directorio)) {
                return $this->error->error(mensaje: 'Error crear directorio', data: $ruta_absoluta_directorio);
            }

            $nombre_doc = str_replace($documento['doc_extension_descripcion'], $extension,
                $documento['doc_documento_nombre']);

            $registro['nombre'] = $nombre_doc;
            $registro['ruta_relativa'] = $ruta_relativa.$nombre_doc;
            $registro['ruta_absoluta'] = $ruta_absoluta_directorio.$nombre_doc;
            $registro['doc_extension_id'] = $extension_id;

            $documento['doc_documento_ruta_absoluta'] = $registro['ruta_absoluta'];
        }

        $doc_version_modelo = new doc_version($this->link);
        $doc_version_modelo->registro['doc_documento_id'] = $id;
        $r_alta_version = $doc_version_modelo->alta_bd();
        if(errores::$error){
            return $this->error->error('Error al guardar registro', $r_alta_version);
        }

        $guarda = (new files())->guarda_archivo_fisico(contenido_file:  file_get_contents($_FILES['tmp_name']),
            ruta_file: $documento['doc_documento_ruta_absoluta']);
        if(errores::$error){
            return $this->error->error('Error al guardar archivo', $guarda);
        }

        $r_modifica_doc = parent::modifica_bd($registro, $id, $reactiva);
        if(errores::$error){
            return $this->error->error('Error al modificar registro', $r_modifica_doc);
        }
        return $r_modifica_doc;
    }

    /** Valida
     * @param string $extension
     * @param int $grupo_id
     * @param int $tipo_documento_id
     * @return bool|array
     */
    private function validaciones_documentos(string $extension, int $grupo_id, int $tipo_documento_id): bool|array
    {
        $aplica_seguridad = (new generales())->aplica_seguridad;
        if($aplica_seguridad) {
            $tiene_permiso = (new doc_acl_tipo_documento($this->link))->tipo_documento_permiso(
                grupo_id: $grupo_id, tipo_documento_id: $tipo_documento_id);
            if(errores::$error){
                return $this->error->error(mensaje: 'Error al validar permiso',
                    data: $tiene_permiso);
            }
            if (!$tiene_permiso) {
                return $this->error->error(mensaje: 'Error no tiene permiso de alta', data: $tiene_permiso);
            }
        }

        $extension_permitida = (new doc_tipo_documento($this->link))->valida_extension_permitida(extension: $extension,
            tipo_documento_id: $tipo_documento_id);

        if(errores::$error){
            return $this->error->error(mensaje: 'Error al obtener extension',
                data: $extension_permitida);
        }

        if(!$extension_permitida){
            return $this->error->error(mensaje: 'Error la extension del documento no es validar',
                data: $extension_permitida);
        }

        return true;
    }
}