<?php
namespace tests;
use gamboamartin\errores\errores;
use gamboamartin\test\test;
use JsonException;
use models\adm_grupo;
use models\doc_acl_tipo_documento;
use models\doc_documento;
use models\doc_extension;
use models\doc_extension_permitido;
use models\doc_tipo_documento;
use models\doc_version;
use stdClass;

class base_test extends test{
    private errores $error;
    public function __construct(?string $name = null, array $data = [], string $dataName = '', string $tipo_conexion = 'PDO')
    {
        parent::__construct($name, $data, $dataName, $tipo_conexion);
        $this->error = new errores();
    }

    protected function alta_acl_tipo_documento(int $id = 1, int $doc_tipo_documento_id = 1, int $grupo_id =1): array|stdClass
    {
        $_SESSION['usuario_id'] = 1;
        $doc_act_tipo_documento['id'] = $id;
        $doc_act_tipo_documento['doc_tipo_documento_id'] = $doc_tipo_documento_id;
        $doc_act_tipo_documento['adm_grupo_id'] = $grupo_id;
        $alta_act_tipo_documento = (new doc_acl_tipo_documento($this->link))->alta_registro(registro: $doc_act_tipo_documento);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al insertar extension', data: $alta_act_tipo_documento);
        }
        return $alta_act_tipo_documento;
    }

    protected function alta_documento(int $id = 1, int $doc_extension_id = 1, int $doc_tipo_documento_id = 1,
                                      string $nombre = 'a',
                                      string $ruta_absoluta = '/var/www/html/documento/archivos/doc_documento/',
                                      string $ruta_relativa = 'archivos/doc_documento/'): array|stdClass
    {
        $_SESSION['usuario_id'] = 1;
        $doc_documento['id'] = $id;
        $doc_documento['nombre'] = $nombre;
        $doc_documento['ruta_absoluta'] = $ruta_absoluta.$nombre;
        $doc_documento['ruta_relativa'] = $ruta_relativa.$nombre;
        $doc_documento['doc_tipo_documento_id'] = $doc_tipo_documento_id;
        $doc_documento['doc_extension_id'] = $doc_extension_id;
        $_FILES['name'] = 'a.a';
        $_FILES['tmp_name'] = '/var/www/html/documento/tests/files/a.a';

        $alta_documento = (new doc_documento($this->link))->alta_registro(registro: $doc_documento, file: $_FILES);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al insertar documento', data: $alta_documento);
        }
        return $alta_documento;
    }

    protected function alta_extension(int $id = 1, string $codigo = '1', string $descripcion = 'a'): array|stdClass
    {
        $_SESSION['usuario_id'] = 1;
        $doc_extension['id'] = $id;
        $doc_extension['codigo'] = $codigo;
        $doc_extension['descripcion'] = $descripcion;
        $alta_extension = (new doc_extension($this->link))->alta_registro(registro: $doc_extension);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al insertar extension', data: $alta_extension);
        }
        return $alta_extension;
    }

    protected function alta_extension_permitida(int $id, int $doc_extension_id, int $doc_tipo_documento_id): bool|array
    {
        $_SESSION['usuario_id'] = 1;
        $doc_extension_permitido['id'] = $id;
        $doc_extension_permitido['doc_tipo_documento_id'] = $doc_extension_id;
        $doc_extension_permitido['doc_extension_id'] = $doc_tipo_documento_id;
        $alta_extension_permitido = (new doc_extension_permitido($this->link))->alta_registro(registro: $doc_extension_permitido);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al insertar extension permitido', data: $alta_extension_permitido);
        }
        return true;
    }

    /**
     * @throws JsonException
     */
    protected function alta_grupo(int $id = 1, string $descripcion = '1'): bool|array
    {
        $_SESSION['usuario_id'] = 1;
        $grupo['id'] = $id;
        $grupo['descripcion'] = $descripcion;

        $alta_grupo = (new adm_grupo($this->link))->alta_registro(registro: $grupo);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al insertar $alta_grupo', data: $alta_grupo);
        }
        return true;
    }

    /**
     * @throws \JsonException
     */
    protected function alta_tipo_documento(int $id = 1, string $descripcion = '1', string $codigo = '1'): bool|array
    {
        $_SESSION['usuario_id'] = 1;
        $doc_extension_permitido['id'] = $id;
        $doc_extension_permitido['descripcion'] = $descripcion;
        $doc_extension_permitido['codigo'] = $codigo;
        $alta_tipo_documento = (new doc_tipo_documento($this->link))->alta_registro(registro: $doc_extension_permitido);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al insertar extension permitido', data: $alta_tipo_documento);
        }
        return true;
    }

    protected function elimina_acl_tipo_documento(): bool|array
    {
        $elimina_acl_tipo_documento = (new doc_acl_tipo_documento($this->link))->elimina_todo();
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al eliminar acl tipo documento', data: $elimina_acl_tipo_documento);
        }
        return true;
    }

    protected function elimina_documento(): bool|array
    {
        $elimina_documento = (new doc_documento($this->link))->elimina_todo();
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al eliminar documento', data: $elimina_documento);
        }
        return true;
    }

    protected function elimina_extension(): bool|array
    {

        $elimina_documento = $this->elimina_documento();
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al eliminar documento', data: $elimina_documento);
        }
        $elimina_extension_permitido = $this->elimina_extension_permitido();
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al eliminar $elimina_extension_permitido',
                data: $elimina_extension_permitido);
        }

        $elimina_extension = (new doc_extension($this->link))->elimina_todo();
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al eliminar extensiones', data: $elimina_extension);
        }
        return true;
    }

    protected function elimina_extension_permitido(): bool|array
    {

        $elimina_extension_permitido = (new doc_extension_permitido($this->link))->elimina_todo();
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al eliminar extension permitido', data: $elimina_extension_permitido);
        }
        return true;
    }

    protected function elimina_version(): bool|array
    {
        $elimina_versio = (new doc_version($this->link))->elimina_todo();
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al eliminar versio', data: $elimina_versio);
        }
        return true;
    }

    protected function existe_acl_tipo_documento(int $id = 1): bool|array
    {
        $filtro = array();
        $filtro['doc_acl_tipo_documento.id'] = $id;
        $existe_acl_tipo_documento = (new doc_acl_tipo_documento($this->link))->existe(filtro: $filtro);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al verificar acl tipo documento', data: $existe_acl_tipo_documento);
        }
        return $existe_acl_tipo_documento;
    }

    protected function existe_documento(int $id = 1): bool|array
    {
        $filtro = array();
        $filtro['doc_documento.id'] = $id;
        $existe_documento= (new doc_documento($this->link))->existe(filtro: $filtro);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al verificar documento', data: $existe_documento);
        }
        return $existe_documento;
    }

    protected function existe_extension(int $id = 1): bool|array
    {
        $filtro = array();
        $filtro['doc_extension.id'] = $id;
        $existe_extension = (new doc_extension($this->link))->existe(filtro: $filtro);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al verificar extension', data: $existe_extension);
        }
        return $existe_extension;
    }
    protected function existe_extension_permitido(int $id = 1): bool|array
    {
        $filtro = array();
        $filtro['doc_extension_permitido.id'] = $id;
        $existe_extension_permitido = (new doc_extension_permitido($this->link))->existe(filtro: $filtro);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al verificar $existe_extension_permitido',
                data: $existe_extension_permitido);
        }
        return $existe_extension_permitido;
    }

    protected function existe_grupo(int $id = 1): bool|array
    {
        $filtro = array();
        $filtro['adm_grupo.id'] = $id;
        $existe_grupo = (new adm_grupo($this->link))->existe(filtro: $filtro);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al verificar $existe_grupo', data: $existe_grupo);
        }
        return $existe_grupo;
    }

    protected function existe_tipo_documento(int $id = 1): bool|array
    {
        $filtro = array();
        $filtro['doc_tipo_documento.id'] = $id;
        $existe_tipo_documento = (new doc_tipo_documento($this->link))->existe(filtro: $filtro);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al verificar $existe_tipo_documento',
                data: $existe_tipo_documento);
        }
        return $existe_tipo_documento;
    }

    protected function inserta_acl_tipo_documento(int $id = 1, int $doc_tipo_documento_id = 1, int $grupo_id =1): bool|array
    {
        $existe_acl_tipo_documento = $this->existe_acl_tipo_documento();
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al verificar extension', data: $existe_acl_tipo_documento);
        }

        if(!$existe_acl_tipo_documento) {
            $alta_acl_tipo_documento = $this->alta_acl_tipo_documento();
            if (errores::$error) {
                return $this->error->error(mensaje: 'Error al insertar extension', data: $alta_acl_tipo_documento);
            }
        }

        return true;
    }

    protected function inserta_documento(int $id = 1, int $doc_extension_id = 1, int $doc_tipo_documento_id = 1,
                                         string $nombre = 'a',
                                         string $ruta_absoluta = '/var/www/html/documento/archivos/doc_documento/',
                                         string $ruta_relativa = 'archivos/doc_documento/'): bool|array
    {
        $existe_extension = $this->existe_documento();
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al verificar extension', data: $existe_extension);
        }

        if(!$existe_extension) {
            $alta_extension = $this->alta_documento(nombre: $nombre);
            if (errores::$error) {
                return $this->error->error(mensaje: 'Error al insertar extension', data: $alta_extension);
            }
        }

        return true;
    }

    protected function inserta_extension(int $id = 1, string $codigo = '1', string $descripcion = 'pdf' ): bool|array
    {
        $existe_extension = $this->existe_extension();
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al verificar extension', data: $existe_extension);
        }

        if(!$existe_extension) {
            $alta_extension = $this->alta_extension(descripcion: $descripcion);
            if (errores::$error) {
                return $this->error->error(mensaje: 'Error al insertar extension', data: $alta_extension);
            }
        }

        return true;
    }

    protected function inserta_extension_permitido(int $id = 1, int $doc_extension_id = 1, 
                                                   int $doc_tipo_documento_id = 1): bool|array
    {
        $existe_extension_permitido = $this->existe_extension_permitido(id: $id);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al verificar $existe_extension_permitido', data: $existe_extension_permitido);
        }

        if(!$existe_extension_permitido) {
            $alta_extension_permitido = $this->alta_extension_permitida(id:$id,doc_extension_id: $doc_extension_id,
                doc_tipo_documento_id: $doc_tipo_documento_id);
            if (errores::$error) {
                return $this->error->error(mensaje: 'Error al insertar extension', data: $alta_extension_permitido);
            }
        }

        return true;
    }

    protected function inserta_grupo(int $id = 1, int $descripcion = 1): bool|array
    {
        $existe_grupo = $this->existe_grupo();
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al verificar extension', data: $existe_grupo);
        }

        if(!$existe_grupo) {
            $alta_acl_tipo_documento = $this->alta_grupo();
            if (errores::$error) {
                return $this->error->error(mensaje: 'Error al insertar extension', data: $alta_acl_tipo_documento);
            }
        }

        return true;
    }

    /**
     * @throws JsonException
     */
    protected function inserta_tipo_documento(int $id = 1, string $codigo = '1', string $descripcion = 'pdf' ): bool|array
    {
        $existe_tipo_documento = $this->existe_tipo_documento();
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al verificar tipo_documento', data: $existe_tipo_documento);
        }

        if(!$existe_tipo_documento) {
            $alta_extension = $this->alta_tipo_documento(descripcion: $descripcion);
            if (errores::$error) {
                return $this->error->error(mensaje: 'Error al insertar extension', data: $alta_extension);
            }
        }

        return true;
    }


}
