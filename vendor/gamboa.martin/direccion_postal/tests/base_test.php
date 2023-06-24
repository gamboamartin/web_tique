<?php
namespace gamboamartin\direccion_postal\tests;
use base\orm\modelo_base;
use gamboamartin\direccion_postal\models\dp_calle;
use gamboamartin\direccion_postal\models\dp_calle_pertenece;
use gamboamartin\direccion_postal\models\dp_pais;
use gamboamartin\errores\errores;

use PDO;


class base_test{

    public function alta_dp_calle(PDO $link): array|\stdClass
    {


        $registro = array();
        $registro['id'] = 1;
        $registro['codigo'] = 1;
        $registro['descripcion'] = 1;
        $registro['descripcion_select'] = 1;

        $alta = (new dp_calle($link))->alta_registro($registro);
        if(errores::$error){
            return (new errores())->error(mensaje: 'Error al insertar', data: $alta);
        }
        return $alta;
    }

    public function alta_dp_calle_pertenece(PDO $link, string $predeterminado = 'inactivo'): array|\stdClass
    {

        $alta = $this->alta_dp_calle($link);
        if(errores::$error){
            return (new errores())->error('Error al dar de alta', $alta);

        }

        $registro = array();
        $registro['id'] = 1;
        $registro['codigo'] = 1;
        $registro['descripcion'] = 1;
        $registro['descripcion_select'] = 1;
        $registro['dp_calle_id'] = 1;
        $registro['dp_colonia_postal_id'] = 1;
        $registro['predeterminado'] = $predeterminado;



        $alta = (new dp_calle_pertenece($link))->alta_registro($registro);
        if(errores::$error){
            return (new errores())->error(mensaje: 'Error al insertar', data: $alta);
        }
        return $alta;
    }

    public function alta_dp_pais(PDO $link): array|\stdClass
    {
        $registro = array();
        $registro['id'] = 1;
        $registro['codigo'] = 1;
        $registro['descripcion'] = 1;



        $alta = (new dp_pais($link))->alta_registro($registro);
        if(errores::$error){
            return (new errores())->error(mensaje: 'Error al insertar', data: $alta);
        }
        return $alta;
    }

    public function del(PDO $link, string $name_model): array
    {

        $model = (new modelo_base($link))->genera_modelo(modelo: $name_model);
        $del = $model->elimina_todo();
        if(errores::$error){
            return (new errores())->error(mensaje: 'Error al eliminar '.$name_model, data: $del);
        }
        return $del;
    }

    public function del_dp_calle(PDO $link): array
    {

        $del = $this->del_dp_calle_pertenece($link);
        if(errores::$error){
            return (new errores())->error('Error al eliminar', $del);
        }

        $del = $this->del($link, 'gamboamartin\\direccion_postal\\models\\dp_calle');
        if(errores::$error){
            return (new errores())->error('Error al eliminar', $del);
        }
        return $del;
    }

    public function del_dp_calle_pertenece(PDO $link): array
    {


        $del = $this->del($link, 'gamboamartin\\direccion_postal\\models\\dp_calle_pertenece');
        if(errores::$error){
            return (new errores())->error('Error al eliminar', $del);
        }
        return $del;
    }




}
