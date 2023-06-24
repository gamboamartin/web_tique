<?php
namespace src;

require 'vendor/autoload.php';

use config\notificaciones;
use gamboamartin\errores\errores;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use stdClass;
use Throwable;

class notificacion{

    private errores $error;

    public function __construct(){
        $this->error = new errores();
    }

    /**
     * Envia un correo electronico con la configuracion establecida en config->notificaciones
     * @param stdClass $contenido forma contenido->subject contenido->mensaje
     * @param stdClass $destinatario debe ser con la siguiente forma $destinatario->email y $destinatario->name
     * @return array|PHPMailer
     */
    public function envia(stdClass $contenido, stdClass $destinatario): array|PHPMailer
    {

        $mail = new PHPMailer(true);


        try {
            $inicializa = $this->inicializa(mail: $mail);
            if(errores::$error){
                return $this->error->error(mensaje:'Error al inicializar mail', data: $inicializa);
            }
            $init_envio = $this->init_envio(destinatario: $destinatario,mail: $mail);
            if(errores::$error){
                return $this->error->error(mensaje:'Error al inicializar envio', data: $init_envio);
            }
            $init_mensaje = $this->init_mensaje(contenido: $contenido,mail: $mail);
            if(errores::$error){
                return $this->error->error(mensaje:'Error al inicializar mensaje', data: $init_mensaje);
            }
            $mail->send();
        }
        catch (Throwable $e) {
            return $this->error->error(mensaje:'Error al enviar mail', data: $e);
        }
        return $mail;
    }

    /**
     * Inicializa los datos de configuracion para envio de un email, debe estar configurado config/notificaciones con
     * los siguientes datos
     * $obj_config_notificaciones->host = Host de servidor de correo
     * $obj_config_notificaciones->user_name = Email
     * $obj_config_notificaciones->password = Password de email
     * $obj_config_notificaciones->smtp_secure = SSL o TLS
     * $obj_config_notificaciones->port = TLS = 587 SSL 465
     * @param PHPMailer $mail Objeto de envio
     * @return PHPMailer
     */
    private function inicializa(PHPMailer $mail): PHPMailer
    {
        $config = new notificaciones();
        $mail->SMTPDebug = false;
        $mail->isSMTP();
        $mail->Host = $config->host;
        $mail->SMTPAuth = true;
        $mail->Username = $config->user_name;
        $mail->Password = $config->password;
        $mail->SMTPSecure = $config->smtp_secure;
        $mail->Port = $config->port;

        return $mail;
    }

    /**
     * Inicializa los datos del destinatario y del remitente de un correo
     * @param stdClass $destinatario debe ser con la siguiente forma $destinatario->email y $destinatario->name
     * @param PHPMailer $mail Objeto mailer previamente inicializado
     * @return PHPMailer
     * @throws Exception
     */
    private function init_envio(stdClass $destinatario, PHPMailer $mail): PHPMailer
    {
        $config = new notificaciones();
        $mail->setFrom($config->user_name, 'Notificaciones');
        $mail->addAddress($destinatario->email, $destinatario->name);
        return $mail;
    }

    /**
     * Genera el contenido del mensaje via html y texto puro
     * @param stdClass $contenido forma contenido->subject contenido->mensaje
     * @param PHPMailer $mail Objeto mailer previamente inicializado
     * @return PHPMailer
     */
    private function init_mensaje(stdClass $contenido, PHPMailer $mail): PHPMailer
    {
        $mail->isHTML(true);
        $mail->Subject = $contenido->subject;
        $mail->Body = $contenido->mensaje;
        $mail->AltBody = $contenido->mensaje;
        return $mail;
    }

}
