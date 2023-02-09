<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($email,$nombre,$token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion() {
        //Crear el objeto de email
        $mail = new PHPMailer();//ya tienes importada la clase de phpMailer
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '3f6bd685994220';
        $mail->Password = '2c3952e2f3e287';

        $mail->setFrom("cuentas@appsalon.com"); //Quien lo envia aqui va el dominio
        $mail->addAddress("cuentas@appsalon.com", 'AppSalon.com',);
        $mail->Subject = 'Comfirma tu cuenta';//Eso va a decir una vez que lo recibas

        //set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola" .  $this->email . "</strong> Has creado tu cuenta en App Salon, solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aqui: <a href = 'http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirmar cuenta</a></p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, ignora este mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        $mail->send();
    }

    public function enviarInstrucciones(){
        //Crear el objeto de email
        $mail = new PHPMailer();//ya tienes importada la clase de phpMailer
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '3f6bd685994220';
        $mail->Password = '2c3952e2f3e287';

        $mail->setFrom("cuentas@appsalon.com"); //Quien lo envia aqui va el dominio
        $mail->addAddress("cuentas@appsalon.com", 'AppSalon.com',);
        $mail->Subject = 'Restablece tu password';//Eso va a decir una vez que lo recibas

        //set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola" .  $this->nombre . "</strong> Has solicitado restablecer tu password, sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p>Presiona aqui: <a href = 'http://localhost:3000/recuperar?token=" . $this->token . "'>Restablecer password</a></p>";
        $contenido .= "<p>Restablecer password</p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, ignora este mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        $mail->send();
    }

}