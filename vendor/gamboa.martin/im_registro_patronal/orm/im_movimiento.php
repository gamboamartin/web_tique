<?php
namespace models;
use base\orm\modelo;
use gamboamartin\empleado\models\em_empleado;
use gamboamartin\errores\errores;
use gamboamartin\xml_cfdi_4\validacion;
use PDO;
use stdClass;

class im_movimiento extends modelo{
    public function __construct(PDO $link){
        $tabla = __CLASS__;
        $columnas = array($tabla=>false,'em_empleado' => $tabla, 'im_registro_patronal'=>$tabla,
            'im_tipo_movimiento'=>$tabla);
        $campos_obligatorios = array('im_registro_patronal_id','im_tipo_movimiento_id','em_empleado_id','fecha');

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);

        $this->NAMESPACE = __NAMESPACE__;
    }

    public function alta_bd(): array|stdClass
    {
        if(!isset($this->registro['codigo'])){
            $this->registro['codigo'] = $this->registro['em_empleado_id'];
            $this->registro['codigo'] .= $this->registro['im_registro_patronal_id'];
            $this->registro['codigo'] .= $this->registro['im_tipo_movimiento_id'];
        }

        if(!isset($this->registro['codigo_bis'])){
            $this->registro['codigo_bis'] = $this->registro['codigo'];
        }

        if(!isset($this->registro['descripcion'])){
            $this->registro['descripcion'] = $this->registro['em_empleado_id'];
            $this->registro['descripcion'] .= $this->registro['im_registro_patronal_id'];
            $this->registro['descripcion'] .= $this->registro['im_tipo_movimiento_id'];
        }

        if(!isset($this->registro['descripcion_select'])){
            $this->registro['descripcion_select'] = $this->registro['descripcion'];
        }

        if(!isset($this->registro['alias'])){
            $this->registro['alias'] = $this->registro['codigo'];
            $this->registro['alias'] .= $this->registro['descripcion'];
        }

        if(!isset($this->registro['salario_diario'])){
            $this->registro['salario_diario'] = 0.0;
        }

        $alta_bd = parent::alta_bd();
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al insertar movimiento', data: $alta_bd);
        }
        
        return $alta_bd;
    }

    private function data_filtro_movto(int $em_empleado_id, string $fecha): array|stdClass
    {
        $filtro['em_empleado.id'] = $em_empleado_id;
        $order['im_movimiento.fecha'] = 'DESC';

        $filtro_extra = $this->filtro_extra_fecha(fecha: $fecha);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al obtener filtro', data: $filtro_extra);
        }

        $data = new stdClass();
        $data->filtro = $filtro;
        $data->order = $order;
        $data->filtro_extra = $filtro_extra;
        return $data;
    }

    /**
     * Genera un filtro fecha para movimiento
     * @param string $fecha Fecha de movimiento
     * @return array
     * @version 0.28.4
     */
    private function filtro_extra_fecha(string $fecha): array
    {
        $valida = $this->validacion->valida_fecha(fecha: $fecha);
        if(errores::$error){
            return $this->error->error(mensaje:'Error al validar fecha',data: $valida);
        }
        $filtro_extra[0]['im_movimiento.fecha']['valor'] = $fecha;
        $filtro_extra[0]['im_movimiento.fecha']['operador'] = '>=';
        $filtro_extra[0]['im_movimiento.fecha']['comparacion'] = 'AND';

        return $filtro_extra;
    }

    public function filtro_movimiento_fecha(int $em_empleado_id,string $fecha): stdClass|array
    {
        if ($em_empleado_id <= -1) {
            return $this->error->error(mensaje: 'Error id del empleado no puede ser menor a uno', data: $em_empleado_id);
        }

        $valida = (new validacion())->valida_fecha(fecha: $fecha);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error: ingrese una fecha valida', data: $valida);
        }


        $data = $this->data_filtro_movto(em_empleado_id:  $em_empleado_id,fecha: $fecha);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al obtener datos para filtro', data: $data);
        }

        $im_movimiento = $this->obten_datos_ultimo_registro(filtro: $data->filtro, filtro_extra: $data->filtro_extra,
            order: $data->order);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al obtener el movimiento del empleado', data: $im_movimiento);
        }

        if (count($im_movimiento) === 0) {
            return $this->error->error(mensaje: 'Error no hay registros para el empleado', data: $em_empleado_id);
        }

        return $im_movimiento;
    }

    public function get_ultimo_movimiento_empleado(int $em_empleado_id): stdClass|array
    {
        if ($em_empleado_id <= -1) {
            return $this->error->error(mensaje: 'Error id del empleado no puede ser menor a uno', data: $em_empleado_id);
        }

        $filtro['em_empleado.id'] = $em_empleado_id;
        $order['im_movimiento.fecha'] = 'DESC';
        $im_movimiento = $this->obten_datos_ultimo_registro(filtro: $filtro, order: $order);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al obtener el movimiento del empleado', data: $im_movimiento);
        }

        if (count($im_movimiento) === 0) {
            return $this->error->error(mensaje: 'Error no hay registros para el empleado', data: $im_movimiento);
        }

        return $im_movimiento;
    }

    public function calcula_riesgo_de_trabajo(float $im_clase_riesgo_factor, float $n_dias_trabajados,
                                              float $salario_base_cotizacion): float|array
    {
        if($im_clase_riesgo_factor <= 0.0){
            return $this->error->error("Error el factor debe ser menor a 0", $im_clase_riesgo_factor);
        }
        if($salario_base_cotizacion <= 0.0){
            return $this->error->error("Error salario base de cotizacion debe ser menor a 0",
                $salario_base_cotizacion);
        }
        if($n_dias_trabajados <= 0.0){
            return $this->error->error("Error los dias trabajados no debe ser menor a 0",
                $n_dias_trabajados);
        }

        $cuota_diaria = $salario_base_cotizacion * $n_dias_trabajados;
        $res = $cuota_diaria * $im_clase_riesgo_factor;
        $total_cuota = $res/100;

        return round($total_cuota,2);
    }

    public function calcula_enf_mat_cuota_fija(float $factor_cuota_fija, float $n_dias_trabajados,
                                               float $uma): float|array
    {
        if($factor_cuota_fija <= 0.0){
            return $this->error->error("Error el factor debe ser menor a 0", $factor_cuota_fija);
        }
        if($uma <= 0.0){
            return $this->error->error("Error uma debe ser menor a 0",
                $uma);
        }
        if($n_dias_trabajados <= 0.0){
            return $this->error->error("Error los dias trabajados no debe ser menor a 0",
                $n_dias_trabajados);
        }

        $cuota_diaria = $factor_cuota_fija * $uma;
        $total_cuota = $cuota_diaria * $n_dias_trabajados;

        return round($total_cuota,2);
    }

    public function calcula_enf_mat_cuota_adicional(float $factor_cuota_adicional, float $n_dias_trabajados,
                                               float $salario_base_cotizacion, float $uma): float|array
    {

        if($salario_base_cotizacion <= 0.0){
            return $this->error->error("Error salario base de cotizacion debe ser menor a 0",
                $salario_base_cotizacion);
        }
        if($uma <= 0.0){
            return $this->error->error("Error uma debe ser menor a 0", $uma);
        }
        if ($factor_cuota_adicional <= 0.0) {
            return $this->error->error("Error el factor debe ser menor a 0", $factor_cuota_adicional);
        }
        if($n_dias_trabajados <= 0.0){
            return $this->error->error("Error los dias trabajados no debe ser menor a 0", $n_dias_trabajados);
        }

        $excedente = 0;
        $tres_umas = $uma * 3;
        if($salario_base_cotizacion > $tres_umas){
            $excedente = $salario_base_cotizacion - $tres_umas;
        }

        $cuota_diaria = $factor_cuota_adicional * $excedente;
        $total_cuota = $cuota_diaria * $n_dias_trabajados;

        return round($total_cuota,2);
    }

    public function calcula_enf_mat_gastos_medicos(float $factor_gastos_medicos, float $n_dias_trabajados,
                                               float $salario_base_cotizacion): float|array
    {
        if($factor_gastos_medicos <= 0.0){
            return $this->error->error("Error el factor debe ser menor a 0", $factor_gastos_medicos);
        }
        if($salario_base_cotizacion <= 0.0){
            return $this->error->error("Error salario base de cotizacion debe ser menor a 0",
                $salario_base_cotizacion);
        }
        if($n_dias_trabajados <= 0.0){
            return $this->error->error("Error los dias trabajados no debe ser menor a 0",
                $n_dias_trabajados);
        }

        $cuota_diaria = $factor_gastos_medicos * $salario_base_cotizacion;
        $total_cuota = $cuota_diaria * $n_dias_trabajados;

        return round($total_cuota,2);
    }

    public function calcula_enf_mat_pres_dinero(float $factor_pres_dineros, float $n_dias_trabajados,
                                               float $salario_base_cotizacion): float|array
    {
        if($factor_pres_dineros <= 0.0){
            return $this->error->error("Error el factor debe ser menor a 0", $factor_pres_dineros);
        }
        if($salario_base_cotizacion <= 0.0){
            return $this->error->error("Error salario base de cotizacion debe ser menor a 0",
                $salario_base_cotizacion);
        }
        if($n_dias_trabajados <= 0.0){
            return $this->error->error("Error los dias trabajados no debe ser menor a 0",
                $n_dias_trabajados);
        }

        $cuota_diaria = $factor_pres_dineros * $salario_base_cotizacion;
        $total_cuota = $cuota_diaria * $n_dias_trabajados;

        return round($total_cuota,2);
    }

    public function modifica_bd(array $registro, int $id, bool $reactiva = false): array|stdClass
    {
        $em_empleado = $this->registro_por_id(entidad: new em_empleado($this->link),
            id: $registro['em_empleado_id']);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al generar registros de empleado ', data: $em_empleado);
        }

        if ($em_empleado->em_empleado_salario_diario !== $registro['salario_diario'] &&
            $em_empleado->em_empleado_salario_diario_integrado !== $registro['salario_diario_integrado']) {

            $registros['salario_diario'] = $registro['salario_diario'];
            $registros['salario_diario_integrado'] = $registro['salario_diario_integrado'];

            $r_modifica_empleado = (new em_empleado($this->link))->modifica_bd(registro: $registros,id:
                $registro['em_empleado_id']);
            if (errores::$error) {
                return $this->error->error(mensaje: 'Error al dar de modificar empleado', data: $r_modifica_empleado);
            }
        }

        $modifica_bd = parent::modifica_bd($registro, $id, $reactiva);
        if (errores::$error) {
            return $this->error->error(mensaje: 'Error al insertar movimiento', data: $modifica_bd);
        }

        return $modifica_bd;
    }
}