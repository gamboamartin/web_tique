<?php
namespace tests;
use base\orm\modelo_base;
use gamboamartin\empleado\models\em_empleado;
use gamboamartin\errores\errores;
use models\fc_csd;
use models\im_movimiento;
use models\im_registro_patronal;
use models\im_tipo_movimiento;
use models\org_empresa;
use models\org_puesto;
use models\org_sucursal;
use models\org_tipo_sucursal;
use PDO;

class base_test{

    public function alta_em_cuenta_bancaria(PDO $link): array|\stdClass
    {
        $em_cuenta_bancaria = array();
        $em_cuenta_bancaria['id'] = 1;
        $em_cuenta_bancaria['codigo'] = 1;
        $em_cuenta_bancaria['descripcion'] = 1;
        $em_cuenta_bancaria['bn_sucursal_id'] = 1;
        $em_cuenta_bancaria['em_empleado_id'] = 1;
        $em_cuenta_bancaria['descripcion_select'] = 1;


        $alta = (new em_cuenta_bancaria($link))->alta_registro($em_cuenta_bancaria);
        if(errores::$error){
            return (new errores())->error(mensaje: 'Error al insertar', data: $alta);
        }
        return $alta;
    }

    public function alta_em_empleado(PDO $link): array|\stdClass
    {
        $em_empleado = array();
        $em_empleado['id'] = 1;
        $em_empleado['nombre'] = 1;
        $em_empleado['ap'] = 1;
        $em_empleado['rfc'] = 1;
        $em_empleado['codigo'] = 1;
        $em_empleado['descripcion_select'] = 1;
        $em_empleado['alias'] = 1;
        $em_empleado['codigo_bis'] = 1;
        $em_empleado['telefono'] = 1;
        $em_empleado['dp_calle_pertenece_id'] = 1;
        $em_empleado['cat_sat_regimen_fiscal_id'] = 1;
        $em_empleado['cat_sat_tipo_regimen_nom_id'] = 1;
        $em_empleado['im_registro_patronal_id'] = 1;
        $em_empleado['curp'] = 1;
        $em_empleado['nss'] = 1;
        $em_empleado['fecha_inicio_rel_laboral'] = '2022-01-01';
        $em_empleado['org_puesto_id'] =1;
        $em_empleado['salario_diario'] =250;
        $em_empleado['salario_diario_integrado'] =250;
        $alta = (new em_empleado($link))->alta_registro($em_empleado);
        if(errores::$error){
           return (new errores())->error('Error al dar de alta ', $alta);

        }
        return $alta;
    }

    public function alta_fc_csd(PDO $link): array|\stdClass
    {
        $org_puesto = array();
        $org_puesto['id'] = 1;
        $org_puesto['codigo'] = 1;

        $org_puesto['serie'] = 1;
        $org_puesto['org_sucursal_id'] = 1;
        $org_puesto['descripcion_select'] = 1;
        $org_puesto['alias'] = 1;
        $org_puesto['codigo_bis'] = 1;



        $alta = (new fc_csd($link))->alta_registro($org_puesto);
        if(errores::$error){
            return (new errores())->error('Error al dar de alta ', $alta);

        }
        return $alta;
    }

    public function alta_im_movimiento(PDO $link): array|\stdClass
    {
        $org_puesto = array();
        $org_puesto['id'] = 1;
        $org_puesto['codigo'] = 1;
        $org_puesto['descripcion'] = 1;
        $org_puesto['im_registro_patronal_id'] = 1;
        $org_puesto['im_tipo_movimiento_id'] = 1;
        $org_puesto['em_empleado_id'] = 1;
        $org_puesto['fecha'] = '2022-09-13';


        $alta = (new im_movimiento($link))->alta_registro($org_puesto);
        if(errores::$error){
            return (new errores())->error('Error al dar de alta ', $alta);

        }
        return $alta;
    }

    public function alta_im_registro_patronal(PDO $link): array|\stdClass
    {
        $org_puesto = array();
        $org_puesto['id'] = 1;
        $org_puesto['codigo'] = 1;
        $org_puesto['descripcion'] = 1;
        $org_puesto['im_clase_riesgo_id'] = 1;
        $org_puesto['fc_csd_id'] = 1;
        $org_puesto['descripcion_select'] = 1;


        $alta = (new im_registro_patronal($link))->alta_registro($org_puesto);
        if(errores::$error){
            return (new errores())->error('Error al dar de alta ', $alta);

        }
        return $alta;
    }

    public function alta_im_tipo_movimiento(PDO $link): array|\stdClass
    {
        $org_puesto = array();
        $org_puesto['id'] = 1;
        $org_puesto['codigo'] = 1;
        $org_puesto['descripcion'] = 1;



        $alta = (new im_tipo_movimiento($link))->alta_registro($org_puesto);
        if(errores::$error){
            return (new errores())->error('Error al dar de alta ', $alta);

        }
        return $alta;
    }

    public function alta_org_empresa(PDO $link): array|\stdClass
    {
        $org_empresa = array();
        $org_empresa['id'] = 1;
        $org_empresa['codigo'] = 1;
        $org_empresa['descripcion'] = 1;
        $org_empresa['razon_social'] = 1;
        $org_empresa['rfc'] = 1;
        $org_empresa['nombre_comercial'] = 1;
        $org_empresa['org_tipo_empresa_id'] = 1;

        $alta = (new org_empresa($link))->alta_registro($org_empresa);
        if(errores::$error){
            return (new errores())->error('Error al dar de alta ', $alta);

        }
        return $alta;
    }

    public function alta_org_puesto(PDO $link): array|\stdClass
    {
        $org_puesto = array();
        $org_puesto['id'] = 1;
        $org_puesto['codigo'] = 1;
        $org_puesto['descripcion'] = 1;
        $org_puesto['org_empresa_id'] = 1;
        $org_puesto['org_tipo_puesto_id'] = 1;

        $alta = (new org_puesto($link))->alta_registro($org_puesto);
        if(errores::$error){
            return (new errores())->error('Error al dar de alta ', $alta);

        }
        return $alta;
    }

    public function alta_org_sucursal(PDO $link): array|\stdClass
    {
        $org_puesto = array();
        $org_puesto['id'] = 1;
        $org_puesto['codigo'] = 1;
        $org_puesto['descripcion'] = 1;
        $org_puesto['descripcion_select'] = 1;
        $org_puesto['alias'] = 1;
        $org_puesto['codigo_bis'] = 1;
        $org_puesto['org_empresa_id'] = 1;



        $alta = (new org_sucursal($link))->alta_registro($org_puesto);
        if(errores::$error){
            return (new errores())->error('Error al dar de alta ', $alta);

        }
        return $alta;
    }

    public function alta_org_tipo_sucursal(PDO $link): array|\stdClass
    {
        $org_tipo_sucursal = array();
        $org_tipo_sucursal['id'] = 1;
        $org_tipo_sucursal['codigo'] = 1;
        $org_tipo_sucursal['descripcion'] = 1;


        $alta = (new org_tipo_sucursal($link))->alta_registro($org_tipo_sucursal);
        if(errores::$error){
            return (new errores())->error('Error al dar de alta ', $alta);

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

}
