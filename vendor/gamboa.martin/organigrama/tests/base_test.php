<?php
namespace tests;
use base\orm\modelo_base;
use gamboamartin\errores\errores;
use gamboamartin\organigrama\models\org_empresa;
use PDO;


class base_test{



    public function alta_org_empresa(PDO $link): array|\stdClass
    {
        $registro = array();
        $registro['id'] = 1;
        $registro['codigo'] = 1;
        $registro['descripcion'] = 1;
        $registro['razon_social'] = 1;
        $registro['rfc'] = 1;
        $registro['nombre_comercial'] = 1;
        $registro['org_tipo_empresa_id'] = 1;


        $alta = (new org_empresa($link))->alta_registro($registro);
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

    public function del_org_departamento(PDO $link): array
    {


        $del = $this->del($link, 'gamboamartin\\organigrama\\models\\org_departamento');
        if(errores::$error){
            return (new errores())->error('Error al eliminar', $del);
        }
        return $del;
    }

    public function del_org_empresa(PDO $link): array
    {

        $del = $this->del_org_porcentaje_act_economica($link);
        if(errores::$error){
            return (new errores())->error(mensaje: 'Error al eliminar ', data: $del);
        }

        $del = $this->del_org_puesto($link);
        if(errores::$error){
            return (new errores())->error(mensaje: 'Error al eliminar ', data: $del);
        }

        $del = $this->del_org_departamento($link);
        if(errores::$error){
            return (new errores())->error(mensaje: 'Error al eliminar ', data: $del);
        }

        $del = $this->del($link, 'gamboamartin\\organigrama\\models\\org_empresa');
        if(errores::$error){
            return (new errores())->error('Error al eliminar', $del);
        }
        return $del;
    }

    public function del_org_porcentaje_act_economica(PDO $link): array
    {


        $del = $this->del($link, 'gamboamartin\\organigrama\\models\\org_porcentaje_act_economica');
        if(errores::$error){
            return (new errores())->error('Error al eliminar', $del);
        }
        return $del;
    }

    public function del_org_puesto(PDO $link): array
    {


        $del = $this->del($link, 'gamboamartin\\organigrama\\models\\org_puesto');
        if(errores::$error){
            return (new errores())->error('Error al eliminar', $del);
        }
        return $del;
    }

    public function del_org_sucursal(PDO $link): array
    {


        $del = $this->del($link, 'gamboamartin\\organigrama\\models\\org_sucursal');
        if(errores::$error){
            return (new errores())->error('Error al eliminar', $del);
        }
        return $del;
    }



}
