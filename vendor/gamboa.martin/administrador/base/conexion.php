<?php
namespace base;
use config\database;
use gamboamartin\errores\errores;
use gamboamartin\validacion\validacion;
use JsonException;
use PDO;
use stdClass;
use Throwable;
use validacion\confs\configuraciones;

class conexion{
	public static PDO $link;
    private errores $error;


    /**
     * P ORDER P INT
     */
    public function __construct(stdClass $paths_conf = new stdClass(), string $motor = 'MYSQL'){
        $error = new errores();
        $this->error = new errores();

        $valida = (new configuraciones())->valida_confs(paths_conf: $paths_conf);
        if(errores::$error){
            $error_ = $error->error(mensaje: "Error al validar configuraciones",data:$valida);
            print_r($error_);
            exit;
        }

        $link = $this->genera_link(motor: $motor);
        if(errores::$error){
            $error_ = $error->error(mensaje: "Error al generar link",data: $link);
            print_r($error_);
            exit;
        }

        self::$link = $link;

	}

    /**
     * Asigna la codificacion de caracteres para MYSQL
     * @version 1.158.32
     * @param PDO $link Conexion a base de datos
     * @param string $set_name Codificacion de caracteres
     * @return PDO|array
     */
    private function asigna_set_names(PDO $link, string $set_name): PDO|array
    {
        $set_name = trim($set_name);
        if($set_name === ''){
            return $this->error->error(mensaje: 'Error $set_name no puede venir vacio',data:$link);
        }
        try {
            $link->query("SET NAMES '$set_name'");
        }
        catch (Throwable $e){
            return $this->error->error(mensaje: 'Error al ejecutar SQL',data:$e);
        }
        return $link;
    }

    private function asigna_sql_mode(PDO $link, string $sql_mode): PDO
    {
        $sql = "SET sql_mode = '$sql_mode';";
        $link->query($sql);
        return $link;
    }

    private function asigna_timeout(PDO $link, int $time_out): PDO
    {
        $sql = "SET innodb_lock_wait_timeout=$time_out;";
        $link->query($sql);
        return $link;
    }

    /**
     * @param PDO $link Conexion a base de datos
     * @param string $set_name Codificacion de caracteres
     * @param string $sql_mode
     * @param int $time_out
     * @return PDO|array
     */
    private function asigna_parametros_query(PDO $link, string $set_name, string $sql_mode, int $time_out): PDO|array
    {
        $link = $this->asigna_set_names(link: $link, set_name: $set_name);
        if(errores::$error){
            return $this->error->error(mensaje: "Error al asignar codificacion en bd",data:$link);
        }

        $link = $this->asigna_sql_mode(link: $link, sql_mode: $sql_mode);
        if(errores::$error){
            return $this->error->error(mensaje: "Error al asignar sql mode en bd",data:$link);
        }

        $link = $this->asigna_timeout(link:$link, time_out: $time_out);
        if(errores::$error){
            return $this->error->error(mensaje: "Error al asignar sql mode en bd",data:$link);
        }

        return $link;
    }

    /**
     * Conecta con la base de datos seleccionada
     * @param database|stdClass $conf_database Configuraciones para conectividad
     * @param string $motor Motor puede ser MYSQL o MSSQL=>PARA SQL SERVER
     * @return PDO|array|false
     * @version 1.13.8
     */
    private function conecta(database|stdClass $conf_database, string $motor): PDO|array|false
    {
        $link = false;
        $keys = array('db_host','db_name','db_user','db_password');
        $valida = (new validacion())->valida_existencia_keys(keys: $keys,registro:  $conf_database);
        if(errores::$error){
            return $this->error->error(mensaje:  'Error al validar conf_database',data: $valida);
        }
        if($motor === 'MYSQL') {
            try {
                $link = new PDO("mysql:host=$conf_database->db_host;dbname=$conf_database->db_name",
                    $conf_database->db_user, $conf_database->db_password);
            } catch (Throwable $e) {
                return $this->error->error(mensaje: 'Error al conectar', data: $e);
            }
        }
        if($motor === 'MSSQL') {
            try {
                if(!isset($conf_database->db_port) || $conf_database->db_port === '' ){
                    $conf_database->db_port = '1443';
                }
                $dns = "sqlsrv:server=$conf_database->db_host,1443;database=$conf_database->db_name";
                $link = new PDO($dns, $conf_database->db_user, $conf_database->db_password);
            } catch (Throwable $e) {
                return $this->error->error(mensaje: 'Error al conectar', data: $e);
            }
        }
        return $link;
    }

    private function conexion(stdClass|database $conf_database, string $motor): PDO|array
    {
        $link = $this->conecta(conf_database: $conf_database, motor: $motor);
        if(errores::$error){
            return $this->error->error(mensaje: "Error al conectar",data:$link);
        }

        $keys = array('set_name','time_out', 'sql_mode');
        $valida = (new validacion())->valida_existencia_keys(keys: $keys,registro:  $conf_database,
            valida_vacio: false);
        if(errores::$error){
            return $this->error->error(mensaje:  'Error al validar conf_database',data: $valida);
        }

        $link = $this->asigna_parametros_query(link: $link, set_name: $conf_database->set_name,
            sql_mode: $conf_database->sql_mode,time_out: $conf_database->time_out);
        if(errores::$error){
            return $this->error->error(mensaje: "Error al asignar parametros", data:$link);
        }

        $link = $this->usa_base_datos(link: $link, db_name: $conf_database->db_name);
        if(errores::$error){
            return $this->error->error(mensaje: "Error usar base de datos", data:$link);
        }

        return $link;
    }

    private function genera_link(string $motor): PDO|array
    {
        $conf_database = new database();

        $link = $this->conexion(conf_database: $conf_database,motor:  $motor);
        if(errores::$error){
            return $this->error->error(mensaje: "Error al conectar",data:$link);
        }


        return $link;
    }

    public function genera_link_custom(stdClass $conf_database, string $motor): PDO|array
    {

        $link = $this->conexion(conf_database: $conf_database,motor:  $motor);
        if(errores::$error){
            return $this->error->error(mensaje: "Error al conectar",data:$link);
        }

        return $link;
    }

    private function usa_base_datos(PDO $link, string $db_name): PDO
    {
        $consulta = "USE ".$db_name;
        $link->query($consulta);

        return $link;
    }


}