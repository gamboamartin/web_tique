<?php
namespace gamboamartin\direccion_postal\models;
use base\orm\modelo;
use gamboamartin\errores\errores;
use PDO;
use stdClass;

class dp_calle_pertenece extends modelo{
    public function __construct(PDO $link){
        $tabla = 'dp_calle_pertenece';
        $columnas = array($tabla=>false,'dp_colonia_postal'=>$tabla,'dp_calle'=>$tabla,'dp_cp'=>'dp_colonia_postal',
            'dp_colonia'=>'dp_colonia_postal','dp_municipio'=>'dp_cp','dp_estado'=>'dp_municipio','dp_pais'=>'dp_estado');
        $campos_obligatorios[] = 'descripcion';
        $campos_obligatorios[] = 'descripcion_select';
        $campos_obligatorios[] = 'dp_calle_id';
        $campos_obligatorios[] = 'dp_colonia_postal_id';

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);
    }

    public function alta_bd(): array|stdClass
    {

        $valida = $this->valida_predetermiando();
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar predeterminado',data:  $valida);
        }

        $r_alta_bd = parent::alta_bd(); // TODO: Change the autogenerated stub
        if(errores::$error){
            return $this->error->error(mensaje:  'Error al dar de alta registro', data: $r_alta_bd);
        }
        return $r_alta_bd;
    }


    /**
     * Genera un objeto con todos los elementos de una calle como elemento atomico de domicilios a nivel datos
     * @param int $dp_calle_pertenece_id Identificador de calle_pertenece
     * @return stdClass|array $data->pais, $data->estado, $data->municipio, $data->cp, $data->colonia, $data->colonia_postal
     * $data->calle, $data->calle_pertenece
     * @version 0.115.8
     */
    public function objs_direcciones(int $dp_calle_pertenece_id): stdClass|array
    {
        if($dp_calle_pertenece_id <=0){
            return $this->error->error(mensaje: 'Error $dp_calle_pertenece_id debe ser mayor a 0',
                data:  $dp_calle_pertenece_id);
        }
        $dp_calle_pertenece = $this->registro(
            registro_id: $dp_calle_pertenece_id, columnas_en_bruto: true,retorno_obj: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al obtener calle pertenece',data:  $dp_calle_pertenece);
        }

        $dp_calle = (new dp_calle($this->link))->registro(
            registro_id: $dp_calle_pertenece->dp_calle_id, columnas_en_bruto: true,retorno_obj: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al obtener $dp_calle',data:  $dp_calle);
        }

        $dp_colonia_postal = (new dp_colonia_postal($this->link))->registro(
            registro_id: $dp_calle_pertenece->dp_colonia_postal_id, columnas_en_bruto: true,retorno_obj: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al obtener $dp_colonia_postal',data:  $dp_colonia_postal);
        }

        $dp_colonia = (new dp_colonia($this->link))->registro(
            registro_id: $dp_colonia_postal->dp_colonia_id, columnas_en_bruto: true,retorno_obj: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al obtener $dp_colonia',data:  $dp_colonia);
        }

        $dp_cp = (new dp_cp($this->link))->registro(
            registro_id: $dp_colonia_postal->dp_cp_id, columnas_en_bruto: true,retorno_obj: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al obtener $dp_cp',data:  $dp_cp);
        }

        $dp_municipio = (new dp_municipio($this->link))->registro(
            registro_id: $dp_cp->dp_municipio_id, columnas_en_bruto: true,retorno_obj: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al obtener $dp_municipio',data:  $dp_municipio);
        }

        $dp_estado = (new dp_estado($this->link))->registro(registro_id: $dp_municipio->dp_estado_id,
            columnas_en_bruto: true,retorno_obj: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al obtener estado',data:  $dp_estado);
        }
        $dp_pais = (new dp_pais($this->link))->registro(registro_id: $dp_estado->dp_pais_id,
            columnas_en_bruto: true,retorno_obj: true);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al obtener pais',data:  $dp_pais);
        }

        $data = new stdClass();

        $data->pais = $dp_pais;
        $data->estado = $dp_estado;
        $data->municipio = $dp_municipio;
        $data->cp = $dp_cp;
        $data->colonia = $dp_colonia;
        $data->colonia_postal = $dp_colonia_postal;
        $data->calle = $dp_calle;
        $data->calle_pertenece = $dp_calle_pertenece;

        return $data;

    }


}