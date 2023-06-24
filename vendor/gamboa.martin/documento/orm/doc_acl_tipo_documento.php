<?php
namespace models;
use base\orm\modelo;
use config\generales;
use gamboamartin\errores\errores;
use PDO;
use stdClass;


class doc_acl_tipo_documento extends modelo{ //FINALIZADAS
    /**
     * DEBUG INI
     * accion constructor.
     * @param PDO $link
     */
    public function __construct(PDO $link){
        $tabla = __CLASS__;
        $columnas = array($tabla=>false, 'doc_tipo_documento'=>$tabla, 'adm_grupo'=>$tabla);
        $campos_obligatorios = array('doc_tipo_documento_id', 'adm_grupo_id');
        parent::__construct(link: $link,tabla:  $tabla,campos_obligatorios: $campos_obligatorios, columnas:  $columnas);
    }

    /**
     * PRUEBA P ORDER P INT
     * Funcion que verifica si existe un acl_tipo_documento conforme al grupo_id y el tipo_documento_id
     * @param int $grupo_id Grupo de usuario
     * @param int $tipo_documento_id Tipo de documento en base de datos no relacionado a la extension,
     * mas bien al objeto del tipo del documento ej INE
     * @return array|bool
     */
    public function tipo_documento_permiso(int $grupo_id, int $tipo_documento_id): bool|array
    {

        if($grupo_id <= 0){
            return $this->error->error(mensaje: 'Error grupo id no puede ser menor a 1',data:  $grupo_id);
        }
        if($tipo_documento_id <= 0){
            return $this->error->error(mensaje: 'Error tipo documento id no puede ser menor a 1',
                data: $tipo_documento_id);
        }

        $filtro['doc_tipo_documento.id'] = $tipo_documento_id;
        $filtro['adm_grupo.id'] = $grupo_id;

        $existe = $this->existe(filtro: $filtro);
        if(errores::$error) {
            return $this->error->error(mensaje: 'Error al obtener acl', data: $existe);
        }

        return $existe;
    }
}