<?php
namespace models;
use base\orm\modelo;
use gamboamartin\errores\errores;
use PDO;
use stdClass;

class wt_imagen extends modelo{
    public function __construct(PDO $link){
        $tabla = __CLASS__;
        $columnas = array($tabla=>false,'doc_documento'=>$tabla, 'doc_extension'=>$tabla);
        $campos_obligatorios = array('doc_extension_id');

        $no_duplicados = array();


        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas,no_duplicados: $no_duplicados);
    }

}